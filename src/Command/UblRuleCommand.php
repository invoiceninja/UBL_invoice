<?php

declare(strict_types=1);

namespace CleverIt\UBL\Invoice\Command;

use Symfony\Component\Console\Command\Command;
use GoetasWebservices\XML\XSDReader\SchemaReader;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\RestrictionType;

#[AsCommand(
    name: 'stub:ubl',
    description: 'stub ubl files',
    hidden: false,
    aliases: ['stub:ubl']
)]
final class UblRuleCommand extends Command
{

    private \DomDocument $document;
    private string $RO_MAJOR_MINOR_PATCH_VERSION = '';
    private string $RO_CIUS_ID = '';
    private string $RO_EMAIL_REGEX = '';
    private string $RO_TELEPHONE_REGEX = ''; 
    private array $ISO_3166_RO_CODES = []; 
    private array $SECTOR_RO_CODES = []; 
    private string $yaml_path = "./src/RO/metadata/";
    private array $rules = [];
    /**
     * In this method setup command, description, and its parameters
     */
    protected function configure()
    {

    }

    private function tt()
    {
        $path = "src/FACT1/UBL-Invoice-2.1.xsd";

        $reader = new SchemaReader();
        $schema = $reader->readFile($path);

        $this->document = new \DomDocument();
        $this->document->load($path);
            
        $cbc_path = "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd";
        $cac_path = "src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd";

        $cbc = new \DomDocument();
        $cbc->load($cbc_path);

        $cac = new \DomDocument();
        $cac->load($cac_path);

        foreach($schema->getTypes() as $type)
        {

            $name = str_replace("Type","", $type->getName());

            $elements = $this->getXpathElements($this->document, "ccts:ObjectClass");

            $data = [];

            foreach($elements as $element)
            {
                if($element->nodeValue == $name)
                {
                  

                    $ee = $element->parentNode->parentNode->parentNode->parentNode;
                    $ref = $ee->getAttribute("ref");

                    if($ref == "cac:Signature") {
                        continue;
                    }

                    if(strlen($ref ?? '') > 1)
                    {
                        
                        $minOccurs = $ee->getAttribute("minOccurs");
                        $maxOccurs = $ee->getAttribute("maxOccurs") == 'unbounded' ? -1 : $ee->getAttribute("maxOccurs");

                        $data[] = [
                            "name" => str_replace(['cbc:','cac:'], "",$ref),
                            "min" => $minOccurs,
                            "max" => $maxOccurs,
                            "prefix" => explode(":", $ee->getAttribute('ref'))[0] ?? '',
                        ];                        
                        
                    }

                }

            }

            $child_data = [];

            //do this inside out, group by object class, and then iterate through all props that way... simples.
            foreach($data as $type)
            {

                $dom_name = $type['name'];

                $debug = 0;

                try {
                    $yaml = \Dallgoot\Yaml\Yaml::parseFile("{$this->yaml_path}{$dom_name}Type.yml", 0, $debug);
                } catch(\Exception $e) {
                    // echo $e->getMessage();
                    

//try getting the type

$domdoc = new \DomDocument();
match($type['prefix']) {
    'cac' => $domdoc->load("src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd"),
    'cbc' => $domdoc->load("src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd"),
};

$xpath = new \DOMXPath($domdoc);
$xtype = $xpath->query('//xsd:element [@name="'.$dom_name.'"]');

if($xtype->count() == 1) {
    $parent = $xtype->item(0)->getAttribute('type');
    $yaml = \Dallgoot\Yaml\Yaml::parseFile("{$this->yaml_path}{$parent}.yml", 0, $debug);
}


                }
               
                $elements = [];

                foreach($yaml->properties as $key => $value) {

                    if(in_array($key, ["SignatureType","__value"])){
                        continue;
                    }

                        $key_namespace = $value->namespace ?? '';

                        // try{
                            
                            $min_max = $this->harvestMinMax($type['prefix'].":".$type['name'], $key, $key_namespace);
                        // }
                        // catch(\Exception $e){

                        // echo print_r($type);
                        // exit;
                        // }


                    $elements[] = [
                        'name' => $value->serialized_name,
                        'min' => $min_max[0],
                        'max' => $min_max[1],
                    ];

                }

                $child_data[] = [
                    'type' => $dom_name."Type",
                    'elements' => $elements
                ];

            }

            $data = array_merge($data, $child_data);
            echo print_r($data);

$elementsString = json_encode($data, JSON_PRETTY_PRINT);
$fp = fopen("./stubs/tt.json", 'w');
fwrite($fp, $elementsString);
fclose($fp);

        }


    }

