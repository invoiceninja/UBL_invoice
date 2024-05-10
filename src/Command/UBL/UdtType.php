<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

use DOMElement;
use DOMNodeList;

class UdtType
{
    public string $path = "src/FACT1/common/UBL-UnqualifiedDataTypes-2.1.xsd";

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
    }

    public function getPrimativeType(string $name): string
    {
        $result = $this->getXPath("./{$this->prefix}:complexType [@name='{$name}']//{$this->prefix}:simpleContent//{$this->prefix}:extension");

        if($result->count() == 0)
            $result = $this->getXPath("./{$this->prefix}:complexType [@name='{$name}']//{$this->prefix}:simpleContent//{$this->prefix}:restriction");

        if($result->count() == 1) {
            $type = $result->item(0)->getAttribute(('base'));


            if(stripos($type, "ccts") !== false){
                $parts = explode(":", $type);
                return (new CccType())->getPrimativeType($parts[1]);
            }

            return str_replace("{$this->prefix}:", "", $type);
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
        return ['base_type' => $this->getPrimativeType($name)];
    }
}
