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
    name: 'stub:create',
    description: 'stub json files',
    hidden: false,
    aliases: ['stub:create']
)]
final class StubCommand extends Command
{
    private array $schemas = [
        "FatturaPA" => "src/FatturaPA/Schema_del_file_xml_FatturaPA_v1.2.2.xsd",
        // "FACT1_Credit" => "src/FACT1/UBL-CreditNote-2.1.xsd",
        // "FACT1_Invoice" => "https://docs.oasis-open.org/ubl/os-UBL-2.1/xsd/maindoc/UBL-Invoice-2.1.xsd",
    ];

    private array $stub_validation =
    [
       "name" => null,
       "base_type" => null,
       "resource" => null,
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

    private array $exclusions = [
        "FatturaPA" => [
            "FatturaElettronicaType",
            "FatturaElettronicaHeaderType",
            "FatturaElettronicaBodyType",
        ],
        // "FACT1_Credit" => [

        // ],
        // "FACT1_Invoice" => [

        // ],
    ];

    private \DomDocument $document;

    public $output;
    /**
     * In this method setup command, description, and its parameters
     */
    protected function configure()
    {
        // $this->setName('hash-password');
        // $this->setDescription('Hashes provided password with BCRYPT and prints to output.');
        // $this->addArgument('password', InputArgument::REQUIRED, 'Password to be hashed.');
    }

    /**
     * Here all logic happens
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        $progressBar = new ProgressBar($output, count($this->schemas));

        foreach($this->schemas as $key => $value){
            $this->output->writeln("Building => {$key}");
            $this->buildSchema($key, $value);
            $progressBar->advance();
        }

        $progressBar->finish();

        // return value is important when using CI, to fail the build when the command fails
        // in case of fail: "return self::FAILURE;"
        return self::SUCCESS;
    }

    private function buildSchema(string $name, string $path)
    {

        $reader = new SchemaReader();
        $schema = $reader->readFile($path);
        $this->document = new \DomDocument();
        $this->document->load($path);

        $validation = [];

        foreach ($schema->getTypes() as $type) 
        {

            $enumeration = $type->getRestriction()?->getChecksByType(RestrictionType::ENUMERATION);
            $length = $type->getRestriction()?->getChecksByType(RestrictionType::LENGTH)[0]['value'] ?? null;
            $fraction_digits = $type->getRestriction()?->getChecksByType(RestrictionType::FRACTION_DIGITS)[0]['value'] ?? null;
            $total_digits = $type->getRestriction()?->getChecksByType(RestrictionType::TOTAL_DIGITS)[0]['value'] ?? null;
            $max_exclusive = $type->getRestriction()?->getChecksByType(RestrictionType::MAX_EXCLUSIVE)[0]['value'] ?? null;
            $min_exclusive = $type->getRestriction()?->getChecksByType(RestrictionType::MIN_EXCLUSIVE)[0]['value'] ?? null;
            $max_inclusive = $type->getRestriction()?->getChecksByType(RestrictionType::MAX_INCLUSIVE)[0]['value'] ?? null;
            $min_inclusive = $type->getRestriction()?->getChecksByType(RestrictionType::MIN_INCLUSIVE)[0]['value'] ?? null;
            $max_length = $type->getRestriction()?->getChecksByType(RestrictionType::MAX_LENGTH)[0]['value'] ?? null;
            $min_length = $type->getRestriction()?->getChecksByType(RestrictionType::MIN_LENGTH)[0]['value'] ?? null;
            $pattern = $type->getRestriction()?->getChecksByType(RestrictionType::PATTERN)[0]['value'] ?? null;
            $whitespace = $type->getRestriction()?->getChecksByType(RestrictionType::WHITE_SPACE)[0]['value'] ?? null;

            $type_list = [];

            if(is_iterable($enumeration))
            {
                foreach($enumeration as $enum) {
                    $type_list[$enum['value']] = $enum['doc'];
                }
            }

            $validation[] = [
                'name' => $type->getName(),
                'base_type' => $type->getRestriction()?->getBase()?->getName(),
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


        $elements_array = [];

        foreach ($schema->getTypes() as $type) 
        {

            $data = [];
            $data['type'] = $type->getName();

            $elements = [];

            if(method_exists($type, "getElements")) {
                foreach($type?->getElements() as $innerElement) {
                    
                $elements[] = array_merge($this->findType($innerElement->getName(), $validation),
                    [
                        'name' => $innerElement->getName(),
                        'minOccurs' => $innerElement->getMin(),
                        'maxOccurs' => $innerElement->getMax(),
                    ]);

                }
            }

            $data['elements'] = $elements;

            $elements_array[] = $data;
        }
        
        foreach($elements_array as $key => $element)
        {
            foreach($element['elements'] as $key2 => $node)
            {
                if(is_string($node['base_type'] ?? false))
                    continue;                    

                if(in_array($node['name']."Type", array_column($elements_array,'type')) || $node['name'] == 'Signature') {
                    $elements_array[$key]['elements'][$key2]['base_type'] = $node['name']."Type";
                    continue;
                }

                if(strlen($node['name']) == 0)
                    continue;

                try {
                    echo $node['name']."!".PHP_EOL;
                    $elements_array[$key]['elements'][$key2] = array_merge($this->getBaseType($node['name']), $elements_array[$key]['elements'][$key2]);
                }
                catch(\Exception $e){
                    $elements_array[$key]['elements'][$key2]['base_type'] = $node['name']."Type";
                }
                

            }

        }

        $this->output->writeln([" >> Writing {$name}_validation to file"]);
        $validationString = json_encode($validation, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/{$name}_validation.json", 'w');
        fwrite($fp, $validationString);
        fclose($fp);

        $this->output->writeln([" >> Writing {$name}_exclusions to file"]);
        $exclusionString = json_encode($this->exclusions[$name], JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/{$name}_exclusions.json", 'w');
        fwrite($fp, $exclusionString);
        fclose($fp);

        $this->output->writeln([" >> Writing {$name}_elements to file",'============',]);
        $elementsString = json_encode($elements_array, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/{$name}_elements.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);


    }

    // private function typeExists($name, $elements_array): bool
    // {
    //     foreach($elements_array as $array)
    //     {
    //         if($array['type'] == "{$name}Type")
    //             return true;
    //     }

    //     return false;
    // }

    private function findType(string $name, array $validation): array
    {
        foreach($validation as $val){

            if($name."Type" == $val['name'] ?? '') {
                return $val;
            }

        }
        
        return $this->stub_validation;

    }


    private function getBaseType(string $type)
    {
        echo $type."2".PHP_EOL;
        
        if(in_array($type, ['xs:date', 'xs:dateTime', "xs:base64Binary"]))
            return ['base_type' => str_replace("xs:", "", $type)];

            echo $type."3".PHP_EOL;


            $xpath = new \DOMXPath($this->document);
            $xtype = $xpath->query('//xs:element [@name="'.$type.'"]');

            $sub_type = $xtype->item(0)->getAttribute('type');

            echo $sub_type.PHP_EOL;

            if(in_array($sub_type, ['xs:date', 'xs:dateTime', "xs:base64Binary"]))
                return ['base_type' => str_replace("xs:","", $sub_type)];

            $restriction = $xpath->query('//xs:simpleType [@name="'.$sub_type.'"]//xs:restriction');

            if($restriction->count() == 1){
                return $this->extractRestriction($restriction->item(0));
            }

            if($restriction->count() == 0) {
                //must be complex!
                $restriction = $xpath->query('//xs:complexType [@name="'.$sub_type.'"]//xs:sequence//xs:element');

                $type = $restriction->item(0)->getAttribute('type');

                return ['base_type' => $type];

            }


            $restriction_type = $restriction->item(0)->getAttribute('base');

            $pattern = $xpath->query('//xs:simpleType [@name="'.$sub_type.'"]//xs:restriction//xs:pattern');

            $p = $pattern->item(0)->getAttribute('value');

            return ['base_type' => $restriction_type, 'pattern' => $p];

        
    }

    private function extractRestriction(\DomElement $restriction): array
    {
        match($restriction->getAttribute(('base')))
        {
            'xs:string' => $value = $this->harvestStringType($restriction),
            default => $value = [],
        };

        return $value;
    }

    private function harvestStringType(\DomElement $element): array
    {
        $data = [];

        $data['base_type'] = 'string';

        foreach($element->childNodes as $childElement){
            $data[str_replace("xs:", "", $childElement->nodeName)] = $childElement->nodeValue;
        }
        

        return $data;
    }

}