    private function harvestMinMax(string $prefix, $key, string $key_namespace): array 
    {
        
        $domdoc = new \DomDocument();

        match(explode(":",$prefix)[0]){
            'cac' => $domdoc->load("src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd"),
            'cbc' => $domdoc->load("src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd"),
            '' => $domdoc->load("src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd"),
            default => throw new \Exception(" no cac or cbc found in {$prefix}"),
        };

        if(stripos($key_namespace, "CommonAggregateComponents") !== false){
            // $domdoc->load("src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd");
            $key = "cac:".ucfirst($key);
            $parent_prefix = "cac:";

        }
        elseif(stripos($key_namespace, "CommonBasicComponents") !== false) {
            // $domdoc->load("src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd");
            $key = "cbc:".ucfirst($key);
            $parent_prefix = "cbc:";
        }

        $parent = str_replace(["cac:","cbc:"],  "", $prefix)."Type";
        $xpath = new \DOMXPath($domdoc);
        $type = $xpath->query('//xsd:element [@name="'.str_replace(["cac:","cbc:"],  "", $prefix).'"]');

        if($type->count() == 1){
            $parent = $type->item(0)->getAttribute('type');
        }
        $val = $xpath->query('//xsd:complexType [@name="'.$parent.'"]//xsd:sequence//xsd:element [@ref="'.$key.'"]');

        if($val->count() == 1)
            return [$val->item(0)->getAttribute('maxOccurs') == 'unbounded' ? -1 : $val->item(0)->getAttribute('maxOccurs'), $val->item(0)->getAttribute('maxOccurs') == 'unbounded' ? -1 : $val->item(0)->getAttribute('maxOccurs')];
    
        throw new \Exception("could not harvest min/max occurance for {$prefix} - {$parent} - {$key}");

    }
    private function getElement(string $name)
    {
        $elements = $this->document->getElementsByTagName("element");
        foreach($elements as $element)
        {
            if($element->getAttribute("ref") == $name){
                return $element;
            }
        }
    }

    private function getXpathElements($dom_document, $tagName)
    {

        $xpath = new \DOMXPath($dom_document);

        // Define the tag name you want to search for
        // $tagName = "ccts:ObjectClass";

        // Define the XPath query to select elements with the specified tag name
        $query = "//{$tagName}";

        // Execute the XPath query
        $elements = $xpath->query($query);

        return $elements;
    }

    /**
     * Here all logic happens
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $this->tt();
        return self::SUCCESS;

        $this->document = new \DomDocument();
        $this->document->load('src/FACT1/common/Validation-Invoice_v1.0.8.sch');

        $this->extractGlobals()
             ->extractRules()
             ->createSet()
             ->write();
     
        return self::SUCCESS;

    }

    private function extractRules(): self
    {

        foreach($this->document->getElementsByTagName("rule") as $rule) {


            $data = [];

            $data['name'] = $this->cleanTags($rule->getAttribute("context"));
            $data['flag'] =  $this->cleanTags($rule->getAttribute("flag"));

            $assertion = $rule->getElementsByTagName("assert");
            
            $assert_rule = [];

            foreach($assertion as $key => $assert)
            {

                $assert_rule[] = [    
                'rule' =>  $this->cleanRuleTags($assert->getAttribute("test")),
                'rule_flag' =>  $this->cleanTags($assert->getAttribute("flag")),
                'rule_id' =>  $this->cleanTags($assert->getAttribute("id")),
                'description' =>  $this->cleanTags($assert->textContent),
                ];
                
            }

            $data['rules'] = $assert_rule;
            $this->rules[] = $data;

        }

        return $this;

    }

    private function extractGlobals(): self
    {
        
        foreach($this->document->getElementsByTagName("let") as $key => $let) {

            match($let->getAttribute("name"))
            {
                "RO-MAJOR-MINOR-PATCH-VERSION" => $this->RO_MAJOR_MINOR_PATCH_VERSION = $let->getAttribute("value"),
                "RO-CIUS-ID" => $this->RO_CIUS_ID = str_replace(["concat(",",",'$RO-MAJOR-MINOR-PATCH-VERSION)'], "", $let->getAttribute("value")).$this->RO_MAJOR_MINOR_PATCH_VERSION,
                "RO-EMAIL-REGEX" => $this->RO_EMAIL_REGEX = $let->getAttribute("value"),
                "RO-TELEPHONE-REGEX" => $this->RO_TELEPHONE_REGEX = $let->getAttribute("value"),
                "ISO-3166-RO-CODES" => $this->ISO_3166_RO_CODES = explode(",", str_replace(["(",")"],"", $let->getAttribute("value"))),
                "SECTOR-RO-CODES" => $this->SECTOR_RO_CODES = explode(",", str_replace(["(",")"],"", $let->getAttribute("value"))),
            };

        }

        return $this;

    }

    private function createSet(): self
    {


        return $this;

    }
    private function write(): void
    {

        $elementsString = json_encode($this->rules, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/rules_elements.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

    }

    private function buildValidation(array $rule): array
    {
        $name = $this->harvestName($rule['rule']);

        return [
            'name' => $name,
            'base_type' => $base_type,
            'resource' => $type_list,
            'length' => $length,
            'fraction_digits' => $fraction_digits,
            'total_digits' => $total_digits,
            'max_exclusive' => $max_exclusive,
            'min_exclusive' => $min_exclusive,
            'max_inclusive' => $max_inclusive,
            'min_inclusive' => $min_inclusive,
            'max_length' => $max_length,
            'min_length' => $min_length,
            'pattern' => $pattern,
            'whitespace' => $whitespace,
        ];

    }

    private function harvestName(string $rule): string
    {
        
        if (preg_match('/\b[A-Z][a-z]*\b/', $rule, $matches)) {
            return $matches[0];
        }

        // return explode(" ", str_replace("(", "", $rule));
    }

    private function extractRule(string $string): array 
    {
        $data =[];


        return $data;
    }
    
    private function cleanRuleTags(string $string): string
    {
        return str_replace(["self::","cbc:","cac:"],"", $string);
    }
    private function cleanTags(string $string): string
    {
        return str_replace(["//","self::","(",")","concat(",",",'$RO-MAJOR-MINOR-PATCH-VERSION)',"cbc:","cac:","/ubl:", "/cn:"], "", $string);
    }

}
