<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiOrdineAcquisto extends BaseInvoice implements XmlSerializable
{
    private array $protected = ['proteted'];
    
    public $RiferimentoNumeroLinea; //String
    public $IdDocumento; //String
    public $NumItem; //String
    public $CodiceCUP; //String
    public $CodiceCIG; //String

    /**
     * Get the value of CodiceCIG
     */ 
    public function getCodiceCIG()
    {
        return $this->CodiceCIG;
    }

    /**
     * Set the value of CodiceCIG
     *
     * @return  self
     */ 
    public function setCodiceCIG($CodiceCIG)
    {
        $this->CodiceCIG = $CodiceCIG;

        return $this;
    }

    /**
     * Get the value of CodiceCUP
     */ 
    public function getCodiceCUP()
    {
        return $this->CodiceCUP;
    }

    /**
     * Set the value of CodiceCUP
     *
     * @return  self
     */ 
    public function setCodiceCUP($CodiceCUP)
    {
        $this->CodiceCUP = $CodiceCUP;

        return $this;
    }

    /**
     * Get the value of NumItem
     */ 
    public function getNumItem()
    {
        return $this->NumItem;
    }

    /**
     * Set the value of NumItem
     *
     * @return  self
     */ 
    public function setNumItem($NumItem)
    {
        $this->NumItem = $NumItem;

        return $this;
    }

    /**
     * Get the value of IdDocumento
     */ 
    public function getIdDocumento()
    {
        return $this->IdDocumento;
    }

    /**
     * Set the value of IdDocumento
     *
     * @return  self
     */ 
    public function setIdDocumento($IdDocumento)
    {
        $this->IdDocumento = $IdDocumento;

        return $this;
    }

    /**
     * Get the value of RiferimentoNumeroLinea
     */ 
    public function getRiferimentoNumeroLinea()
    {
        return $this->RiferimentoNumeroLinea;
    }

    /**
     * Set the value of RiferimentoNumeroLinea
     *
     * @return  self
     */ 
    public function setRiferimentoNumeroLinea($RiferimentoNumeroLinea)
    {
        $this->RiferimentoNumeroLinea = $RiferimentoNumeroLinea;

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
