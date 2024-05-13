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
    //    "fraction_digits" => null,
    //    "total_digits" => null,
    //    "max_exclusive" => null,
    //    "min_exclusive" => null,
    //    "max_inclusive" => null,
    //    "min_inclusive" => null,
    //    "whitespace" => null,
       "max_length" => null,
       "min_length" => null,
       "pattern" => null,
   ];

   private array $type_map = [];

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

        $this->mapTypes();

        $data = $this->getParentTypes();

        $data = $this->normalizeTypes($data);

        $this->output->writeln([" >> Writing sequence_elements to file",'============',]);
        $elementsString = json_encode($data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/FatturaPA.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return self::SUCCESS;

    }

    public function mapTypes()
    {
        
        $types = $this->document->getElementsByTagName('element');

        foreach($types as $type)
        {
            if($type instanceof \DOMElement && $type->hasAttribute(('type')))
                $this->type_map[$type->getAttribute(('name'))] = $type->getAttribute('type'); 
        }

        return $this;
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
                $dto['elements'] = (object)$this->processSequences($sequence);
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
                        $child_array['resource'] = $this->extractResource($child_array['type']);
                        
                        if(isset($child_array['type'])){
                            $child_array = array_merge($child_array, $this->extractRestriction($child_array['type']));
                            unset($child_array['type']);
                        }

                        if(!isset($child_array['base_type']) && isset($child_array['name']))
                            $child_array['base_type'] = $this->type_map[$child_array['name']];

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

    public function extractResource(?string $type)
    {
        if(!$type)
            return [];
        
        echo "extracting resource for {$type}".PHP_EOL;

        $resource = [];

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query('./xs:simpleType [@name="'.$type.'"]//xs:restriction');

        if($result->count() == 0)
            return $resource;

        $node = $result->item(0);


        // switch($type){
        //     case "String10Type":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 10;
        //     break;
        //     case "String15Type":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 15;
        //     break;
        //     case "String20Type":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 20;
        //     break;
        //     case "String35Type":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 35;
        //     break;
        //     case "String60Type":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 60;
        //     break;
        //     case "String80Type":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 80;
        //     break;
        //     case "String100Type":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 100;
        //     break;
        //     case "String35LatinExtType":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 35;
        //     break;
        //     case "String60LatinType":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 60;
        //     break;
        //     case "String80LatinType":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 80;
        //     break;
        //     case "String100LatinType":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 100;
        //     break;
        //     case "String200LatinType":
        //         $resource['min_length'] = 1;
        //         $resource['max_length'] = 200;
        //     break;
        //     case "String1000LatinType":
        //         $resource['min_length'] = 10;
        //         $resource['max_length'] = 1000;
        //     break;

        // }

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

        if($result->count() == 0){
            return $resource;
        }

        $node = $result->item(0);

        
        if($node->hasAttribute('base')) {
            $resource['base_type'] = str_replace("xs:", "", $node->getAttribute('base'));
        } else {
            $resource['base_type'] = $this->type_map[$type] ?? str_replace("xs:", "", $type);
        }

        foreach($node->childNodes as $childNode)
        {

            if($childNode instanceof \DomElement)
            {
        
                if(!in_array($childNode->localName, ['enumeration'])){

                    $resource[$this->camelToSnake($childNode->localName)] = $childNode->getAttribute("value");
   
                }
            }

        }

        if(isset($resource['pattern']))
            $resource = $this->extractPattern($resource);

        return $resource;
        
    }


    private function extractPattern($resource)
    {
        $parts = [];

        if (preg_match('/{([^{}]+)}[^{}]*$/', $resource['pattern'], $matches)) {
            $contents = $matches[1];
            $parts = explode(",", $contents);
        }

        if(count($parts) == 2 && $resource['base_type'] == 'normalizedString'){
            
            $resource['min_length'] = (int)$parts[0];
            $resource['max_length'] = (int)$parts[1];
            $resource['base_type'] = 'string';

        }

        if(count($parts) == 1 && $resource['base_type'] == 'string') {

            $resource['min_length'] = (int)$parts[0];
            $resource['max_length'] = (int)$parts[0];
            $resource['base_type'] = 'string';

        }

        if(count($parts) == 2 && $resource['base_type'] == 'string') {

            $resource['min_length'] = (int)$parts[0];
            $resource['max_length'] = (int)$parts[1];
            $resource['base_type'] = 'string';

        }

        return $resource;

    }

    private function camelToSnake(string $camelCase): string
    {
        $result = '';

        for ($i = 0; $i < strlen($camelCase); $i++) {
            $char = $camelCase[$i];

            if (ctype_upper($char)) {
                $result .= '_' . strtolower($char);
            } else {
                $result .= $char;
            }
        }

        return ltrim($result, '_');
    }


    public function extractAttributes(\DomElement $childNode): array
    {
        $child_array = [];

        foreach($childNode->attributes as $key => $attr) {
            if(in_array($attr->nodeName, ['name','type','minOccurs','maxOccurs'])) {

                $key = $attr->nodeName == 'type' ? 'base_type' : $attr->nodeName;

                $key = $attr->nodeName == 'minOccurs' ? 'min_occurs' : $attr->nodeName;

                $key = $attr->nodeName == 'maxOccurs' ? 'max_occurs' : $attr->nodeName;

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
                    
                    // 'normalizedString' => $data[$pkey]['elements'][$key]['base_type'] = 'string', 
                    'token' => $data[$pkey]['elements'][$key]['base_type'] = 'string',
                    'xs:date' => $data[$pkey]['elements'][$key]['base_type'] = 'date',
                    'xs:dateTime' => $data[$pkey]['elements'][$key]['base_type'] = 'datetime',
                    'xs:base64Binary' => $data[$pkey]['elements'][$key]['base_type'] = 'base64',
                    'String80LatinType' => $data[$pkey]['elements'][$key] = array_merge ($data[$pkey]['elements'][$key], ['base_type' => 'string', 'max_length' => 80]),
                    'String60LatinType' => $data[$pkey]['elements'][$key] = array_merge ($data[$pkey]['elements'][$key], ['base_type' => 'string', 'max_length' => 60]),
                    default => null
                };

                $data[$pkey]['elements'][$key]['min_occurs'] = isset($data[$pkey]['elements'][$key]['minOccurs']) ? (int)$data[$pkey]['elements'][$key]['minOccurs'] : 1;
                $data[$pkey]['elements'][$key]['max_occurs'] = isset($data[$pkey]['elements'][$key]['maxOccurs']) ? (int)$data[$pkey]['elements'][$key]['maxOccurs'] : 1;

                if(isset($data[$pkey]['elements'][$key]['maxOccurs']) && $data[$pkey]['elements'][$key]['maxOccurs'] == "unbounded")
                    $data[$pkey]['elements'][$key]['max_occurs'] = -1;

                if(isset($data[$pkey]['elements'][$key]['minLength'])){
                    $data[$pkey]['elements'][$key]['min_length'] = $data[$pkey]['elements'][$key]['minLength'];
                }

                if(isset($data[$pkey]['elements'][$key]['maxLength'])) {
                    $data[$pkey]['elements'][$key]['max_length'] = $data[$pkey]['elements'][$key]['maxLength'];
                }

                // if(isset($data[$pkey]['elements'][$key]['type'])){
                //     $data[$pkey]['elements'][$key]['base_type'] = $data[$pkey]['elements'][$key]['type'];
                // }
                
                // unset($data[$pkey]['elements'][$key]['type']);
                unset($data[$pkey]['elements'][$key]['maxLength']);
                unset($data[$pkey]['elements'][$key]['minLength']);
                unset($data[$pkey]['elements'][$key]['minOccurs']);
                unset($data[$pkey]['elements'][$key]['maxOccurs']);
                
            }

        }

        return $data;
    }
}
