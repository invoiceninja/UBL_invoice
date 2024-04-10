<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiTrasporto extends BaseInvoice implements XmlSerializable
{

    public $DatiAnagraficiVettore; //DatiAnagraficiVettore
    public $DataOraConsegna; //Date


    /**
     * Get the value of DatiAnagraficiVettore
     */ 
    public function getDatiAnagraficiVettore()
    {
        return $this->DatiAnagraficiVettore;
    }

    /**
     * Set the value of DatiAnagraficiVettore
     *
     * @return  self
     */ 
    public function setDatiAnagraficiVettore($DatiAnagraficiVettore)
    {
        $this->DatiAnagraficiVettore = $DatiAnagraficiVettore;

        return $this;
    }

    /**
     * Get the value of DataOraConsegna
     */ 
    public function getDataOraConsegna()
    {
        return $this->DataOraConsegna;
    }

    /**
     * Set the value of DataOraConsegna
     *
     * @return  self
     */ 
    public function setDataOraConsegna($DataOraConsegna)
    {
        $this->DataOraConsegna = $DataOraConsegna;

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
