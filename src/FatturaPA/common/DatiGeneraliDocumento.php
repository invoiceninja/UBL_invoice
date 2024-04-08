<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiGeneraliDocumento extends BaseInvoice implements XmlSerializable
{
 
    public string $TipoDocumento; //String
    public string $Divisa; //String
    public string $Data; //Date
    public string $Numero; //String
    public array $Causale = [];  //array( String )
 
    /**
     * Get the value of Causale
     */ 
    public function getCausale()
    {
        return $this->Causale;
    }

    /**
     * Set the value of Causale
     *
     * @return  self
     */ 
    public function setCausale($Causale)
    {
        $this->Causale[] = $Causale;

        return $this;
    }

    /**
     * Get the value of Numero
     */ 
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Set the value of Numero
     *
     * @return  self
     */ 
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;

        return $this;
    }

    /**
     * Get the value of Data
     */ 
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Set the value of Data
     *
     * @return  self
     */ 
    public function setData($Data)
    {
        $this->Data = $Data;

        return $this;
    }

    /**
     * Get the value of Divisa
     */ 
    public function getDivisa()
    {
        return $this->Divisa;
    }

    /**
     * Set the value of Divisa
     *
     * @return  self
     */ 
    public function setDivisa($Divisa)
    {
        $this->Divisa = $Divisa;

        return $this;
    }

    /**
     * Get the value of TipoDocumento
     */ 
    public function getTipoDocumento()
    {
        return $this->TipoDocumento;
    }

    /**
     * Set the value of TipoDocumento
     *
     * @return  self
     */ 
    public function setTipoDocumento($TipoDocumento)
    {
        $this->TipoDocumento = $TipoDocumento;

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
