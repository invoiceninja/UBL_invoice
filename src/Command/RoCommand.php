<?php

declare(strict_types=1);

namespace CleverIt\UBL\Invoice\Command;

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

    private array $resource_map = [
        'ext:' => "src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd",
        'cac:' => "src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd",
        'cbc:' => "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd",
        'udt:' => "src/FACT1/common/UBL-UnqualifiedDataTypes-2.1.xsd",
        'ccts:' => "src/FACT1/common/CCTS_CCT_SchemaModule-2.1.xsd",
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

        $this->document = new \DomDocument();
        $this->document->load($this->resource);

        $data = $this->getParentTypes();

        $data = $this->extractTypes($data);

        // $data = $this->normalizeTypes($data);

        $this->output->writeln([" >> Writing sequence_elements to file",'============',]);
        $elementsString = json_encode($data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/Fact1.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return self::SUCCESS;

    }

    private function loadResource(string $type): self
    {
        $parts = explode(":", $type);
        
        $path = $this->resource_map["{$parts[0]}:"];

        $this->document->load($path);

        return $this;
    }

    public function getType(string $type): string
    {
        $this->loadResource($type);

        $parts = explode(":", $type);
        $name = $parts[1];
        
        $xpath = new \DOMXPath($this->document);
        $elements = $xpath->query("./{$this->prefix}:element [@name='{$name}']");

        if($elements->count() == 0)
            throw new \Exception("Could not find element for type {$type}");

        foreach($elements as $key => $value) {

            if($elements->item($key) instanceof \DOMElement)
                return $value->getAttribute("type");

        }
    }

    public function extractTypes(array $data)
    {
        foreach($data as $key => $value)
        {

            foreach($value['elements'] as $cKey => $element)
            {
                $data[$key]['elements'][$cKey]['base_type'] = $this->getType($element['name']);
            }
        }

        return $data;
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

                // $choice_array = $this->extractChoice($sequence->item(0));

                // $set['choices'] = $choice_array;

                $sequence_list = $this->processSequences($sequence);

                $set['elements'] = count($sequence_list) > 0 ? $sequence_list : [];

                $data[] = $set;

            }

        }

        return $data;
    }

    public function expandTypes(array $data): array
    {
        $types = [];

        foreach($data as $child) {
            $dto = [];

            foreach($child as $node) {
                $dto['type'] = $node['type'];
                $sequence = $this->document->getElementsByTagName($node['type']);
                $dto['elements'] = $this->processSequences($sequence);
            }

            $types[] = $dto;
        }

        return $types;

    }


    public function processSequences(\DOMNodeList $list): array
    {
        $data = [];

        for($x = 0; $x < $list->count(); $x++) {
            $node = $list->item($x);

            // $choice_array = $this->extractChoice($node);

            // foreach($choice_array as $selection) {
            //     foreach($selection as $select) {
            //         $data[] = $select;
            //     }
            // }

            $child_array = [];

            foreach($node->childNodes as $childNode) {

                if($childNode instanceof \DomElement) {
                    $child_array = $this->extractAttributes($childNode);

                    if(count($child_array) > 0) {

                        $child_array['resource'] = isset($child_array['base_type']) ? $this->extractResource($child_array['base_type']) : [];

                        if(isset($child_array['base_type'])) {
                            $child_array = array_merge($child_array, $this->extractRestriction($child_array['base_type']));
                        }

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
        $result = $xpath->query("./{$this->prefix}:simpleType [@name='{$type}']//{$this->prefix}:restriction");

        if($result->count() == 0) {
            return $resource;
        }

        $node = $result->item(0);

        foreach($node->childNodes as $childNode) {

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
        $result = $xpath->query("./{$this->prefix}:simpleType [@name='{$type}']//{$this->prefix}:restriction");

        if($result->count() == 0) {
            return $resource;
        }

        $node = $result->item(0);

        foreach($node->childNodes as $childNode) {

            if($childNode instanceof \DomElement) {

                $resource['base_type'] = str_replace("{$this->prefix}:", "", $node->getAttribute('base'));

                if(!in_array($childNode->localName, ['enumeration'])) {
                    $resource[$childNode->localName] = $childNode->getAttribute("value");
                }
            }

        }

        return $resource;

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

// echo print_r($child_array).PHP_EOL;

        return $child_array;

    }

    public function extractSequence(\DomElement $element): \DOMNodeList
    {

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query("./{$this->prefix}:sequence", $element);

        return $result;
    }

    public function extractChoice(\DomElement $element): array
    {
        $data = [];

        $xpath = new \DOMXPath($this->document);
        $result = $xpath->query("./{$this->prefix}:choice//{$this->prefix}:sequence", $element);

        $data = $this->processChoiceSequence($result);

        return $data;

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
}
