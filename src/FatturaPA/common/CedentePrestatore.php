<?php 


namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class CedentePrestatore extends BaseInvoice implements XmlSerializable
{
    public $DatiAnagrafici; //DatiAnagrafici
    public $Sede; //Sede


    /**
     * Get the value of DatiAnagrafici
     */ 
    public function getDatiAnagrafici()
    {
        return $this->DatiAnagrafici;
    }

    /**
     * Set the value of DatiAnagrafici
     *
     * @return  self
     */ 
    public function setDatiAnagrafici($DatiAnagrafici)
    {
        $this->DatiAnagrafici = $DatiAnagrafici;

        return $this;
    }

    /**
     * Get the value of Sede
     */ 
    public function getSede()
    {
        return $this->Sede;
    }

    /**
     * Set the value of Sede
     *
     * @return  self
     */ 
    public function setSede($Sede)
    {
        $this->Sede = $Sede;

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
