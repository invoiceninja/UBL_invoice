<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

use DOMElement;
use Illuminate\Support\Collection;
use CleverIt\UBL\Invoice\Command\UBL\Type;
use CleverIt\UBL\Invoice\Command\UBL\CacType;
use CleverIt\UBL\Invoice\Command\UBL\CbcType;
use CleverIt\UBL\Invoice\Command\UBL\CccType;
use CleverIt\UBL\Invoice\Command\UBL\ExtType;
use CleverIt\UBL\Invoice\Command\UBL\UdtType;

class UblObject
{
    private array $stub_validation =
        [
           "name" => null,
           "base_type" => null,
           "resource" => [],
        //    "length" => null,
        //    "fraction_digits" => null,
        //    "total_digits" => null,
        //    "max_exclusive" => null,
        //    "min_exclusive" => null,
        //    "max_inclusive" => null,
        //    "min_inclusive" => null,
           "max_length" => null,
           "min_length" => null,
           "pattern" => null,
        //    "whitespace" => null,
           "min_occurs" => null,
           "max_occurs" => null,
   ];

    protected \DomDocument $document;

    private string $prefix = "xsd";

    public array $data = [];

    private ExtType $extType;
    private CacType $cacType;
    private UdtType $udtType;
    private CccType $cctType;
    private CbcType $cbcType;
    private array $type_tracker = [];

    private array $cacAppend = [
        "BillingReferenceLineType",
        "AttachmentType",
        "ResultOfVerificationType",
        "WorkPhaseReferenceType",
        "ContactType",
        "PartyIdentificationType",
        "PartyNameType",
        "LanguageType",
        "AddressType",
        "LocationType",
        "PartyTaxSchemeType",
        "PartyLegalEntityType",
        "PersonType",
        "ServiceProviderPartyType",
        "PowerOfAttorneyType",
        "FinancialAccountType",
        "DespatchType",
        "DeliveryUnitType",
        "ShipmentType",
        "CardAccountType",
        "CreditAccountType",
        "PaymentMandateType",
        "TradeFinancingType",
        "TaxCategoryType",
        "ContractType",
        "TaxSubtotalType",
        "OrderLineReferenceType",
        "LineReferenceType",
        "PricingReferenceType",
        "ItemType",
        "PriceType",
        "PriceExtensionType",
    ];

    private string $resource = "src/FACT1/UBL-Invoice-2.1.xsd";

    private array $exclusion_nodes = [
        'ext:UBLExtensions',
    ];

    private object $final;

    public function __construct()
    {

    }

