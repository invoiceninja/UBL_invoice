<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

use DOMElement;
use DOMNodeList;

class CbcType
{
    
    public string $path = "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd";

    private string $prefix = 'xsd';

    public array $type_map = [];
    public array $elements = [];

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
   
    private \DOMDocument $doc;
    public function __construct(private string $name = '')
    {
        $this->doc = new \DOMDocument();
        $this->doc->load($this->path);
        $this->getTypes()->getElements();
    }

    public function getElements():self
    {

        $this->elements = [];

        foreach($this->type_map as $key => $value) {

            $complexBaseType = $this->getUdtType($value);

            $data[] = array_merge($this->stub_validation, ['base_type' => $complexBaseType]);
        }

        $this->elements = $data;

        return $this;

    }

    public function getUdtType(string $name): string
    {

        $xpath = "//xsd:complexType [@name='{$name}']//{$this->prefix}:simpleContent//{$this->prefix}:extension";

        $result = $this->getXPath($xpath);

        if($result->count() == 1)
            return (new UdtType())->getPrimativeType(str_replace("udt:","",$result->item(0)->getAttribute('base')));

        throw new \Exception("could not get complex type {$name}");

    }
    private function getTypes()
    {
        
        $elements = $this->doc->getElementsByTagName("element");

        foreach($elements as $element) {
            $this->type_map[$element->getAttribute("name")] = $element->getAttribute("type");
        }

        return $this;

    }
    public function getPrimativeType(string $name): string
    {
        $name = $this->type_map[$name] ?? $name;

        $result = $this->getXPath("./{$this->prefix}:complexType [@name='{$name}']//{$this->prefix}:simpleContent//{$this->prefix}:extension");
    
        if($result->count() == 1){
            $type = $result->item(0)->getAttribute('base');

            if(stripos($type, "xsd") !== false)
                return str_replace("{$this->prefix}:", "", $type);

            //core component - contains nested children - which the API will handle, only need to display the prop.
            if(stripos($type, "ccts-cct") !== false) {
                $parts = explode(":", $type);
                return (new CccType())->getPrimativeType($parts[1]);
            }

            if(stripos($type, "udt") !== false) {
                $parts = explode(":", $type);
                return (new UdtType())->getPrimativeType($parts[1]);
            }


        }

        throw new \Exception("Could not find type {$name}");
    }


    private function getXPath(string $path, \DomElement $element = null): ?\DOMNodeList
    {
        $xpath = new \DOMXPath($this->doc);
        return $xpath->query($path, $element);
    }

    public function getNamedType(string $name): array
    {
        $base_type = $this->getPrimativeType($name);
        // $rules = $this->get
        return [
            'base_type' => $base_type,
        ];
    }
}