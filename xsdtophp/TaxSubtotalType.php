<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TaxSubtotalType
 *
 * ABIE
 *  Tax Subtotal. Details
 *  A class to define the subtotal for a particular tax category within a particular taxation scheme, such as standard rate within VAT.
 *  Tax Subtotal
 * XSD Type: TaxSubtotalType
 */
class TaxSubtotalType
{

    /**
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\TaxableAmount $taxableAmount
     */
    private $taxableAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of this tax subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\TaxAmount $taxAmount
     */
    private $taxAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  The number of this tax subtotal in the sequence of subtotals corresponding to the order in which multiple taxes are applied. If all taxes are applied to the same taxable amount (i.e., their order of application is inconsequential), then CalculationSequenceNumeric is 1 for all tax subtotals applied to a given amount.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\CalculationSequenceNumeric $calculationSequenceNumeric
     */
    private $calculationSequenceNumeric = null;

    /**
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The amount of this tax subtotal, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     */
    private $transactionCurrencyTaxAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate of the tax category applied to this tax subtotal, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\Percent $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  The unit of measure on which the tax calculation is based
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\TierRange $tierRange
     */
    private $tierRange = null;

    /**
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within a specified range of taxable amounts for this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\TierRatePercent $tierRatePercent
     */
    private $tierRatePercent = null;

    /**
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  The tax category applicable to this subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \CleverIt\UBL\Invoice\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * Gets as taxableAmount
     *
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\TaxableAmount
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * Sets a new taxableAmount
     *
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\TaxableAmount $taxableAmount
     * @return self
     */
    public function setTaxableAmount(\CleverIt\UBL\Invoice\TaxableAmount $taxableAmount)
    {
        $this->taxableAmount = $taxableAmount;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of this tax subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\TaxAmount
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of this tax subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\TaxAmount $taxAmount
     * @return self
     */
    public function setTaxAmount(\CleverIt\UBL\Invoice\TaxAmount $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as calculationSequenceNumeric
     *
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  The number of this tax subtotal in the sequence of subtotals corresponding to the order in which multiple taxes are applied. If all taxes are applied to the same taxable amount (i.e., their order of application is inconsequential), then CalculationSequenceNumeric is 1 for all tax subtotals applied to a given amount.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\CalculationSequenceNumeric
     */
    public function getCalculationSequenceNumeric()
    {
        return $this->calculationSequenceNumeric;
    }

    /**
     * Sets a new calculationSequenceNumeric
     *
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  The number of this tax subtotal in the sequence of subtotals corresponding to the order in which multiple taxes are applied. If all taxes are applied to the same taxable amount (i.e., their order of application is inconsequential), then CalculationSequenceNumeric is 1 for all tax subtotals applied to a given amount.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\CalculationSequenceNumeric $calculationSequenceNumeric
     * @return self
     */
    public function setCalculationSequenceNumeric(\CleverIt\UBL\Invoice\CalculationSequenceNumeric $calculationSequenceNumeric)
    {
        $this->calculationSequenceNumeric = $calculationSequenceNumeric;
        return $this;
    }

    /**
     * Gets as transactionCurrencyTaxAmount
     *
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The amount of this tax subtotal, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\TransactionCurrencyTaxAmount
     */
    public function getTransactionCurrencyTaxAmount()
    {
        return $this->transactionCurrencyTaxAmount;
    }

    /**
     * Sets a new transactionCurrencyTaxAmount
     *
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The amount of this tax subtotal, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     * @return self
     */
    public function setTransactionCurrencyTaxAmount(\CleverIt\UBL\Invoice\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount)
    {
        $this->transactionCurrencyTaxAmount = $transactionCurrencyTaxAmount;
        return $this;
    }

    /**
     * Gets as percent
     *
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate of the tax category applied to this tax subtotal, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate of the tax category applied to this tax subtotal, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\Percent $percent
     * @return self
     */
    public function setPercent(\CleverIt\UBL\Invoice\Percent $percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as baseUnitMeasure
     *
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  The unit of measure on which the tax calculation is based
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\BaseUnitMeasure
     */
    public function getBaseUnitMeasure()
    {
        return $this->baseUnitMeasure;
    }

    /**
     * Sets a new baseUnitMeasure
     *
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  The unit of measure on which the tax calculation is based
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\BaseUnitMeasure $baseUnitMeasure
     * @return self
     */
    public function setBaseUnitMeasure(\CleverIt\UBL\Invoice\BaseUnitMeasure $baseUnitMeasure)
    {
        $this->baseUnitMeasure = $baseUnitMeasure;
        return $this;
    }

    /**
     * Gets as perUnitAmount
     *
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\PerUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->perUnitAmount;
    }

    /**
     * Sets a new perUnitAmount
     *
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\PerUnitAmount $perUnitAmount
     * @return self
     */
    public function setPerUnitAmount(\CleverIt\UBL\Invoice\PerUnitAmount $perUnitAmount)
    {
        $this->perUnitAmount = $perUnitAmount;
        return $this;
    }

    /**
     * Gets as tierRange
     *
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\TierRange
     */
    public function getTierRange()
    {
        return $this->tierRange;
    }

    /**
     * Sets a new tierRange
     *
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\TierRange $tierRange
     * @return self
     */
    public function setTierRange(\CleverIt\UBL\Invoice\TierRange $tierRange)
    {
        $this->tierRange = $tierRange;
        return $this;
    }

    /**
     * Gets as tierRatePercent
     *
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within a specified range of taxable amounts for this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\TierRatePercent
     */
    public function getTierRatePercent()
    {
        return $this->tierRatePercent;
    }

    /**
     * Sets a new tierRatePercent
     *
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within a specified range of taxable amounts for this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\TierRatePercent $tierRatePercent
     * @return self
     */
    public function setTierRatePercent(\CleverIt\UBL\Invoice\TierRatePercent $tierRatePercent)
    {
        $this->tierRatePercent = $tierRatePercent;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  The tax category applicable to this subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \CleverIt\UBL\Invoice\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  The tax category applicable to this subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \CleverIt\UBL\Invoice\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(\CleverIt\UBL\Invoice\TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }


}

