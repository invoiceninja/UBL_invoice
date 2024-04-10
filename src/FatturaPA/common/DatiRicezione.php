<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiRicezione extends BaseInvoice implements XmlSerializable
{
    private array $protected = [
        'protected',
    ];

    public function __construct(
        public string $RiferimentoNumeroLinea,
        public string $IdDocumento, //String
        public string $Data, //Date
        public string $NumItem, //String
        public string $CodiceCUP, //String
        public string $CodiceCIG //String
    ) {
    }

    public function xmlSerialize(Writer $writer): void
    {

        $vars = [];

        foreach($this as $property => $value) {

            if(in_array($property, $this->protected)) {
                continue;
            }

            if($value !== null) {
                $vars[$property] = $value;
            }
        }

        $this->setProps($vars);

        $writer->write($this->getProps());

    }

}
