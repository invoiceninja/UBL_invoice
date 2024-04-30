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
        "FACT1_Credit" => "src/FACT1/UBL-CreditNote-2.1.xsd",
        "FACT1_Invoice" => "src/FACT1/UBL-Invoice-2.1.xsd",
    ];

    private array $exclusions = [
        "FatturaPA" => [
            "FatturaElettronicaType",
            "FatturaElettronicaHeaderType",
            "FatturaElettronicaBodyType",
        ],
        "FACT1_Credit" => [

        ],
        "FACT1_Invoice" => [

        ],
    ];

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

        if($name == 'FACT1_Invoice'){

$reader = new SchemaReader();
$schema = $reader->readFile($path);


$reader->addKnownNamespaceSchemaLocation(
    "urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2",
    "src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd"
);
$reader->addKnownNamespaceSchemaLocation(
    "urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2",
    "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd"
);
$reader->addKnownNamespaceSchemaLocation(
    "urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2",
    "src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd"
);

$CommonAggregateComponents = $reader->readFile("src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd");
$CommonBasicComponents = $reader->readFile("src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd");
$CommonExtensionComponents = $reader->readFile("src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd");

$schema->addSchema($CommonAggregateComponents);
$schema->addSchema($CommonBasicComponents);
$schema->addSchema($CommonExtensionComponents);

        }
        
else {
        $reader = new SchemaReader();
        $schema = $reader->readFile($path);
}        $validation = [];

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

                    // $this->output->writeln([$innerElement->getName()]);
                    
                    $elements[] = [
                        'name' => $innerElement->getName(),
                        'min' => $innerElement->getMin(),
                        'max' => $innerElement->getMax(),
                    ];

                }
            }

            $data['elements'] = $elements;

            $elements_array[] = $data;
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
}