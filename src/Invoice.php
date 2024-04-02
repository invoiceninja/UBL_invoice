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
    
    const TYPE_INVOICE = 380; // (1334) Document/message claiming payment for goods or services supplied under conditions agreed between seller and buyer.
    const TYPE_TAX_INVOICE = 388; //proxy for 380
    const TYPE_CREDIT_NOTE = 381; //generic umbrella code for credit notes
    const TYPE_DEBIT_NOTE = 383; // Document/message for providing debit information to the relevant party
    const TYPE_CORRECTED_INVOICE = 384;
    const TYPE_ADVANCE_INVOICE = 386; //An invoice to pay amounts for goods and services in advance; these amounts will be subtracted from the final invoice.
    const TYPE_SELF_BILLING_INVOICE = 389; // An invoice the invoicee is producing instead of the seller.
    const TYPE_REQUEST_FOR_PAYMENT = 71; //Document/message issued by a creditor to a debtor to request payment of one or more invoices past due.
    const TYPE_DEBIT_NOTE_GOODS_AND_SERVICES = 80; //Debit information related to a transaction for goods or services to the relevant party.
    const TYPE_METERED_SERVICES_INVOICE = 82; //Document/message claiming payment for the supply of metered services (e.g., gas, electricity, etc.) supplied to a fixed meter whose consumption is measured over a period of time.
    const TYPE_TAX_NOTIFICATION = 102; //Used to specify that the message is a tax notification.
    const TYPE_FINAL_PAYMENT_REQUEST = 218; //The final payment request of a series of payment requests submitted upon completion of all the work.
    const TYPE_PAYMENT_REQUEST = 219; //A request for payment for completed units.
    const TYPE_COMMERCIAL_INVOICE_AND_PACKING_LIST = 331; //Commercial transaction (invoice) will include a packing list.
    const TYPE_COMMISSION_NOTE = 382; //Document/message in which a seller specifies the amount of commission, the percentage of the invoice amount, or some other basis for the calculation of the commission to which a sales agent is entitled.
    const TYPE_FACTORED_INVOICE = 393; // Invoice assigned to a third party for collection.
    const TYPE_CONSIGNMENT_INVOICE = 395; //Commercial invoice that covers a transaction other than one involving a sale.
    const TYPE_INSURERS_INVOICE = 575; // Document/message issued by an insurer specifying the cost of an insurance which has been effected and claiming payment therefore.
    const TYPE_FORWARDERS_INVOICE = 623; // Invoice issued by a freight forwarder specifying services rendered and costs incurred and claiming payment therefore.
    const TYPE_FREIGHT_INVOICE = 780; // Document/message issued by a transport operation specifying freight costs and charges incurred for a transport operation and stating conditions of payment.
    const TYPE_CLAIM_NOTIFICATION = 817; // Document notifying a claim.
    const TYPE_CONSULAR_INVOICE = 870; // Document/message to be prepared by an exporter in his country and presented to a diplomatic representation of the importing country for endorsement and subsequently to be presented by the importer in connection with the import of the goods described therein.
    const TYPE_PARTIAL_CONSTRUCTION_INVOICE = 875; // Partial invoice in the context of a specific construction project.
    const TYPE_PARTIAL_FINAL_CONSTRUCTION_INVOICE = 876; // Invoice concluding all previous partial construction invoices of a completed partial rendered service in the context of a specific construction project.
    const TYPE_FINAL_CONSTRUCTION_INVOICE = 877; // Invoice concluding all previous partial invoices and partial final construction invoices in the context of a specific construction project.
    
    // additional types based on this URL - https://www.gs1.org/sites/default/files/docs/eancom/ean02s3/part2/invoic/054.htm

    // 67=Commercial dispute
    // 82=Metered services invoice
    // 83=Credit note related to financial adjustments
    // 84=Debit note related to financial adjustments
    // 130=Invoicing data sheet
    // 325=Proforma invoice
    // 380=Commercial invoice
    // 381=Credit note - goods and services
    // 382=Commission note
    // 383=Debit note - goods and services
    // 384=Corrected invoice
    // 385=Consolidated invoice
    // 386=Prepayment invoice
    // 388=Tax invoice
    // 389=Self-billed invoice
    // 390=Delcredere invoice
    // 393=Factored invoice
    // 261=Self billed credit note
    // 262=Consolidated credit note - goods and services
    // 308=Delcredere credit note
    // 527=Self billed debit note
    
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
     * 
     * http://www.datypic.com/sc/ubl22/e-cac_ContractDocumentReference.html
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
     * [languageID,languageLocaleID]
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
