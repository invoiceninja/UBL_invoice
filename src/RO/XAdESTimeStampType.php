<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing XAdESTimeStampType
 *
 *
 * XSD Type: XAdESTimeStampType
 */
class XAdESTimeStampType extends GenericTimeStampType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

