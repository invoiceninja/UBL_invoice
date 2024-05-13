<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

use DOMElement;
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

    public object $data;

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

    public function __construct()
    {

    }

    public function init(): self
    {

        $this->data = new \stdClass;
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

        $elementsString = json_encode($this->data, JSON_PRETTY_PRINT);
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

            $parent_elements[] = (object)array_merge($this->stub_validation, [
                'name' => $parts[1],
                'base_type' => $element->getAttribute('ref'),
                'min_occurs' => (int)$element->getAttribute('minOccurs'),
                'max_occurs' => (int)$maxOccurs,
            ]);

        }

        $this->data->type = 'InvoiceType'; 
            
            $this->data->help = '';
            $this->data->choices = [];
            $this->data->elements = (object)$parent_elements;
        

        return $this;
    }

    private function childNodes(): self
    {
        foreach($this->data->elements as $key => $element) {

            if(isset($element->elements))
                $element->elements = (object)$element->elements;

            $this->data->elements->{$key} = (object)array_merge((array)$element, (array)$this->harvestNode($element->base_type));
        }

        return $this;
    }

    private function childTypes(): self
    {
        $types = collect();

        foreach($this->data->elements as $key => $element) {
            if(stripos($element->base_type, 'Type') !== false) {

                if(!in_array($element->base_type, $this->type_tracker)) {
                    $this->type_tracker[] = $element->base_type;
                }

                $types->push($element->base_type);
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
                                $infants[] = $node;
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

                                $neonates[] = $node;
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
                                $foetuses[] = $node;
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
            $this->data->{$type['type']} = (object)json_decode(json_encode($type),false);
            // $this->data[] = $type;
        }

        foreach($infants as $infant) {

            $this->data->{$infant['type']} = (object)json_decode(json_encode($infant),false);
            // $this->data[] = $infant;
        }

        foreach($neonates as $neonate) {
            
$this->data->{$neonate['type']} = (object)json_decode(json_encode($neonate),false);

            // $this->data[] = $neonate;
        }

        foreach($foetuses as $foetus) {

$this->data->{$foetus['type']} = (object)json_decode(json_encode($foetus),false);
            // $this->data[] = $foetus;
        }

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

            foreach($this->data->elements as $eKey => $eValue) {

                if(isset($eValue->name) && $eValue->name == $key) {

                    $this->data->elements->{$eKey} = (object)array_merge((array)$eValue, (array)$value);

                }
            }

        }

        foreach($rules['nested'] as $key => $value) {

            foreach($this->data as $dKey => $dValue) {
                if($key == $dKey) {
                    foreach($rules['nested'][$key] as $nestKey => $value) {
                        foreach($dValue->elements as $ddKey => $ddValue) {
                            if($ddValue->name == $nestKey) {

                                echo print_r($value).PHP_EOL;
                                echo "dd name = {$ddValue->name}".PHP_EOL;
                                echo "nest key = ".$nestKey.PHP_EOL;
                                echo "ddkey = {$ddKey}".PHP_EOL;
                                echo "key = {$key}".PHP_EOL; 
                                echo "dkey = {$dKey}".PHP_EOL;

                                echo print_r($$this->data->{$dKey}->elements->{$ddKey}).PHP_EOL;
                                $this->data->{$dKey}->elements->{$ddKey} = (object)array_merge((array)$this->data->{$dKey}->elements->{$ddKey}, (array)$value);
                            }

                        }
                    }
                }

            }

        }


        return $this;
    }

}
