<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 25-10-2016
 * Time: 16:51
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\Codes\V21\UnitCode;

class Price  extends BaseInvoice implements XmlSerializable {
    private $priceAmount;
    private $baseQuantity;
    private $unitCode = UnitCode::UNIT;
    private $unitCodeListId;
    private $allowanceCharge;

    /**
     * @return mixed
     */
    public function getPriceAmount() {
        return $this->priceAmount;
    }

    /**
     * @param mixed $priceAmount
     * @return Price
     */
    public function setPriceAmount($priceAmount) {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBaseQuantity() {
        return $this->baseQuantity;
    }

    /**
     * @param mixed $baseQuantity
     * @return Price
     */
    public function setBaseQuantity($baseQuantity) {
        $this->baseQuantity = $baseQuantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitCode() {
        return $this->unitCode;
    }

    /**
     * @param mixed $unitCode
     * @return Price
     */
    public function setUnitCode($unitCode) {
        $this->unitCode = $unitCode;
        return $this;
    }

    /**
     * Get the value of unitCodeListId
     */ 
    public function getUnitCodeListId()
    {
        return $this->unitCodeListId;
    }

    /**
     * Set the value of unitCodeListId
     *
     * @return  self
     */ 
    public function setUnitCodeListId($unitCodeListId)
    {
        $this->unitCodeListId = $unitCodeListId;

        return $this;
    }

    /**
     * Get the value of allowanceCharge
     */ 
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Set the value of allowanceCharge
     *
     * @return  self
     */ 
    public function setAllowanceCharge($allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;

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
            [
                'name' => Schema::CBC.'PriceAmount',
                'value' => $this->priceAmount,
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]
            ],
            [
                'name' => Schema::CBC . 'BaseQuantity',
                'value' => number_format($this->baseQuantity, 2, '.', ''),
                'attributes' => [
                    'unitCode' => $this->unitCode,
                    'unitCodeListID' => $this->getUnitCodeListId(),
                ]
            ],
             Schema::CAC . 'AllowanceCharge' => $this->allowanceCharge,

        ]);

        $writer->write($this->getProps());
    }

}