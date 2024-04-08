<?php

namespace CleverIt\UBL\Invoice\Tests\FatturaPA;

use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaBody;
use PHPUnit\Framework\TestCase;

class FatturaTest extends TestCase
{

    public function setUp(): void{
   
    }

    public function testClassIterator()
    {

        $f = new FatturaElettronicaBody();
        $f->setDatiGenerali("2024-01-01");

        foreach ($f as $property => $value)  
        {
            if($property == "DatiGenerali")
                $this->assertEquals($value, "2024-01-01");
        }

        $this->assertEquals($f->getDatiGenerali(), "2024-01-01");

    }

}