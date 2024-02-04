<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class ContractDocumentReference  extends BaseInvoice implements XmlSerializable {
    private $id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ContractDocumentReference
     */
    public function setId(string $id): ContractDocumentReference
    {
        $this->id = $id;
        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        $this->setProps([ Schema::CBC . 'ID' => $this->id ]);

        $writer->write($this->getProps());
        
    }
}
