<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\Codes\V21\UNCL5305;

class TaxCategory extends BaseInvoice implements XmlSerializable {
    
    private $id;
    private $percent;
    private $taxScheme;
    private $name;
    private $idAttributes = [
        'schemeID'   => UNCL5305::UNCL5305,
        'schemeName' => 'Duty or tax or fee category'
    ];
    private $taxExemptionReason;
    private $taxExemptionReasonCode;
    /**
     * @return mixed
     */
    public function getId() {
        return (string)$this->id;
    }

    /**
     * @param mixed $id
     * @return TaxCategory
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
     * @return TaxCategory
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
     * @return TaxCategory
     */
    public function setTaxScheme($taxScheme) {
        $this->taxScheme = $taxScheme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return TaxCategory
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }


    public function validate() {
        if ($this->id === null) {
            throw new \InvalidArgumentException('Missing taxcategory id');
        }

        if ($this->percent === null) {
            throw new \InvalidArgumentException('Missing taxcategory percent');
        }
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
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {
        $this->validate();

        $this->setProps([
            [
                'name' => Schema::CBC . 'ID',
                'value' => $this->getId(),
                // 'attributes' => $this->idAttributes,
            ],
            Schema::CBC . 'Name' => $this->name,
            Schema::CBC . 'Percent' => number_format($this->percent ?? 0, 2, '.', ''),
            Schema::CBC . 'TaxExemptionReasonCode' => $this->taxExemptionReasonCode,
            Schema::CBC . 'TaxExemptionReason' => $this->taxExemptionReason,
            Schema::CAC . 'TaxScheme' => $this->taxScheme,

        ]);

        $writer->write($this->getProps());
    }

}