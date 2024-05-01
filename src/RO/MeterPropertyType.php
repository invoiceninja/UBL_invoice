<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing MeterPropertyType
 *
 * ABIE
 *  Meter Property. Details
 *  The name of this meter property.
 *  Meter Property
 * XSD Type: MeterPropertyType
 */
class MeterPropertyType
{
    /**
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \CleverIt\UBL\Invoice\RO\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ValueQualifier[] $valueQualifier
     */
    private $valueQualifier = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
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
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
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
     * Gets as nameCode
     *
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\NameCode
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Sets a new nameCode
     *
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\NameCode $nameCode
     * @return self
     */
    public function setNameCode(?\CleverIt\UBL\Invoice\RO\NameCode $nameCode = null)
    {
        $this->nameCode = $nameCode;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \CleverIt\UBL\Invoice\RO\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param \CleverIt\UBL\Invoice\RO\Value $value
     * @return self
     */
    public function setValue(?\CleverIt\UBL\Invoice\RO\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\CleverIt\UBL\Invoice\RO\ValueQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ValueQualifier $valueQualifier
     */
    public function addToValueQualifier(\CleverIt\UBL\Invoice\RO\ValueQualifier $valueQualifier)
    {
        $this->valueQualifier[] = $valueQualifier;
        return $this;
    }

    /**
     * isset valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueQualifier($index)
    {
        return isset($this->valueQualifier[$index]);
    }

    /**
     * unset valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueQualifier($index)
    {
        unset($this->valueQualifier[$index]);
    }

    /**
     * Gets as valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ValueQualifier[]
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * Sets a new valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ValueQualifier[] $valueQualifier
     * @return self
     */
    public function setValueQualifier(array $valueQualifier = null)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }
}

