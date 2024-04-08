<?php

namespace CleverIt\UBL\Invoice\Tests\FatturaPA;

use CleverIt\UBL\Invoice\FatturaPA\common\CedentePrestatore;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiAnagrafici;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiTrasmissione;
use Generator;
use Sabre\Xml\Service;
use PHPUnit\Framework\TestCase;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronica;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaBody;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaHeader;
use CleverIt\UBL\Invoice\FatturaPA\common\IdFiscaleIVA;
use CleverIt\UBL\Invoice\FatturaPA\common\IdTrasmittente;

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

        $xmlService = new Service();

        $xml = $xmlService->write('p:FatturaElettronica', new FatturaElettronica($f));
        
        // echo $xml;

        $this->assertIsString($xml);
    }

    public function testInvoice()
    {
        $fatturaHeader = new FatturaElettronicaHeader();

        $datiTrasmissione = new DatiTrasmissione();
        $datiTrasmissione->setFormatoTrasmissione("FPR12");
        $datiTrasmissione->setCodiceDestinatario("0000000");
        $datiTrasmissione->setProgressivoInvio("0000000");

        $idPaese = new IdTrasmittente();
        $idPaese->setIdPaese("IT");
        $idPaese->setIdCodice("12345678901");

        $datiTrasmissione->setIdTrasmittente($idPaese);
        $fatturaHeader->setDatiTrasmissione($datiTrasmissione);

        $cedentePrestatore = new CedentePrestatore();

        $datiAnagrafici = new DatiAnagrafici();
        
        $idFiscaleIVA = new IdFiscaleIVA(IdPaese: "IT", IdCodice: "12345678901");
        $datiAnagrafici->setIdFiscaleIVA($idFiscaleIVA);
        
        $cedentePrestatore->setDatiAnagrafici($datiAnagrafici);
        
        $xmlService = new Service();

        $xml = $xmlService->write('p:FatturaElettronica', new FatturaElettronica($fatturaHeader));

        echo $xml;

        $this->assertIsString($xml);


    }
}
