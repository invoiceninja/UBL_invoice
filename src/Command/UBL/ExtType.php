<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

use DOMElement;
use DOMNodeList;
use CleverIt\UBL\Invoice\Command\UBL\CbcType;
use CleverIt\UBL\Invoice\Command\UBL\CccType;

class ExtType
{
    
    private string $path = 'src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd';

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

    public function getTypes(): self
    {

        $this->doc->load($this->path);

        $elements = $this->doc->getElementsByTagName("element");

        foreach($elements as $element) {

            if($element->hasAttribute('name'))
            $this->type_map[$element->getAttribute("name")] = $element->getAttribute("type");
        }

        return $this;
    }

    public function getSequence(string $name): ?\DOMNodeList
    {

        $base_type = $this->type_map[$name];

        $xpath = "//xsd:complexType [@name='{$base_type}']//{$this->prefix}:sequence";

        return $this->getXPath($xpath);

    }

    private function getAnnotation(DOMElement $element): string
    {
        $result = $this->getXPath("./{$this->prefix}:annotation//{$this->prefix}:documentation", $element);

        
        return $result->count() > 0 ? trim(str_replace("\n","", $result->item(0)->nodeValue)) : '';

        // return $result->count() > 0 ? preg_replace('/\s+/', '', $result->item(0)->nodeValue) : '';

    }
    public function getElements(): self
    {
        $this->elements = [];

        foreach($this->type_map as $key => $value)
        {
            $sequence = $this->getSequence($key);
            $base_type = $value;

            $elements = [];

            for($x=0; $x<$sequence->count(); $x++)
            {
                if($sequence->item($x) instanceof DOMElement){
                    
                    $elements[] = $this->parseSequenceNode($sequence->item($x));
                }
            }

            if(count($elements) > 0 )
                $data[] = ['type' => $base_type, 'elements' => $elements[0]];
        }

        $this->elements = $data;

        return $this;
    }

    private function parseSequenceNode(DOMElement $element): array
    {

        $data = [];

        foreach($element->childNodes as $childNode)
        {
            $child_array = [];

            if($childNode instanceof DOMElement)
            {
                foreach($childNode->attributes as $key => $attr) {

                    if(in_array($attr->nodeName, ['ref', 'minOccurs','maxOccurs'])) {

                        $key = $attr->nodeName == 'ref' ? 'name' : $attr->nodeName;
                        
                        if($attr->nodeName == 'maxOccurs' && $attr->nodeValue == 'unbounded')
                        {
                            $child_array['maxOccurs'] = "-1";
                        }
                        else
                            $child_array[$key] = $attr->nodeValue;

                        $child_array['help'] = $this->getAnnotation($childNode);
                    }
                }


                // $data[] = $child_array;
                $data[] = $this->parseNodeTypes($child_array);
            }
        }

        return $data;

    }

    private function parseNodeTypes(array $data): array
    {
        $searchable_type = $data['name'];

        $parts = explode(":",$data['name']);
        $parsed_name = count($parts) > 1 ? $parts[1] : $data['name'];

        //not a standard type, harvest a child data type of this object class
        if(isset($this->type_map[$data['name']])){
            $node_name = $this->type_map[$data['name']];
            $result = $this->getXPath("./{$this->prefix}:complexType [@name='{$node_name}']//{$this->prefix}:simpleContent//{$this->prefix}:extension");
        
            if($result->count() == 1)
            {
                $searchable_type = $result->item(0)->getAttribute('base');
            }
        }

        //perhaps already a type ie ":"
        if(stripos($searchable_type, ":") !== false){
            $data['name'] = $parsed_name;
            $data['base_type'] = $this->extractRelatedType($searchable_type);
            $data = array_merge($this->stub_validation, $data);

            ksort($data);
            return $data;
        }

        if(isset($this->type_map[$searchable_type])){

            $data['name'] = $parsed_name;
            $data['base_type'] = $this->type_map[$searchable_type];
            
            $data = array_merge($this->stub_validation, $data);

            ksort($data);
            return $data;
        }

        throw new \Exception("Could not find type for => ". $searchable_type);
    
    }

    private function extractRelatedType(string $related_type): string
    {
        $parts = explode(":", $related_type);

        $relation = new \DOMDocument();

        match($parts[0]) {
            'cbc' => $type = (new CbcType())->getPrimativeType($parts[1]),
            'cac' => $type = (new CccType())->getPrimativeType($parts[1]),
            'ext' => $type = (new CccType())->getPrimativeType($parts[1]),
            'udt' => $type = (new CccType())->getPrimativeType($parts[1]),
            'ccts-cct' => $type = (new CccType())->getPrimativeType($parts[1]),
        };

        return $type ?? throw new \Exception("could not find related type {$related_type}");
    }

    public function getType(): string
    {
        $base_type = $this->type_map[$this->name];

        $xpath = "//xsd:complexType [@name='{$base_type}']";
        $query = $this->getXPath($xpath);

        return $query->item(0)->getAttribute('type');
    }
    private function extractSequence(\DomElement $element): \DOMNodeList
    {
        return $this->getXPath("./{$this->prefix}:sequence", $element);
    }

    private function getXPath(string $path, \DomElement $element = null): ?\DOMNodeList
    {
        $xpath = new \DOMXPath($this->doc);
        return $xpath->query($path, $element);
    }

    // public function 
}