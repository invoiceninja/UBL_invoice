<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

use DOMElement;
use DOMNodeList;

class CccType
{
    //this class also has attributes which have not been defined as yet.
    public string $path = "src/FACT1/common/CCTS_CCT_SchemaModule-2.1.xsd" ;

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
        $result = $this->getXPath("./{$this->prefix}:complexType [@name='{$name}']//{$this->prefix}:annotation//{$this->prefix}:documentation//ccts:PrimitiveType");

        if($result->count() > 0) {
            return str_replace("{$this->prefix}:", "", $result->item(0)->nodeValue);
        }

        throw new \Exception("CCT => Could not find type {$name}");
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
