<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 27-10-2016
 * Time: 10:43
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class AllowanceCharge  extends BaseInvoice implements XmlSerializable {
    /**
     * @var boolean
     */
    private $chargeIndicator;
    /**
     * @var int
     */
    private $allowanceChargeReasonCode;
    /**
     * @var string
     */
    private $allowanceChargeReason;
    /**
     * @var int
     */
    private $multiplierFactorNumeric;
    /**
     * @var float
     */
    private $baseAmount;
    /**
     * @var float
     */
    private $amount;
    
    /**
     * @var TaxTotal
     */
    private $taxTotal;
    
    /**
     * @var TaxCategory
     */
    private $taxCategory;

    /**
     * @param string $chargeIndicator 'true' : 'false'
     * @return AllowanceCharge
     */
    public function setChargeIndicator($chargeIndicator) {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    public function getChargeIndicator() {
        return $this->chargeIndicator;
    }

    /**
     * @return int
     */
    public function getAllowanceChargeReasonCode() {
        return $this->allowanceChargeReasonCode;
    }

    /**
     * @param int $allowanceChargeReasonCode
     * @return AllowanceCharge
     */
    public function setAllowanceChargeReasonCode($allowanceChargeReasonCode) {
        $this->allowanceChargeReasonCode = $allowanceChargeReasonCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowanceChargeReason() {
        return $this->allowanceChargeReason;
    }

    /**
     * @param string $allowanceChargeReason
     * @return AllowanceCharge
     */
    public function setAllowanceChargeReason($allowanceChargeReason) {
        $this->allowanceChargeReason = $allowanceChargeReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getMultiplierFactorNumeric() {
        return $this->multiplierFactorNumeric;
    }

    /**
     * @param int $multiplierFactorNumeric
     * @return AllowanceCharge
     */
    public function setMultiplierFactorNumeric($multiplierFactorNumeric) {
        $this->multiplierFactorNumeric = $multiplierFactorNumeric;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAmount() {
        return $this->baseAmount;
    }

    /**
     * @param float $baseAmount
     * @return AllowanceCharge
     */
    public function setBaseAmount($baseAmount) {
        $this->baseAmount = $baseAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return AllowanceCharge
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return TaxCategory
     */
    public function getTaxCategory() {
        return $this->taxCategory;
    }
    
    /**
     * @param TaxCategory $taxCategory
     * @return AllowanceCharge
     */
    public function setTaxCategory($taxCategory) {
        $this->taxCategory = $taxCategory;
        return $this;
    }
    
    
    /**
     * @return TaxCategory
     */
    public function getTaxtotal() {
        return $this->taxTotal;
    }
    
    /**
     * @param TaxTotal $taxTotal
     * @return AllowanceCharge
     */
    public function setTaxtotal($taxTotal) {
        $this->taxTotal = $taxTotal;
        return $this;
    }
    
    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {

        $data = [
            Schema::CBC . 'ChargeIndicator' => $this->getChargeIndicator(),
            Schema::CBC . 'AllowanceChargeReasonCode' => $this->allowanceChargeReasonCode,
            Schema::CBC . 'AllowanceChargeReason' => $this->allowanceChargeReason,
            Schema::CBC . 'MultiplierFactorNumeric' => $this->multiplierFactorNumeric,
            [
                'name' => Schema::CBC . 'Amount',
                'value' => $this->amount,
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]
            ],
            Schema::CAC . 'TaxCategory' => $this->taxCategory,
            Schema::CAC . 'TaxTotal' => $this->taxTotal,

        ];


        if ($this->baseAmount) {
            $data[] =
                [
                    'name' => Schema::CBC . 'BaseAmount',
                    'value' => $this->baseAmount,
                    'attributes' => [
                        'currencyID' => Generator::$currencyID
                    ]
                ];
            
        }

        $this->setProps($data);

        $writer->write($this->getProps());

    }
}
