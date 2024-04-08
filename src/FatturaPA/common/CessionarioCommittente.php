<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class CessionarioCommittente extends BaseInvoice implements XmlSerializable
{
    private array $protected = [
        'protected',
    ];

    public function __construct(public DatiAnagrafici $DatiAnagrafici, public Sede $Sede){}

    function xmlSerialize(Writer $writer): void
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
