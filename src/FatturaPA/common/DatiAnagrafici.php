<?php


namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiAnagrafici extends BaseInvoice implements XmlSerializable
{
    public $IdFiscaleIVA; //IdFiscaleIVA
    public $Anagrafica; //Anagrafica
    public $RegimeFiscale; //String
    public $CodiceFiscale; //String

    
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

    /**
     * Get the value of RegimeFiscale
     */ 
    public function getRegimeFiscale()
    {
        return $this->RegimeFiscale;
    }

    /**
     * Set the value of RegimeFiscale
     *
     * @return  self
     */ 
    public function setRegimeFiscale($RegimeFiscale)
    {
        $this->RegimeFiscale = $RegimeFiscale;

        return $this;
    }

    /**
     * Get the value of CodiceFiscale
     */ 
    public function getCodiceFiscale()
    {
        return $this->CodiceFiscale;
    }

    /**
     * Set the value of CodiceFiscale
     *
     * @return  self
     */ 
    public function setCodiceFiscale($CodiceFiscale)
    {
        $this->CodiceFiscale = $CodiceFiscale;

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
