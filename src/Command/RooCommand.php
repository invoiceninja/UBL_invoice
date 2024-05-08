<?php

declare(strict_types=1);

namespace CleverIt\UBL\Invoice\Command;

use DOMElement;
use CleverIt\UBL\Invoice\Command\UBL\Type;
use CleverIt\UBL\Invoice\Command\UBL\CacType;
use CleverIt\UBL\Invoice\Command\UBL\CbcType;
use CleverIt\UBL\Invoice\Command\UBL\CccType;
use CleverIt\UBL\Invoice\Command\UBL\ExtType;
use CleverIt\UBL\Invoice\Command\UBL\UdtType;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'stub:rp',
    description: 'stub json files',
    hidden: false,
    aliases: ['stub:rp']
)]

final class RooCommand extends Command
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

    private ExtType $extType;
    private CacType $cacType;
    private UdtType $udtType;
    private CccType $cctType;
    private CbcType $cbcType;
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
        // $this->type = new Type();
        
        $this->output->writeln([" >> Booting CbcType",'============',]);
        $this->cbcType = new CbcType();

        $this->output->writeln([" >> Booting ExtType",'============',]);
        $this->extType = new ExtType();

        $this->output->writeln([" >> Booting CccType",'============',]);
        $this->cctType = new CccType();

        $this->output->writeln([" >> Booting UdtType",'============',]);
        $this->udtType = new UdtType();

        $this->output->writeln([" >> Booting CAC",'============',]);
        $this->cacType = new CacType();

        $this->document = new \DomDocument();
        $this->document->load($this->resource);

        $this->getParentTypes();

        // $this->extractTypes();

        // $child_types = $this->extractChildTypes();

        // $data = $this->normalizeTypes($data);

        $this->output->writeln([" >> Writing sequence_elements to file",'============',]);
        $elementsString = json_encode($this->data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/FactRoo.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return self::SUCCESS;

    }

    private function searchForResource(string $name): array
    {

        $match = [];

        match($name) {
            'UBLExtension' => $match = ['ext', 'UBLExtension'],
            'UBLExtensionsType' => $match = ['ext', 'UBLExtensions'],
            default => $match = [],

        };

        return $match;
    }

    private function loadResource(string $type): self
    {
        $parts = explode(":", $type);

        if(count($parts) == 1) {
            $parts = $this->searchForResource($type);
        }

        $path = $this->resource_map["{$parts[0]}:"];

        $this->document->load($path);

        return $this;
    }

    public function extractChildTypes(): self
    {

        $child_array = [];

        foreach($this->data as $key => $types) {

            foreach($types['elements'] as $eKey => $element) {

                $this->document->load($this->resource);

                $base_type = $element['base_type'];
                $nodes = $this->getElementPath($element['name'], "./{$this->prefix}:complexType [@name='{$base_type}']");

                $sequence = $this->extractSequence($nodes->item(0));
                $sequence_list = $this->processSequences($sequence);
                $child_array['type'] = $base_type;
                $child_array['elements'] = $sequence_list;

                $this->data[] = $child_array;

                $child_array = [];
            }

        }


        return $this;
    }
    public function getType(string $type): ?string
    {

        $this->loadResource($type);

        $parts = explode(":", $type);

        if(count($parts) == 1) {
            $parts = $this->searchForResource($type);
        }

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

        $xpath = new \DOMXPath($this->document);
        $elements = $xpath->query($path, $element);

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
        foreach($this->data as $key => $value) {

            foreach($value['elements'] as $cKey => $element) {
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

    public function processSequences(\DOMNodeList $list): array
    {
        $tmp = [];

        for($x = 0; $x < $list->count(); $x++) {
            $node = $list->item($x);
            $tmp = [];

            foreach($node->childNodes as $childNode) {

                if($childNode instanceof DOMElement) {
                    
                    $name = $childNode->getAttribute('ref');
                    
                    $tmp[] = $this->harvestNode($name);

                    // foreach($childNode->attributes as $attr)
                    // {
                        
                        
                    // }

                    // $child_array = $this->extractAttributes($childNode);
                    // if(count($child_array) > 0) {

                    //     $child_array['base_type'] = $this->type->hydrateTypes($child_array['name']);
                    //     $tmp[] = array_merge($this->stub_validation, $child_array);

                    // }

                }

            }

        }

        return $tmp;

    }

    private function harvestNode(string $name)
    {
        
        $parts = explode(":", $name);

        match($parts[0]){
            'cac' => $type = $this->cacType,
            'cbc' => $type = $this->cbcType,
            'ext' => $type = $this->extType,
        };

        $base_type = $type->type_map[$parts[1]];

        echo "Base = {$base_type}".PHP_EOL;

        foreach($type->elements as $node)
        {
            if($node['type'] == $base_type || $node['type'] == $parts[1])
            { 
                return $node;
            }

        }

        return $type->getPrimativeType($base_type);

        return $base_type;

    }

    public function harvestTypeArray(string $name, string $type): array
    {
        $this->loadResource($name);

        $content = [];

        $node = $this->getElementPath($type, "./{$this->prefix}:complexType//{$this->prefix}:simpleContent//{$this->prefix}:extension");

        if($node->count() == 1) {
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

}
