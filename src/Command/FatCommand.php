<?php

declare(strict_types=1);

namespace CleverIt\UBL\Invoice\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'stub:fat',
    description: 'stub json files',
    hidden: false,
    aliases: ['stub:fat']
)]

final class FatCommand extends Command
{
    private array $stub_validation =
    [
       "name" => null,
       "base_type" => null,
       "resource" => [],
       "length" => null,
       "fraction_digits" => null,
       "total_digits" => null,
       "max_exclusive" => null,
       "min_exclusive" => null,
       "max_inclusive" => null,
       "min_inclusive" => null,
       "max_length" => null,
       "min_length" => null,
       "pattern" => null,
       "whitespace" => null,
   ];

    protected \DomDocument $document;

    public $output;
    /**
     * In this method setup command, description, and its parameters
     */
    protected function configure()
    {
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

        $data = $this->normalizeTypes($data);

        $this->output->writeln([" >> Writing sequence_elements to file",'============',]);
        $elementsString = json_encode($data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/FatturaPA.json", 'w');
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
                $set['help'] = $this->extractAnnotation($y);

                $sequence = $this->extractSequence($y);

                $choice_array = $this->extractChoice($sequence->item(0));
                
                $choice_keys = [];

                foreach($choice_array as $key => $arr)
                {
                    $choice_keys[] = array_keys($arr);
                }

                $set['choices'] = $choice_keys;

                // $set['choices'] = $choice_array;

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
                        $child_array['resource'] = isset($child_array['base_type']) ? $this->extractResource($child_array['base_type']) : [];
                        
                        if(isset($child_array['base_type']))
                            $child_array = array_merge($child_array, $this->extractRestriction($child_array['base_type']));

                        $data[] = array_merge($this->stub_validation, $child_array);
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

                    $child_array[$key] = array_merge($this->stub_validation, $this->extractAttributes($childNode));

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
        
                $resource['base_type'] = str_replace("xs:","",$node->getAttribute('base'));

                if(!in_array($childNode->localName, ['enumeration']))
                    $resource[$childNode->localName] = $childNode->getAttribute("value");
            }

        }

        return $resource;
        
    }


    public function extractAttributes(\DomElement $childNode): array
    {
        $child_array = [];

        foreach($childNode->attributes as $key => $attr) {
            if(in_array($attr->nodeName, ['name','type','minOccurs','maxOccurs'])) {

                $key = $attr->nodeName == 'type' ? 'base_type' : $attr->nodeName;

                $child_array[$key] = $attr->nodeValue;
            }
        }

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

    public function normalizeTypes(array $data): array
    {
        foreach($data as $pkey => $elements)
        {

            foreach($elements['elements'] as $key => $element)
            {
                match($element['base_type']){
                    'normalizedString' => $data[$pkey]['elements'][$key]['base_type'] = 'string', 
                    'token' => $data[$pkey]['elements'][$key]['base_type'] = 'string',
                    'xs:date' => $data[$pkey]['elements'][$key]['base_type'] = 'date',
                    'xs:dateTime' => $data[$pkey]['elements'][$key]['base_type'] = 'datetime',
                    'xs:base64Binary' => $data[$pkey]['elements'][$key]['base_type'] = 'base64',

                    default => null
                };

                
                $data[$pkey]['elements'][$key]['minOccurs'] = $data[$pkey]['elements'][$key]['minOccurs'] ?? "1";
                $data[$pkey]['elements'][$key]['maxOccurs'] = $data[$pkey]['elements'][$key]['maxOccurs'] ?? "1";

                if($data[$pkey]['elements'][$key]['maxOccurs'] == "unbounded")
                    $data[$pkey]['elements'][$key]['maxOccurs'] = "-1";
            }

        }

        return $data;
    }
}
