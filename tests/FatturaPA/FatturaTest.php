<?php

namespace CleverIt\UBL\Invoice\Tests\FatturaPA;

use Generator;
use Sabre\Xml\Service;
use PHPUnit\Framework\TestCase;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaBody;

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

    public function testXmlBuild()
    {
        
        $f = new FatturaElettronicaBody();
        $f->setDatiGenerali("2024-01-01");

        $root_element = 'p:FatturaElettronica';

        $xmlService = new Service();

        $xmlService->namespaceMap = [
            'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2' => 'p',
            //'{versione}:FPA12'=> '',
            //'versione' => 'FPA12',
            //'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            //'xmlns:p' => 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2',
            //'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            //'xsi:schemaLocation' => 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd'
        ];

        
        $xml = $xmlService->write($root_element, $f);
   
        echo $xml;

        $this->assertIsString($xml);
    }

}

//<p:FatturaElettronica versione="FPA12" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" 
//xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" 
//xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
//xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd">
 // <FatturaElettronicaHeader>

