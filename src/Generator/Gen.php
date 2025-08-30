<?php

namespace CleverIt\UBL\Invoice\Generator;

use CleverIt\UBL\Invoice\Command\Fat\Fat;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\PropertyGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\TypeGenerator;

class Gen
{
    public const LINE_FEED = "\n";

    public function __construct()
    {
        
    }

    public function build()
    {
        $fat = new Fat();
        $fat->init();

        $final = $fat->final;

        foreach($final as $value)
        {
            $this->init($value);
        }
    }

    public function init($_class)
    {
        // echo print_r($class).PHP_EOL;

        $props = [];

        
        $class = new ClassGenerator();
        $class->setName($_class['type'])->setExtendedClass('Data');

        foreach($_class['elements'] as $key => $element)
        {
            // // $type = new TypeGenerator($element['name']);
            $type = TypeGenerator::fromTypeString($element['name']."|Optional");
            
            // // echo print_r($element).PHP_EOL;
            // $prop = new PropertyGenerator(name: $element['name'], flags: PropertyGenerator::FLAG_PUBLIC, type: $type);
            // // $prop->setData
            // $props[] = $prop;

            
            $property = new PropertyGenerator();
            $property->setName($element['name']);
            $property->setVisibility(PropertyGenerator::VISIBILITY_PUBLIC);
            $property->setType($type); 
            $property->omitDefaultValue(true);
            
            $class->addPropertyFromGenerator($property);

            $class->setDocblock(
                (new DocBlockGenerator())
                    ->setShortDescription('Sample generated class')
            );

            $class->setNamespaceName("FatturaPA");

        }

        $class_string = "<?php " . self::LINE_FEED.self::LINE_FEED;
        $class_string .= $class->generate();

        $fp = fopen("./stubs/Classes/{$_class['type']}.php", 'w');
        fwrite($fp, $class_string);
        fclose($fp);

        // echo (new ClassGenerator())
        //     ->setName($class['type'])
        //     ->setExtendedClass('Data')
        //     
        //     ->addProperties($props)
        // ->addConstants([
        //         new PropertyGenerator('bat', 'foobarbazbat', PropertyGenerator::FLAG_CONSTANT)
        //     ])
        //     ->generate();
    }
}