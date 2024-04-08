<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiAnagraficiVettore extends BaseInvoice implements XmlSerializable
{
    private array $protected = [
        'protected',
    ];
    
    public $IdFiscaleIVA; //IdFiscaleIVA
    public $Anagrafica; //Anagrafica

    /**
     * Get the value of IdFiscaleIVA
     */ 
    public function getIdFiscaleIVA()
    {
        return $this->IdFiscaleIVA;
    }

    /**
     * Set the value of IdFiscaleIVA
     *
     * @return  self
     */ 
    public function setIdFiscaleIVA($IdFiscaleIVA)
    {
        $this->IdFiscaleIVA = $IdFiscaleIVA;

        return $this;
    }

    /**
     * Get the value of Anagrafica
     */ 
    public function getAnagrafica()
    {
        return $this->Anagrafica;
    }

    /**
     * Set the value of Anagrafica
     *
     * @return  self
     */ 
    public function setAnagrafica($Anagrafica)
    {
        $this->Anagrafica = $Anagrafica;

        return $this;
    }

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
