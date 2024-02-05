<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TaxTotalType
 *
 * ABIE
 *  Tax Total. Details
 *  A class to describe the total tax for a particular taxation scheme.
 *  Tax Total
 * XSD Type: TaxTotalType
 */
class TaxTotalType
{

    /**
     * BBIE
     *  Tax Total. Tax Amount. Amount
     *  The total tax amount for a particular taxation scheme, e.g., VAT; the sum of the tax subtotals for each tax category within the taxation scheme.
     *  1
     *  Tax Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\TaxAmount $taxAmount
     */
    private $taxAmount = null;

    /**
     * BBIE
     *  Tax Total. Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to the calculated tax total to produce the rounded TaxAmount.
     *  0..1
     *  Tax Total
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RoundingAmount $roundingAmount
     */
    private $roundingAmount = null;

    /**
     * BBIE
     *  Tax Total. Tax Evidence_ Indicator. Indicator
     *  An indicator that this total is recognized as legal evidence for taxation purposes (true) or not (false).
     *  0..1
     *  Tax Total
     *  Tax Evidence
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $taxEvidenceIndicator
     */
    private $taxEvidenceIndicator = null;

    /**
     * BBIE
     *  Tax Total. Tax Included_ Indicator. Indicator
     *  An indicator that tax is included in the calculation (true) or not (false).
     *  0..1
     *  Tax Total
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $taxIncludedIndicator
     */
    private $taxIncludedIndicator = null;

    /**
     * ASBIE
     *  Tax Total. Tax Subtotal
     *  One of the subtotals the sum of which equals the total tax amount for a particular taxation scheme.
     *  0..n
     *  Tax Total
     *  Tax Subtotal
     *  Tax Subtotal
     *  Tax Subtotal
     *
     * @var \CleverIt\UBL\Invoice\TaxSubtotal[] $taxSubtotal
     */
    private $taxSubtotal = [
        
    ];

    /**
     * Gets as taxAmount
     *
     * BBIE
     *  Tax Total. Tax Amount. Amount
     *  The total tax amount for a particular taxation scheme, e.g., VAT; the sum of the tax subtotals for each tax category within the taxation scheme.
     *  1
     *  Tax Total
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
     *  Tax Total. Tax Amount. Amount
     *  The total tax amount for a particular taxation scheme, e.g., VAT; the sum of the tax subtotals for each tax category within the taxation scheme.
     *  1
     *  Tax Total
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
     * Gets as roundingAmount
     *
     * BBIE
     *  Tax Total. Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to the calculated tax total to produce the rounded TaxAmount.
     *  0..1
     *  Tax Total
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RoundingAmount
     */
    public function getRoundingAmount()
    {
        return $this->roundingAmount;
    }

    /**
     * Sets a new roundingAmount
     *
     * BBIE
     *  Tax Total. Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to the calculated tax total to produce the rounded TaxAmount.
     *  0..1
     *  Tax Total
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RoundingAmount $roundingAmount
     * @return self
     */
    public function setRoundingAmount(\CleverIt\UBL\Invoice\RoundingAmount $roundingAmount)
    {
        $this->roundingAmount = $roundingAmount;
        return $this;
    }

    /**
     * Gets as taxEvidenceIndicator
     *
     * BBIE
     *  Tax Total. Tax Evidence_ Indicator. Indicator
     *  An indicator that this total is recognized as legal evidence for taxation purposes (true) or not (false).
     *  0..1
     *  Tax Total
     *  Tax Evidence
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getTaxEvidenceIndicator()
    {
        return $this->taxEvidenceIndicator;
    }

    /**
     * Sets a new taxEvidenceIndicator
     *
     * BBIE
     *  Tax Total. Tax Evidence_ Indicator. Indicator
     *  An indicator that this total is recognized as legal evidence for taxation purposes (true) or not (false).
     *  0..1
     *  Tax Total
     *  Tax Evidence
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $taxEvidenceIndicator
     * @return self
     */
    public function setTaxEvidenceIndicator($taxEvidenceIndicator)
    {
        $this->taxEvidenceIndicator = $taxEvidenceIndicator;
        return $this;
    }

    /**
     * Gets as taxIncludedIndicator
     *
     * BBIE
     *  Tax Total. Tax Included_ Indicator. Indicator
     *  An indicator that tax is included in the calculation (true) or not (false).
     *  0..1
     *  Tax Total
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getTaxIncludedIndicator()
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * Sets a new taxIncludedIndicator
     *
     * BBIE
     *  Tax Total. Tax Included_ Indicator. Indicator
     *  An indicator that tax is included in the calculation (true) or not (false).
     *  0..1
     *  Tax Total
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator($taxIncludedIndicator)
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;
        return $this;
    }

    /**
     * Adds as taxSubtotal
     *
     * ASBIE
     *  Tax Total. Tax Subtotal
     *  One of the subtotals the sum of which equals the total tax amount for a particular taxation scheme.
     *  0..n
     *  Tax Total
     *  Tax Subtotal
     *  Tax Subtotal
     *  Tax Subtotal
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\TaxSubtotal $taxSubtotal
     */
    public function addToTaxSubtotal(\CleverIt\UBL\Invoice\TaxSubtotal $taxSubtotal)
    {
        $this->taxSubtotal[] = $taxSubtotal;
        return $this;
    }

    /**
     * isset taxSubtotal
     *
     * ASBIE
     *  Tax Total. Tax Subtotal
     *  One of the subtotals the sum of which equals the total tax amount for a particular taxation scheme.
     *  0..n
     *  Tax Total
     *  Tax Subtotal
     *  Tax Subtotal
     *  Tax Subtotal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxSubtotal($index)
    {
        return isset($this->taxSubtotal[$index]);
    }

    /**
     * unset taxSubtotal
     *
     * ASBIE
     *  Tax Total. Tax Subtotal
     *  One of the subtotals the sum of which equals the total tax amount for a particular taxation scheme.
     *  0..n
     *  Tax Total
     *  Tax Subtotal
     *  Tax Subtotal
     *  Tax Subtotal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxSubtotal($index)
    {
        unset($this->taxSubtotal[$index]);
    }

    /**
     * Gets as taxSubtotal
     *
     * ASBIE
     *  Tax Total. Tax Subtotal
     *  One of the subtotals the sum of which equals the total tax amount for a particular taxation scheme.
     *  0..n
     *  Tax Total
     *  Tax Subtotal
     *  Tax Subtotal
     *  Tax Subtotal
     *
     * @return \CleverIt\UBL\Invoice\TaxSubtotal[]
     */
    public function getTaxSubtotal()
    {
        return $this->taxSubtotal;
    }

    /**
     * Sets a new taxSubtotal
     *
     * ASBIE
     *  Tax Total. Tax Subtotal
     *  One of the subtotals the sum of which equals the total tax amount for a particular taxation scheme.
     *  0..n
     *  Tax Total
     *  Tax Subtotal
     *  Tax Subtotal
     *  Tax Subtotal
     *
     * @param \CleverIt\UBL\Invoice\TaxSubtotal[] $taxSubtotal
     * @return self
     */
    public function setTaxSubtotal(array $taxSubtotal)
    {
        $this->taxSubtotal = $taxSubtotal;
        return $this;
    }


}

