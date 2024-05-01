<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

class Type
{

    public string $cct = "src/FACT1/common/CCTS_CCT_SchemaModule-2.1.xsd";

    public string $cac = "src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd";

    public string $cbc = "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd";

    public string $udt = "src/FACT1/common/UBL-UnqualifiedDataTypes-2.1.xsd";
    public string $ccts_cct = "src/FACT1/common/CCTS_CCT_SchemaModule-2.1.xsd" ;

    public array $cac_map = [];
    public array $cbc_map = [];
    public array $udt_map = [];
    public array $ccts_cct_map = [];

    protected \DomDocument $document;

    public function __construct()
    {

        $this->document = new \DOMDocument();
        $this->getAllCbcTypes();
        $this->getAllCacTypes();
    }

    public function getAllCacTypes(): self
    {
        $this->document->load($this->cac);

        $elements = $this->document->getElementsByTagName("element");

        foreach($elements as $element) {
            $this->cac_map[$element->getAttribute("name")] = $element->getAttribute("type");
        }

        return $this;
    }

    public function getAllCbcTypes(): self
    {
                
        $this->document->load($this->cbc);

        $elements = $this->document->getElementsByTagName("element");

        foreach($elements as $element) {
            $this->cbc_map[$element->getAttribute("name")] = $element->getAttribute("type");
        }

        return $this;

    }
    
    public function hydrateTypes($typeX)
    {
        
        echo $typeX.PHP_EOL;

        $parts = explode(":", $typeX);
        echo print_r($parts);
        echo str_replace("-", "_", $parts[0]) . PHP_EOL;

        $this->loadDomDoc(str_replace("-","_",$parts[0]));

        match($parts[0]){
            'cbc' => $component_type = $this->cbc_map[$parts[1]],
            'cac' => $component_type = $this->cac_map[$parts[1]],
            'udt' => $component_type = $parts[1],
            'ccts-cct' => $component_type = $parts[1],
        };

        $xpath = new \DOMXPath($this->document);
        $type = $xpath->query('//xsd:complexType [@name="'.$component_type.'"]//xsd:simpleContent//xsd:extension');

        if($type->count() == 0){
            $type = $xpath->query('//xsd:complexType [@name="'.$component_type.'"]//xsd:simpleContent//xsd:restriction');
        }

        if($type->count() == 0){
            return [$component_type, $component_type];
        }

        $base = $type->item(0)->getAttribute("base");

        echo $base.PHP_EOL;
        
        $base_parts =explode(":", $base);
        $this->loadDomDoc($base_parts[0]);
        
        $xpath = new \DOMXPath($this->document);

        $type = $xpath->query('//xsd:complexType [@name="'.$base_parts[1].'"]//xsd:annotation//xsd:documentation//ccts:PrimitiveType');

        $primative = $type->item(0)->nodeValue;

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

        return [$primative, ucfirst($variable_type)];

    }

    public function loadDomDoc($prefix):self
    {
        $prefix = str_replace("-","_", $prefix);

        $this->document->load($this->{$prefix});
        
        return $this;

    }

    // need separate paths for basic and aggregate.

    public function mapType(string $namespace, string $typeX)
    {        
        echo $typeX.PHP_EOL;

        $this->document->load($namespace);
        $xpath = new \DOMXPath($this->document);
        
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