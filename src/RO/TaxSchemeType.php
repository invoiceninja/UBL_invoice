<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TaxSchemeType
 *
 * ABIE
 *  Tax Scheme. Details
 *  A class to describe a taxation scheme (e.g., VAT, State tax, County tax).
 *  Tax Scheme
 * XSD Type: TaxSchemeType
 */
class TaxSchemeType
{
    /**
     * BBIE
     *  Tax Scheme. Identifier
     *  An identifier for this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/EDIFICASEU_TaxExemptionReason_D09B.xsd
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tax Scheme. Name
     *  The name of this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Value Added Tax , Wholesale Tax , Sales Tax , State Tax
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  A code signifying the type of tax.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  Consumption , Sales
     *
     * @var \CleverIt\UBL\Invoice\RO\TaxTypeCode $taxTypeCode
     */
    private $taxTypeCode = null;

    /**
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  A code signifying the currency in which the tax is collected and reported.
     *  0..1
     *  Tax Scheme
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\CurrencyCode $currencyCode
     */
    private $currencyCode = null;

    /**
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\RO\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     */
    private $jurisdictionRegionAddress = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Tax Scheme. Identifier
     *  An identifier for this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/EDIFICASEU_TaxExemptionReason_D09B.xsd
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Tax Scheme. Identifier
     *  An identifier for this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/EDIFICASEU_TaxExemptionReason_D09B.xsd
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(?\CleverIt\UBL\Invoice\RO\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Tax Scheme. Name
     *  The name of this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Value Added Tax , Wholesale Tax , Sales Tax , State Tax
     *
     * @return \CleverIt\UBL\Invoice\RO\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Tax Scheme. Name
     *  The name of this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Value Added Tax , Wholesale Tax , Sales Tax , State Tax
     *
     * @param \CleverIt\UBL\Invoice\RO\Name $name
     * @return self
     */
    public function setName(?\CleverIt\UBL\Invoice\RO\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as taxTypeCode
     *
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  A code signifying the type of tax.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  Consumption , Sales
     *
     * @return \CleverIt\UBL\Invoice\RO\TaxTypeCode
     */
    public function getTaxTypeCode()
    {
        return $this->taxTypeCode;
    }

    /**
     * Sets a new taxTypeCode
     *
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  A code signifying the type of tax.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  Consumption , Sales
     *
     * @param \CleverIt\UBL\Invoice\RO\TaxTypeCode $taxTypeCode
     * @return self
     */
    public function setTaxTypeCode(?\CleverIt\UBL\Invoice\RO\TaxTypeCode $taxTypeCode = null)
    {
        $this->taxTypeCode = $taxTypeCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  A code signifying the currency in which the tax is collected and reported.
     *  0..1
     *  Tax Scheme
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  A code signifying the currency in which the tax is collected and reported.
     *  0..1
     *  Tax Scheme
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\CurrencyCode $currencyCode
     * @return self
     */
    public function setCurrencyCode(?\CleverIt\UBL\Invoice\RO\CurrencyCode $currencyCode = null)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\JurisdictionRegionAddress $jurisdictionRegionAddress
     */
    public function addToJurisdictionRegionAddress(\CleverIt\UBL\Invoice\RO\JurisdictionRegionAddress $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress[] = $jurisdictionRegionAddress;
        return $this;
    }

    /**
     * isset jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionRegionAddress($index)
    {
        return isset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * unset jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionRegionAddress($index)
    {
        unset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * Gets as jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\RO\JurisdictionRegionAddress[]
     */
    public function getJurisdictionRegionAddress()
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * Sets a new jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\RO\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(array $jurisdictionRegionAddress = null)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }
}

