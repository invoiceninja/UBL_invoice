<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class CreditNote extends Invoice
{
    public $xmlTagName = 'CreditNote';
    protected $invoiceTypeCode = Invoice::TYPE_CREDIT_NOTE;

    /**
     * @return CreditNoteLine[]
     */
    public function getCreditNoteLines(): ?array
    {
        return $this->invoiceLines;
    }

    /**
     * @param CreditNoteLine[] $creditNoteLines
     * @return CreditNote
     */
    public function setCreditNoteLines(array $creditNoteLines): CreditNote
    {
        $this->invoiceLines = $creditNoteLines;
        return $this;
    }
}
