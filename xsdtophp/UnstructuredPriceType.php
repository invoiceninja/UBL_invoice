<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing UnstructuredPriceType
 *
 * ABIE
 *  Unstructured Price. Details
 *  A simplified version of the Price class intended for applications such as telephone billing.
 *  Unstructured Price
 * XSD Type: UnstructuredPriceType
 */
class UnstructuredPriceType
{

    /**
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @var \CleverIt\UBL\Invoice\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\TimeAmount $timeAmount
     */
    private $timeAmount = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @return \CleverIt\UBL\Invoice\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @param \CleverIt\UBL\Invoice\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(\CleverIt\UBL\Invoice\PriceAmount $priceAmount)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\TimeAmount
     */
    public function getTimeAmount()
    {
        return $this->timeAmount;
    }

    /**
     * Sets a new timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\TimeAmount $timeAmount
     * @return self
     */
    public function setTimeAmount(\CleverIt\UBL\Invoice\TimeAmount $timeAmount)
    {
        $this->timeAmount = $timeAmount;
        return $this;
    }


}

