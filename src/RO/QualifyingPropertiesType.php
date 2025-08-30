<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing QualifyingPropertiesType
 *
 *
 * XSD Type: QualifyingPropertiesType
 */
class QualifyingPropertiesType
{
    /**
     * @var string $target
     */
    private $target = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\SignedPropertiesType $signedProperties
     */
    private $signedProperties = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\UnsignedPropertiesType $unsignedProperties
     */
    private $unsignedProperties = null;

    /**
     * Gets as target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

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

    /**
     * Gets as signedProperties
     *
     * @return \CleverIt\UBL\Invoice\RO\SignedPropertiesType
     */
    public function getSignedProperties()
    {
        return $this->signedProperties;
    }

    /**
     * Sets a new signedProperties
     *
     * @param \CleverIt\UBL\Invoice\RO\SignedPropertiesType $signedProperties
     * @return self
     */
    public function setSignedProperties(?\CleverIt\UBL\Invoice\RO\SignedPropertiesType $signedProperties = null)
    {
        $this->signedProperties = $signedProperties;
        return $this;
    }

    /**
     * Gets as unsignedProperties
     *
     * @return \CleverIt\UBL\Invoice\RO\UnsignedPropertiesType
     */
    public function getUnsignedProperties()
    {
        return $this->unsignedProperties;
    }

    /**
     * Sets a new unsignedProperties
     *
     * @param \CleverIt\UBL\Invoice\RO\UnsignedPropertiesType $unsignedProperties
     * @return self
     */
    public function setUnsignedProperties(?\CleverIt\UBL\Invoice\RO\UnsignedPropertiesType $unsignedProperties = null)
    {
        $this->unsignedProperties = $unsignedProperties;
        return $this;
    }
}

