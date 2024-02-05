<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing PaymentTermsType
 *
 * ABIE
 *  Payment Terms. Details
 *  A class to describe a set of payment terms.
 *  Payment Terms
 * XSD Type: PaymentTermsType
 */
class PaymentTermsType
{

    /**
     * BBIE
     *  Payment Terms. Identifier
     *  An identifier for this set of payment terms.
     *  0..1
     *  Payment Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  An identifier for a means of payment associated with these payment terms.
     *  0..n
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\PaymentMeansID[] $paymentMeansID
     */
    private $paymentMeansID = [
        
    ];

    /**
     * BBIE
     *  Payment Terms. Prepaid Payment Reference Identifier. Identifier
     *  An identifier for a reference to a prepaid payment.
     *  0..1
     *  Payment Terms
     *  Prepaid Payment Reference Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\PrepaidPaymentReferenceID $prepaidPaymentReferenceID
     */
    private $prepaidPaymentReferenceID = null;

    /**
     * BBIE
     *  Payment Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Reference_ Event Code. Code
     *  A code signifying the event during which these terms are offered.
     *  0..1
     *  Payment Terms
     *  Reference
     *  Event Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ReferenceEventCode $referenceEventCode
     */
    private $referenceEventCode = null;

    /**
     * BBIE
     *  Payment Terms. Settlement_ Discount Percent. Percent
     *  The percentage for the settlement discount that is offered for payment under these payment terms.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\SettlementDiscountPercent $settlementDiscountPercent
     */
    private $settlementDiscountPercent = null;

    /**
     * BBIE
     *  Payment Terms. Penalty_ Surcharge Percent. Percent
     *  The penalty for payment after the settlement period, expressed as a percentage of the payment.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\PenaltySurchargePercent $penaltySurchargePercent
     */
    private $penaltySurchargePercent = null;

    /**
     * BBIE
     *  Payment Terms. Payment Percent. Percent
     *  The part of a payment, expressed as a percent, relevant for these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\PaymentPercent $paymentPercent
     */
    private $paymentPercent = null;

    /**
     * BBIE
     *  Payment Terms. Amount
     *  The monetary amount covered by these payment terms.
     *  0..1
     *  Payment Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Payment Terms. Settlement_ Discount Amount. Amount
     *  The amount of a settlement discount offered for payment under these payment terms.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\SettlementDiscountAmount $settlementDiscountAmount
     */
    private $settlementDiscountAmount = null;

    /**
     * BBIE
     *  Payment Terms. Penalty_ Amount. Amount
     *  The monetary amount of the penalty for payment after the settlement period.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\PenaltyAmount $penaltyAmount
     */
    private $penaltyAmount = null;

    /**
     * BBIE
     *  Payment Terms. Payment Terms Details URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing additional details regarding these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Terms Details URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\PaymentTermsDetailsURI $paymentTermsDetailsURI
     */
    private $paymentTermsDetailsURI = null;

    /**
     * BBIE
     *  Payment Terms. Payment Due Date. Date
     *  The due date for these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * BBIE
     *  Payment Terms. Installment Due Date. Date
     *  The due date for an installment payment for these payment terms.
     *  0..1
     *  Payment Terms
     *  Installment Due Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $installmentDueDate
     */
    private $installmentDueDate = null;

    /**
     * BBIE
     *  Payment Terms. Invoicing Party_ Reference. Text
     *  A reference to the payment terms used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Payment Terms
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\InvoicingPartyReference $invoicingPartyReference
     */
    private $invoicingPartyReference = null;

    /**
     * ASBIE
     *  Payment Terms. Settlement_ Period. Period
     *  The period during which settlement may occur.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\SettlementPeriod $settlementPeriod
     */
    private $settlementPeriod = null;

    /**
     * ASBIE
     *  Payment Terms. Penalty_ Period. Period
     *  The period during which penalties may apply.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\PenaltyPeriod $penaltyPeriod
     */
    private $penaltyPeriod = null;

