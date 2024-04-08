<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DettaglioLinee extends BaseInvoice implements XmlSerializable
{
    public function __construct(
        public string $NumeroLinea, 
        public string $Descrizione,
        public string $Quantita,
        public string $PrezzoUniario, 
        public string $PrezzoTotale,
        public string $AliquotaIVA,
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
