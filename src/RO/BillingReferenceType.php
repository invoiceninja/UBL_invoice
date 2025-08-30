<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing BillingReferenceType
 *
 * ABIE
 *  Billing Reference. Details
 *  A class to define a reference to a billing document.
 *  Billing Reference
 * XSD Type: BillingReferenceType
 */
class BillingReferenceType
{
    /**
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\InvoiceDocumentReference $invoiceDocumentReference
     */
    private $invoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     */
    private $selfBilledInvoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\CreditNoteDocumentReference $creditNoteDocumentReference
     */
    private $creditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     */
    private $selfBilledCreditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\DebitNoteDocumentReference $debitNoteDocumentReference
     */
    private $debitNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ReminderDocumentReference $reminderDocumentReference
     */
    private $reminderDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\AdditionalDocumentReference $additionalDocumentReference
     */
    private $additionalDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @var \CleverIt\UBL\Invoice\RO\BillingReferenceLine[] $billingReferenceLine
     */
    private $billingReferenceLine = [
        
    ];

    /**
     * Gets as invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference()
    {
        return $this->invoiceDocumentReference;
    }

    /**
     * Sets a new invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\InvoiceDocumentReference $invoiceDocumentReference
     * @return self
     */
    public function setInvoiceDocumentReference(?\CleverIt\UBL\Invoice\RO\InvoiceDocumentReference $invoiceDocumentReference = null)
    {
        $this->invoiceDocumentReference = $invoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\SelfBilledInvoiceDocumentReference
     */
    public function getSelfBilledInvoiceDocumentReference()
    {
        return $this->selfBilledInvoiceDocumentReference;
    }

    /**
     * Sets a new selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     * @return self
     */
    public function setSelfBilledInvoiceDocumentReference(?\CleverIt\UBL\Invoice\RO\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference = null)
    {
        $this->selfBilledInvoiceDocumentReference = $selfBilledInvoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\CreditNoteDocumentReference
     */
    public function getCreditNoteDocumentReference()
    {
        return $this->creditNoteDocumentReference;
    }

    /**
     * Sets a new creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\CreditNoteDocumentReference $creditNoteDocumentReference
     * @return self
     */
    public function setCreditNoteDocumentReference(?\CleverIt\UBL\Invoice\RO\CreditNoteDocumentReference $creditNoteDocumentReference = null)
    {
        $this->creditNoteDocumentReference = $creditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\SelfBilledCreditNoteDocumentReference
     */
    public function getSelfBilledCreditNoteDocumentReference()
    {
        return $this->selfBilledCreditNoteDocumentReference;
    }

    /**
     * Sets a new selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     * @return self
     */
    public function setSelfBilledCreditNoteDocumentReference(?\CleverIt\UBL\Invoice\RO\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference = null)
    {
        $this->selfBilledCreditNoteDocumentReference = $selfBilledCreditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\DebitNoteDocumentReference
     */
    public function getDebitNoteDocumentReference()
    {
        return $this->debitNoteDocumentReference;
    }

    /**
     * Sets a new debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\DebitNoteDocumentReference $debitNoteDocumentReference
     * @return self
     */
    public function setDebitNoteDocumentReference(?\CleverIt\UBL\Invoice\RO\DebitNoteDocumentReference $debitNoteDocumentReference = null)
    {
        $this->debitNoteDocumentReference = $debitNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ReminderDocumentReference
     */
    public function getReminderDocumentReference()
    {
        return $this->reminderDocumentReference;
    }

    /**
     * Sets a new reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ReminderDocumentReference $reminderDocumentReference
     * @return self
     */
    public function setReminderDocumentReference(?\CleverIt\UBL\Invoice\RO\ReminderDocumentReference $reminderDocumentReference = null)
    {
        $this->reminderDocumentReference = $reminderDocumentReference;
        return $this;
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\AdditionalDocumentReference $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?\CleverIt\UBL\Invoice\RO\AdditionalDocumentReference $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\BillingReferenceLine $billingReferenceLine
     */
    public function addToBillingReferenceLine(\CleverIt\UBL\Invoice\RO\BillingReferenceLine $billingReferenceLine)
    {
        $this->billingReferenceLine[] = $billingReferenceLine;
        return $this;
    }

    /**
     * isset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReferenceLine($index)
    {
        return isset($this->billingReferenceLine[$index]);
    }

    /**
     * unset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReferenceLine($index)
    {
        unset($this->billingReferenceLine[$index]);
    }

    /**
     * Gets as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return \CleverIt\UBL\Invoice\RO\BillingReferenceLine[]
     */
    public function getBillingReferenceLine()
    {
        return $this->billingReferenceLine;
    }

    /**
     * Sets a new billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param \CleverIt\UBL\Invoice\RO\BillingReferenceLine[] $billingReferenceLine
     * @return self
     */
    public function setBillingReferenceLine(array $billingReferenceLine = null)
    {
        $this->billingReferenceLine = $billingReferenceLine;
        return $this;
    }
}

