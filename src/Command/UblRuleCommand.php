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

    private array $rules = [];
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

        $this->document = new \DomDocument();
        $this->document->load('src/FACT1/common/Validation-Invoice_v1.0.8.sch');

        $this->extractGlobals()
             ->extractRules()
             ->write();
     
        return self::SUCCESS;

    }

    private function extractRules(): self
    {

        foreach($this->document->getElementsByTagName("rule") as $rule) {


            $data = [];

            $data['name'] = str_replace(["cbc:","cac:"],"", $rule->getAttribute("context")) . PHP_EOL;
            $data['flag'] =  $rule->getAttribute("flag"). PHP_EOL;

            $assertion = $rule->getElementsByTagName("assert");

            foreach($assertion as $key  =>$assert)
            {

                $data[$key ]['rule'] =  str_replace(["cbc:","cac:"],"",$assert->getAttribute("test"));
                $data[$key ]['rule_flag'] =  str_replace(["cbc:","cac:"],"",$assert->getAttribute("flag"));
                $data[$key ]['rule_id'] =  str_replace(["cbc:","cac:"],"",$assert->getAttribute("id"));
                $data[$key ]['description'] =  str_replace(["cbc:","cac:"],"",$assert->textContent);

                $this->rules[] = $data;
            }

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

    private function write(): void
    {

        $elementsString = json_encode($this->rules, JSON_PRETTY_PRINT);
        $fp = fopen("./stubs/rules_elements.json", 'w');
        fwrite($fp, $elementsString);
        fclose($fp);

    }

}
