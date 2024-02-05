<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing InvoiceLineType
 *
 * ABIE
 *  Invoice Line. Details
 *  A class to define a line in an Invoice.
 *  Invoice Line
 * XSD Type: InvoiceLineType
 */
class InvoiceLineType
{

    /**
     * BBIE
     *  Invoice Line. Identifier
     *  An identifier for this invoice line.
     *  1
     *  Invoice Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Invoice Line. UUID. Identifier
     *  A universally unique identifier for this invoice line.
     *  0..1
     *  Invoice Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Invoice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Invoice Line. Invoiced_ Quantity. Quantity
     *  The quantity (of items) on this invoice line.
     *  0..1
     *  Invoice Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\InvoicedQuantity $invoicedQuantity
     */
    private $invoicedQuantity = null;

    /**
     * BBIE
     *  Invoice Line. Line Extension Amount. Amount
     *  The total amount for this invoice line, including allowance charges but net of taxes.
     *  1
     *  Invoice Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Invoice Line. Tax Point Date. Date
     *  The date of this invoice line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Invoice Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this invoice line, expressed as a code.
     *  0..1
     *  Invoice Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Invoice Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this invoice line, expressed as text.
     *  0..1
     *  Invoice Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Invoice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Invoice Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * BBIE
     *  Invoice Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this invoice line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Invoice Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $freeOfChargeIndicator
     */
    private $freeOfChargeIndicator = null;

    /**
     * ASBIE
     *  Invoice Line. Invoice_ Period. Period
     *  An invoice period to which this invoice line applies.
     *  0..n
     *  Invoice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Order Line Reference
     *  A reference to an order line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \CleverIt\UBL\Invoice\OrderLineReference[] $orderLineReference
     */
    private $orderLineReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \CleverIt\UBL\Invoice\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \CleverIt\UBL\Invoice\ReceiptLineReference[] $receiptLineReference
     */
    private $receiptLineReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Billing Reference
     *  A reference to a billing document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \CleverIt\UBL\Invoice\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Document Reference
     *  A reference to a document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Pricing Reference
     *  A reference to pricing and item location information associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \CleverIt\UBL\Invoice\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Invoice Line. Originator_ Party. Party
     *  The party who originated the Order to which the Invoice is related.
     *  0..1
     *  Invoice Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\OriginatorParty $originatorParty
     */
    private $originatorParty = null;

    /**
     * ASBIE
     *  Invoice Line. Delivery
     *  A delivery associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \CleverIt\UBL\Invoice\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Payment Terms
     *  A specification of payment terms associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Allowance Charge
     *  An allowance or charge associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \CleverIt\UBL\Invoice\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this invoice line.
     *  0..n
     *  Invoice Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \CleverIt\UBL\Invoice\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Withholding_ Tax Total. Tax Total
     *  A reference to a TaxTotal class describing the amount that has been withhold by the authorities, e.g. if the creditor is in dept because of non paid taxes.
     *  0..n
     *  Invoice Line
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \CleverIt\UBL\Invoice\WithholdingTaxTotal[] $withholdingTaxTotal
     */
    private $withholdingTaxTotal = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Item
     *  The item associated with this invoice line.
     *  1
     *  Invoice Line
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Invoice Line. Price
     *  The price of the item associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @var \CleverIt\UBL\Invoice\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Invoice Line. Delivery Terms
     *  Terms and conditions of the delivery associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \CleverIt\UBL\Invoice\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Invoice Line. Sub_ Invoice Line. Invoice Line
     *  An invoice line subsidiary to this invoice line.
     *  0..n
     *  Invoice Line
     *  Sub
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @var \CleverIt\UBL\Invoice\SubInvoiceLine[] $subInvoiceLine
     */
    private $subInvoiceLine = [
        
    ];

