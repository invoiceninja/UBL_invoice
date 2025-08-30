<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ItemPropertyGroupType
 *
 * ABIE
 *  Item Property Group. Details
 *  A class to describe a property group or classification.
 *  Item Property Group
 * XSD Type: ItemPropertyGroupType
 */
class ItemPropertyGroupType
{
    /**
     * BBIE
     *  Item Property Group. Identifier
     *  An identifier for this group of item properties.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  233-004
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Property Group. Name
     *  The name of this item property group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  Electrical Specifications , Dietary Content
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item Property Group. Importance Code. Code
     *  A code signifying the importance of this property group in using it to describe a required Item.
     *  0..1
     *  Item Property Group
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ImportanceCode $importanceCode
     */
    private $importanceCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Property Group. Identifier
     *  An identifier for this group of item properties.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  233-004
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
     *  Item Property Group. Identifier
     *  An identifier for this group of item properties.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  233-004
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\RO\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Item Property Group. Name
     *  The name of this item property group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  Electrical Specifications , Dietary Content
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
     *  Item Property Group. Name
     *  The name of this item property group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  Electrical Specifications , Dietary Content
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
     * Gets as importanceCode
     *
     * BBIE
     *  Item Property Group. Importance Code. Code
     *  A code signifying the importance of this property group in using it to describe a required Item.
     *  0..1
     *  Item Property Group
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ImportanceCode
     */
    public function getImportanceCode()
    {
        return $this->importanceCode;
    }

    /**
     * Sets a new importanceCode
     *
     * BBIE
     *  Item Property Group. Importance Code. Code
     *  A code signifying the importance of this property group in using it to describe a required Item.
     *  0..1
     *  Item Property Group
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ImportanceCode $importanceCode
     * @return self
     */
    public function setImportanceCode(?\CleverIt\UBL\Invoice\RO\ImportanceCode $importanceCode = null)
    {
        $this->importanceCode = $importanceCode;
        return $this;
    }
}

