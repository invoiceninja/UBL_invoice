<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing RequestedTenderTotalType
 *
 * ABIE
 *  Requested Tender Total. Details
 *  A class defining budgeted monetary amounts.
 *  Requested Tender Total
 * XSD Type: RequestedTenderTotalType
 */
class RequestedTenderTotalType
{
    /**
     * BBIE
     *  Requested Tender Total. Estimated_ Overall Contract. Amount
     *  The estimated overall monetary amount of a contract.
     *  0..1
     *  Requested Tender Total
     *  Estimated
     *  Overall Contract
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\EstimatedOverallContractAmount $estimatedOverallContractAmount
     */
    private $estimatedOverallContractAmount = null;

    /**
     * BBIE
     *  Requested Tender Total. Total_ Amount. Amount
     *  The monetary amount of the total budget including net amount, taxes, and material and instalment costs. 
     *  0..1
     *  Requested Tender Total
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * BBIE
     *  Requested Tender Total. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Requested Tender Total
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $taxIncludedIndicator
     */
    private $taxIncludedIndicator = null;

    /**
     * BBIE
     *  Requested Tender Total. Minimum_ Amount. Amount
     *  The minimum monetary amount of the budget.
     *  0..1
     *  Requested Tender Total
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * BBIE
     *  Requested Tender Total. Maximum_ Amount. Amount
     *  The maximum monetary amount of the budget.
     *  0..1
     *  Requested Tender Total
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * BBIE
     *  Requested Tender Total. Monetary Scope. Text
     *  A description of the monetary scope of the budget.
     *  0..n
     *  Requested Tender Total
     *  Monetary Scope
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MonetaryScope[] $monetaryScope
     */
    private $monetaryScope = [
        
    ];

    /**
     * BBIE
     *  Requested Tender Total. Average_ Subsequent Contract. Amount
     *  The average monetary amount for the subsequent contracts following this budget amount.
     *  0..1
     *  Requested Tender Total
     *  Average
     *  Subsequent Contract
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AverageSubsequentContractAmount $averageSubsequentContractAmount
     */
    private $averageSubsequentContractAmount = null;

    /**
     * ASBIE
     *  Requested Tender Total. Applicable_ Tax Category. Tax Category
     *  Describes the categories of taxes that apply to the budget amount.
     *  0..n
     *  Requested Tender Total
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \CleverIt\UBL\Invoice\RO\ApplicableTaxCategory[] $applicableTaxCategory
     */
    private $applicableTaxCategory = [
        
    ];

    /**
     * Gets as estimatedOverallContractAmount
     *
     * BBIE
     *  Requested Tender Total. Estimated_ Overall Contract. Amount
     *  The estimated overall monetary amount of a contract.
     *  0..1
     *  Requested Tender Total
     *  Estimated
     *  Overall Contract
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\EstimatedOverallContractAmount
     */
    public function getEstimatedOverallContractAmount()
    {
        return $this->estimatedOverallContractAmount;
    }

    /**
     * Sets a new estimatedOverallContractAmount
     *
     * BBIE
     *  Requested Tender Total. Estimated_ Overall Contract. Amount
     *  The estimated overall monetary amount of a contract.
     *  0..1
     *  Requested Tender Total
     *  Estimated
     *  Overall Contract
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\EstimatedOverallContractAmount $estimatedOverallContractAmount
     * @return self
     */
    public function setEstimatedOverallContractAmount(?\CleverIt\UBL\Invoice\RO\EstimatedOverallContractAmount $estimatedOverallContractAmount = null)
    {
        $this->estimatedOverallContractAmount = $estimatedOverallContractAmount;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * BBIE
     *  Requested Tender Total. Total_ Amount. Amount
     *  The monetary amount of the total budget including net amount, taxes, and material and instalment costs. 
     *  0..1
     *  Requested Tender Total
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TotalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * BBIE
     *  Requested Tender Total. Total_ Amount. Amount
     *  The monetary amount of the total budget including net amount, taxes, and material and instalment costs. 
     *  0..1
     *  Requested Tender Total
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(?\CleverIt\UBL\Invoice\RO\TotalAmount $totalAmount = null)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Gets as taxIncludedIndicator
     *
     * BBIE
     *  Requested Tender Total. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Requested Tender Total
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
     *  Requested Tender Total. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Requested Tender Total
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
     * Gets as minimumAmount
     *
     * BBIE
     *  Requested Tender Total. Minimum_ Amount. Amount
     *  The minimum monetary amount of the budget.
     *  0..1
     *  Requested Tender Total
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * BBIE
     *  Requested Tender Total. Minimum_ Amount. Amount
     *  The minimum monetary amount of the budget.
     *  0..1
     *  Requested Tender Total
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?\CleverIt\UBL\Invoice\RO\MinimumAmount $minimumAmount = null)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * BBIE
     *  Requested Tender Total. Maximum_ Amount. Amount
     *  The maximum monetary amount of the budget.
     *  0..1
     *  Requested Tender Total
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * BBIE
     *  Requested Tender Total. Maximum_ Amount. Amount
     *  The maximum monetary amount of the budget.
     *  0..1
     *  Requested Tender Total
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?\CleverIt\UBL\Invoice\RO\MaximumAmount $maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Adds as monetaryScope
     *
     * BBIE
     *  Requested Tender Total. Monetary Scope. Text
     *  A description of the monetary scope of the budget.
     *  0..n
     *  Requested Tender Total
     *  Monetary Scope
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\MonetaryScope $monetaryScope
     */
    public function addToMonetaryScope(\CleverIt\UBL\Invoice\RO\MonetaryScope $monetaryScope)
    {
        $this->monetaryScope[] = $monetaryScope;
        return $this;
    }

