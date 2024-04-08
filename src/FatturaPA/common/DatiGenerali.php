<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiGenerali extends BaseInvoice implements XmlSerializable
{
    public $DatiGeneraliDocumento; //DatiGeneraliDocumento
    public $DatiOrdineAcquisto; //DatiOrdineAcquisto
    public $DatiContratto; //DatiContratto
    public $DatiConvenzione; //DatiConvenzione
    public $DatiRicezione; //DatiRicezione
    public $DatiTrasporto; //DatiTrasporto

    

    /**
     * Get the value of DatiGeneraliDocumento
     */ 
    public function getDatiGeneraliDocumento()
    {
        return $this->DatiGeneraliDocumento;
    }

    /**
     * Set the value of DatiGeneraliDocumento
     *
     * @return  self
     */ 
    public function setDatiGeneraliDocumento($DatiGeneraliDocumento)
    {
        $this->DatiGeneraliDocumento = $DatiGeneraliDocumento;

        return $this;
    }

    /**
     * Get the value of DatiOrdineAcquisto
     */ 
    public function getDatiOrdineAcquisto()
    {
        return $this->DatiOrdineAcquisto;
    }

    /**
     * Set the value of DatiOrdineAcquisto
     *
     * @return  self
     */ 
    public function setDatiOrdineAcquisto($DatiOrdineAcquisto)
    {
        $this->DatiOrdineAcquisto = $DatiOrdineAcquisto;

        return $this;
    }

    /**
     * Get the value of DatiContratto
     */ 
    public function getDatiContratto()
    {
        return $this->DatiContratto;
    }

    /**
     * Set the value of DatiContratto
     *
     * @return  self
     */ 
    public function setDatiContratto($DatiContratto)
    {
        $this->DatiContratto = $DatiContratto;

        return $this;
    }

    /**
     * Get the value of DatiConvenzione
     */ 
    public function getDatiConvenzione()
    {
        return $this->DatiConvenzione;
    }

    /**
     * Set the value of DatiConvenzione
     *
     * @return  self
     */ 
    public function setDatiConvenzione($DatiConvenzione)
    {
        $this->DatiConvenzione = $DatiConvenzione;

        return $this;
    }

    /**
     * Get the value of DatiRicezione
     */ 
    public function getDatiRicezione()
    {
        return $this->DatiRicezione;
    }

    /**
     * Set the value of DatiRicezione
     *
     * @return  self
     */ 
    public function setDatiRicezione($DatiRicezione)
    {
        $this->DatiRicezione = $DatiRicezione;

        return $this;
    }

    /**
     * Get the value of DatiTrasporto
     */ 
    public function getDatiTrasporto()
    {
        return $this->DatiTrasporto;
    }

    /**
     * Set the value of DatiTrasporto
     *
     * @return  self
     */ 
    public function setDatiTrasporto($DatiTrasporto)
    {
        $this->DatiTrasporto = $DatiTrasporto;

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
