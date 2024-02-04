<?php

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class ClassifiedTaxCategory  extends BaseInvoice implements XmlSerializable {
    private $id;
    private $percent;
    private $taxScheme;
    private $name;
    private $taxExemptionReason;
    private $taxExemptionReasonCode;
    private $schemeID;
    private $schemeName;
    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ClassifiedTaxCategory
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPercent() {
        return $this->percent;
    }

    /**
     * @param mixed $percent
     * @return ClassifiedTaxCategory
     */
    public function setPercent($percent) {
        $this->percent = $percent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxScheme() {
        return $this->taxScheme;
    }

    /**
     * @param mixed $taxScheme
     * @return ClassifiedTaxCategory
     */
    public function setTaxScheme($taxScheme) {
        $this->taxScheme = $taxScheme;
        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of taxExemptionReason
     */ 
    public function getTaxExemptionReason()
    {
        return $this->taxExemptionReason;
    }

    /**
     * Set the value of taxExemptionReason
     *
     * @return  self
     */ 
    public function setTaxExemptionReason($taxExemptionReason)
    {
        $this->taxExemptionReason = $taxExemptionReason;

        return $this;
    }

    /**
     * Get the value of taxExemptionReasonCode
     */ 
    public function getTaxExemptionReasonCode()
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * Set the value of taxExemptionReasonCode
     *
     * @return  self
     */ 
    public function setTaxExemptionReasonCode($taxExemptionReasonCode)
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;

        return $this;
    }

    /**
     * Get the value of schemeID
     */ 
    public function getSchemeID()
    {
        return $this->schemeID;
    }

    /**
     * Set the value of schemeID
     *
     * @return  self
     */ 
    public function setSchemeID($schemeID)
    {
        $this->schemeID = $schemeID;

        return $this;
    }

    /**
     * Get the value of schemeName
     */ 
    public function getSchemeName()
    {
        return $this->schemeName;
    }

    /**
     * Set the value of schemeName
     *
     * @return  self
     */ 
    public function setSchemeName($schemeName)
    {
        $this->schemeName = $schemeName;

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

        $this->setProps([
            Schema::CBC . 'ID' => $this->id,
            Schema::CBC . 'Name' => $this->name,
            Schema::CBC . 'Percent' => number_format($this->percent ?? 0, 2, '.', ''),
            Schema::CAC . 'TaxScheme' => [
                Schema::CBC . 'ID' => $this->taxScheme
            ],
            Schema::CBC . 'TaxExemptionReasonCode' => $this->taxExemptionReasonCode,
            Schema::CBC . 'TaxExemptionReason' => $this->taxExemptionReason,
            Schema::CAC . 'TaxScheme' => $this->taxScheme
        ]);

        $writer->write($this->getProps());
    }

}