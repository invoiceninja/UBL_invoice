<?php

declare(strict_types=1);

namespace CleverIt\UBL\Invoice\Command;

use CleverIt\UBL\Invoice\Command\UBL\Type;
use DOMElement;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'stub:ro',
    description: 'stub json files',
    hidden: false,
    aliases: ['stub:ro']
)]

final class RoCommand extends Command
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

    private string $prefix = "xsd";

    private array $data = [];

    private Type $type;

    private array $resource_map = [
        'ext:' => "src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd",
        'cac:' => "src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd",
        'cbc:' => "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd",
        'udt:' => "src/FACT1/common/UBL-UnqualifiedDataTypes-2.1.xsd",
        'ccts-cct:' => "src/FACT1/common/CCTS_CCT_SchemaModule-2.1.xsd",
    ];

    private string $resource = "src/FACT1/UBL-Invoice-2.1.xsd";

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
        $this->type = new Type();

        $this->document = new \DomDocument();
        $this->document->load($this->resource);

        $this->getParentTypes();

        $this->extractTypes();

        $child_types = $this->extractChildTypes();

        // $data = $this->normalizeTypes($data);

        $this->output->writeln([" >> Writing sequence_elements to file",'============',]);
        $elementsString = json_encode($this->data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/Fact1.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return self::SUCCESS;

    }

    private function searchForResource(string $name): array
    {
        
        $match = [];

        match($name){
            'UBLExtension' => $match = ['ext', 'UBLExtension'],
            'UBLExtensionsType' => $match = ['ext', 'UBLExtensions'],
            default => $match = [],

        };

        return $match;
    }

    private function loadResource(string $type): self
    {
        //echo $type.PHP_EOL;

        $parts = explode(":", $type);

        if(count($parts) == 1) {
            $parts = $this->searchForResource($type);
        }
        
        $path = $this->resource_map["{$parts[0]}:"];

        //echo "LOADING => {$path}".PHP_EOL;

        $this->document->load($path);

        return $this;
    }

    public function extractChildTypes(): self
    {

        $child_array = [];

        foreach($this->data as $key => $types)
        {

            foreach($types['elements'] as $eKey => $element)
            {

                $this->document->load($this->resource);

                $base_type = $element['base_type'];
                $nodes = $this->getElementPath($element['name'], "./{$this->prefix}:complexType [@name='{$base_type}']");

                $sequence = $this->extractSequence($nodes->item(0));
                $sequence_list = $this->processSequences($sequence);
                $child_array['type'] = $base_type;
                $child_array['elements'] = $sequence_list;

                $this->data[] = $child_array;

                $child_array =[];
            }

        }


        return $this;
    }
    public function getType(string $type): ?string
    {

        $this->loadResource($type);

        $parts = explode(":", $type);

        if(count($parts) == 1)
            $parts = $this->searchForResource($type);

        $name = $parts[1];
        
        $element = $this->getElement($name);

        return $element->getAttribute("type");

    }

    // public function getRootType($name): ?\DOMElement
    // {
    //     $this->loadResource($name);
                
    //     $parts = explode(":", $name);

    //     if(count($parts) == 1) {
    //         $parts = $this->searchForResource($name);
    //     }

    //     $element_name = $parts[1];

    //     match($parts[0]){
    //         'ext' => $path = "./{$this->prefix}:element [@name='{$element_name}']",
    //         'udt' => $path = "./{$this->prefix}:complexType [@name='{$element_name}']",
    //         'cbc' => $path = "./{$this->prefix}:complexType [@name='{$element_name}']//{$this->prefix}:simpleContent//{$this->prefix}:extension",
    //         default => $path = "",
    //     };

    //     //echo $path.PHP_EOL;

    //     $xpath = new \DOMXPath($this->document);
    //     $elements = $xpath->query($path);

    //     if($elements->count() == 0 || !($elements->item(0) instanceof \DOMElement)) {
    //         throw new \Exception("Could not find element for type {$name}");
    //     }

    //     $primary_type = $elements->item(0)->getAttribute("type");

    //     match($parts[0]) {
    //         'ext' => $element_path = "./{$this->prefix}:complexType [@name='{$primary_type}']",
    //         'udt' => $element_path = "./{$this->prefix}:simpleContent//{$this->prefix}:extension']",
    //         'cbc' => $element_path = "./{$this->prefix}:complexType [@name='{$element_name}']//{$this->prefix}:simpleContent//{$this->prefix}:extension",
    //         default => $path = "",
    //     };


    //     $xpath = new \DOMXPath($this->document);
    //     $root_element = $xpath->query($element_path, $elements->item(0));

    //         return $root_element->item(0)->getAttribute('base');
    // }



    public function getNestedType(string $type): ?string
    {

        $this->loadResource($type);

        $parts = explode(":", $type);

        if(count($parts) == 1)
            $parts = $this->searchForResource($type);

        $name = $parts[1];
        
        $element = $this->getElement($name);

        return $element->getAttribute("type");

    }


    public function loadDoc(string $type): self
    {

        $this->loadResource($type);

        return $this;
    }
    public function getElementPath(string $name, string $path, ?DOMElement $element = null): ?\DOMNodeList
    {        
        $this->loadDoc($name);

        //echo print_r($name).PHP_EOL;

        //echo print_r($path).PHP_EOL;

        $xpath = new \DOMXPath($this->document);
        
        
        $elements = $xpath->query($path, $element);
        //echo print_r($elements).PHP_EOL;

        return $elements->count() > 0 ? $elements : null;

    }

    public function extractHelp(string $type): ?string
    {
        
        $this->loadResource($type);

        $parts = explode(":", $type);
        $name = $parts[1];

        $element = $this->getElement($name);

        return $this->extractAnnotation($element);
    }

    public function getElement($name): ?\DOMElement
    {

        $xpath = new \DOMXPath($this->document);
        $elements = $xpath->query("./{$this->prefix}:element [@name='{$name}']");

        if($elements->count() == 0 || !($elements->item(0) instanceof \DOMElement)) {
            throw new \Exception("Could not find element for type {$name}");
        }

        return $elements->item(0);
    }


    public function extractTypes(): self
    {
        foreach($this->data as $key => $value)
        {

            foreach($value['elements'] as $cKey => $element)
            {
                $this->data[$key]['elements'][$cKey]['base_type'] = $this->getType($element['name']);
                $this->data[$key]['elements'][$cKey]['help'] = $this->extractHelp($element['name']);
            }
        }

        return $this;
    }

    public function getParentTypes(): self
    {

        $x = $this->document->getElementsByTagName('complexType');

        //Extract Parent Types
        $this->data = [];
        foreach($x as $y) {

            $set = [];

            if($y instanceof \DOMElement) {
                $set['type'] = $y->getAttribute('name');

                $sequence = $this->extractSequence($y);

                $sequence_list = $this->processSequences($sequence);

                $set['elements'] = count($sequence_list) > 0 ? $sequence_list : [];

                $this->data[] = $set;

            }

        }

        return $this;
    }

    public function getRootType(string $name)
    {
        $parts = explode(":", $name);
        
        match($parts[0]){
            'ext' => $map = $this->type->ext_map,
            'udt' => $map = $this->type->udt_map,
            'cbc' => $map = $this->type->cbc_map,
            'cac' => $map = $this->type->cac_map,
            default => $map = "",
        };

        return $map[$parts[1]];

    }

    public function processSequences(\DOMNodeList $list): array
    {
        $tmp = [];

        for($x = 0; $x < $list->count(); $x++) {
            $node = $list->item($x);

            $parent_name = $node->parentNode->getAttribute('name');
            //echo "Parent = {$parent_name}".PHP_EOL;

            $child_array = [];

            foreach($node->childNodes as $childNode) {

                if($childNode instanceof DOMElement) {
                    $child_array = $this->extractAttributes($childNode);
                    if(count($child_array) > 0) {
                        //echo $child_array['name'].PHP_EOL;
                        $child_array['base_type'] = $this->type->hydrateTypes($child_array['name']);
                        // $child_array['base_type'] = $this->getRootType($child_array['name']);

                        // $arr = $this->harvestTypeArray($child_array['name'], $child_array['base_type']);

                        $tmp[] = array_merge($this->stub_validation, $child_array);
                    }

                }

            }

        }

        return $tmp;

    }

    public function harvestTypeArray(string $name, string $type): array
    {
        $this->loadResource($name);

        $content = [];

        $node = $this->getElementPath($type, "./{$this->prefix}:complexType//{$this->prefix}:simpleContent//{$this->prefix}:extension");

        if($node->count() == 1)
        {
            $element_type = $node->item(0)->getAttribute("base");
            $root_type = $this->getType($element_type);
            //echo "root". PHP_EOL;
            //echo $root_type.PHP_EOL;
        }
    
        return [];
    }

    public function extractAttributes(\DomElement $childNode): array
    {
        $child_array = [];

        foreach($childNode->attributes as $key => $attr) {
            
            if(in_array($attr->nodeName, ['ref', 'minOccurs','maxOccurs'])) {

                $key = $attr->nodeName == 'ref' ? 'name' : $attr->nodeName;

                $child_array[$key] = $attr->nodeValue;
            }
        }

        return $child_array;

    }

    public function extractSequence(\DomElement $element): \DOMNodeList
    {

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query("./{$this->prefix}:sequence", $element);

        return $result;
    }

    public function extractAnnotation(\DomElement $element): string
    {

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query("./{$this->prefix}:annotation//{$this->prefix}:documentation", $element);

        return $result->count() > 0 ? $result->item(0)->nodeValue : '';

    }

    public function normalizeTypes(array $data): array
    {
        foreach($data as $pkey => $elements) {

            foreach($elements['elements'] as $key => $element) {
                match($element['base_type']) {
                    'normalizedString' => $data[$pkey]['elements'][$key]['base_type'] = 'string',
                    'token' => $data[$pkey]['elements'][$key]['base_type'] = 'string',
                    'xs:date' => $data[$pkey]['elements'][$key]['base_type'] = 'date',
                    'xs:dateTime' => $data[$pkey]['elements'][$key]['base_type'] = 'datetime',
                    'xs:base64Binary' => $data[$pkey]['elements'][$key]['base_type'] = 'base64',

                    default => null
                };


                $data[$pkey]['elements'][$key]['minOccurs'] = $data[$pkey]['elements'][$key]['minOccurs'] ?? "1";
                $data[$pkey]['elements'][$key]['maxOccurs'] = $data[$pkey]['elements'][$key]['maxOccurs'] ?? "1";

                if($data[$pkey]['elements'][$key]['maxOccurs'] == "unbounded") {
                    $data[$pkey]['elements'][$key]['maxOccurs'] = "-1";
                }
            }

        }

        return $data;
    }

    // public function extractChoice(\DomElement $element): array
    // {
    //     $data = [];

    //     $xpath = new \DOMXPath($this->document);
    //     $result = $xpath->query("./{$this->prefix}:choice//{$this->prefix}:sequence", $element);

    //     $data = $this->processChoiceSequence($result);

    //     return $data;

    // }

    // public function processChoiceSequence(\DomNodeList $list): array
    // {

    //     $data = [];

    //     for($x = 0; $x < $list->count(); $x++) {
    //         $node = $list->item($x);

    //         $child_array = [];

    //         foreach($node->childNodes as $childNode) {

    //             if($childNode instanceof \DomElement) {

    //                 $key = $childNode->getAttribute('name');

    //                 $child_array[$key] = array_merge($this->stub_validation, $this->extractAttributes($childNode));

    //             }

    //         }

    //         $data[] = $child_array;

    //     }

    //     return $data;

    // }

    // public function extractResource(string $type)
    // {

    //     $resource = [];

    //     $xpath = new \DOMXPath($this->document);
    //     $result = $xpath->query("./{$this->prefix}:simpleType [@name='{$type}']//{$this->prefix}:restriction");

    //     if($result->count() == 0) {
    //         return $resource;
    //     }

    //     $node = $result->item(0);

    //     foreach($node->childNodes as $childNode) {

    //         if($childNode instanceof \DomElement && $childNode->localName == 'enumeration') {

    //             $key = $childNode->getAttribute('value');
    //             $annotation = $this->extractAnnotation($childNode);

    //             $resource[$key] = strlen($annotation) > 1 ? $annotation : $key;

    //         }

    //     }


    //     return $resource;
    // }

    // public function extractRestriction(string $type)
    // {

    //     $resource = [];

    //     $xpath = new \DOMXPath($this->document);
    //     $result = $xpath->query("./{$this->prefix}:simpleType [@name='{$type}']//{$this->prefix}:restriction");

    //     if($result->count() == 0) {
    //         return $resource;
    //     }

    //     $node = $result->item(0);

    //     foreach($node->childNodes as $childNode) {

    //         if($childNode instanceof \DomElement) {

    //             $resource['base_type'] = str_replace("{$this->prefix}:", "", $node->getAttribute('base'));

    //             if(!in_array($childNode->localName, ['enumeration'])) {
    //                 $resource[$childNode->localName] = $childNode->getAttribute("value");
    //             }
    //         }

    //     }

    //     return $resource;

    // }



    
}
