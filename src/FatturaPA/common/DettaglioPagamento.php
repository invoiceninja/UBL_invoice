<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DettaglioPagamento extends BaseInvoice implements XmlSerializable
{

    public function __construct(
        public string $ModalitaPagamento, //String
        public string $DataScadenzaPagamento, //Date
        public string $ImportoPagamento, //String
    ){}

    
    function xmlSerialize(Writer $writer): void
    {

        $vars = [];

        foreach($this as $property => $value) {

            if($value !== null) {
                $vars[$property] = $value;
            }
        }

        $this->setProps($vars);

        $writer->write($this->getProps());

    }

}
