<?php


namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiTrasmissione extends BaseInvoice implements XmlSerializable
{
 
    public $IdTrasmittente; //IdTrasmittente
    public $ProgressivoInvio; //String
    public $FormatoTrasmissione; //String
    public $CodiceDestinatario; //String


    /**
     * Get the value of CodiceDestinatario
     */ 
    public function getCodiceDestinatario()
    {
        return $this->CodiceDestinatario;
    }

    /**
     * Set the value of CodiceDestinatario
     *
     * @return  self
     */ 
    public function setCodiceDestinatario($CodiceDestinatario)
    {
        $this->CodiceDestinatario = $CodiceDestinatario;

        return $this;
    }

    /**
     * Get the value of FormatoTrasmissione
     */ 
    public function getFormatoTrasmissione()
    {
        return $this->FormatoTrasmissione;
    }

    /**
     * Set the value of FormatoTrasmissione
     *
     * @return  self
     */ 
    public function setFormatoTrasmissione($FormatoTrasmissione)
    {
        $this->FormatoTrasmissione = $FormatoTrasmissione;

        return $this;
    }

    /**
     * Get the value of ProgressivoInvio
     */ 
    public function getProgressivoInvio()
    {
        return $this->ProgressivoInvio;
    }

    /**
     * Set the value of ProgressivoInvio
     *
     * @return  self
     */ 
    public function setProgressivoInvio($ProgressivoInvio)
    {
        $this->ProgressivoInvio = $ProgressivoInvio;

        return $this;
    }

    /**
     * Get the value of IdTrasmittente
     */ 
    public function getIdTrasmittente()
    {
        return $this->IdTrasmittente;
    }

    /**
     * Set the value of IdTrasmittente
     *
     * @return  self
     */ 
    public function setIdTrasmittente($IdTrasmittente)
    {
        $this->IdTrasmittente = $IdTrasmittente;

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
