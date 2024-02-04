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
    
    const TYPE_INVOICE = 380;
    const TYPE_CREDIT_NOTE = 381;
    const TYPE_DEBIT_NOTE = 383;
    const TYPE_CORRECTED_INVOICE = 384;
    const TYPE_ADVANCE_INVOICE = 386;
    const TYPE_SELF_BILLING_INVOICE = 389;

    private $UBLVersionID = '2.1';

    /**
     * 'urn:cen.eu:en16931:2017#compliant#urn:efactura.mfinante.ro:CIUS-RO:1.0.1' for RO
     */
    private $customizationId = 'OIOUBL-2.01';

    protected $invoiceTypeCode = Invoice::TYPE_INVOICE;
    private $copyIndicator = null;
    private $id;
    private $profileID;
    private $issueDate;
    private $dueDate;
    private $additionalDocumentReference;
    private $accountingSupplierParty;
    private $accountingCustomerParty;
    private $taxTotal;
    private $legalMonetaryTotal;
    private $paymentMeans;
    protected $invoiceLines;
    private $allowanceCharges;
    private $documentCurrencyCode;
    private $taxCurrencyCode;
    private $note;
    private $taxPointDate;
    private $paymentTerms;
    private $payeeParty;
    private $supplierAssignedAccountID;
    private $additionalDocumentReferences = [];
    private $buyerReference;
    private $accountingCostCode;
    private $invoicePeriod;
    private $delivery;
    private $orderReference;
    private $contractDocumentReference;

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
        $data = [];

        foreach ($this->allowanceCharges ?? [] as $invoiceLine) {
            $data[] = [Schema::CAC . 'AllowanceCharge' => $invoiceLine];
        }

        return $this->allowanceCharges ? $data : null;
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


    /**
     * Get the value of contractDocumentReference
     */ 
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Set the value of contractDocumentReference
     *
     * @return  self
     */ 
    public function setContractDocumentReference($contractDocumentReference)
    {
        $this->contractDocumentReference = $contractDocumentReference;

        return $this;
    }

    /**
     * Get the value of orderReference
     */ 
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Set the value of orderReference
     *
     * @return  self
     */ 
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * Get the value of delivery
     */ 
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set the value of delivery
     *
     * @return  self
     */ 
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get the value of invoicePeriod
     */ 
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Set the value of invoicePeriod
     *
     * @return  self
     */ 
    public function setInvoicePeriod($invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;

        return $this;
    }

    /**
     * Get the value of accountingCostCode
     */ 
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Set the value of accountingCostCode
     *
     * @return  self
     */ 
    public function setAccountingCostCode($accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;

        return $this;
    }

    /**
     * Get the value of buyerReference
     */ 
    public function getBuyerReference()
    {
        return $this->buyerReference;
    }

    /**
     * Set the value of buyerReference
     *
     * @return  self
     */ 
    public function setBuyerReference($buyerReference)
    {
        $this->buyerReference = $buyerReference;

        return $this;
    }

    /**
     * Get the value of additionalDocumentReferences
     */ 
    public function getAdditionalDocumentReferences()
    {
                
        $data = [];

        foreach ($this->additionalDocumentReferences ?? [] as $additionalDocumentReference) {
            $data[] = [Schema::CAC . 'AdditionalDocumentReference' => $additionalDocumentReference];
        }

        return $this->additionalDocumentReferences ? $data : null;

    }

    /**
     * Set the value of additionalDocumentReferences
     *
     * @return  self
     */ 
    public function setAdditionalDocumentReferences($additionalDocumentReferences)
    {
        $this->additionalDocumentReferences = $additionalDocumentReferences;

        return $this;
    }

    /**
     * Get the value of supplierAssignedAccountID
     */ 
    public function getSupplierAssignedAccountID()
    {
        return $this->supplierAssignedAccountID;
    }

    /**
     * Set the value of supplierAssignedAccountID
     *
     * @return  self
     */ 
    public function setSupplierAssignedAccountID($supplierAssignedAccountID)
    {
        $this->supplierAssignedAccountID = $supplierAssignedAccountID;

        return $this;
    }

    /**
     * Get the value of payeeParty
     */ 
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Set the value of payeeParty
     *
     * @return  self
     */ 
    public function setPayeeParty($payeeParty)
    {
        $this->payeeParty = $payeeParty;

        return $this;
    }

    /**
     * Get the value of paymentTerms
     */ 
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Set the value of paymentTerms
     *
     * @return  self
     */ 
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;

        return $this;
    }

    /**
     * Get the value of taxPointDate
     */ 
    public function getTaxPointDate()
    {
        return $this->taxPointDate ? $this->taxPointDate->format('Y-m-d') : null;
    }

    /**
     * Set the value of taxPointDate
     *
     * @return  self
     */ 
    public function setTaxPointDate($taxPointDate)
    {
        $this->taxPointDate = $taxPointDate;

        return $this;
    }

    /**
     * Get the value of note
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */ 
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of UBLVersionID
     */ 
    public function getUBLVersionID()
    {
        return $this->UBLVersionID;
    }

    /**
     * Set the value of UBLVersionID
     *
     * @return  self
     */ 
    public function setUBLVersionID($UBLVersionID)
    {
        $this->UBLVersionID = $UBLVersionID;

        return $this;
    }


    /**
     * Get the value of profileID
     */ 
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Set the value of profileID
     *
     * @return  self
     */ 
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;

        return $this;
    }

    public function validate()
    {
     
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
            Schema::CBC . 'ProfileID' => $this->profileID,
            Schema::CBC . 'ID' => $this->id,
            Schema::CBC . 'CopyIndicator' => $this->getCopyIndicator(),
            Schema::CBC . 'IssueDate' => $this->getIssueDate(),
            Schema::CBC . 'DueDate' => $this->getDueDate(),
            Schema::CBC . 'InvoiceTypeCode' => $this->invoiceTypeCode,
            Schema::CBC . 'DocumentCurrencyCode' => $this->documentCurrencyCode,
            Schema::CBC . 'TaxCurrencyCode' => $this->taxCurrencyCode,
            Schema::CAC . 'AccountingSupplierParty' => [Schema::CAC . "Party" => $this->accountingSupplierParty],
            Schema::CAC . 'PaymentMeans' => $this->paymentMeans,
            Schema::CAC . 'AdditionalDocumentReference' => $this->additionalDocumentReference,
            Schema::CBC . 'Note' => $this->note,
            Schema::CBC . 'TaxPointDate' => $this->taxPointDate,
            Schema::CAC . 'PaymentTerms' => $this->paymentTerms,
            Schema::CAC . 'PayeeParty' => $this->payeeParty,
            Schema::CAC . 'AccountingSupplierParty' => [Schema::CAC . "Party" => $this->accountingSupplierParty],
            Schema::CAC . 'AccountingCustomerParty' => [
                Schema::CBC . 'SupplierAssignedAccountID' => $this->supplierAssignedAccountID,
                Schema::CAC . "Party" => $this->accountingCustomerParty
            ],
            Schema::CBC . 'AccountingCostCode' => $this->accountingCostCode,
            Schema::CAC . 'Delivery' => $this->delivery,
            
            $this->getAllowanceCharges(), 
            
            Schema::CBC . 'BuyerReference' => $this->buyerReference,
            Schema::CAC . 'InvoicePeriod' => $this->invoicePeriod,
            Schema::CAC . 'OrderReference' => $this->orderReference,
            Schema::CAC . 'ContractDocumentReference' => $this->contractDocumentReference,

            $this->getAdditionalDocumentReferences(),

            Schema::CAC . 'TaxTotal' => $this->taxTotal,
            Schema::CAC . 'LegalMonetaryTotal' => $this->legalMonetaryTotal,
        ];


        foreach ($this->invoiceLines ?? []as $invoiceLine) 
            $data[] = [Schema::CAC . 'InvoiceLine' => $invoiceLine];

        $this->setProps($data);

        $writer->write($this->getProps());

    }


}
