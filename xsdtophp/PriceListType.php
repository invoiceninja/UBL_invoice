<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing PriceListType
 *
 * ABIE
 *  Price List. Details
 *  A class to describe a price list.
 *  Price List
 * XSD Type: PriceListType
 */
class PriceListType
{

    /**
     * BBIE
     *  Price List. Identifier
     *  An identifier for this price list.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Price List. Status Code. Code
     *  A code signifying whether this price list is an original, copy, revision, or cancellation.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @var \CleverIt\UBL\Invoice\StatusCode $statusCode
     */
    private $statusCode = null;

    /**
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  The previous price list.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *  Price List
     *
     * @var \CleverIt\UBL\Invoice\PreviousPriceList $previousPriceList
     */
    private $previousPriceList = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Price List. Identifier
     *  An identifier for this price list.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Price List. Identifier
     *  An identifier for this price list.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as statusCode
     *
     * BBIE
     *  Price List. Status Code. Code
     *  A code signifying whether this price list is an original, copy, revision, or cancellation.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @return \CleverIt\UBL\Invoice\StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * BBIE
     *  Price List. Status Code. Code
     *  A code signifying whether this price list is an original, copy, revision, or cancellation.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @param \CleverIt\UBL\Invoice\StatusCode $statusCode
     * @return self
     */
    public function setStatusCode(\CleverIt\UBL\Invoice\StatusCode $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as previousPriceList
     *
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  The previous price list.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *  Price List
     *
     * @return \CleverIt\UBL\Invoice\PreviousPriceList
     */
    public function getPreviousPriceList()
    {
        return $this->previousPriceList;
    }

    /**
     * Sets a new previousPriceList
     *
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  The previous price list.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *  Price List
     *
     * @param \CleverIt\UBL\Invoice\PreviousPriceList $previousPriceList
     * @return self
     */
    public function setPreviousPriceList(\CleverIt\UBL\Invoice\PreviousPriceList $previousPriceList)
    {
        $this->previousPriceList = $previousPriceList;
        return $this;
    }


}

