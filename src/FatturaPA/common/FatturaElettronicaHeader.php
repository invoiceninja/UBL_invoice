<?php


namespace CleverIt\UBL\Invoice\FatturaPA\common;



use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class FatturaElettronicaHeader extends BaseInvoice implements XmlSerializable
{
    public $DatiTrasmissione; //DatiTrasmissione
    public $CedentePrestatore; //CedentePrestatore
    public $CessionarioCommittente; //CessionarioCommittente


    /**
     * Get the value of DatiTrasmissione
     */ 
    public function getDatiTrasmissione()
    {
        return $this->DatiTrasmissione;
    }

    /**
     * Set the value of DatiTrasmissione
     *
     * @return  self
     */ 
    public function setDatiTrasmissione($DatiTrasmissione)
    {
        $this->DatiTrasmissione = $DatiTrasmissione;

        return $this;
    }

    /**
     * Get the value of CedentePrestatore
     */ 
    public function getCedentePrestatore()
    {
        return $this->CedentePrestatore;
    }

    /**
     * Set the value of CedentePrestatore
     *
     * @return  self
     */ 
    public function setCedentePrestatore($CedentePrestatore)
    {
        $this->CedentePrestatore = $CedentePrestatore;

        return $this;
    }

    /**
     * Get the value of CessionarioCommittente
     */ 
    public function getCessionarioCommittente()
    {
        return $this->CessionarioCommittente;
    }

    /**
     * Set the value of CessionarioCommittente
     *
     * @return  self
     */ 
    public function setCessionarioCommittente($CessionarioCommittente)
    {
        $this->CessionarioCommittente = $CessionarioCommittente;

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

        $this->setProps(['FatturaElettronicaHeader' => $vars]);

        $writer->write($this->getProps());

    
    }

}