    /**
     * ASBIE
     *  Payment Terms. Exchange Rate
     *  The currency exchange rate for purposes of these payment terms.
     *  0..1
     *  Payment Terms
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * ASBIE
     *  Payment Terms. Validity_ Period. Period
     *  The period during which these payment terms are valid.
     *  0..1
     *  Payment Terms
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Payment Terms. Identifier
     *  An identifier for this set of payment terms.
     *  0..1
     *  Payment Terms
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
     *  Payment Terms. Identifier
     *  An identifier for this set of payment terms.
     *  0..1
     *  Payment Terms
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
     * Adds as paymentMeansID
     *
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  An identifier for a means of payment associated with these payment terms.
     *  0..n
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\PaymentMeansID $paymentMeansID
     */
    public function addToPaymentMeansID(\CleverIt\UBL\Invoice\PaymentMeansID $paymentMeansID)
    {
        $this->paymentMeansID[] = $paymentMeansID;
        return $this;
    }

    /**
     * isset paymentMeansID
     *
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  An identifier for a means of payment associated with these payment terms.
     *  0..n
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeansID($index)
    {
        return isset($this->paymentMeansID[$index]);
    }

    /**
     * unset paymentMeansID
     *
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  An identifier for a means of payment associated with these payment terms.
     *  0..n
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeansID($index)
    {
        unset($this->paymentMeansID[$index]);
    }

    /**
     * Gets as paymentMeansID
     *
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  An identifier for a means of payment associated with these payment terms.
     *  0..n
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\PaymentMeansID[]
     */
    public function getPaymentMeansID()
    {
        return $this->paymentMeansID;
    }

    /**
     * Sets a new paymentMeansID
     *
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  An identifier for a means of payment associated with these payment terms.
     *  0..n
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\PaymentMeansID[] $paymentMeansID
     * @return self
     */
    public function setPaymentMeansID(array $paymentMeansID)
    {
        $this->paymentMeansID = $paymentMeansID;
        return $this;
    }

    /**
     * Gets as prepaidPaymentReferenceID
     *
     * BBIE
     *  Payment Terms. Prepaid Payment Reference Identifier. Identifier
     *  An identifier for a reference to a prepaid payment.
     *  0..1
     *  Payment Terms
     *  Prepaid Payment Reference Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\PrepaidPaymentReferenceID
     */
    public function getPrepaidPaymentReferenceID()
    {
        return $this->prepaidPaymentReferenceID;
    }

