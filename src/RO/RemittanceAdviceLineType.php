<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing RemittanceAdviceLineType
 *
 * ABIE
 *  Remittance Advice Line. Details
 *  A class to define a line in a Remittance Advice.
 *  Remittance Advice Line
 * XSD Type: RemittanceAdviceLineType
 */
class RemittanceAdviceLineType
{
    /**
     * BBIE
     *  Remittance Advice Line. Identifier
     *  An identifier for this remittance advice line.
     *  1
     *  Remittance Advice Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. UUID. Identifier
     *  A universally unique identifier for this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Remittance Advice Line. Debit_ Line Amount. Amount
     *  The amount debited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DebitLineAmount $debitLineAmount
     */
    private $debitLineAmount = null;

    /**
     * BBIE
     *  Remittance Advice Line. Credit_ Line Amount. Amount
     *  The amount credited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\CreditLineAmount $creditLineAmount
     */
    private $creditLineAmount = null;

    /**
     * BBIE
     *  Remittance Advice Line. Balance Amount. Amount
     *  The monetary balance associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\BalanceAmount $balanceAmount
     */
    private $balanceAmount = null;

    /**
     * BBIE
     *  Remittance Advice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Remittance Advice Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * BBIE
     *  Remittance Advice Line. Invoicing Party_ Reference. Text
     *  A reference to the order for payment used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Remittance Advice Line
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\InvoicingPartyReference $invoicingPartyReference
     */
    private $invoicingPartyReference = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Remittance Advice Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \CleverIt\UBL\Invoice\RO\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Remittance Advice Line. Exchange Rate
     *  The rate of exchange between the currency of the Remittance Advice and the currency of the document described in the BillingReference.
     *  0..1
     *  Remittance Advice Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Remittance Advice Line. Identifier
     *  An identifier for this remittance advice line.
     *  1
     *  Remittance Advice Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Remittance Advice Line. Identifier
     *  An identifier for this remittance advice line.
     *  1
     *  Remittance Advice Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Adds as note
     *
     * BBIE
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     * Gets as uUID
     *
     * BBIE
     *  Remittance Advice Line. UUID. Identifier
     *  A universally unique identifier for this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. UUID. Identifier
     *  A universally unique identifier for this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     * Gets as debitLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Debit_ Line Amount. Amount
     *  The amount debited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DebitLineAmount
     */
    public function getDebitLineAmount()
    {
        return $this->debitLineAmount;
    }

    /**
     * Sets a new debitLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Debit_ Line Amount. Amount
     *  The amount debited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DebitLineAmount $debitLineAmount
     * @return self
     */
    public function setDebitLineAmount(?\CleverIt\UBL\Invoice\RO\DebitLineAmount $debitLineAmount = null)
    {
        $this->debitLineAmount = $debitLineAmount;
        return $this;
    }

    /**
     * Gets as creditLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Credit_ Line Amount. Amount
     *  The amount credited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\CreditLineAmount
     */
    public function getCreditLineAmount()
    {
        return $this->creditLineAmount;
    }

    /**
     * Sets a new creditLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Credit_ Line Amount. Amount
     *  The amount credited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\CreditLineAmount $creditLineAmount
     * @return self
     */
    public function setCreditLineAmount(?\CleverIt\UBL\Invoice\RO\CreditLineAmount $creditLineAmount = null)
    {
        $this->creditLineAmount = $creditLineAmount;
        return $this;
    }

    /**
     * Gets as balanceAmount
     *
     * BBIE
     *  Remittance Advice Line. Balance Amount. Amount
     *  The monetary balance associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\BalanceAmount
     */
    public function getBalanceAmount()
    {
        return $this->balanceAmount;
    }

    /**
     * Sets a new balanceAmount
     *
     * BBIE
     *  Remittance Advice Line. Balance Amount. Amount
     *  The monetary balance associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\BalanceAmount $balanceAmount
     * @return self
     */
    public function setBalanceAmount(?\CleverIt\UBL\Invoice\RO\BalanceAmount $balanceAmount = null)
    {
        $this->balanceAmount = $balanceAmount;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Remittance Advice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Remittance Advice Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * BBIE
     *  Remittance Advice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Remittance Advice Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(?\CleverIt\UBL\Invoice\RO\PaymentPurposeCode $paymentPurposeCode = null)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Gets as invoicingPartyReference
     *
     * BBIE
     *  Remittance Advice Line. Invoicing Party_ Reference. Text
     *  A reference to the order for payment used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Remittance Advice Line
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\InvoicingPartyReference
     */
    public function getInvoicingPartyReference()
    {
        return $this->invoicingPartyReference;
    }

    /**
     * Sets a new invoicingPartyReference
     *
     * BBIE
     *  Remittance Advice Line. Invoicing Party_ Reference. Text
     *  A reference to the order for payment used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Remittance Advice Line
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\InvoicingPartyReference $invoicingPartyReference
     * @return self
     */
    public function setInvoicingPartyReference(?\CleverIt\UBL\Invoice\RO\InvoicingPartyReference $invoicingPartyReference = null)
    {
        $this->invoicingPartyReference = $invoicingPartyReference;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Remittance Advice Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(?\CleverIt\UBL\Invoice\RO\AccountingSupplierParty $accountingSupplierParty = null)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(?\CleverIt\UBL\Invoice\RO\AccountingCustomerParty $accountingCustomerParty = null)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Remittance Advice Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \CleverIt\UBL\Invoice\RO\OriginatorCustomerParty
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Remittance Advice Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \CleverIt\UBL\Invoice\RO\OriginatorCustomerParty $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(?\CleverIt\UBL\Invoice\RO\OriginatorCustomerParty $originatorCustomerParty = null)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Remittance Advice Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice Line
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
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
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
     * Adds as billingReference
     *
     * ASBIE
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     * Adds as documentReference
     *
     * ASBIE
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference $documentReference
     */
    public function addToDocumentReference(\CleverIt\UBL\Invoice\RO\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * ASBIE
     *  Remittance Advice Line. Exchange Rate
     *  The rate of exchange between the currency of the Remittance Advice and the currency of the document described in the BillingReference.
     *  0..1
     *  Remittance Advice Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\RO\ExchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Remittance Advice Line. Exchange Rate
     *  The rate of exchange between the currency of the Remittance Advice and the currency of the document described in the BillingReference.
     *  0..1
     *  Remittance Advice Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(?\CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate = null)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
}

