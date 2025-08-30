<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\ObjectXsd[] $object
     */
    private $object = [
        
    ];

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
     * Gets as signedInfo
     *
     * @return \CleverIt\UBL\Invoice\RO\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \CleverIt\UBL\Invoice\RO\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\CleverIt\UBL\Invoice\RO\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \CleverIt\UBL\Invoice\RO\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \CleverIt\UBL\Invoice\RO\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\CleverIt\UBL\Invoice\RO\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \CleverIt\UBL\Invoice\RO\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \CleverIt\UBL\Invoice\RO\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(?\CleverIt\UBL\Invoice\RO\KeyInfo $keyInfo = null)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ObjectXsd $object
     */
    public function addToObject(\CleverIt\UBL\Invoice\RO\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \CleverIt\UBL\Invoice\RO\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \CleverIt\UBL\Invoice\RO\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object = null)
    {
        $this->object = $object;
        return $this;
    }
}

