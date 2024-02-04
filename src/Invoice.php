<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 13-10-2016
 * Time: 16:29
 */

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class Invoice extends BaseInvoice implements XmlSerializable
{
    private $UBLVersionID = '2.1';

    /**
     * @var string
     * 
     * 'urn:cen.eu:en16931:2017#compliant#urn:efactura.mfinante.ro:CIUS-RO:1.0.1' for RO
     */
    private $customizationId = 'OIOUBL-2.01';

    private $copyIndicator = null;
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $issueDate;
    /**
     * @var \DateTime
     */
    private $dueDate;
    /**
     * @var string
     */

    private $invoiceTypeCode;

    /**
     * @var AdditionalDocumentReference
     */
    private $additionalDocumentReference;

    /**
     * @var Party
     */
    private $accountingSupplierParty;
    /**
     * @var Party
     */
    private $accountingCustomerParty;
    /**
     * @var TaxTotal | TaxTotal[]
     */
    private $taxTotal;
    /**
     * @var LegalMonetaryTotal
     */
    private $legalMonetaryTotal;

    /**
     * @var PaymentMeans
     */
    private $paymentMeans;

    /**
     * @var InvoiceLine[]
     */
    private $invoiceLines;
    /**
     * @var AllowanceCharge[]
     */
    private $allowanceCharges;
    /**
     * @var string
     */
    private $documentCurrencyCode;
    /**
     * @var string
     */
    private $taxCurrencyCode;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Invoice
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null|boolean
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * @param string $copyIndicator 'true' | 'false' | null
     * @return Invoice
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate ? $this->issueDate->format('Y-m-d') : null;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate ? $this->dueDate->format('Y-m-d') : null;
    }

    /**
     * @param \DateTime $issueDate
     * @return Invoice
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * @param \DateTime $dueDate
     * @return Invoice
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceTypeCode()
    {
        return $this->invoiceTypeCode;
    }

    /**
     * @param string $invoiceTypeCode
     * @return Invoice
     */
    public function setInvoiceTypeCode($invoiceTypeCode)
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentCurrencyCode()
    {
        return $this->documentCurrencyCode;
    }

    /**
     * @param string $documentCurrencyCode
     * @return Invoice
     */
    public function setDocumentCurrencyCode($documentCurrencyCode)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxCurrencyCode()
    {
        return $this->taxCurrencyCode;
    }

    /**
     * @param string $documentCurrencyCode
     * @return Invoice
     */
    public function setTaxCurrencyCode($taxCurrencyCode)
    {
        $this->taxCurrencyCode = $taxCurrencyCode;
        return $this;
    }

    /**
     * @return AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * @param AdditionalDocumentReference $additionalDocumentReference
     * @return Invoice
     */
    public function setAdditionalDocumentReference($additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * @return Party
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * @param Party $accountingSupplierParty
     * @return Invoice
     */
    public function setAccountingSupplierParty($accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * @return PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param PaymentMeans $paymentMeans
     * @return Invoice
     */
    public function setPaymentMeans($paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * @return Party
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * @param Party $accountingCustomerParty
     * @return Invoice
     */
    public function setAccountingCustomerParty($accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return Invoice
     */
    public function setTaxTotal($taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * @return LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * @param LegalMonetaryTotal $legalMonetaryTotal
     * @return Invoice
     */
    public function setLegalMonetaryTotal($legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * @return InvoiceLine[]
     */
    public function getInvoiceLines()
    {
        return $this->invoiceLines;
    }

    /**
     * @param InvoiceLine[] $invoiceLines
     * @return Invoice
     */
    public function setInvoiceLines($invoiceLines)
    {
        $this->invoiceLines = $invoiceLines;
        return $this;
    }

    /**
     * @return AllowanceCharge[]
     */
    public function getAllowanceCharges()
    {
        return $this->allowanceCharges;
    }

    /**
     * @param AllowanceCharge[] $allowanceCharges
     * @return Invoice
     */
    public function setAllowanceCharges($allowanceCharges)
    {
        $this->allowanceCharges = $allowanceCharges;
        return $this;
    }

    /**
     * setCustomizationID
     *
     * @param  string $customizationId
     * @return self
     */
    public function setCustomizationID(string $customizationId): self
    {
        $this->customizationId = $customizationId;

        return $this;
    }

    /**
     * getCustomizationID
     *
     * @return ?string
     */
    public function getCustomizationID()
    {
        return $this->customizationId;
    }

    public function validate()
    {
        if ($this->id === null) {
            throw new \InvalidArgumentException('Missing invoice id');
        }

        if ($this->id === null) {
            throw new \InvalidArgumentException('Missing invoice id');
        }

        if (!$this->issueDate instanceof \DateTime) {
            throw new \InvalidArgumentException('Invalid invoice issueDate');
        }


        if ($this->invoiceTypeCode === null) {
            throw new \InvalidArgumentException('Missing invoice invoiceTypeCode');
        }

        if ($this->accountingSupplierParty === null) {
            throw new \InvalidArgumentException('Missing invoice accountingSupplierParty');
        }

        if ($this->accountingCustomerParty === null) {
            throw new \InvalidArgumentException('Missing invoice accountingCustomerParty');
        }

        if ($this->invoiceLines === null) {
            throw new \InvalidArgumentException('Missing invoice lines');
        }

        if ($this->legalMonetaryTotal === null) {
            throw new \InvalidArgumentException('Missing invoice LegalMonetaryTotal');
        }
        
    }

    public function xmlSerialize(Writer $writer): void
    {
        $this->validate();

        $data = [
            Schema::CBC . 'UBLVersionID' => $this->UBLVersionID,
            Schema::CBC . 'CustomizationID' => $this->getCustomizationID(),
            Schema::CBC . 'ID' => $this->id,
            Schema::CBC . 'CopyIndicator' => $this->getCopyIndicator(),
            Schema::CBC . 'IssueDate' => $this->getIssueDate(),
            Schema::CBC . 'DueDate' => $this->getDueDate(),
            Schema::CBC . 'InvoiceTypeCode' => $this->invoiceTypeCode,
            Schema::CBC . 'DocumentCurrencyCode' => $this->documentCurrencyCode,
            Schema::CBC . 'TaxCurrencyCode' => $this->taxCurrencyCode,
            Schema::CAC . 'AccountingSupplierParty' => [Schema::CAC . "Party" => $this->accountingSupplierParty],
            Schema::CAC . 'AccountingCustomerParty' => [Schema::CAC . "Party" => $this->accountingCustomerParty],
            Schema::CAC . 'PaymentMeans' => $this->paymentMeans,
            Schema::CAC . 'AdditionalDocumentReference' => $this->additionalDocumentReference,
            Schema::CAC . 'TaxTotal' => $this->taxTotal,
            Schema::CAC . 'LegalMonetaryTotal' => $this->legalMonetaryTotal,
        ];

        foreach ($this->allowanceCharges as $invoiceLine) 
            $data[] = [Schema::CAC . 'AllowanceCharge' => $invoiceLine];
    
        foreach ($this->invoiceLines as $invoiceLine) 
            $data[] = [Schema::CAC . 'InvoiceLine' => $invoiceLine];

        $this->setProps($data);

        $writer->write($this->getProps());

    }



}
