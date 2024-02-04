<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 25-10-2016
 * Time: 16:39
 */

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class Item  extends BaseInvoice implements XmlSerializable {
    private $description;
    private $name;
    private $buyersItemIdentification;
    private $sellersItemIdentification;
    private $standardItemIdentification;
    private $classifiedTaxCategory;
    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Item
     */
    public function setDescription($description) {
        $this->description = $description;
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
     * @return Item
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassifiedTaxCategory() {
        return $this->classifiedTaxCategory;
    }

    /**
     * @param mixed $classifiedTaxCategory
     * @return Item
     */
    public function setClassifiedTaxCategory($classifiedTaxCategory) {
        $this->classifiedTaxCategory = $classifiedTaxCategory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSellersItemIdentification() {
        return $this->sellersItemIdentification;
    }

    /**
     * @param mixed $sellersItemIdentification
     * @return Item
     */
    public function setSellersItemIdentification($sellersItemIdentification) {
        $this->sellersItemIdentification = $sellersItemIdentification;
        return $this;
    }

    
    /**
     * Get the value of buyersItemIdentification
     */ 
    public function getBuyersItemIdentification()
    {
        return $this->buyersItemIdentification;
    }

    /**
     * Set the value of buyersItemIdentification
     *
     * @return  self
     */ 
    public function setBuyersItemIdentification($buyersItemIdentification)
    {
        $this->buyersItemIdentification = $buyersItemIdentification;

        return $this;
    }

    /**
     * Get the value of standardItemIdentification
     */ 
    public function getStandardItemIdentification()
    {
        return $this->standardItemIdentification;
    }

    /**
     * Set the value of standardItemIdentification
     *
     * @return  self
     */ 
    public function setStandardItemIdentification($standardItemIdentification)
    {
        $this->standardItemIdentification = $standardItemIdentification;

        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {

        $this->setProps([
           Schema::CBC.'Description' => $this->description,
           Schema::CBC.'Name' => $this->name,
           Schema::CAC.'ClassifiedTaxCategory' => $this->classifiedTaxCategory,
           Schema::CAC.'SellersItemIdentification' => [
               Schema::CBC.'ID' => $this->sellersItemIdentification
           ],
           Schema::CAC . 'BuyersItemIdentification' => [
                Schema::CBC . 'ID' => $this->buyersItemIdentification
           ],
           Schema::CAC . 'StandardItemIdentification' => [
                Schema::CBC . 'ID' => $this->standardItemIdentification
           ],
        ]);

        $writer->write($this->getProps());
    }

}