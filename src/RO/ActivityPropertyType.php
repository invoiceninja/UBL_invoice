<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ActivityPropertyType
 *
 * ABIE
 *  Activity Property. Details
 *  A class to define a name/value pair for a property of an inventory planning activity.
 *  Activity Property
 * XSD Type: ActivityPropertyType
 */
class ActivityPropertyType
{
    /**
     * BBIE
     *  Activity Property. Name
     *  The name of this activity property.
     *  1
     *  Activity Property
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Activity Property. Value. Text
     *  The value of this activity property.
     *  1
     *  Activity Property
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Value $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Activity Property. Name
     *  The name of this activity property.
     *  1
     *  Activity Property
     *  Name
     *  Name
     *  Name. Type
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
     *  Activity Property. Name
     *  The name of this activity property.
     *  1
     *  Activity Property
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\RO\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Activity Property. Value. Text
     *  The value of this activity property.
     *  1
     *  Activity Property
     *  Value
     *  Text
     *  Text. Type
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
     *  Activity Property. Value. Text
     *  The value of this activity property.
     *  1
     *  Activity Property
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Value $value
     * @return self
     */
    public function setValue(\CleverIt\UBL\Invoice\RO\Value $value)
    {
        $this->value = $value;
        return $this;
    }
}

