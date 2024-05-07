<?php

declare(strict_types=1);

namespace CleverIt\UBL\Invoice\Command;

use Symfony\Component\Console\Command\Command;
use GoetasWebservices\XML\XSDReader\SchemaReader;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\RestrictionType;

#[AsCommand(
    name: 'stub:fat',
    description: 'stub json files',
    hidden: false,
    aliases: ['stub:fat']
)]

final class FatCommand extends Command
{

    protected \DomDocument $document;

    public $output;
    /**
     * In this method setup command, description, and its parameters
     */
    protected function configure()
    {
        // $this->setName('hash-password');
        // $this->setDescription('Hashes provided password with BCRYPT and prints to output.');
        // $this->addArgument('password', InputArgument::REQUIRED, 'Password to be hashed.');
    }

    /**
     * Here all logic happens
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        $this->document = new \DomDocument();
        $this->document->load("src/FatturaPA/Schema_del_file_xml_FatturaPA_v1.2.2.xsd");

        $data = $this->getParentTypes();

        $this->output->writeln([" >> Writing sequence_elements to file",'============',]);
        $elementsString = json_encode($data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/sequence.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return self::SUCCESS;

    }

    public function expandTypes(array $data): array
    {
        $types = [];

        foreach($data as $child)
        {
            $dto = [];

            foreach($child as $node)
            {
                $dto['type'] = $node['type'];
                $sequence = $this->document->getElementsByTagName($node['type']);
                $dto['elements'] = $this->processSequences($sequence);

            }

            $types[] = $dto;
        }

        return $types;

    }

    public function getParentTypes()
    {

        $x = $this->document->getElementsByTagName('complexType');

        //Extract Parent Types
        $data = [];
        foreach($x as $y) {

            $set = [];
            if($y instanceof \DOMElement) {
                $set['type'] = $y->getAttribute('name');

                $sequence = $this->extractSequence($y);

                $choice_array = $this->extractChoice($sequence->item(0));
                
                $set['choices'] = $choice_array;

                $sequence_list = $this->processSequences($sequence);

                $set['elements'] = count($sequence_list) > 0 ? $sequence_list : [];

                $data[] = $set;

            }

        }

        return $data;
    }

    public function processSequences(\DOMNodeList $list): array
    {
        $data = [];

        for($x=0; $x < $list->count(); $x++)
        {
            $node = $list->item($x);
            
            $choice_array = $this->extractChoice($node);
            
            foreach($choice_array as $selection)
            {
                foreach($selection as $select)
                {
                    $data[] = $select;
                }
            }

            $child_array = [];

            foreach($node->childNodes as $childNode) {
                
                if($childNode instanceof \DomElement)
                {                        
                    $child_array = $this->extractAttributes($childNode);

                    if(count($child_array) > 0) {
                        $annotation = $this->extractAnnotation($childNode);
                        $child_array['help'] = $annotation;
                        
                        $child_array['resource'] = isset($child_array['type']) ? $this->extractResource($child_array['type']) : [];
                        
                        if(isset($child_array['type']))
                            $child_array = array_merge($child_array, $this->extractRestriction($child_array['type']));

                        $data[] = $child_array;
                    }

                }

            }

        }

        return $data;

    }

    public function processChoiceSequence(\DomNodeList $list): array
    {

        $data = [];

        for($x = 0; $x < $list->count(); $x++) {
            $node = $list->item($x);

            $child_array = [];
            foreach($node->childNodes as $childNode) {

                if($childNode instanceof \DomElement) {

                    $key = $childNode->getAttribute('name');

                    $child_array[$key] = $this->extractAttributes($childNode);

                }

            }
            
            $data[] = $child_array;

        }

        return $data;

    }

    public function extractResource(string $type)
    {

        $resource = [];

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query('./xs:simpleType [@name="'.$type.'"]//xs:restriction');

        if($result->count() == 0)
            return $resource;

        $node = $result->item(0);

        foreach($node->childNodes as $childNode)
        {

            if($childNode instanceof \DomElement && $childNode->localName == 'enumeration') {

                $key = $childNode->getAttribute('value');
                $annotation = $this->extractAnnotation($childNode);

                $resource[$key] = strlen($annotation) > 1 ? $annotation : $key;

            }

        }


        return $resource;
    }

    public function extractRestriction(string $type)
    {

        $resource = [];

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query('./xs:simpleType [@name="'.$type.'"]//xs:restriction');

        if($result->count() == 0)
            return $resource;

        $node = $result->item(0);

        foreach($node->childNodes as $childNode)
        {

            if($childNode instanceof \DomElement)
            {
        
                $resource['type'] = $node->getAttribute('base');

                if(!in_array($childNode->localName, ['enumeration']))
                    $resource[$childNode->localName] = $childNode->getAttribute("value");
            }

        }

        return $resource;
        
    }

    public function getRestrictionValue(\DomElement $element, string $path): string
    {

    }

    public function extractAttributes(\DomElement $childNode): array
    {
        $child_array = [];

        foreach($childNode->attributes as $key => $attr) {
            if(in_array($attr->nodeName, ['name','type','minOccurs','maxOccurs'])) {
                $child_array[$attr->nodeName] = $attr->nodeValue;
            }
        }

        $annotation = $this->extractAnnotation($childNode);

        $child_array['minOccurs'] = $child_array['minOccurs'] ?? "1";
        $child_array['maxOccurs'] = $child_array['maxOccurs'] ?? "1";
        if($child_array['maxOccurs'] == 'unbounded')
            $child_array['maxOccurs'] = "-1";

        $child_array['help'] = $annotation;     

        return $child_array;

    }

    public function extractSequence(\DomElement $element): \DOMNodeList
    {

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query('./xs:sequence', $element);

        return $result;
    }

    public function extractChoice(\DomElement $element): array
    {
        $data = [];

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query('./xs:choice//xs:sequence', $element);

        $data = $this->processChoiceSequence($result);

        return $data;

    }

    public function extractAnnotation(\DomElement $element): string
    {

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query('./xs:annotation//xs:documentation', $element);

        return $result->count() > 0 ? $result->item(0)->nodeValue : '';

    }
}