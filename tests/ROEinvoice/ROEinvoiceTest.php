<?php

namespace CleverIt\UBL\Invoice\Tests\ROEinvoice;

use Generator;
use Sabre\Xml\Service;
use PHPUnit\Framework\TestCase;
use CleverIt\UBL\Invoice\FatturaPA\common\Sede;
use CleverIt\UBL\Invoice\FatturaPA\common\Anagrafica;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiGenerali;
use CleverIt\UBL\Invoice\FatturaPA\common\IdFiscaleIVA;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiContratto;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiRicezione;
use CleverIt\UBL\Invoice\FatturaPA\common\RegimeFiscale;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiAnagrafici;
use CleverIt\UBL\Invoice\FatturaPA\common\IdTrasmittente;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiTrasmissione;
use CleverIt\UBL\Invoice\FatturaPA\common\CedentePrestatore;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiOrdineAcquisto;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronica;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiGeneraliDocumento;
use CleverIt\UBL\Invoice\FatturaPA\common\CessionarioCommittente;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiAnagraficiVettore;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiBeniServizi;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiPagamento;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiRiepilogo;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiTrasporto;
use CleverIt\UBL\Invoice\FatturaPA\common\DettaglioLinee;
use CleverIt\UBL\Invoice\FatturaPA\common\DettaglioPagamento;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaBody;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaHeader;
use CleverIt\UBL\Invoice\Schema;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\RestrictionType;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexType;
use GoetasWebservices\XML\XSDReader\Schema\Type\SimpleType;
use GoetasWebservices\XML\XSDReader\SchemaReader;
// use Genkgo\Xsl\XsltProcessor;
// use Genkgo\Xsl\Cache\NullCache;

use Milo\Schematron;

class ROEinvoiceTest extends TestCase
{

    public function setUp(): void{
        $this->markTestSkipped();
    }


function tExists($xpathExpression, $xmlDocument)
{
    return $this->evaluateXPath($xpathExpression, $xmlDocument) !== false;
}

// Function to check string length
function tStringLength($xpathExpression, $maxLength, $xmlDocument)
{
    $length = $this->evaluateXPath("string-length($xpathExpression)", $xmlDocument);
    return $length <= $maxLength;
}

// Function to check pattern matching
function tPatternMatch($xpathExpression, $pattern, $xmlDocument)
{
    $value = $this->evaluateXPath($xpathExpression, $xmlDocument);
    return preg_match($pattern, $value);
}

function evaluateXPath($xpathExpression, $xmlDocument)
{
    $xpath = new \DOMXPath($xmlDocument);
    return $xpath->evaluate($xpathExpression);
}

    public function tXpathValidation()
    {
        
        // Load the XML document you want to validate
        $xmlDocument = new \DOMDocument();
        $xmlDocument->load('tests/ROEinvoice/ro.xml');

        // Example usage
        $xpathExpression = "normalize-space(cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:PostalZone)";
        $maxLength = 20;
        $pattern = '/^[0-9]{5}$/';

        if (!$this->tExists($xpathExpression, $xmlDocument)) {
            echo "Element does not exist\n";
        }

        if (!$this->tStringLength($xpathExpression, $maxLength, $xmlDocument)) {
            echo "String length exceeds $maxLength characters\n";
        }

        if (!$this->tPatternMatch($xpathExpression, $pattern, $xmlDocument)) {
            echo "Pattern does not match\n";
        }

    }

    public function testROEinvoice()
    {
    
        $this->assertTrue(true);
    }

}