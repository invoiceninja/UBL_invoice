<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 25-10-2016
 * Time: 15:48
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class LegalMonetaryTotal  extends BaseInvoice implements XmlSerializable {
    private $lineExtensionAmount;
    private $taxExclusiveAmount;
    private $taxInclusiveAmount;
    private $allowanceTotalAmount;
    private $payableAmount;
    private $prepaidAmount;

    /**
     * @return mixed
     */
    public function getLineExtensionAmount() {
        return $this->lineExtensionAmount;
    }

    /**
     * @param mixed $lineExtensionAmount
     * @return LegalMonetaryTotal
     */
    public function setLineExtensionAmount($lineExtensionAmount) {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxExclusiveAmount() {
        return $this->taxExclusiveAmount;
    }

    /**
     * @param mixed $taxExclusiveAmount
     * @return LegalMonetaryTotal
     */
    public function setTaxExclusiveAmount($taxExclusiveAmount) {
        $this->taxExclusiveAmount = $taxExclusiveAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxInclusiveAmount() {
        return $this->taxInclusiveAmount;
    }

    /**
     * @param mixed $taxInclusiveAmount
     * @return LegalMonetaryTotal
     */
    public function setTaxInclusiveAmount($taxInclusiveAmount) {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllowanceTotalAmount() {
        return $this->allowanceTotalAmount;
    }

    /**
     * @param mixed $allowanceTotalAmount
     * @return LegalMonetaryTotal
     */
    public function setAllowanceTotalAmount($allowanceTotalAmount) {
        $this->allowanceTotalAmount = $allowanceTotalAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayableAmount() {
        return $this->payableAmount;
    }

    /**
     * @param mixed $payableAmount
     * @return LegalMonetaryTotal
     */
    public function setPayableAmount($payableAmount) {
        $this->payableAmount = $payableAmount;
        return $this;
    }


    /**
     * Get the value of prepaidAmount
     */ 
    public function getPrepaidAmount()
    {
        return $this->prepaidAmount ? [
                'name' => Schema::CBC . 'PrepaidAmount',
                'value' => number_format($this->prepaidAmount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]
            ] : null;
    }

    /**
     * Set the value of prepaidAmount
     *
     * @return  self
     */ 
    public function setPrepaidAmount($prepaidAmount)
    {
        $this->prepaidAmount = $prepaidAmount;

        return $this;
    }
    
    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {
        $writer->write([
            [
                'name' => Schema::CBC . 'LineExtensionAmount',
                'value' => number_format($this->lineExtensionAmount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]

            ],
            [
                'name' => Schema::CBC . 'TaxExclusiveAmount',
                'value' => number_format($this->taxExclusiveAmount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]

            ],
            [
                'name' => Schema::CBC . 'TaxInclusiveAmount',
                'value' => number_format($this->taxInclusiveAmount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]

            ],
            [
                'name' => Schema::CBC . 'AllowanceTotalAmount',
                'value' => number_format($this->allowanceTotalAmount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]

            ],
            [
                'name' => Schema::CBC . 'PayableAmount',
                'value' => number_format($this->payableAmount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]

            ],
            $this->getPrepaidAmount()
        ]);
    }

}