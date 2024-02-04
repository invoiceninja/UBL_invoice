<?php
/**
 * Created by PhpStorm.
 * User: baselbers
 * Date: 26-10-2017
 * Time: 20:28
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class TaxScheme  extends BaseInvoice implements XmlSerializable {
    private $id;
    private $companyId;
    private $taxScheme;
    private $name;
    private $taxTypeCode;
    private $currencyCode;
    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return TaxScheme
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

        /**
     * @return mixed
     */
    public function getCompanyId() {
        return $this->companyId;
    }

    /**
     * @param mixed $id
     * @return TaxScheme
     */
    public function setCompanyId($companyId) {
        $this->companyId = $companyId;
        return $this;
    }

    private function setTaxScheme(): self {

        $this->taxScheme = $this->companyId ? [
                Schema::CBC.'CompanyID' => $this->companyId,
                Schema::CAC.'TaxScheme' => [
                    Schema::CBC.'ID' => $this->id
                
            ],
        ] : [Schema::CBC.'ID' => $this->id];

        return $this;

    }

    private function getTaxScheme() {
        return $this->taxScheme;
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
     * Get the value of taxTypeCode
     */ 
    public function getTaxTypeCode()
    {
        return $this->taxTypeCode;
    }

    /**
     * Set the value of taxTypeCode
     *
     * @return  self
     */ 
    public function setTaxTypeCode($taxTypeCode)
    {
        $this->taxTypeCode = $taxTypeCode;

        return $this;
    }

    /**
     * Get the value of currencyCode
     */ 
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the value of currencyCode
     *
     * @return  self
     */ 
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    function xmlSerialize(Writer $writer): void {

        $data = [            
            Schema::CBC . 'Name' => $this->name,
            Schema::CBC . 'TaxTypeCode' => $this->taxTypeCode,
            Schema::CBC . 'CurrencyCode' => $this->currencyCode,
        ];

        $this->setTaxScheme()->setProps(array_merge($data,$this->getTaxScheme()));
        
        $writer->write($this->getProps());
    }

}