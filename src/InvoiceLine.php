<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 25-10-2016
 * Time: 14:17
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class InvoiceLine  extends BaseInvoice implements XmlSerializable {
    private $id;
    protected $invoicedQuantity;
    private $lineExtensionAmount;
    private $unitCode = UnitCode::MONTH;

    private $unitCodeListId;
    private $invoicePeriod;
    private $note;
    private $accountingCostCode;
    private $accountingCost;
    protected $isCreditNoteLine = false;

    /**
     * @var TaxTotal
     */
    private $taxTotal;
    /**
     * @var Item
     */
    private $item;
    /**
     * @var Price
     */
    private $price;

    /**
     * @return mixed
     */
    public function getId() {
        return (string) $this->id;
    }

    /**
     * @param mixed $id
     * @return InvoiceLine
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoicedQuantity() {
        return $this->invoicedQuantity;
    }

    /**
     * @param mixed $invoicedQuantity
     * @return InvoiceLine
     */
    public function setInvoicedQuantity($invoicedQuantity) {
        $this->invoicedQuantity = $invoicedQuantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineExtensionAmount() {
        return $this->lineExtensionAmount;
    }

    /**
     * @param mixed $lineExtensionAmount
     * @return InvoiceLine
     */
    public function setLineExtensionAmount($lineExtensionAmount) {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function getTaxTotal() {
        return $this->taxTotal ?: null;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return InvoiceLine
     */
    public function setTaxTotal($taxTotal) {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItem() {
        return $this->item;
    }

    /**
     * @param mixed $item
     * @return InvoiceLine
     */
    public function setItem($item) {
        $this->item = $item;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param Price $price
     * @return InvoiceLine
     */
    public function setPrice($price) {
        $this->price = $price;
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
     * @return InvoiceLine
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
     * Get the value of invoicePeriod
     */ 
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Set the value of invoicePeriod
     *
     * @return  self
     */ 
    public function setInvoicePeriod($invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;

        return $this;
    }

    /**
     * Get the value of note
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */ 
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of accountingCostCode
     */ 
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Set the value of accountingCostCode
     *
     * @return  self
     */ 
    public function setAccountingCostCode($accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;

        return $this;
    }

    /**
     * Get the value of accountingCost
     */ 
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Set the value of accountingCost
     *
     * @return  self
     */ 
    public function setAccountingCost($accountingCost)
    {
        $this->accountingCost = $accountingCost;

        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {
        
        $this->setProps([
            Schema::CBC . 'ID' => $this->getId(),
            [
                'name' => Schema::CBC .
                    ($this->isCreditNoteLine ? 'CreditedQuantity' : 'InvoicedQuantity'),
                'value' => number_format($this->invoicedQuantity ?? 0, 2, '.', ''),
                'attributes' => [
                    'unitCode' => $this->unitCode,
                    'unitCodeListID' => $this->getUnitCodeListId()
                ]
            ],
            [
                'name' => Schema::CBC . 'LineExtensionAmount',
                'value' => number_format($this->lineExtensionAmount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]
            ],
            Schema::CAC . 'TaxTotal' => $this->taxTotal,
            Schema::CAC . 'Item' => $this->item,
            Schema::CAC . 'Price' => $this->price,
            Schema::CBC . 'Note' => $this->getNote(),
            Schema::CAC . 'InvoicePeriod' => $this->invoicePeriod,
            Schema::CBC . 'AccountingCostCode' => $this->accountingCostCode,
            Schema::CBC . 'AccountingCost' => $this->accountingCost,
        ]);

        $writer->write($this->getProps());
                
    }

}