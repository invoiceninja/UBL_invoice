<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TaxCategoryType
 *
 * ABIE
 *  Tax Category. Details
 *  A class to describe one of the tax categories within a taxation scheme (e.g., High Rate VAT, Low Rate VAT).
 *  Tax Category
 * XSD Type: TaxCategoryType
 */
class TaxCategoryType
{

    /**
     * BBIE
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\Percent $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @var \CleverIt\UBL\Invoice\TaxExemptionReasonCode $taxExemptionReasonCode
     */
    private $taxExemptionReasonCode = null;

    /**
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\TaxExemptionReason[] $taxExemptionReason
     */
    private $taxExemptionReason = [
        
    ];

    /**
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\TierRange $tierRange
     */
    private $tierRange = null;

    /**
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\TierRatePercent $tierRatePercent
     */
    private $tierRatePercent = null;

    /**
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \CleverIt\UBL\Invoice\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
     *
     * @return \CleverIt\UBL\Invoice\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
     *
     * @param \CleverIt\UBL\Invoice\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
     *
     * @return \CleverIt\UBL\Invoice\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
     *
     * @param \CleverIt\UBL\Invoice\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as percent
     *
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
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
     * Gets as taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @return \CleverIt\UBL\Invoice\TaxExemptionReasonCode
     */
    public function getTaxExemptionReasonCode()
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * Sets a new taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @param \CleverIt\UBL\Invoice\TaxExemptionReasonCode $taxExemptionReasonCode
     * @return self
     */
    public function setTaxExemptionReasonCode(\CleverIt\UBL\Invoice\TaxExemptionReasonCode $taxExemptionReasonCode)
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;
        return $this;
    }

    /**
     * Adds as taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\TaxExemptionReason $taxExemptionReason
     */
    public function addToTaxExemptionReason(\CleverIt\UBL\Invoice\TaxExemptionReason $taxExemptionReason)
    {
        $this->taxExemptionReason[] = $taxExemptionReason;
        return $this;
    }

    /**
     * isset taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxExemptionReason($index)
    {
        return isset($this->taxExemptionReason[$index]);
    }

    /**
     * unset taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxExemptionReason($index)
    {
        unset($this->taxExemptionReason[$index]);
    }

    /**
     * Gets as taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\TaxExemptionReason[]
     */
    public function getTaxExemptionReason()
    {
        return $this->taxExemptionReason;
    }

    /**
     * Sets a new taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\TaxExemptionReason[] $taxExemptionReason
     * @return self
     */
    public function setTaxExemptionReason(array $taxExemptionReason)
    {
        $this->taxExemptionReason = $taxExemptionReason;
        return $this;
    }

    /**
     * Gets as tierRange
     *
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
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
     * Gets as taxScheme
     *
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \CleverIt\UBL\Invoice\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \CleverIt\UBL\Invoice\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\CleverIt\UBL\Invoice\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }


}