    /**
     * isset monetaryScope
     *
     * BBIE
     *  Requested Tender Total. Monetary Scope. Text
     *  A description of the monetary scope of the budget.
     *  0..n
     *  Requested Tender Total
     *  Monetary Scope
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonetaryScope($index)
    {
        return isset($this->monetaryScope[$index]);
    }

    /**
     * unset monetaryScope
     *
     * BBIE
     *  Requested Tender Total. Monetary Scope. Text
     *  A description of the monetary scope of the budget.
     *  0..n
     *  Requested Tender Total
     *  Monetary Scope
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonetaryScope($index)
    {
        unset($this->monetaryScope[$index]);
    }

    /**
     * Gets as monetaryScope
     *
     * BBIE
     *  Requested Tender Total. Monetary Scope. Text
     *  A description of the monetary scope of the budget.
     *  0..n
     *  Requested Tender Total
     *  Monetary Scope
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MonetaryScope[]
     */
    public function getMonetaryScope()
    {
        return $this->monetaryScope;
    }

    /**
     * Sets a new monetaryScope
     *
     * BBIE
     *  Requested Tender Total. Monetary Scope. Text
     *  A description of the monetary scope of the budget.
     *  0..n
     *  Requested Tender Total
     *  Monetary Scope
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MonetaryScope[] $monetaryScope
     * @return self
     */
    public function setMonetaryScope(array $monetaryScope = null)
    {
        $this->monetaryScope = $monetaryScope;
        return $this;
    }

    /**
     * Gets as averageSubsequentContractAmount
     *
     * BBIE
     *  Requested Tender Total. Average_ Subsequent Contract. Amount
     *  The average monetary amount for the subsequent contracts following this budget amount.
     *  0..1
     *  Requested Tender Total
     *  Average
     *  Subsequent Contract
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AverageSubsequentContractAmount
     */
    public function getAverageSubsequentContractAmount()
    {
        return $this->averageSubsequentContractAmount;
    }

    /**
     * Sets a new averageSubsequentContractAmount
     *
     * BBIE
     *  Requested Tender Total. Average_ Subsequent Contract. Amount
     *  The average monetary amount for the subsequent contracts following this budget amount.
     *  0..1
     *  Requested Tender Total
     *  Average
     *  Subsequent Contract
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AverageSubsequentContractAmount $averageSubsequentContractAmount
     * @return self
     */
    public function setAverageSubsequentContractAmount(?\CleverIt\UBL\Invoice\RO\AverageSubsequentContractAmount $averageSubsequentContractAmount = null)
    {
        $this->averageSubsequentContractAmount = $averageSubsequentContractAmount;
        return $this;
    }

    /**
     * Adds as applicableTaxCategory
     *
     * ASBIE
     *  Requested Tender Total. Applicable_ Tax Category. Tax Category
     *  Describes the categories of taxes that apply to the budget amount.
     *  0..n
     *  Requested Tender Total
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ApplicableTaxCategory $applicableTaxCategory
     */
    public function addToApplicableTaxCategory(\CleverIt\UBL\Invoice\RO\ApplicableTaxCategory $applicableTaxCategory)
    {
        $this->applicableTaxCategory[] = $applicableTaxCategory;
        return $this;
    }

    /**
     * isset applicableTaxCategory
     *
     * ASBIE
     *  Requested Tender Total. Applicable_ Tax Category. Tax Category
     *  Describes the categories of taxes that apply to the budget amount.
     *  0..n
     *  Requested Tender Total
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTaxCategory($index)
    {
        return isset($this->applicableTaxCategory[$index]);
    }

    /**
     * unset applicableTaxCategory
     *
     * ASBIE
     *  Requested Tender Total. Applicable_ Tax Category. Tax Category
     *  Describes the categories of taxes that apply to the budget amount.
     *  0..n
     *  Requested Tender Total
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTaxCategory($index)
    {
        unset($this->applicableTaxCategory[$index]);
    }

    /**
     * Gets as applicableTaxCategory
     *
     * ASBIE
     *  Requested Tender Total. Applicable_ Tax Category. Tax Category
     *  Describes the categories of taxes that apply to the budget amount.
     *  0..n
     *  Requested Tender Total
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \CleverIt\UBL\Invoice\RO\ApplicableTaxCategory[]
     */
    public function getApplicableTaxCategory()
    {
        return $this->applicableTaxCategory;
    }

    /**
     * Sets a new applicableTaxCategory
     *
     * ASBIE
     *  Requested Tender Total. Applicable_ Tax Category. Tax Category
     *  Describes the categories of taxes that apply to the budget amount.
     *  0..n
     *  Requested Tender Total
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \CleverIt\UBL\Invoice\RO\ApplicableTaxCategory[] $applicableTaxCategory
     * @return self
     */
    public function setApplicableTaxCategory(array $applicableTaxCategory = null)
    {
        $this->applicableTaxCategory = $applicableTaxCategory;
        return $this;
    }
}

