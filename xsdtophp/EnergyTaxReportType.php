<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing EnergyTaxReportType
 *
 * ABIE
 *  Energy Tax Report. Details
 *  A class to describe energy taxes.
 *  Energy Tax Report
 * XSD Type: EnergyTaxReportType
 */
class EnergyTaxReportType
{

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @var \CleverIt\UBL\Invoice\TaxEnergyAmount $taxEnergyAmount
     */
    private $taxEnergyAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @var \CleverIt\UBL\Invoice\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     */
    private $taxEnergyOnAccountAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @var \CleverIt\UBL\Invoice\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     */
    private $taxEnergyBalanceAmount = null;

    /**
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \CleverIt\UBL\Invoice\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @return \CleverIt\UBL\Invoice\TaxEnergyAmount
     */
    public function getTaxEnergyAmount()
    {
        return $this->taxEnergyAmount;
    }

    /**
     * Sets a new taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @param \CleverIt\UBL\Invoice\TaxEnergyAmount $taxEnergyAmount
     * @return self
     */
    public function setTaxEnergyAmount(\CleverIt\UBL\Invoice\TaxEnergyAmount $taxEnergyAmount)
    {
        $this->taxEnergyAmount = $taxEnergyAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @return \CleverIt\UBL\Invoice\TaxEnergyOnAccountAmount
     */
    public function getTaxEnergyOnAccountAmount()
    {
        return $this->taxEnergyOnAccountAmount;
    }

    /**
     * Sets a new taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @param \CleverIt\UBL\Invoice\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     * @return self
     */
    public function setTaxEnergyOnAccountAmount(\CleverIt\UBL\Invoice\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount)
    {
        $this->taxEnergyOnAccountAmount = $taxEnergyOnAccountAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @return \CleverIt\UBL\Invoice\TaxEnergyBalanceAmount
     */
    public function getTaxEnergyBalanceAmount()
    {
        return $this->taxEnergyBalanceAmount;
    }

    /**
     * Sets a new taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @param \CleverIt\UBL\Invoice\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     * @return self
     */
    public function setTaxEnergyBalanceAmount(\CleverIt\UBL\Invoice\TaxEnergyBalanceAmount $taxEnergyBalanceAmount)
    {
        $this->taxEnergyBalanceAmount = $taxEnergyBalanceAmount;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
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
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
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

