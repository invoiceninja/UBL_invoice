<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ItemPropertyRangeType
 *
 * ABIE
 *  Item Property Range. Details
 *  A class to describe a range of values for an item property.
 *  Item Property Range
 * XSD Type: ItemPropertyRangeType
 */
class ItemPropertyRangeType
{

    /**
     * BBIE
     *  Item Property Range. Minimum_ Value. Text
     *  The minimum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Minimum
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\MinimumValue $minimumValue
     */
    private $minimumValue = null;

    /**
     * BBIE
     *  Item Property Range. Maximum_ Value. Text
     *  The maximum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Maximum
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumValue $maximumValue
     */
    private $maximumValue = null;

    /**
     * Gets as minimumValue
     *
     * BBIE
     *  Item Property Range. Minimum_ Value. Text
     *  The minimum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Minimum
     *  Value
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\MinimumValue
     */
    public function getMinimumValue()
    {
        return $this->minimumValue;
    }

    /**
     * Sets a new minimumValue
     *
     * BBIE
     *  Item Property Range. Minimum_ Value. Text
     *  The minimum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Minimum
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\MinimumValue $minimumValue
     * @return self
     */
    public function setMinimumValue(\CleverIt\UBL\Invoice\MinimumValue $minimumValue)
    {
        $this->minimumValue = $minimumValue;
        return $this;
    }

    /**
     * Gets as maximumValue
     *
     * BBIE
     *  Item Property Range. Maximum_ Value. Text
     *  The maximum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Maximum
     *  Value
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumValue
     */
    public function getMaximumValue()
    {
        return $this->maximumValue;
    }

    /**
     * Sets a new maximumValue
     *
     * BBIE
     *  Item Property Range. Maximum_ Value. Text
     *  The maximum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Maximum
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumValue $maximumValue
     * @return self
     */
    public function setMaximumValue(\CleverIt\UBL\Invoice\MaximumValue $maximumValue)
    {
        $this->maximumValue = $maximumValue;
        return $this;
    }


}