    /**
     * ASBIE
     *  Invoice Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this invoice line.
     *  0..1
     *  Invoice Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @var \CleverIt\UBL\Invoice\ItemPriceExtension $itemPriceExtension
     */
    private $itemPriceExtension = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Invoice Line. Identifier
     *  An identifier for this invoice line.
     *  1
     *  Invoice Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Invoice Line. Identifier
     *  An identifier for this invoice line.
     *  1
     *  Invoice Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Invoice Line. UUID. Identifier
     *  A universally unique identifier for this invoice line.
     *  0..1
     *  Invoice Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Invoice Line. UUID. Identifier
     *  A universally unique identifier for this invoice line.
     *  0..1
     *  Invoice Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\UUID $uUID
     * @return self
     */
    public function setUUID(\CleverIt\UBL\Invoice\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Invoice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Invoice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Invoice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as invoicedQuantity
     *
     * BBIE
     *  Invoice Line. Invoiced_ Quantity. Quantity
     *  The quantity (of items) on this invoice line.
     *  0..1
     *  Invoice Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\InvoicedQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     * Sets a new invoicedQuantity
     *
     * BBIE
     *  Invoice Line. Invoiced_ Quantity. Quantity
     *  The quantity (of items) on this invoice line.
     *  0..1
     *  Invoice Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\InvoicedQuantity $invoicedQuantity
     * @return self
     */
    public function setInvoicedQuantity(\CleverIt\UBL\Invoice\InvoicedQuantity $invoicedQuantity)
    {
        $this->invoicedQuantity = $invoicedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Invoice Line. Line Extension Amount. Amount
     *  The total amount for this invoice line, including allowance charges but net of taxes.
     *  1
     *  Invoice Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Invoice Line. Line Extension Amount. Amount
     *  The total amount for this invoice line, including allowance charges but net of taxes.
     *  1
     *  Invoice Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\CleverIt\UBL\Invoice\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as taxPointDate
     *
     * BBIE
     *  Invoice Line. Tax Point Date. Date
     *  The date of this invoice line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice Line
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
     *  Invoice Line. Tax Point Date. Date
     *  The date of this invoice line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(\DateTime $taxPointDate)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Invoice Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this invoice line, expressed as a code.
     *  0..1
     *  Invoice Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Invoice Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this invoice line, expressed as a code.
     *  0..1
     *  Invoice Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(\CleverIt\UBL\Invoice\AccountingCostCode $accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Invoice Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this invoice line, expressed as text.
     *  0..1
     *  Invoice Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Invoice Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this invoice line, expressed as text.
     *  0..1
     *  Invoice Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(\CleverIt\UBL\Invoice\AccountingCost $accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Invoice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Invoice Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * BBIE
     *  Invoice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Invoice Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(\CleverIt\UBL\Invoice\PaymentPurposeCode $paymentPurposeCode)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Gets as freeOfChargeIndicator
     *
     * BBIE
     *  Invoice Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this invoice line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Invoice Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFreeOfChargeIndicator()
    {
        return $this->freeOfChargeIndicator;
    }

    /**
     * Sets a new freeOfChargeIndicator
     *
     * BBIE
     *  Invoice Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this invoice line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Invoice Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $freeOfChargeIndicator
     * @return self
     */
    public function setFreeOfChargeIndicator($freeOfChargeIndicator)
    {
        $this->freeOfChargeIndicator = $freeOfChargeIndicator;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Invoice Line. Invoice_ Period. Period
     *  An invoice period to which this invoice line applies.
     *  0..n
     *  Invoice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\CleverIt\UBL\Invoice\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Invoice Line. Invoice_ Period. Period
     *  An invoice period to which this invoice line applies.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Invoice_ Period. Period
     *  An invoice period to which this invoice line applies.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Invoice_ Period. Period
     *  An invoice period to which this invoice line applies.
     *  0..n
     *  Invoice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Invoice Line. Invoice_ Period. Period
     *  An invoice period to which this invoice line applies.
     *  0..n
     *  Invoice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as orderLineReference
     *
     * ASBIE
     *  Invoice Line. Order Line Reference
     *  A reference to an order line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\OrderLineReference $orderLineReference
     */
    public function addToOrderLineReference(\CleverIt\UBL\Invoice\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference[] = $orderLineReference;
        return $this;
    }

    /**
     * isset orderLineReference
     *
     * ASBIE
     *  Invoice Line. Order Line Reference
     *  A reference to an order line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLineReference($index)
    {
        return isset($this->orderLineReference[$index]);
    }

    /**
     * unset orderLineReference
     *
     * ASBIE
     *  Invoice Line. Order Line Reference
     *  A reference to an order line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLineReference($index)
    {
        unset($this->orderLineReference[$index]);
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Invoice Line. Order Line Reference
     *  A reference to an order line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \CleverIt\UBL\Invoice\OrderLineReference[]
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Invoice Line. Order Line Reference
     *  A reference to an order line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param \CleverIt\UBL\Invoice\OrderLineReference[] $orderLineReference
     * @return self
     */
    public function setOrderLineReference(array $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Invoice Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\DespatchLineReference $despatchLineReference
     */
    public function addToDespatchLineReference(\CleverIt\UBL\Invoice\DespatchLineReference $despatchLineReference)
    {
        $this->despatchLineReference[] = $despatchLineReference;
        return $this;
    }

    /**
     * isset despatchLineReference
     *
     * ASBIE
     *  Invoice Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchLineReference($index)
    {
        return isset($this->despatchLineReference[$index]);
    }

    /**
     * unset despatchLineReference
     *
     * ASBIE
     *  Invoice Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchLineReference($index)
    {
        unset($this->despatchLineReference[$index]);
    }

    /**
     * Gets as despatchLineReference
     *
     * ASBIE
     *  Invoice Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \CleverIt\UBL\Invoice\DespatchLineReference[]
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * ASBIE
     *  Invoice Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \CleverIt\UBL\Invoice\DespatchLineReference[] $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(array $despatchLineReference)
    {
        $this->despatchLineReference = $despatchLineReference;
        return $this;
    }

    /**
     * Adds as receiptLineReference
     *
     * ASBIE
     *  Invoice Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ReceiptLineReference $receiptLineReference
     */
    public function addToReceiptLineReference(\CleverIt\UBL\Invoice\ReceiptLineReference $receiptLineReference)
    {
        $this->receiptLineReference[] = $receiptLineReference;
        return $this;
    }

    /**
     * isset receiptLineReference
     *
     * ASBIE
     *  Invoice Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptLineReference($index)
    {
        return isset($this->receiptLineReference[$index]);
    }

    /**
     * unset receiptLineReference
     *
     * ASBIE
     *  Invoice Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptLineReference($index)
    {
        unset($this->receiptLineReference[$index]);
    }

    /**
     * Gets as receiptLineReference
     *
     * ASBIE
     *  Invoice Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \CleverIt\UBL\Invoice\ReceiptLineReference[]
     */
    public function getReceiptLineReference()
    {
        return $this->receiptLineReference;
    }

    /**
     * Sets a new receiptLineReference
     *
     * ASBIE
     *  Invoice Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \CleverIt\UBL\Invoice\ReceiptLineReference[] $receiptLineReference
     * @return self
     */
    public function setReceiptLineReference(array $receiptLineReference)
    {
        $this->receiptLineReference = $receiptLineReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Invoice Line. Billing Reference
     *  A reference to a billing document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\BillingReference $billingReference
     */
    public function addToBillingReference(\CleverIt\UBL\Invoice\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Invoice Line. Billing Reference
     *  A reference to a billing document associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Billing Reference
     *  A reference to a billing document associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Billing Reference
     *  A reference to a billing document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \CleverIt\UBL\Invoice\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Invoice Line. Billing Reference
     *  A reference to a billing document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \CleverIt\UBL\Invoice\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Invoice Line. Document Reference
     *  A reference to a document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\DocumentReference $documentReference
     */
    public function addToDocumentReference(\CleverIt\UBL\Invoice\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Invoice Line. Document Reference
     *  A reference to a document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Invoice Line. Document Reference
     *  A reference to a document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Invoice Line. Document Reference
     *  A reference to a document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Invoice Line. Document Reference
     *  A reference to a document associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as pricingReference
     *
     * ASBIE
     *  Invoice Line. Pricing Reference
     *  A reference to pricing and item location information associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @return \CleverIt\UBL\Invoice\PricingReference
     */
    public function getPricingReference()
    {
        return $this->pricingReference;
    }

    /**
     * Sets a new pricingReference
     *
     * ASBIE
     *  Invoice Line. Pricing Reference
     *  A reference to pricing and item location information associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @param \CleverIt\UBL\Invoice\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(\CleverIt\UBL\Invoice\PricingReference $pricingReference)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Gets as originatorParty
     *
     * ASBIE
     *  Invoice Line. Originator_ Party. Party
     *  The party who originated the Order to which the Invoice is related.
     *  0..1
     *  Invoice Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\OriginatorParty
     */
    public function getOriginatorParty()
    {
        return $this->originatorParty;
    }

    /**
     * Sets a new originatorParty
     *
     * ASBIE
     *  Invoice Line. Originator_ Party. Party
     *  The party who originated the Order to which the Invoice is related.
     *  0..1
     *  Invoice Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(\CleverIt\UBL\Invoice\OriginatorParty $originatorParty)
    {
        $this->originatorParty = $originatorParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Invoice Line. Delivery
     *  A delivery associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Delivery $delivery
     */
    public function addToDelivery(\CleverIt\UBL\Invoice\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Invoice Line. Delivery
     *  A delivery associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Delivery
     *  A delivery associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Delivery
     *  A delivery associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \CleverIt\UBL\Invoice\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Invoice Line. Delivery
     *  A delivery associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \CleverIt\UBL\Invoice\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Invoice Line. Payment Terms
     *  A specification of payment terms associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\CleverIt\UBL\Invoice\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Invoice Line. Payment Terms
     *  A specification of payment terms associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Payment Terms
     *  A specification of payment terms associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Payment Terms
     *  A specification of payment terms associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Invoice Line. Payment Terms
     *  A specification of payment terms associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Invoice Line. Allowance Charge
     *  An allowance or charge associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\CleverIt\UBL\Invoice\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Invoice Line. Allowance Charge
     *  An allowance or charge associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Allowance Charge
     *  An allowance or charge associated with this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Allowance Charge
     *  An allowance or charge associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \CleverIt\UBL\Invoice\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Invoice Line. Allowance Charge
     *  An allowance or charge associated with this invoice line.
     *  0..n
     *  Invoice Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \CleverIt\UBL\Invoice\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Invoice Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this invoice line.
     *  0..n
     *  Invoice Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\CleverIt\UBL\Invoice\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Invoice Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this invoice line.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this invoice line.
     *  0..n
     *  Invoice Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \CleverIt\UBL\Invoice\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Invoice Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this invoice line.
     *  0..n
     *  Invoice Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \CleverIt\UBL\Invoice\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as withholdingTaxTotal
     *
     * ASBIE
     *  Invoice Line. Withholding_ Tax Total. Tax Total
     *  A reference to a TaxTotal class describing the amount that has been withhold by the authorities, e.g. if the creditor is in dept because of non paid taxes.
     *  0..n
     *  Invoice Line
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\WithholdingTaxTotal $withholdingTaxTotal
     */
    public function addToWithholdingTaxTotal(\CleverIt\UBL\Invoice\WithholdingTaxTotal $withholdingTaxTotal)
    {
        $this->withholdingTaxTotal[] = $withholdingTaxTotal;
        return $this;
    }

    /**
     * isset withholdingTaxTotal
     *
     * ASBIE
     *  Invoice Line. Withholding_ Tax Total. Tax Total
     *  A reference to a TaxTotal class describing the amount that has been withhold by the authorities, e.g. if the creditor is in dept because of non paid taxes.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Withholding_ Tax Total. Tax Total
     *  A reference to a TaxTotal class describing the amount that has been withhold by the authorities, e.g. if the creditor is in dept because of non paid taxes.
     *  0..n
     *  Invoice Line
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
     *  Invoice Line. Withholding_ Tax Total. Tax Total
     *  A reference to a TaxTotal class describing the amount that has been withhold by the authorities, e.g. if the creditor is in dept because of non paid taxes.
     *  0..n
     *  Invoice Line
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \CleverIt\UBL\Invoice\WithholdingTaxTotal[]
     */
    public function getWithholdingTaxTotal()
    {
        return $this->withholdingTaxTotal;
    }

    /**
     * Sets a new withholdingTaxTotal
     *
     * ASBIE
     *  Invoice Line. Withholding_ Tax Total. Tax Total
     *  A reference to a TaxTotal class describing the amount that has been withhold by the authorities, e.g. if the creditor is in dept because of non paid taxes.
     *  0..n
     *  Invoice Line
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \CleverIt\UBL\Invoice\WithholdingTaxTotal[] $withholdingTaxTotal
     * @return self
     */
    public function setWithholdingTaxTotal(array $withholdingTaxTotal)
    {
        $this->withholdingTaxTotal = $withholdingTaxTotal;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Invoice Line. Item
     *  The item associated with this invoice line.
     *  1
     *  Invoice Line
     *  Item
     *  Item
     *  Item
     *
     * @return \CleverIt\UBL\Invoice\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Invoice Line. Item
     *  The item associated with this invoice line.
     *  1
     *  Invoice Line
     *  Item
     *  Item
     *  Item
     *
     * @param \CleverIt\UBL\Invoice\Item $item
     * @return self
     */
    public function setItem(\CleverIt\UBL\Invoice\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Invoice Line. Price
     *  The price of the item associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @return \CleverIt\UBL\Invoice\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Invoice Line. Price
     *  The price of the item associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @param \CleverIt\UBL\Invoice\Price $price
     * @return self
     */
    public function setPrice(\CleverIt\UBL\Invoice\Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Invoice Line. Delivery Terms
     *  Terms and conditions of the delivery associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \CleverIt\UBL\Invoice\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Invoice Line. Delivery Terms
     *  Terms and conditions of the delivery associated with this invoice line.
     *  0..1
     *  Invoice Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \CleverIt\UBL\Invoice\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(\CleverIt\UBL\Invoice\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as subInvoiceLine
     *
     * ASBIE
     *  Invoice Line. Sub_ Invoice Line. Invoice Line
     *  An invoice line subsidiary to this invoice line.
     *  0..n
     *  Invoice Line
     *  Sub
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\SubInvoiceLine $subInvoiceLine
     */
    public function addToSubInvoiceLine(\CleverIt\UBL\Invoice\SubInvoiceLine $subInvoiceLine)
    {
        $this->subInvoiceLine[] = $subInvoiceLine;
        return $this;
    }

    /**
     * isset subInvoiceLine
     *
     * ASBIE
     *  Invoice Line. Sub_ Invoice Line. Invoice Line
     *  An invoice line subsidiary to this invoice line.
     *  0..n
     *  Invoice Line
     *  Sub
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubInvoiceLine($index)
    {
        return isset($this->subInvoiceLine[$index]);
    }

    /**
     * unset subInvoiceLine
     *
     * ASBIE
     *  Invoice Line. Sub_ Invoice Line. Invoice Line
     *  An invoice line subsidiary to this invoice line.
     *  0..n
     *  Invoice Line
     *  Sub
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubInvoiceLine($index)
    {
        unset($this->subInvoiceLine[$index]);
    }

    /**
     * Gets as subInvoiceLine
     *
     * ASBIE
     *  Invoice Line. Sub_ Invoice Line. Invoice Line
     *  An invoice line subsidiary to this invoice line.
     *  0..n
     *  Invoice Line
     *  Sub
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return \CleverIt\UBL\Invoice\SubInvoiceLine[]
     */
    public function getSubInvoiceLine()
    {
        return $this->subInvoiceLine;
    }

    /**
     * Sets a new subInvoiceLine
     *
     * ASBIE
     *  Invoice Line. Sub_ Invoice Line. Invoice Line
     *  An invoice line subsidiary to this invoice line.
     *  0..n
     *  Invoice Line
     *  Sub
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param \CleverIt\UBL\Invoice\SubInvoiceLine[] $subInvoiceLine
     * @return self
     */
    public function setSubInvoiceLine(array $subInvoiceLine)
    {
        $this->subInvoiceLine = $subInvoiceLine;
        return $this;
    }

    /**
     * Gets as itemPriceExtension
     *
     * ASBIE
     *  Invoice Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this invoice line.
     *  0..1
     *  Invoice Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @return \CleverIt\UBL\Invoice\ItemPriceExtension
     */
    public function getItemPriceExtension()
    {
        return $this->itemPriceExtension;
    }

    /**
     * Sets a new itemPriceExtension
     *
     * ASBIE
     *  Invoice Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this invoice line.
     *  0..1
     *  Invoice Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @param \CleverIt\UBL\Invoice\ItemPriceExtension $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(\CleverIt\UBL\Invoice\ItemPriceExtension $itemPriceExtension)
    {
        $this->itemPriceExtension = $itemPriceExtension;
        return $this;
    }


}

