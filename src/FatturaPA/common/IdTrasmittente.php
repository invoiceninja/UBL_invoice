<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class IdTrasmittente extends BaseInvoice implements XmlSerializable
{
    public $IdPaese; //String
    public $IdCodice; //String

    /**
     * Get the value of IdPaese
     */ 
    public function getIdPaese()
    {
        return $this->IdPaese;
    }

    /**
     * Set the value of IdPaese
     *
     * @return  self
     */ 
    public function setIdPaese($IdPaese)
    {
        $this->IdPaese = $IdPaese;

        return $this;
    }

    /**
     * Get the value of IdCodice
     */ 
    public function getIdCodice()
    {
        return $this->IdCodice;
    }

    /**
     * Set the value of IdCodice
     *
     * @return  self
     */ 
    public function setIdCodice($IdCodice)
    {
        $this->IdCodice = $IdCodice;

        return $this;
    }
    
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