    public function init(): self
    {

        $this->cbcType = new CbcType();

        $this->extType = new ExtType();

        $this->cctType = new CccType();

        $this->udtType = new UdtType();

        $this->cacType = new CacType();

        $this->document = new \DomDocument();
        $this->document->load($this->resource);

        $this->parentProps()
        ->childNodes()
        ->childTypes()
        ->updateRules();

        
        $this->final = new \stdClass();

        // $this->final = (object)['InvoiceType' => $this->data[0]];


        $this->final = (object) $this->data;

        $elementsString = json_encode($this->final, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/FactUblObj.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return $this;

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



    public function parentProps(): self
    {

        $elements = $this->document->getElementsByTagName('element');

        $parent_elements = [];

        foreach($elements as $element) {
            if(!$element->hasAttribute('ref') || in_array($element->getAttribute('ref'), $this->exclusion_nodes)) {
                continue;
            }

            $parts = explode(":", $element->getAttribute('ref'));

            $maxOccurs = $element->getAttribute('maxOccurs');

            if($maxOccurs == "unbounded") {
                $maxOccurs = "-1";
            }

            $parent_elements[$parts[1]] = array_merge($this->stub_validation, [
                'name' => $parts[1],
                'base_type' => $element->getAttribute('ref'),
                'min_occurs' => (int)$element->getAttribute('minOccurs'),
                'max_occurs' => (int)$maxOccurs,
                'help' => $this->getAnnotation($element)
            ]);

        }

        $this->data['InvoiceType'] = [
            'type' => 'InvoiceType',
            'help' => '',
            'choices' => [],
            'elements' => $parent_elements
        ];

        return $this;
    }

    private function getAnnotation(DOMElement $element): string
    {
        $result = $this->getXPath("./{$this->prefix}:annotation//{$this->prefix}:documentation//ccts:Component//ccts:Definition", $element);
        
        return $result->count() > 0 ? trim(str_replace("\n","", $result->item(0)->nodeValue)) : '';

    }
    
    private function getXPath(string $path, \DomElement $element = null): ?\DOMNodeList
    {
        $xpath = new \DOMXPath($this->document);
        return $xpath->query($path, $element);
    }

    private function childNodes(): self
    {
        foreach($this->data as $key => $elements) {

            foreach($elements['elements'] as $eKey => $element) {
                $this->data[$key]['elements'][$eKey] = array_merge($element, $this->harvestNode($element['base_type']));
            }
        }

        return $this;
    }

    private function childTypes(): self
    {
        $types = collect();

        foreach($this->data as $key => $elements) {

            foreach($elements['elements'] as $eKey => $element) {
                if(stripos($element['base_type'], 'Type') !== false) {

                    if(!in_array($element['base_type'], $this->type_tracker)) {
                        $this->type_tracker[] = $element['base_type'];
                    }

                    $types->push($element['base_type']);
                }

            }
        }

        $child_types = $types->unique()->map(function ($t) {

            foreach($this->cacType->elements as $node) {
                if($node['type'] == $t) {
                    return $node;
                }
            }

        })->toArray();

        $infants = [];

        foreach($child_types as $infant_type) {

            if(isset($infant_type['elements'])) {
                foreach($infant_type['elements'] as $e) {

                    if(stripos($e['base_type'], 'Type') !== false && !in_array($e['base_type'], $this->type_tracker)) {

                        foreach($this->cacType->elements as $node) {
                            if($node['type'] == $e['base_type']) {
                                $this->type_tracker[] = $e['base_type'];
                                $infants[$e['name']] = $node;
                                break;
                            }
                        }



                    }

                }
            }

        }

        $neonates = [];

        foreach($infants as $neonate) {

            if(isset($neonate['elements'])) {
                foreach($neonate['elements'] as $e) {

                    if(stripos($e['base_type'], 'Type') !== false && !in_array($e['base_type'], $this->type_tracker)) {

                        foreach($this->cacType->elements as $node) {

                            if($node['type'] == $e['base_type']) {

                                $this->type_tracker[] = $e['base_type'];

                                $neonates[$e['name']] = $node;
                                break;
                            }
                        }


                    }

                }
            }

        }


        $foetuses = [];

        foreach($neonates as $foetus) {

            if(isset($foetus['elements'])) {
                foreach($foetus['elements'] as $e) {

                    if(stripos($e['base_type'], 'Type') !== false && !in_array($e['base_type'], $this->type_tracker)) {

                        foreach($this->cacType->elements as $node) {
                            if($node['type'] == $e['base_type']) {
                                $this->type_tracker[] = $e['base_type'];
                                $foetuses[$e['name']] = $node;
                                break;
                            }
                        }


                    }

                }
            }

        }



        // $parent = $this->data;

        // $this->data = [];
        // $this->data[] = $parent;


        
        foreach($child_types as $type) {

            $new_set = [];
            foreach($type['elements'] as $stub){
                $new_set[$stub['name']] = $stub;
            }
            $type['elements'] = $new_set;

            $this->data[$type['type']] = (object)$type;
        }

        // echo print_r($this->data);

        foreach($infants as $infant) {

            $new_set = [];

            if(isset($infant['elements']))
            {

                foreach($infant['elements'] as $key =>$stub) {
                    $new_set[$stub['name']] = $stub;
                }
                $infant['elements'] = $new_set;
    
            }

echo "iunfant => {$key} - {$infant['type']}".PHP_EOL;

            $this->data[$infant['type']] = (object)$infant;

        }

        foreach($neonates as $neonate) {
            
            $new_set = [];
            if(isset($neonate['elements']))
            {
                
                foreach($neonate['elements'] as $key => $stub) {
                    $new_set[$stub['name']] = $stub;
                }
                $neonate['elements'] = $new_set;
            }

            echo "neo nate => {$key} - {$neonate['type']}".PHP_EOL;
            $this->data[$neonate['type']] = (object)$neonate;
        }

        foreach($foetuses as $foetus) {

            $new_set = [];

            if(isset($foetus['elements']))
            {
                foreach($foetus['elements'] as $key => $stub) {
                    $new_set[$stub['name']] = $stub;
                }
                $foetus['elements'] = $new_set;
            }

            echo "foetus {$key} => {$stub['base_type']}".PHP_EOL;
            // echo print_r($foetus).PHP_EOL;
            $this->data[$foetus['type']] = (object)$foetus;
        }

        // echo print_r($this->type_tracker).PHP_EOL;
        return $this;
    }


    private function harvestNode(string $name)
    {

        $parts = explode(":", $name);

        match($parts[0]) {
            'cac' => $type = $this->cacType,
            'cbc' => $type = $this->cbcType,
            'ext' => $type = $this->extType,
        };

        return $type->getNamedType($parts[1]);

    }

    private function updateRules(): self
    {


        $e = new \CleverIt\UBL\Invoice\Command\UBL\RoResources();
        $rules = $e->buildInvoice();

        foreach($rules["invoice"] as $key => $value) {


            
            foreach($this->data["InvoiceType"]['elements'] as $eKey => $eValue) {

                if(isset($eValue['name']) && $eValue['name'] == $key) {

                    $this->data["InvoiceType"]['elements'][$eKey] = array_merge($eValue, $value);

                }
            }

        }

        foreach($rules['nested'] as $key => $value) {

            foreach($this->data as $dKey => $dValue) {
                if(isset($dValue->type) && $key == $dValue->type) {
                    foreach($rules['nested'][$key] as $nestKey => $value) {
                        foreach($dValue->elements as $ddKey => $ddValue) {
                            if(is_array($ddValue) && $ddValue['name'] == $nestKey) {

                                $this->data[$dKey]->elements[$ddKey] = (object)array_merge((array)$this->data[$dKey]->elements[$ddKey], $value);
                            }
                            elseif(is_object($ddValue) && $ddValue->name == $nestKey){

                                $this->data[$dKey]->elements[$ddKey] = (object)array_merge((array)$this->data[$dKey]->elements[$ddKey], $value);

                            }

                        }
                    }
                }

            }

        }


        return $this;
    }

}
