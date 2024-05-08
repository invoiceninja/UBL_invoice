<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

use DOMElement;

class Type
{

    public string $cct = "src/FACT1/common/CCTS_CCT_SchemaModule-2.1.xsd";

    public string $cac = "src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd";

    public string $cbc = "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd";

    public string $udt = "src/FACT1/common/UBL-UnqualifiedDataTypes-2.1.xsd";
    public string $ccts_cct = "src/FACT1/common/CCTS_CCT_SchemaModule-2.1.xsd" ;

    public string $ext = "src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd";

    public array $cac_map = [];
    public array $cbc_map = [];
    public array $udt_map = [];
    public array $ccts_cct_map = [];
    public array $ext_map = [];

    protected \DomDocument $type_document;

    public function __construct()
    {

        $this->type_document = new \DOMDocument();
        $this->getAllCbcTypes();
        $this->getAllCacTypes();
        $this->getAllExtTypes();
        $this->getAllCCTSTypes();
    }

    public function getAllCCTSTypes(): self
    {
        $this->type_document->load($this->ccts_cct);

        $elements = $this->type_document->getElementsByTagName("complexType");

        foreach($elements as $element) {
            $this->ccts_cct_map[$element->getAttribute("name")] = $this->extractCCT($element);
        }

        // echo print_r($this->ccts_cct_map);

        return $this;

        
    }

    private function extractCCT(DOMElement $element): array
    {
        $data = [];

        $xpath = new \DOMXPath($this->type_document);
        $node = $xpath->query("./xsd:complexType//xsd:annotation//xsd:documentation//ccts:PrimativeType", $element);

        if($node->count() == 1)
            $data['base_type'] = $node->item(0)->nodeValue;
    
        $node = $xpath->query("./xsd:simpleContent//xsd:extension", $element);

        if($node->count() == 1) {
            $data['base_type'] = $node->item(0)->getAttribute("base");
            // $data['minOccurs'] = $node->item(0)->getAttribute("use") == "optional" ? 0 : 1;
        }

        return $data;
    }

    public function getAllExtTypes(): self
    {

        $this->type_document->load($this->ext);

        $elements = $this->type_document->getElementsByTagName("element");

        foreach($elements as $element) {
            $this->ext_map[$element->getAttribute("name")] = $element->getAttribute("type");
        }

        return $this;
    }
    public function getAllCacTypes(): self
    {
        $this->type_document->load($this->cac);

        $elements = $this->type_document->getElementsByTagName("element");

        foreach($elements as $element) {
            $this->cac_map[$element->getAttribute("name")] = $element->getAttribute("type");
        }

        return $this;
    }

    public function getAllCbcTypes(): self
    {
                
        $this->type_document->load($this->cbc);

        $elements = $this->type_document->getElementsByTagName("element");

        foreach($elements as $element) {
            $this->cbc_map[$element->getAttribute("name")] = $element->getAttribute("type");
        }

        return $this;

    }
    
