<?php


namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class DatiBeniServizi extends BaseInvoice implements XmlSerializable
{
    private array $protected = ['protected', 'DettaglioLinee'];

    public array $DettaglioLinee = []; //array( DettaglioLinee )
    public $DatiRiepilogo; //DatiRiepilogo

    /**
     * Get the value of DatiRiepilogo
     */ 
    public function getDatiRiepilogo()
    {
        return $this->DatiRiepilogo;
    }

    /**
     * Set the value of DatiRiepilogo
     *
     * @return  self
     */ 
    public function setDatiRiepilogo($DatiRiepilogo)
    {
        $this->DatiRiepilogo = $DatiRiepilogo;

        return $this;
    }

    /**
     * Get the value of DettaglioLinee
     */ 
    public function getDettaglioLinee()
    {
        return $this->DettaglioLinee;
    }

    /**
     * Set the value of DettaglioLinee
     *
     * @return  self
     */ 
    public function setDettaglioLinee($DettaglioLinee)
    {
        $this->DettaglioLinee[] = $DettaglioLinee;

        return $this;
    }

    function xmlSerialize(Writer $writer): void
    {

        $vars = [];

        foreach($this->getDettaglioLinee() as $item) {
            $vars[] = ['DettaglioLinee' => $item];
        }

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

