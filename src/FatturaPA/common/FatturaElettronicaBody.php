<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;
use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;


class FatturaElettronicaBody extends BaseInvoice implements XmlSerializable
{
    public $DatiGenerali; //DatiGenerali
    public $DatiBeniServizi; //DatiBeniServizi
    public $DatiPagamento; //DatiPagamento


    /**
     * Get the value of DatiGenerali
     */ 
    public function getDatiGenerali()
    {
        return $this->DatiGenerali;
    }

    /**
     * Set the value of DatiGenerali
     *
     * @return  self
     */ 
    public function setDatiGenerali($DatiGenerali)
    {
        $this->DatiGenerali = $DatiGenerali;

        return $this;
    }

    /**
     * Get the value of DatiBeniServizi
     */ 
    public function getDatiBeniServizi()
    {
        return $this->DatiBeniServizi;
    }

    /**
     * Set the value of DatiBeniServizi
     *
     * @return  self
     */ 
    public function setDatiBeniServizi($DatiBeniServizi)
    {
        $this->DatiBeniServizi = $DatiBeniServizi;

        return $this;
    }

    /**
     * Get the value of DatiPagamento
     */ 
    public function getDatiPagamento()
    {
        return $this->DatiPagamento;
    }

    /**
     * Set the value of DatiPagamento
     *
     * @return  self
     */ 
    public function setDatiPagamento($DatiPagamento)
    {
        $this->DatiPagamento = $DatiPagamento;

        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void
    {
        $vars = [];

        foreach($this as $property => $value)
        {
            if($value !== null)
            {
                $vars[$property] = $value;
            }
        }

        $this->setProps($vars);

        $writer->write($this->getProps());
    }


}