    public function findTrickyType(string $name){

        // echo "finding tricky type {$name}".PHP_EOL;

        if(isset($this->ext_map[$name]))
            return $this->ext_map[$name];

        if(isset($this->cbc_map[$name])) {
            return $this->cbc_map[$name];
        }

        if(isset($this->cac_map[$name])) {
            return $this->cac_map[$name];
        }

        if(isset($this->udt[$name])) {
            return $this->udt[$name];
        }
            
    } 
    public function hydrateTypes($typeX)
    {   //top level
        $parts = explode(":", $typeX);

        if(count($parts) == 1)
            return $this->findTrickyType($typeX);

        $this->loadDomDoc(str_replace("-","_",$parts[0]));

        match($parts[0]){
            'cbc' => $component_type = $this->cbc_map[$parts[1]],
            'cac' => $component_type = $this->cac_map[$parts[1]],
            'ext' => $component_type = $this->ext_map[$parts[1]],
            'udt' => $component_type = $this->udt_map[$parts[1]],
            'ccts-cct' => $component_type = $this->ccts_cct_map[$parts[1]]['base_type'],
        };

        match($parts[0]) {
            'cbc' => $this->type_document->load($this->cbc),
            'cac' => $this->type_document->load($this->cac),
            'ext' => $this->type_document->load($this->ext),
            'udt' => $this->type_document->load($this->udt),
            'ccts-cct' => $this->type_document->load($this->ccts_cct),
        };


        $xpath = new \DOMXPath($this->type_document);
        $type = $xpath->query('//xsd:complexType [@name="'.$component_type.'"]//xsd:simpleContent//xsd:extension');

        if($type->count() == 0){
            $type = $xpath->query('//xsd:complexType [@name="'.$component_type.'"]//xsd:simpleContent//xsd:restriction');
        }

        if($type->count() == 0){
            return $component_type;
        }

        $base = $type->item(0)->getAttribute("base");

        $base_parts =explode(":", $base);

        if(count($base_parts) > 1)
            $this->loadDomDoc($base_parts[0]);
        
        $xpath = new \DOMXPath($this->type_document);

        // $type = $xpath->query('//xsd:complexType [@name="'.$base_parts[1].'"]//xsd:annotation//xsd:type_documentation//ccts:PrimitiveType');

        $type = $xpath->query('//xsd:complexType [@name="'.$base_parts[1].'"]//xsd:simpleContent');
        
        if($type->count() == 0)
            throw new \Exception ("boo");

        $nodes = $type->item(0)->childNodes;

        foreach($nodes as $node)
        {
            if ($node instanceOf \DOMElement) {
                $ref = $node->getAttribute("base");
                break;
            }

        }

        $variable_type = explode(":", $ref)[1];

        return $variable_type;
        // return ucfirst($variable_type);

    }

    public function loadDomDoc($prefix):self
    {
        $prefix = str_replace("-","_", $prefix);

        $this->type_document->load($this->{$prefix});
        
        return $this;

    }

    // need separate paths for basic and aggregate.

    public function mapType(string $namespace, string $typeX)
    {        
        //echo $typeX.PHP_EOL;

        $this->type_document->load($namespace);
        $xpath = new \DOMXPath($this->type_document);
        
        if($namespace == $this->cac){
            $type = $xpath->query('//xsd:complexType [@name="'.$typeX.'"]//xsd:sequence');
            $key = "ref";
        }
        else{

            $type = $xpath->query('//xsd:complexType [@name="'.$typeX.'"]//xsd:simpleContent//xsd:extension');
            $key = "base";

        }

        $data = [];

        if($type->count() == 0)
            throw new \Exception("could not hydrate {$namespace} - {$typeX}");
        
            $node = $type->item(0)->getAttribute("base");

            if($node){

                $types = $this->hydrateTypes($node);

                $data[] = [
                    'ref' => $node,
                    "min" => null,
                    "max" => null,
                    "primative" => $types[0],
                    "type" => $types[1],
                ];

            }
            else {
                foreach($type->item(0)->childNodes as $node){

                    if ($node instanceOf \DOMElement) {
                        
                        $types = $this->hydrateTypes($node->getAttribute($key));

                        $data[] = [
                            'ref' => $node->getAttribute("ref"),
                            "min" => $node->getAttribute("minOccurs") == "unbounded" ? -1 : $node->getAttribute("minOccurs"),
                            "max" => $node->getAttribute("maxOccurs") == "unbounded" ? -1 : $node->getAttribute("maxOccurs"),
                            "primative" => $types[0],
                            "type" => $types[1],
                        ];
                        
                    }
                    
                }
            }
        return $data;
        
    }

    public function mapAllTypes()
    {
        $json = file_get_contents("./stubs/FACT1_Invoice_elements.json");
        $objects = json_decode($json);

        $data = [];

        foreach($objects as $object){

            foreach($object->elements as $object_type)
            {
                if(!property_exists($object_type, 'name')){
                    continue;
                }
                elseif(isset($this->cac_map[$object_type->name])){
                    $namespace = $this->cac;
                    $type = $this->cac_map[$object_type->name];
                }
                elseif(isset($this->cbc_map[$object_type->name])){
                    $namespace = $this->cbc;
                    $type = $this->cbc_map[$object_type->name];
                }
                else {
                    throw new \Exception("could not find {$object_type->name}");
                }

                $data[$object_type->name] = $this->mapType($namespace, $type);     
            }
        }


        $elementsString = json_encode($data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/FACT1_Invoice_types.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);


        return $data;
    }
}