    /**
     * Sets a new prepaidPaymentReferenceID
     *
     * BBIE
     *  Payment Terms. Prepaid Payment Reference Identifier. Identifier
     *  An identifier for a reference to a prepaid payment.
     *  0..1
     *  Payment Terms
     *  Prepaid Payment Reference Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\PrepaidPaymentReferenceID $prepaidPaymentReferenceID
     * @return self
     */
    public function setPrepaidPaymentReferenceID(\CleverIt\UBL\Invoice\PrepaidPaymentReferenceID $prepaidPaymentReferenceID)
    {
        $this->prepaidPaymentReferenceID = $prepaidPaymentReferenceID;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Payment Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Terms
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
     * Gets as referenceEventCode
     *
     * BBIE
     *  Payment Terms. Reference_ Event Code. Code
     *  A code signifying the event during which these terms are offered.
     *  0..1
     *  Payment Terms
     *  Reference
     *  Event Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ReferenceEventCode
     */
    public function getReferenceEventCode()
    {
        return $this->referenceEventCode;
    }

    /**
     * Sets a new referenceEventCode
     *
     * BBIE
     *  Payment Terms. Reference_ Event Code. Code
     *  A code signifying the event during which these terms are offered.
     *  0..1
     *  Payment Terms
     *  Reference
     *  Event Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ReferenceEventCode $referenceEventCode
     * @return self
     */
    public function setReferenceEventCode(\CleverIt\UBL\Invoice\ReferenceEventCode $referenceEventCode)
    {
        $this->referenceEventCode = $referenceEventCode;
        return $this;
    }

    /**
     * Gets as settlementDiscountPercent
     *
     * BBIE
     *  Payment Terms. Settlement_ Discount Percent. Percent
     *  The percentage for the settlement discount that is offered for payment under these payment terms.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\SettlementDiscountPercent
     */
    public function getSettlementDiscountPercent()
    {
        return $this->settlementDiscountPercent;
    }

    /**
     * Sets a new settlementDiscountPercent
     *
     * BBIE
     *  Payment Terms. Settlement_ Discount Percent. Percent
     *  The percentage for the settlement discount that is offered for payment under these payment terms.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\SettlementDiscountPercent $settlementDiscountPercent
     * @return self
     */
    public function setSettlementDiscountPercent(\CleverIt\UBL\Invoice\SettlementDiscountPercent $settlementDiscountPercent)
    {
        $this->settlementDiscountPercent = $settlementDiscountPercent;
        return $this;
    }

    /**
     * Gets as penaltySurchargePercent
     *
     * BBIE
     *  Payment Terms. Penalty_ Surcharge Percent. Percent
     *  The penalty for payment after the settlement period, expressed as a percentage of the payment.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\PenaltySurchargePercent
     */
    public function getPenaltySurchargePercent()
    {
        return $this->penaltySurchargePercent;
    }

    /**
     * Sets a new penaltySurchargePercent
     *
     * BBIE
     *  Payment Terms. Penalty_ Surcharge Percent. Percent
     *  The penalty for payment after the settlement period, expressed as a percentage of the payment.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\PenaltySurchargePercent $penaltySurchargePercent
     * @return self
     */
    public function setPenaltySurchargePercent(\CleverIt\UBL\Invoice\PenaltySurchargePercent $penaltySurchargePercent)
    {
        $this->penaltySurchargePercent = $penaltySurchargePercent;
        return $this;
    }

    /**
     * Gets as paymentPercent
     *
     * BBIE
     *  Payment Terms. Payment Percent. Percent
     *  The part of a payment, expressed as a percent, relevant for these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\PaymentPercent
     */
    public function getPaymentPercent()
    {
        return $this->paymentPercent;
    }

    /**
     * Sets a new paymentPercent
     *
     * BBIE
     *  Payment Terms. Payment Percent. Percent
     *  The part of a payment, expressed as a percent, relevant for these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\PaymentPercent $paymentPercent
     * @return self
     */
    public function setPaymentPercent(\CleverIt\UBL\Invoice\PaymentPercent $paymentPercent)
    {
        $this->paymentPercent = $paymentPercent;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Payment Terms. Amount
     *  The monetary amount covered by these payment terms.
     *  0..1
     *  Payment Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Payment Terms. Amount
     *  The monetary amount covered by these payment terms.
     *  0..1
     *  Payment Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\Amount $amount
     * @return self
     */
    public function setAmount(\CleverIt\UBL\Invoice\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as settlementDiscountAmount
     *
     * BBIE
     *  Payment Terms. Settlement_ Discount Amount. Amount
     *  The amount of a settlement discount offered for payment under these payment terms.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\SettlementDiscountAmount
     */
    public function getSettlementDiscountAmount()
    {
        return $this->settlementDiscountAmount;
    }

    /**
     * Sets a new settlementDiscountAmount
     *
     * BBIE
     *  Payment Terms. Settlement_ Discount Amount. Amount
     *  The amount of a settlement discount offered for payment under these payment terms.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\SettlementDiscountAmount $settlementDiscountAmount
     * @return self
     */
    public function setSettlementDiscountAmount(\CleverIt\UBL\Invoice\SettlementDiscountAmount $settlementDiscountAmount)
    {
        $this->settlementDiscountAmount = $settlementDiscountAmount;
        return $this;
    }

    /**
     * Gets as penaltyAmount
     *
     * BBIE
     *  Payment Terms. Penalty_ Amount. Amount
     *  The monetary amount of the penalty for payment after the settlement period.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\PenaltyAmount
     */
    public function getPenaltyAmount()
    {
        return $this->penaltyAmount;
    }

    /**
     * Sets a new penaltyAmount
     *
     * BBIE
     *  Payment Terms. Penalty_ Amount. Amount
     *  The monetary amount of the penalty for payment after the settlement period.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\PenaltyAmount $penaltyAmount
     * @return self
     */
    public function setPenaltyAmount(\CleverIt\UBL\Invoice\PenaltyAmount $penaltyAmount)
    {
        $this->penaltyAmount = $penaltyAmount;
        return $this;
    }

    /**
     * Gets as paymentTermsDetailsURI
     *
     * BBIE
     *  Payment Terms. Payment Terms Details URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing additional details regarding these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Terms Details URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\PaymentTermsDetailsURI
     */
    public function getPaymentTermsDetailsURI()
    {
        return $this->paymentTermsDetailsURI;
    }

    /**
     * Sets a new paymentTermsDetailsURI
     *
     * BBIE
     *  Payment Terms. Payment Terms Details URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing additional details regarding these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Terms Details URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\PaymentTermsDetailsURI $paymentTermsDetailsURI
     * @return self
     */
    public function setPaymentTermsDetailsURI(\CleverIt\UBL\Invoice\PaymentTermsDetailsURI $paymentTermsDetailsURI)
    {
        $this->paymentTermsDetailsURI = $paymentTermsDetailsURI;
        return $this;
    }

    /**
     * Gets as paymentDueDate
     *
     * BBIE
     *  Payment Terms. Payment Due Date. Date
     *  The due date for these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Sets a new paymentDueDate
     *
     * BBIE
     *  Payment Terms. Payment Due Date. Date
     *  The due date for these payment terms.
     *  0..1
     *  Payment Terms
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * Gets as installmentDueDate
     *
     * BBIE
     *  Payment Terms. Installment Due Date. Date
     *  The due date for an installment payment for these payment terms.
     *  0..1
     *  Payment Terms
     *  Installment Due Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getInstallmentDueDate()
    {
        return $this->installmentDueDate;
    }

    /**
     * Sets a new installmentDueDate
     *
     * BBIE
     *  Payment Terms. Installment Due Date. Date
     *  The due date for an installment payment for these payment terms.
     *  0..1
     *  Payment Terms
     *  Installment Due Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $installmentDueDate
     * @return self
     */
    public function setInstallmentDueDate(\DateTime $installmentDueDate)
    {
        $this->installmentDueDate = $installmentDueDate;
        return $this;
    }

    /**
     * Gets as invoicingPartyReference
     *
     * BBIE
     *  Payment Terms. Invoicing Party_ Reference. Text
     *  A reference to the payment terms used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Payment Terms
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\InvoicingPartyReference
     */
    public function getInvoicingPartyReference()
    {
        return $this->invoicingPartyReference;
    }

    /**
     * Sets a new invoicingPartyReference
     *
     * BBIE
     *  Payment Terms. Invoicing Party_ Reference. Text
     *  A reference to the payment terms used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Payment Terms
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\InvoicingPartyReference $invoicingPartyReference
     * @return self
     */
    public function setInvoicingPartyReference(\CleverIt\UBL\Invoice\InvoicingPartyReference $invoicingPartyReference)
    {
        $this->invoicingPartyReference = $invoicingPartyReference;
        return $this;
    }

    /**
     * Gets as settlementPeriod
     *
     * ASBIE
     *  Payment Terms. Settlement_ Period. Period
     *  The period during which settlement may occur.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\SettlementPeriod
     */
    public function getSettlementPeriod()
    {
        return $this->settlementPeriod;
    }

    /**
     * Sets a new settlementPeriod
     *
     * ASBIE
     *  Payment Terms. Settlement_ Period. Period
     *  The period during which settlement may occur.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\SettlementPeriod $settlementPeriod
     * @return self
     */
    public function setSettlementPeriod(\CleverIt\UBL\Invoice\SettlementPeriod $settlementPeriod)
    {
        $this->settlementPeriod = $settlementPeriod;
        return $this;
    }

    /**
     * Gets as penaltyPeriod
     *
     * ASBIE
     *  Payment Terms. Penalty_ Period. Period
     *  The period during which penalties may apply.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\PenaltyPeriod
     */
    public function getPenaltyPeriod()
    {
        return $this->penaltyPeriod;
    }

    /**
     * Sets a new penaltyPeriod
     *
     * ASBIE
     *  Payment Terms. Penalty_ Period. Period
     *  The period during which penalties may apply.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\PenaltyPeriod $penaltyPeriod
     * @return self
     */
    public function setPenaltyPeriod(\CleverIt\UBL\Invoice\PenaltyPeriod $penaltyPeriod)
    {
        $this->penaltyPeriod = $penaltyPeriod;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * ASBIE
     *  Payment Terms. Exchange Rate
     *  The currency exchange rate for purposes of these payment terms.
     *  0..1
     *  Payment Terms
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\ExchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Payment Terms. Exchange Rate
     *  The currency exchange rate for purposes of these payment terms.
     *  0..1
     *  Payment Terms
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(\CleverIt\UBL\Invoice\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Payment Terms. Validity_ Period. Period
     *  The period during which these payment terms are valid.
     *  0..1
     *  Payment Terms
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Payment Terms. Validity_ Period. Period
     *  The period during which these payment terms are valid.
     *  0..1
     *  Payment Terms
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }


}

