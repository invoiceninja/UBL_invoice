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

class ROEinvoiceTest extends TestCase
{

    public function setUp(): void{
    }

    public function testParseXsd()
    {

        $reader = new SchemaReader();
        $reader->addKnownNamespaceSchemaLocation(
        "https://docs.oasis-open.org/ubl/prd1-UBL-2.1/xsd/common/CommonBasicComponents-2",
        "common/UBL-CommonAggregateComponents-2.1.xsd");
        $reader->addKnownNamespaceSchemaLocation(
        "https://docs.oasis-open.org/ubl/prd1-UBL-2.1/xsd/common/CommonBasicComponents-2.xsd",
        "common/UBL-CommonBasicComponents-2.1.xsd"
        );
        $reader->addKnownNamespaceSchemaLocation(
        "https://docs.oasis-open.org/ubl/prd1-UBL-2.1/xsd/common/CommonExtensionComponents-2.xsd",
        "common/UBL-CommonExtensionComponents-2.1.xsd"
        );

        $schema = $reader->readFile("src/FACT1/UBL-Invoice-2.1.xsd");
        

        // foreach ($schema->getElements() as $element) {
        // }

        // $e = $schema->getElement("FatturaElettronica");
        // foreach ($schema->getGroups() as $group) {
        // }

                // echo "attr" . PHP_EOL;
        foreach ($schema->getAttributes() as $attr) {

            // echo $attr->getName().PHP_EOL;
        }

        // foreach ($schema->getAttributeGroups() as $attrGroup) {
        // }

        $r = [];

        foreach ($schema->getTypes() as $type) {
            echo $type->getName(). PHP_EOL;
        }

        $elements_array = [];

        foreach ($schema->getTypes() as $type) {

            $data = [];
            $data['type'] = $type->getName();

            $elements = [];

            if(method_exists($type, "getElements")) {
                foreach($type?->getElements() as $innerElement) {

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


        // echo print_r($elements_array);
        // echo json_encode($r);
    }
}