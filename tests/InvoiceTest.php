<?php

namespace CleverIt\UBL\Invoice\Tests;

use Greenter\Ubl\UblValidator;
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    private $invoice;

    public function setUp(): void{
        $xmlService = new \Sabre\Xml\Service();

        $xmlService->namespaceMap = [
            'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2' => '',
            'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2' => 'cbc',
            'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2' => 'cac'
        ];

        $invoice = new \CleverIt\UBL\Invoice\Invoice();
        $date = \DateTime::createFromFormat('d-m-Y', '12-12-1994');
        $invoice->setId('CIT1234');
        $invoice->setIssueDate($date);
        $invoice->setInvoiceTypeCode("SalesInvoice");
        $invoice->setCopyIndicator('false');

        $accountingSupplierParty = new \CleverIt\UBL\Invoice\Party();
        $accountingSupplierParty->setName('CleverIt');
        $supplierAddress = (new \CleverIt\UBL\Invoice\Address())
            ->setCityName("Eindhoven")
            ->setStreetName("Keizersgracht")
            ->setBuildingNumber("15")
            ->setPostalZone("5600 AC")
            ->setCountry((new \CleverIt\UBL\Invoice\Country())->setIdentificationCode("NL"));

        $accountingSupplierParty->setPostalAddress($supplierAddress);
        $accountingSupplierParty->setPhysicalLocation($supplierAddress);
        $accountingSupplierParty->setContact((new \CleverIt\UBL\Invoice\Contact())->setElectronicMail("info@cleverit.nl")->setTelephone("31402939003"));

        $invoice->setAccountingSupplierParty($accountingSupplierParty);
        $invoice->setAccountingCustomerParty($accountingSupplierParty);

        $taxtotal = (new \CleverIt\UBL\Invoice\TaxTotal())
            ->setTaxAmount(30)
            ->addTaxSubTotal((new \CleverIt\UBL\Invoice\TaxSubTotal())
                ->setTaxAmount(21)
                ->setTaxableAmount(100)
                ->setTaxCategory((new \CleverIt\UBL\Invoice\TaxCategory())
                    ->setId("H")
                    ->setName("NL, Hoog Tarief")
                    ->setPercent(21.00)
                    ->setTaxScheme((new \CleverIt\UBL\Invoice\TaxScheme())
                        ->setId('VAT'))))
            ->addTaxSubTotal((new \CleverIt\UBL\Invoice\TaxSubTotal())
                ->setTaxAmount(9)
                ->setTaxableAmount(100)
                ->setTaxCategory((new \CleverIt\UBL\Invoice\TaxCategory())
                    ->setId("X")
                    ->setName("NL, Laag Tarief")
                    ->setPercent(9.00)
                    ->setTaxScheme((new \CleverIt\UBL\Invoice\TaxScheme())
                        ->setId('VAT'))));

        $invoiceLine = (new \CleverIt\UBL\Invoice\InvoiceLine())
            ->setId(1)
            ->setInvoicedQuantity(1)
            ->setLineExtensionAmount(100)
            ->setTaxTotal($taxtotal)
            ->setItem((new \CleverIt\UBL\Invoice\Item())->setName("Test item")->setDescription("test item description")->setSellersItemIdentification("1ABCD"));

        $invoice->setInvoiceLines([$invoiceLine]);
        $invoice->setTaxTotal($taxtotal);
        $invoice->setLegalMonetaryTotal((new \CleverIt\UBL\Invoice\LegalMonetaryTotal())
            ->setLineExtensionAmount(100)
            ->setTaxExclusiveAmount(100)
            ->setPayableAmount(-1000)
            ->setAllowanceTotalAmount(50));

        $this->invoice = \CleverIt\UBL\Invoice\Generator::invoice($invoice, 'EUR');
        
        $service = new \Sabre\Xml\Service();
        // print_r($service->parse($this->invoice));
        // echo $this->invoice;

    }

    public function testExtendedAttributes()
    {

        $schema = 'http://docs.oasis-open.org/ubl/os-UBL-2.2/xsd/maindoc/UBL-Invoice-2.2.xsd';

        // Address country
        $country = (new \CleverIt\UBL\Invoice\Country())
            ->setIdentificationCode('BE');

        // Full address
        $address = (new \CleverIt\UBL\Invoice\Address())
            ->setStreetName('Korenmarkt')
            ->setBuildingNumber(1)
            ->setCityName('Gent')
            ->setPostalZone('9000')
            ->setCountry($country);

        // Supplier company node
        $supplierCompany = (new \CleverIt\UBL\Invoice\Party())
            ->setName('Supplier Company Name')
            ->setPhysicalLocation($address)
            ->setPostalAddress($address);

        // Client company node
        $clientCompany = (new \CleverIt\UBL\Invoice\Party())
            ->setName('My client')
            ->setPostalAddress($address);

        $legalMonetaryTotal = (new \CleverIt\UBL\Invoice\LegalMonetaryTotal())
            ->setPayableAmount(10 + 2)
            ->setAllowanceTotalAmount(0);

        // Tax scheme
        $taxScheme = (new \CleverIt\UBL\Invoice\TaxScheme())
            ->setId(0);

        // Product
        $productItem = (new \CleverIt\UBL\Invoice\Item())
            ->setName('Product Name')
            ->setDescription('Product Description');

        // Price
        $price = (new \CleverIt\UBL\Invoice\Price())
            ->setBaseQuantity(1)
            ->setUnitCode(\CleverIt\UBL\Invoice\UnitCode::UNIT)
            ->setPriceAmount(10);

        // Invoice Line tax totals
        $lineTaxTotal = (new \CleverIt\UBL\Invoice\TaxTotal())
            ->setTaxAmount(2.1);

        // Invoice Line(s)
        $invoiceLine = (new \CleverIt\UBL\Invoice\InvoiceLine())
            ->setId(0)
            ->setItem($productItem)
            ->setPrice($price)
            ->setTaxTotal($lineTaxTotal)
            ->setInvoicedQuantity(1);

        $invoiceLines = [$invoiceLine];

        // Total Taxes
        $taxCategory = (new \CleverIt\UBL\Invoice\TaxCategory())
            ->setId(0)
            ->setName('VAT21%')
            ->setPercent(.21)
            ->setTaxScheme($taxScheme);

        $taxSubTotal = (new \CleverIt\UBL\Invoice\TaxSubTotal())
            ->setTaxableAmount(10)
            ->setTaxAmount(2.1)
            ->setTaxCategory($taxCategory);

        $taxTotal = (new \CleverIt\UBL\Invoice\TaxTotal())
            ->addTaxSubTotal($taxSubTotal)
            ->setTaxAmount(2.1);

        $contractDocumentReference = (new \CleverIt\UBL\Invoice\ContractDocumentReference())
            ->setId("123Test");

        $invoicePeriod = (new \CleverIt\UBL\Invoice\InvoicePeriod())
            ->setStartDate(new \DateTime('-31 days'))
            ->setEndDate(new \DateTime());

        // Invoice object
        $invoice = (new \CleverIt\UBL\Invoice\Invoice())
            ->setUBLVersionID('2.2')
            ->setId(1234)
            ->setCopyIndicator('false')
            ->setIssueDate(new \DateTime())
            ->setInvoiceTypeCode(\CleverIt\UBL\Invoice\Invoice::TYPE_INVOICE)
            ->setDueDate(new \DateTime())
            ->setAccountingSupplierParty($supplierCompany)
            ->setAccountingCustomerParty($clientCompany)
            ->setInvoiceLines($invoiceLines)
            ->setLegalMonetaryTotal($legalMonetaryTotal)
            ->setTaxTotal($taxTotal)
            ->setContractDocumentReference($contractDocumentReference)
            ->setBuyerReference("SomeReference")
            ->setInvoicePeriod($invoicePeriod);


        $ubl_invoice = \CleverIt\UBL\Invoice\Generator::invoice($invoice, 'EUR');
        echo $ubl_invoice;

        $dom = new \DOMDocument();
        $dom->loadXML($ubl_invoice);

        $result = false;

        libxml_use_internal_errors(true);

        try{
            $dom->schemaValidate($schema);

            echo '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
            $this->libxml_display_errors();

        }
        catch(\Exception $e){
            echo $e->getMessage();
        }

        $this->assertTrue($result);

    }

    private function libxml_display_errors()
    {
        $errors = libxml_get_errors();
        foreach ($errors as $error) {
            print $this->libxml_display_error($error);
        }
        libxml_clear_errors();
    }

    private function libxml_display_error($error)
    {
        $return = "<br/>\n";
        switch ($error->level) {
            case LIBXML_ERR_WARNING:
                $return .= "<b>Warning $error->code</b>: ";
                break;
            case LIBXML_ERR_ERROR:
                $return .= "<b>Error $error->code</b>: ";
                break;
            case LIBXML_ERR_FATAL:
                $return .= "<b>Fatal Error $error->code</b>: ";
                break;
        }
        $return .= trim($error->message);
        if ($error->file) {
            $return .=    " in <b>$error->file</b>";
        }
        $return .= " on line <b>$error->line</b>\n";

        return $return;
    }


    public function testFiltersUnsetProps()
    {

        $mutable_props = [
            'should_stay' => true,
            'should_go' => null
        ];

        $new_props = $this->array_filter_recursive($mutable_props);

        $this->assertArrayHasKey('should_stay',$new_props);
        $this->assertArrayNotHasKey('should_go', $new_props);

    }
    
    private function array_filter_recursive($input)
    {
        foreach ($input as &$value) {
            if (is_array($value)) {
                $value = $this->array_filter_recursive($value);
            }
        }
        return array_filter($input);
    }

    public function testNestedPropsAreUnset()
    {
        
        $mutable_props = [
            'should_stay' => true,
            'should_go' => [
                'another_level' => null,
            ]
        ];

        $new_props = $this->array_filter_recursive($mutable_props);

        $this->assertArrayHasKey('should_stay', $new_props);
        $this->assertArrayNotHasKey('should_go', $new_props);


    }

    public function testValidateSchema(){
        $validator = new UblValidator();
        $validator->isValid($this->invoice);

        echo $validator->getError();

        $this->assertTrue($validator->isValid($this->invoice));
    }
}
