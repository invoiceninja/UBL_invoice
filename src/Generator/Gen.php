<?php

namespace CleverIt\UBL\Invoice\Generator;

use CleverIt\UBL\Invoice\Command\Fat\Fat;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\PropertyGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;

class Gen
{

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

    public function init($class)
    {
        // echo print_r($class).PHP_EOL;

        $props = [];
        foreach($class['elements'] as $key => $element)
        {
            // echo print_r($element).PHP_EOL;

            $props[] = new PropertyGenerator(name: $element['name'], flags: PropertyGenerator::FLAG_PUBLIC, type: $element['name']);
        }

        echo (new ClassGenerator())
            ->setName($class['type'])
            ->setExtendedClass('Data')
            ->setDocblock(
                (new DocBlockGenerator())
                    ->setShortDescription('Sample generated class')
                    ->setLongDescription('This is a class generated with Laminas\Code\Generator.')
                    ->setTags([
                        new GenericTag('version', '$Rev:$'),
                        new GenericTag('license', 'New BSD'),
                    ])
            )
            ->addProperties($props)
        ->addConstants([
                new PropertyGenerator('bat', 'foobarbazbat', PropertyGenerator::FLAG_CONSTANT)
            ])
            ->generate();
    }
}