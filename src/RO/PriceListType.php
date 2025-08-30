<?php

namespace CleverIt\UBL\Invoice\RO;

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
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
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
     * @var \CleverIt\UBL\Invoice\RO\StatusCode $statusCode
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
     * @var \CleverIt\UBL\Invoice\RO\ValidityPeriod[] $validityPeriod
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
     * @var \CleverIt\UBL\Invoice\RO\PreviousPriceList $previousPriceList
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
     *  Price List. Identifier
     *  An identifier for this price list.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * @return \CleverIt\UBL\Invoice\RO\StatusCode
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
     * @param \CleverIt\UBL\Invoice\RO\StatusCode $statusCode
     * @return self
     */
    public function setStatusCode(?\CleverIt\UBL\Invoice\RO\StatusCode $statusCode = null)
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
     * @param \CleverIt\UBL\Invoice\RO\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\CleverIt\UBL\Invoice\RO\ValidityPeriod $validityPeriod)
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
     * @return \CleverIt\UBL\Invoice\RO\ValidityPeriod[]
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
     * @param \CleverIt\UBL\Invoice\RO\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod = null)
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
     * @return \CleverIt\UBL\Invoice\RO\PreviousPriceList
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
     * @param \CleverIt\UBL\Invoice\RO\PreviousPriceList $previousPriceList
     * @return self
     */
    public function setPreviousPriceList(?\CleverIt\UBL\Invoice\RO\PreviousPriceList $previousPriceList = null)
    {
        $this->previousPriceList = $previousPriceList;
        return $this;
    }
}

