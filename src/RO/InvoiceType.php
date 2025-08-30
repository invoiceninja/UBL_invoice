<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing InvoiceType
 *
 * ABIE
 *  Invoice. Details
 *  A document used to request payment.
 *  Invoice
 * XSD Type: InvoiceType
 */
class InvoiceType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \CleverIt\UBL\Invoice\RO\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Invoice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @var \CleverIt\UBL\Invoice\RO\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \CleverIt\UBL\Invoice\RO\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @var \CleverIt\UBL\Invoice\RO\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Invoice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Invoice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @var \CleverIt\UBL\Invoice\RO\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Invoice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Invoice
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Invoice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Invoice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Invoice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Invoice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Invoice. Due Date. Date
     *  The date on which Invoice is due.
     *  0..1
     *  Invoice
     *  Due Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $dueDate
     */
    private $dueDate = null;

    /**
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  A code signifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\InvoiceTypeCode $invoiceTypeCode
     */
    private $invoiceTypeCode = null;

    /**
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Invoice
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentCurrencyCode $documentCurrencyCode
     */
    private $documentCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TaxCurrencyCode $taxCurrencyCode
     */
    private $taxCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Invoice.
     *  0..1
     *  Invoice
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PricingCurrencyCode $pricingCurrencyCode
     */
    private $pricingCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentCurrencyCode $paymentCurrencyCode
     */
    private $paymentCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     */
    private $paymentAlternativeCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Invoice as a whole.
     *  0..1
     *  Invoice
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Invoice. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * BBIE
     *  Invoice. Buyer_ Reference. Text
     *  A reference provided by the buyer used for internal routing of the document.
     *  0..1
     *  Invoice
     *  Buyer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\BuyerReference $buyerReference
     */
    private $buyerReference = null;

    /**
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Order Reference
     *  A reference to the Order with which this Invoice is associated.
     *  0..1
     *  Invoice
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\DespatchDocumentReference[] $despatchDocumentReference
     */
    private $despatchDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ReceiptDocumentReference[] $receiptDocumentReference
     */
    private $receiptDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\StatementDocumentReference[] $statementDocumentReference
     */
    private $statementDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\OriginatorDocumentReference[] $originatorDocumentReference
     */
    private $originatorDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ContractDocumentReference[] $contractDocumentReference
     */
    private $contractDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ProjectReference[] $projectReference
     */
    private $projectReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \CleverIt\UBL\Invoice\RO\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Invoice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Invoice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Invoice
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \CleverIt\UBL\Invoice\RO\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Invoice
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \CleverIt\UBL\Invoice\RO\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\TaxRepresentativeParty $taxRepresentativeParty
     */
    private $taxRepresentativeParty = null;

    /**
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \CleverIt\UBL\Invoice\RO\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Invoice
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @var \CleverIt\UBL\Invoice\RO\PrepaidPayment[] $prepaidPayment
     */
    private $prepaidPayment = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \CleverIt\UBL\Invoice\RO\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\RO\TaxExchangeRate $taxExchangeRate
     */
    private $taxExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\RO\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentExchangeRate $paymentExchangeRate
     */
    private $paymentExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     */
    private $paymentAlternativeExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \CleverIt\UBL\Invoice\RO\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \CleverIt\UBL\Invoice\RO\WithholdingTaxTotal[] $withholdingTaxTotal
     */
    private $withholdingTaxTotal = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \CleverIt\UBL\Invoice\RO\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @var \CleverIt\UBL\Invoice\RO\InvoiceLine[] $invoiceLine
     */
    private $invoiceLine = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A container for all extensions present in the document.
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\CleverIt\UBL\Invoice\RO\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @return \CleverIt\UBL\Invoice\RO\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param \CleverIt\UBL\Invoice\RO\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(array $uBLExtensions = null)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as uBLVersionID
     *
     * BBIE
     *  Invoice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @return \CleverIt\UBL\Invoice\RO\UBLVersionID
     */
    public function getUBLVersionID()
    {
        return $this->uBLVersionID;
    }

    /**
     * Sets a new uBLVersionID
     *
     * BBIE
     *  Invoice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @param \CleverIt\UBL\Invoice\RO\UBLVersionID $uBLVersionID
     * @return self
     */
    public function setUBLVersionID(?\CleverIt\UBL\Invoice\RO\UBLVersionID $uBLVersionID = null)
    {
        $this->uBLVersionID = $uBLVersionID;
        return $this;
    }

    /**
     * Gets as customizationID
     *
     * BBIE
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @return \CleverIt\UBL\Invoice\RO\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * BBIE
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @param \CleverIt\UBL\Invoice\RO\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(?\CleverIt\UBL\Invoice\RO\CustomizationID $customizationID = null)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * BBIE
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @return \CleverIt\UBL\Invoice\RO\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @param \CleverIt\UBL\Invoice\RO\ProfileID $profileID
     * @return self
     */
    public function setProfileID(?\CleverIt\UBL\Invoice\RO\ProfileID $profileID = null)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Gets as profileExecutionID
     *
     * BBIE
     *  Invoice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Invoice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @return \CleverIt\UBL\Invoice\RO\ProfileExecutionID
     */
    public function getProfileExecutionID()
    {
        return $this->profileExecutionID;
    }

    /**
     * Sets a new profileExecutionID
     *
     * BBIE
     *  Invoice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Invoice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @param \CleverIt\UBL\Invoice\RO\ProfileExecutionID $profileExecutionID
     * @return self
     */
    public function setProfileExecutionID(?\CleverIt\UBL\Invoice\RO\ProfileExecutionID $profileExecutionID = null)
    {
        $this->profileExecutionID = $profileExecutionID;
        return $this;
    }

    /**
     * Gets as iD
     *
     * BBIE
     *  Invoice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Invoice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\RO\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Invoice
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Invoice
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Invoice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Invoice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\UUID $uUID
     * @return self
     */
    public function setUUID(?\CleverIt\UBL\Invoice\RO\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Invoice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Invoice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Invoice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Invoice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Invoice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Invoice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime = null)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as dueDate
     *
     * BBIE
     *  Invoice. Due Date. Date
     *  The date on which Invoice is due.
     *  0..1
     *  Invoice
     *  Due Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * BBIE
     *  Invoice. Due Date. Date
     *  The date on which Invoice is due.
     *  0..1
     *  Invoice
     *  Due Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $dueDate
     * @return self
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Gets as invoiceTypeCode
     *
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  A code signifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\InvoiceTypeCode
     */
    public function getInvoiceTypeCode()
    {
        return $this->invoiceTypeCode;
    }

    /**
     * Sets a new invoiceTypeCode
     *
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  A code signifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\InvoiceTypeCode $invoiceTypeCode
     * @return self
     */
    public function setInvoiceTypeCode(?\CleverIt\UBL\Invoice\RO\InvoiceTypeCode $invoiceTypeCode = null)
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\RO\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Note[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as taxPointDate
     *
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(\DateTime $taxPointDate = null)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Invoice
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentCurrencyCode
     */
    public function getDocumentCurrencyCode()
    {
        return $this->documentCurrencyCode;
    }

    /**
     * Sets a new documentCurrencyCode
     *
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Invoice
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentCurrencyCode $documentCurrencyCode
     * @return self
     */
    public function setDocumentCurrencyCode(?\CleverIt\UBL\Invoice\RO\DocumentCurrencyCode $documentCurrencyCode = null)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
        return $this;
    }

    /**
     * Gets as taxCurrencyCode
     *
     * BBIE
     *  Invoice. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TaxCurrencyCode
     */
    public function getTaxCurrencyCode()
    {
        return $this->taxCurrencyCode;
    }

    /**
     * Sets a new taxCurrencyCode
     *
     * BBIE
     *  Invoice. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TaxCurrencyCode $taxCurrencyCode
     * @return self
     */
    public function setTaxCurrencyCode(?\CleverIt\UBL\Invoice\RO\TaxCurrencyCode $taxCurrencyCode = null)
    {
        $this->taxCurrencyCode = $taxCurrencyCode;
        return $this;
    }

    /**
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Invoice. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Invoice.
     *  0..1
     *  Invoice
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PricingCurrencyCode
     */
    public function getPricingCurrencyCode()
    {
        return $this->pricingCurrencyCode;
    }

    /**
     * Sets a new pricingCurrencyCode
     *
     * BBIE
     *  Invoice. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Invoice.
     *  0..1
     *  Invoice
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PricingCurrencyCode $pricingCurrencyCode
     * @return self
     */
    public function setPricingCurrencyCode(?\CleverIt\UBL\Invoice\RO\PricingCurrencyCode $pricingCurrencyCode = null)
    {
        $this->pricingCurrencyCode = $pricingCurrencyCode;
        return $this;
    }

    /**
     * Gets as paymentCurrencyCode
     *
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentCurrencyCode
     */
    public function getPaymentCurrencyCode()
    {
        return $this->paymentCurrencyCode;
    }

    /**
     * Sets a new paymentCurrencyCode
     *
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentCurrencyCode $paymentCurrencyCode
     * @return self
     */
    public function setPaymentCurrencyCode(?\CleverIt\UBL\Invoice\RO\PaymentCurrencyCode $paymentCurrencyCode = null)
    {
        $this->paymentCurrencyCode = $paymentCurrencyCode;
        return $this;
    }

    /**
     * Gets as paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentAlternativeCurrencyCode
     */
    public function getPaymentAlternativeCurrencyCode()
    {
        return $this->paymentAlternativeCurrencyCode;
    }

    /**
     * Sets a new paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     * @return self
     */
    public function setPaymentAlternativeCurrencyCode(?\CleverIt\UBL\Invoice\RO\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode = null)
    {
        $this->paymentAlternativeCurrencyCode = $paymentAlternativeCurrencyCode;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Invoice as a whole.
     *  0..1
     *  Invoice
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Invoice as a whole.
     *  0..1
     *  Invoice
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?\CleverIt\UBL\Invoice\RO\AccountingCostCode $accountingCostCode = null)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Invoice. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Invoice. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(?\CleverIt\UBL\Invoice\RO\AccountingCost $accountingCost = null)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\LineCountNumeric
     */
    public function getLineCountNumeric()
    {
        return $this->lineCountNumeric;
    }

    /**
     * Sets a new lineCountNumeric
     *
     * BBIE
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\LineCountNumeric $lineCountNumeric
     * @return self
     */
    public function setLineCountNumeric(?\CleverIt\UBL\Invoice\RO\LineCountNumeric $lineCountNumeric = null)
    {
        $this->lineCountNumeric = $lineCountNumeric;
        return $this;
    }

    /**
     * Gets as buyerReference
     *
     * BBIE
     *  Invoice. Buyer_ Reference. Text
     *  A reference provided by the buyer used for internal routing of the document.
     *  0..1
     *  Invoice
     *  Buyer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\BuyerReference
     */
    public function getBuyerReference()
    {
        return $this->buyerReference;
    }

    /**
     * Sets a new buyerReference
     *
     * BBIE
     *  Invoice. Buyer_ Reference. Text
     *  A reference provided by the buyer used for internal routing of the document.
     *  0..1
     *  Invoice
     *  Buyer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\BuyerReference $buyerReference
     * @return self
     */
    public function setBuyerReference(?\CleverIt\UBL\Invoice\RO\BuyerReference $buyerReference = null)
    {
        $this->buyerReference = $buyerReference;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\CleverIt\UBL\Invoice\RO\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod = null)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Invoice. Order Reference
     *  A reference to the Order with which this Invoice is associated.
     *  0..1
     *  Invoice
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Invoice. Order Reference
     *  A reference to the Order with which this Invoice is associated.
     *  0..1
     *  Invoice
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\OrderReference $orderReference
     * @return self
     */
    public function setOrderReference(?\CleverIt\UBL\Invoice\RO\OrderReference $orderReference = null)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\BillingReference $billingReference
     */
    public function addToBillingReference(\CleverIt\UBL\Invoice\RO\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference = null)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DespatchDocumentReference $despatchDocumentReference
     */
    public function addToDespatchDocumentReference(\CleverIt\UBL\Invoice\RO\DespatchDocumentReference $despatchDocumentReference)
    {
        $this->despatchDocumentReference[] = $despatchDocumentReference;
        return $this;
    }

    /**
     * isset despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchDocumentReference($index)
    {
        return isset($this->despatchDocumentReference[$index]);
    }

    /**
     * unset despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchDocumentReference($index)
    {
        unset($this->despatchDocumentReference[$index]);
    }

    /**
     * Gets as despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\DespatchDocumentReference[]
     */
    public function getDespatchDocumentReference()
    {
        return $this->despatchDocumentReference;
    }

    /**
     * Sets a new despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\DespatchDocumentReference[] $despatchDocumentReference
     * @return self
     */
    public function setDespatchDocumentReference(array $despatchDocumentReference = null)
    {
        $this->despatchDocumentReference = $despatchDocumentReference;
        return $this;
    }

    /**
     * Adds as receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ReceiptDocumentReference $receiptDocumentReference
     */
    public function addToReceiptDocumentReference(\CleverIt\UBL\Invoice\RO\ReceiptDocumentReference $receiptDocumentReference)
    {
        $this->receiptDocumentReference[] = $receiptDocumentReference;
        return $this;
    }

    /**
     * isset receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptDocumentReference($index)
    {
        return isset($this->receiptDocumentReference[$index]);
    }

    /**
     * unset receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptDocumentReference($index)
    {
        unset($this->receiptDocumentReference[$index]);
    }

    /**
     * Gets as receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ReceiptDocumentReference[]
     */
    public function getReceiptDocumentReference()
    {
        return $this->receiptDocumentReference;
    }

    /**
     * Sets a new receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ReceiptDocumentReference[] $receiptDocumentReference
     * @return self
     */
    public function setReceiptDocumentReference(array $receiptDocumentReference = null)
    {
        $this->receiptDocumentReference = $receiptDocumentReference;
        return $this;
    }

    /**
     * Adds as statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\StatementDocumentReference $statementDocumentReference
     */
    public function addToStatementDocumentReference(\CleverIt\UBL\Invoice\RO\StatementDocumentReference $statementDocumentReference)
    {
        $this->statementDocumentReference[] = $statementDocumentReference;
        return $this;
    }

    /**
     * isset statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatementDocumentReference($index)
    {
        return isset($this->statementDocumentReference[$index]);
    }

    /**
     * unset statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatementDocumentReference($index)
    {
        unset($this->statementDocumentReference[$index]);
    }

    /**
     * Gets as statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\StatementDocumentReference[]
     */
    public function getStatementDocumentReference()
    {
        return $this->statementDocumentReference;
    }

    /**
     * Sets a new statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\StatementDocumentReference[] $statementDocumentReference
     * @return self
     */
    public function setStatementDocumentReference(array $statementDocumentReference = null)
    {
        $this->statementDocumentReference = $statementDocumentReference;
        return $this;
    }

    /**
     * Adds as originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\OriginatorDocumentReference $originatorDocumentReference
     */
    public function addToOriginatorDocumentReference(\CleverIt\UBL\Invoice\RO\OriginatorDocumentReference $originatorDocumentReference)
    {
        $this->originatorDocumentReference[] = $originatorDocumentReference;
        return $this;
    }

    /**
     * isset originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginatorDocumentReference($index)
    {
        return isset($this->originatorDocumentReference[$index]);
    }

    /**
     * unset originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginatorDocumentReference($index)
    {
        unset($this->originatorDocumentReference[$index]);
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\OriginatorDocumentReference[]
     */
    public function getOriginatorDocumentReference()
    {
        return $this->originatorDocumentReference;
    }

    /**
     * Sets a new originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\OriginatorDocumentReference[] $originatorDocumentReference
     * @return self
     */
    public function setOriginatorDocumentReference(array $originatorDocumentReference = null)
    {
        $this->originatorDocumentReference = $originatorDocumentReference;
        return $this;
    }

    /**
     * Adds as contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ContractDocumentReference $contractDocumentReference
     */
    public function addToContractDocumentReference(\CleverIt\UBL\Invoice\RO\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference[] = $contractDocumentReference;
        return $this;
    }

    /**
     * isset contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractDocumentReference($index)
    {
        return isset($this->contractDocumentReference[$index]);
    }

    /**
     * unset contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractDocumentReference($index)
    {
        unset($this->contractDocumentReference[$index]);
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ContractDocumentReference[]
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ContractDocumentReference[] $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(array $contractDocumentReference = null)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\CleverIt\UBL\Invoice\RO\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(array $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ProjectReference $projectReference
     */
    public function addToProjectReference(\CleverIt\UBL\Invoice\RO\ProjectReference $projectReference)
    {
        $this->projectReference[] = $projectReference;
        return $this;
    }

    /**
     * isset projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProjectReference($index)
    {
        return isset($this->projectReference[$index]);
    }

    /**
     * unset projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProjectReference($index)
    {
        unset($this->projectReference[$index]);
    }

    /**
     * Gets as projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ProjectReference[]
     */
    public function getProjectReference()
    {
        return $this->projectReference;
    }

    /**
     * Sets a new projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ProjectReference[] $projectReference
     * @return self
     */
    public function setProjectReference(array $projectReference = null)
    {
        $this->projectReference = $projectReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Signature $signature
     */
    public function addToSignature(\CleverIt\UBL\Invoice\RO\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \CleverIt\UBL\Invoice\RO\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \CleverIt\UBL\Invoice\RO\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Invoice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Invoice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(\CleverIt\UBL\Invoice\RO\AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Invoice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * ASBIE
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Invoice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(\CleverIt\UBL\Invoice\RO\AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(?\CleverIt\UBL\Invoice\RO\PayeeParty $payeeParty = null)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Invoice
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \CleverIt\UBL\Invoice\RO\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Invoice
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \CleverIt\UBL\Invoice\RO\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\CleverIt\UBL\Invoice\RO\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Invoice
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \CleverIt\UBL\Invoice\RO\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Invoice
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \CleverIt\UBL\Invoice\RO\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\CleverIt\UBL\Invoice\RO\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as taxRepresentativeParty
     *
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\TaxRepresentativeParty
     */
    public function getTaxRepresentativeParty()
    {
        return $this->taxRepresentativeParty;
    }

    /**
     * Sets a new taxRepresentativeParty
     *
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\TaxRepresentativeParty $taxRepresentativeParty
     * @return self
     */
    public function setTaxRepresentativeParty(?\CleverIt\UBL\Invoice\RO\TaxRepresentativeParty $taxRepresentativeParty = null)
    {
        $this->taxRepresentativeParty = $taxRepresentativeParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Delivery $delivery
     */
    public function addToDelivery(\CleverIt\UBL\Invoice\RO\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \CleverIt\UBL\Invoice\RO\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \CleverIt\UBL\Invoice\RO\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Invoice. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Invoice
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Invoice. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Invoice
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?\CleverIt\UBL\Invoice\RO\DeliveryTerms $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\CleverIt\UBL\Invoice\RO\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeans($index)
    {
        return isset($this->paymentMeans[$index]);
    }

    /**
     * unset paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeans($index)
    {
        unset($this->paymentMeans[$index]);
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(array $paymentMeans = null)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\CleverIt\UBL\Invoice\RO\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PrepaidPayment $prepaidPayment
     */
    public function addToPrepaidPayment(\CleverIt\UBL\Invoice\RO\PrepaidPayment $prepaidPayment)
    {
        $this->prepaidPayment[] = $prepaidPayment;
        return $this;
    }

    /**
     * isset prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrepaidPayment($index)
    {
        return isset($this->prepaidPayment[$index]);
    }

    /**
     * unset prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrepaidPayment($index)
    {
        unset($this->prepaidPayment[$index]);
    }

    /**
     * Gets as prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @return \CleverIt\UBL\Invoice\RO\PrepaidPayment[]
     */
    public function getPrepaidPayment()
    {
        return $this->prepaidPayment;
    }

    /**
     * Sets a new prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @param \CleverIt\UBL\Invoice\RO\PrepaidPayment[] $prepaidPayment
     * @return self
     */
    public function setPrepaidPayment(array $prepaidPayment = null)
    {
        $this->prepaidPayment = $prepaidPayment;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\CleverIt\UBL\Invoice\RO\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \CleverIt\UBL\Invoice\RO\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \CleverIt\UBL\Invoice\RO\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as taxExchangeRate
     *
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\RO\TaxExchangeRate
     */
    public function getTaxExchangeRate()
    {
        return $this->taxExchangeRate;
    }

    /**
     * Sets a new taxExchangeRate
     *
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\RO\TaxExchangeRate $taxExchangeRate
     * @return self
     */
    public function setTaxExchangeRate(?\CleverIt\UBL\Invoice\RO\TaxExchangeRate $taxExchangeRate = null)
    {
        $this->taxExchangeRate = $taxExchangeRate;
        return $this;
    }

    /**
     * Gets as pricingExchangeRate
     *
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\RO\PricingExchangeRate
     */
    public function getPricingExchangeRate()
    {
        return $this->pricingExchangeRate;
    }

    /**
     * Sets a new pricingExchangeRate
     *
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\RO\PricingExchangeRate $pricingExchangeRate
     * @return self
     */
    public function setPricingExchangeRate(?\CleverIt\UBL\Invoice\RO\PricingExchangeRate $pricingExchangeRate = null)
    {
        $this->pricingExchangeRate = $pricingExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentExchangeRate
     *
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentExchangeRate
     */
    public function getPaymentExchangeRate()
    {
        return $this->paymentExchangeRate;
    }

    /**
     * Sets a new paymentExchangeRate
     *
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentExchangeRate $paymentExchangeRate
     * @return self
     */
    public function setPaymentExchangeRate(?\CleverIt\UBL\Invoice\RO\PaymentExchangeRate $paymentExchangeRate = null)
    {
        $this->paymentExchangeRate = $paymentExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentAlternativeExchangeRate
     */
    public function getPaymentAlternativeExchangeRate()
    {
        return $this->paymentAlternativeExchangeRate;
    }

    /**
     * Sets a new paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     * @return self
     */
    public function setPaymentAlternativeExchangeRate(?\CleverIt\UBL\Invoice\RO\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate = null)
    {
        $this->paymentAlternativeExchangeRate = $paymentAlternativeExchangeRate;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\CleverIt\UBL\Invoice\RO\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \CleverIt\UBL\Invoice\RO\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \CleverIt\UBL\Invoice\RO\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\WithholdingTaxTotal $withholdingTaxTotal
     */
    public function addToWithholdingTaxTotal(\CleverIt\UBL\Invoice\RO\WithholdingTaxTotal $withholdingTaxTotal)
    {
        $this->withholdingTaxTotal[] = $withholdingTaxTotal;
        return $this;
    }

    /**
     * isset withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWithholdingTaxTotal($index)
    {
        return isset($this->withholdingTaxTotal[$index]);
    }

    /**
     * unset withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWithholdingTaxTotal($index)
    {
        unset($this->withholdingTaxTotal[$index]);
    }

    /**
     * Gets as withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \CleverIt\UBL\Invoice\RO\WithholdingTaxTotal[]
     */
    public function getWithholdingTaxTotal()
    {
        return $this->withholdingTaxTotal;
    }

    /**
     * Sets a new withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \CleverIt\UBL\Invoice\RO\WithholdingTaxTotal[] $withholdingTaxTotal
     * @return self
     */
    public function setWithholdingTaxTotal(array $withholdingTaxTotal = null)
    {
        $this->withholdingTaxTotal = $withholdingTaxTotal;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \CleverIt\UBL\Invoice\RO\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \CleverIt\UBL\Invoice\RO\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\CleverIt\UBL\Invoice\RO\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\InvoiceLine $invoiceLine
     */
    public function addToInvoiceLine(\CleverIt\UBL\Invoice\RO\InvoiceLine $invoiceLine)
    {
        $this->invoiceLine[] = $invoiceLine;
        return $this;
    }

    /**
     * isset invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceLine($index)
    {
        return isset($this->invoiceLine[$index]);
    }

    /**
     * unset invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceLine($index)
    {
        unset($this->invoiceLine[$index]);
    }

    /**
     * Gets as invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return \CleverIt\UBL\Invoice\RO\InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->invoiceLine;
    }

    /**
     * Sets a new invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param \CleverIt\UBL\Invoice\RO\InvoiceLine[] $invoiceLine
     * @return self
     */
    public function setInvoiceLine(array $invoiceLine)
    {
        $this->invoiceLine = $invoiceLine;
        return $this;
    }
}

