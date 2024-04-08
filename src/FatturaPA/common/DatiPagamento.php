<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiPagamento extends BaseInvoice implements XmlSerializable
{
    public $CondizioniPagamento; //String
    public $DettaglioPagamento; //DettaglioPagamento


    /**
     * Get the value of DettaglioPagamento
     */ 
    public function getDettaglioPagamento()
    {
        return $this->DettaglioPagamento;
    }

    /**
     * Set the value of DettaglioPagamento
     *
     * @return  self
     */ 
    public function setDettaglioPagamento($DettaglioPagamento)
    {
        $this->DettaglioPagamento = $DettaglioPagamento;

        return $this;
    }

    /**
     * Get the value of CondizioniPagamento
     */ 
    public function getCondizioniPagamento()
    {
        return $this->CondizioniPagamento;
    }

    /**
     * Set the value of CondizioniPagamento
     *
     * @return  self
     */ 
    public function setCondizioniPagamento($CondizioniPagamento)
    {
        $this->CondizioniPagamento = $CondizioniPagamento;

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
