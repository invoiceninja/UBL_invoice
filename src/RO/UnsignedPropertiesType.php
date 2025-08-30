<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing UnsignedPropertiesType
 *
 *
 * XSD Type: UnsignedPropertiesType
 */
class UnsignedPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     */
    private $unsignedSignatureProperties = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     */
    private $unsignedDataObjectProperties = null;

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
     * Gets as unsignedSignatureProperties
     *
     * @return \CleverIt\UBL\Invoice\RO\UnsignedSignaturePropertiesType
     */
    public function getUnsignedSignatureProperties()
    {
        return $this->unsignedSignatureProperties;
    }

    /**
     * Sets a new unsignedSignatureProperties
     *
     * @param \CleverIt\UBL\Invoice\RO\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     * @return self
     */
    public function setUnsignedSignatureProperties(?\CleverIt\UBL\Invoice\RO\UnsignedSignaturePropertiesType $unsignedSignatureProperties = null)
    {
        $this->unsignedSignatureProperties = $unsignedSignatureProperties;
        return $this;
    }

    /**
     * Gets as unsignedDataObjectProperties
     *
     * @return \CleverIt\UBL\Invoice\RO\UnsignedDataObjectPropertiesType
     */
    public function getUnsignedDataObjectProperties()
    {
        return $this->unsignedDataObjectProperties;
    }

    /**
     * Sets a new unsignedDataObjectProperties
     *
     * @param \CleverIt\UBL\Invoice\RO\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     * @return self
     */
    public function setUnsignedDataObjectProperties(?\CleverIt\UBL\Invoice\RO\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties = null)
    {
        $this->unsignedDataObjectProperties = $unsignedDataObjectProperties;
        return $this;
    }
}

