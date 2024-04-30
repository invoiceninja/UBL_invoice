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

    public function testSchemaTronValidation()
    {
        
            //if i hack the xslt file and downgrade it to xslt (not xslt2) it parses fine!
            $schematron = new Schematron();
            $schematron->load('src/FACT1/common/Validation-Invoice_v1.0.8.sch');

            $document = new \DOMDocument();
            $document->load('tests/ROEinvoice/ro.xml');
            $result = $schematron->validate($document);

            echo print_r($result,1);

    }

    public function testParseXsd()
    {

        $reader = new SchemaReader();

        $reader->addKnownNamespaceSchemaLocation(
        "urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2",
        "src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd");
        $reader->addKnownNamespaceSchemaLocation(
        "urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2",
        "src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd"
        );
        $reader->addKnownNamespaceSchemaLocation(
        "urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2",
        "src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd"
        );

        $schema = $reader->readFile("src/FACT1/UBL-Invoice-2.1.xsd");
        $CommonAggregateComponents = $reader->readFile("src/FACT1/common/UBL-CommonAggregateComponents-2.1.xsd");
        $CommonBasicComponents = $reader->readFile("src/FACT1/common/UBL-CommonBasicComponents-2.1.xsd");
        $CommonExtensionComponents = $reader->readFile("src/FACT1/common/UBL-CommonExtensionComponents-2.1.xsd");

        $schema->addSchema($CommonAggregateComponents);
        $schema->addSchema($CommonBasicComponents);
        $schema->addSchema($CommonExtensionComponents);

        //         foreach ($schema->getElements() as $element) {
        // echo $element->getName().PHP_EOL;
        //         }
        // $e = $schema->getElement("InvoiceTypeCode");
        // echo var_dump($e);

        // foreach ($schema->getGroups() as $group) {
        // }

                // echo "attr" . PHP_EOL;
        // foreach ($schema->getAttributes() as $attr) {
            // echo $attr->getName().PHP_EOL;
        // }

        // foreach ($schema->getAttributeGroups() as $attrGroup) {
        // }

        $r = [];

        foreach ($schema->getTypes() as $type) {
            // echo $type->getName(). PHP_EOL;
        }

        $elements_array = [];

        foreach ($schema->getTypes() as $type) {

            $data = [];
            $data['type'] = $type->getName();

            // $schema2 = $type->getSchema();
            // foreach($schema2->getTypes() as $tt)
            // {
            //     echo $tt->getName().PHP_EOL;
            // }


            $elements = [];

            if(method_exists($type, "getElements")) {
                foreach($type?->getElements() as $innerElement) {

//                     echo print_r(get_class_methods($type)) . PHP_EOL;

// echo print_r($type->getExtension(), 1). PHP_EOL;

// echo print_r($type->getRestriction(), 1). PHP_EOL;

                    $elements[] = [
                        'name' => $innerElement->getName(),
                        'min' => $innerElement->getMin(),
                        'max' => $innerElement->getMax(),
                    ];

                    

                    // if($innerElement->getName() == 'InvoiceTypeCode') {
                    //     $innerElement->ge
                    // }
                }
            }

            $data['elements'] = $elements;

            $elements_array[] = $data;
        }


$x = $schema->getType('UBLExtensions');

echo "xx" . PHP_EOL;
echo $x;
echo isset($x);

        // echo print_r($elements_array);
        // echo json_encode($r);
    }
}