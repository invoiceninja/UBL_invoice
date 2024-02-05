<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DimensionType
 *
 * ABIE
 *  Dimension. Details
 *  A class to define a measurable dimension (length, mass, weight, volume, or area) of an item.
 *  Dimension
 * XSD Type: DimensionType
 */
class DimensionType
{

    /**
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\MinimumMeasure $minimumMeasure
     */
    private $minimumMeasure = null;

    /**
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumMeasure $maximumMeasure
     */
    private $maximumMeasure = null;

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\CleverIt\UBL\Invoice\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\Measure $measure
     * @return self
     */
    public function setMeasure(\CleverIt\UBL\Invoice\Measure $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\MinimumMeasure
     */
    public function getMinimumMeasure()
    {
        return $this->minimumMeasure;
    }

    /**
     * Sets a new minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\MinimumMeasure $minimumMeasure
     * @return self
     */
    public function setMinimumMeasure(\CleverIt\UBL\Invoice\MinimumMeasure $minimumMeasure)
    {
        $this->minimumMeasure = $minimumMeasure;
        return $this;
    }

    /**
     * Gets as maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumMeasure
     */
    public function getMaximumMeasure()
    {
        return $this->maximumMeasure;
    }

    /**
     * Sets a new maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumMeasure $maximumMeasure
     * @return self
     */
    public function setMaximumMeasure(\CleverIt\UBL\Invoice\MaximumMeasure $maximumMeasure)
    {
        $this->maximumMeasure = $maximumMeasure;
        return $this;
    }


}

