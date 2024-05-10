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

class Ubl
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
           "minOccurs" => null,
           "maxOccurs" => null,
   ];

    protected \DomDocument $document;

    private string $prefix = "xsd";

    public array $data = [];

    private ExtType $extType;
    private CacType $cacType;
    private UdtType $udtType;
    private CccType $cctType;
    private CbcType $cbcType;

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
        $fp = fopen("./stubs/FactUbl.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return $this;

    }

    public function parentProps(): self
    {

        $elements = $this->document->getElementsByTagName('element');

        $parent_elements = [];

        foreach($elements as $element)
        {
            if(!$element->hasAttribute('ref') || in_array($element->getAttribute('ref'),$this->exclusion_nodes))
                continue;

            $parts = explode(":", $element->getAttribute('ref'));

            $maxOccurs = $element->getAttribute('maxOccurs');

            if($maxOccurs == "unbounded")
                $maxOccurs = "-1";

            $parent_elements[] = array_merge($this->stub_validation, [
                'name' => $parts[1],
                'base_type' => $element->getAttribute('ref'),
                'minOccurs' => $element->getAttribute('minOccurs'),
                'maxOccurs' => $maxOccurs,
            ]);
                        
        }

        $this->data = [
            'type' => 'InvoiceType',
            'help' => '',
            'choices' => [],
            'elements' => $parent_elements
        ];

        return $this;
    }

    private function childNodes(): self
    {
        foreach($this->data['elements'] as $key => $element)
        {
            $this->data['elements'][$key] = array_merge($element, $this->harvestNode($element['base_type']));
        }

        return $this;
    }

    private function childTypes(): self
    {
        $types = collect();

        foreach($this->data['elements'] as $key => $element)
        {
            if(stripos($element['base_type'], 'Type') !== false) {     
                    $types->push($element['base_type']);                    
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

        foreach($child_types as $infant_type)
        {

            if(isset($infant_type['elements']))
            {
                foreach($infant_type['elements'] as $e)
                {

                    if(stripos($e['base_type'], 'Type') !== false)
                    {

                        foreach($this->cacType->elements as $node) {
                            if($node['type'] == $e['base_type']) {
                                $infants[] = $node;
                                break;
                            }
                        }



                    }

                }
            }

        }

        $neonates = [];

        foreach($infants as $neonate)
        {

            if(isset($neonate['elements'])) {
                foreach($neonate['elements'] as $e) {

                    if(stripos($e['base_type'], 'Type') !== false) {

                        foreach($this->cacType->elements as $node) {
                            if($node['type'] == $e['base_type']) {
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

                    if(stripos($e['base_type'], 'Type') !== false) {

                        foreach($this->cacType->elements as $node) {
                            if($node['type'] == $e['base_type']) {
                                $foetuses[] = $node;
                                break;
                            }
                        }


                    }

                }
            }

        }



        $parent = $this->data;
        
        $this->data = [];
        $this->data[] = $parent;

        foreach($child_types as $type)  
            $this->data[] = $type;

        foreach($infants as $infant)
            $this->data[] = $infant;

        foreach($neonates as $neonate)
            $this->data[] = $neonate;

        foreach($foetuses as $foetus)
            $this->data[] = $foetus;

        return $this;
    }


    private function harvestNode(string $name)
    {
        
        $parts = explode(":", $name);

        match($parts[0]){
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

            foreach($this->data[0]['elements'] as $eKey => $eValue) {

                if(isset($eValue['name']) && $eValue['name'] == $key) {

                    $this->data[0]['elements'][$eKey] = array_merge($eValue, $value);

                }
            }

        }

        foreach($rules['nested'] as $key => $value)
        {

            foreach($this->data as $dKey => $dValue)
            {
                if($key == $dValue['type'])
                {
                    foreach($rules['nested'][$key] as $nestKey => $value)
                    {
                        foreach($dValue['elements'] as $ddKey => $ddValue)
                        {
                            if($ddValue['name'] == $nestKey){

                                echo print_r($ddKey).PHP_EOL;
                                echo "1111".PHP_EOL;
                                echo print_r($ddValue).PHP_EOL;
                                
                                echo "2222".PHP_EOL;

                                echo print_r($value).PHP_EOL;
                                echo "3333".PHP_EOL;

                                $this->data[$dKey]['elements'][$ddKey] = array_merge($this->data[$dKey]['elements'][$ddKey], $value);
                            }

                        }
                    }
                }

            }

        }


        return $this;
    }

}