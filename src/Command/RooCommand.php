<?php

declare(strict_types=1);

namespace CleverIt\UBL\Invoice\Command;

use DOMElement;
use Illuminate\Support\Collection;
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
           "minOccurs" => null,
           "maxOccurs" => null,
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

        $this->getParentTypes()
        ->injectRules();

        $this->output->writeln([" >> Writing sequence_elements to file",'============',]);
        $elementsString = json_encode($this->data, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/FactRoo.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

        return self::SUCCESS;

    }

    private function injectRules()
    {

            $e = new \CleverIt\UBL\Invoice\Command\UBL\RoResources();
            $rules = $e->buildInvoice();

            foreach($rules["invoice"] as $key => $value) {

                foreach($this->data[0]['elements'] as $eKey => $eValue) {

                    if(isset($eValue['name']) && $eValue['name'] == $key) {
               
                        unset($rules["Invoice"][$key]['type']);
                        $this->data[0]['elements'][$eKey] = array_merge($eValue,$value);

                    }
                }

            }

            foreach($rules['nested'] as $key => $value) {

                foreach($this->data[0]['elements'] as $eKey => $eValue) {
                
                    if(isset($eValue['type']) && $eValue['type'] == $key) {
                    

                        if(count($value) == 1) {
                        
                            foreach($eValue['elements'] as $pKey => $prop){

                                if($prop['name'] == array_key_first($value)){

                                    $eValue['elements'][$pKey] = array_merge($prop, $value[$prop['name']]);
                                    $this->data[0]['elements'][$eKey] = $eValue;

                                }

                            }
                            //now find the child prop to inject

                            // If there are more than one nesting level, we iterate down until we hit the required prop

                        }
                        else {
                            //iterate again
                        }
                    }
               
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

                $child_array = [];
                if($childNode instanceof DOMElement) {
                    
                    $name = $childNode->getAttribute('ref');

                    if($name == 'ext:UBLExtensions')
                        continue;
                    
                    $child_array = $this->harvestNode($name);
                    $child_array['minOccurs'] = $childNode->getAttribute('minOccurs') ?? "0";
                    $child_array['maxOccurs'] = $childNode->getAttribute('maxOccurs') ?? "1";

                    if($child_array['maxOccurs'] == 'unbounded')
                        $child_array['maxOccurs'] = "-1";
                    
                    $tmp[] = $child_array;
                }

            }

        }

        foreach($this->cacAppend as $append)
        {

            foreach($this->cacType->elements as $node) {
                if($node['type'] == $append) {
                    $tmp[] = $node;
                    break;
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

        foreach($type->elements as $node)
        {
            if($node['type'] == $base_type || $node['type'] == $parts[1])
            { 
                return $node;
            }

        }

        return $type->getPrimativeType($base_type);

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


    public static function searchTypeValues(Collection $collection)
    {
        return $collection->flatMap(function ($item) {
            // Check if the item is an array or a collection
            if (is_array($item) || $item instanceof Collection) {
                // If it's an array or a collection, recursively search
                if(isset($item['type']) && $item['type'] != 'InvoiceType')
                    return $item['type']; 
                
                return self::searchTypeValues(Collection::make($item));
            }

            if(is_string($item) && substr($item, -4) == 'Type') {
                return [$item];
                // echo "{$item} is a string".PHP_EOL;
            }
            // If the item is an object and has a 'type' property, return its value
            if (is_object($item) && property_exists($item, 'type')) {
                return $item->type;
            }

            // If none of the conditions are met, return an empty collection
            return collect([]);
        });
    }

}
