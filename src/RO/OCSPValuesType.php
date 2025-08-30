<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing OCSPValuesType
 *
 *
 * XSD Type: OCSPValuesType
 */
class OCSPValuesType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $encapsulatedOCSPValue
     */
    private $encapsulatedOCSPValue = [
        
    ];

    /**
     * Adds as encapsulatedOCSPValue
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedOCSPValue
     */
    public function addToEncapsulatedOCSPValue(\CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedOCSPValue)
    {
        $this->encapsulatedOCSPValue[] = $encapsulatedOCSPValue;
        return $this;
    }

    /**
     * isset encapsulatedOCSPValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedOCSPValue($index)
    {
        return isset($this->encapsulatedOCSPValue[$index]);
    }

    /**
     * unset encapsulatedOCSPValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedOCSPValue($index)
    {
        unset($this->encapsulatedOCSPValue[$index]);
    }

    /**
     * Gets as encapsulatedOCSPValue
     *
     * @return \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedOCSPValue()
    {
        return $this->encapsulatedOCSPValue;
    }

    /**
     * Sets a new encapsulatedOCSPValue
     *
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $encapsulatedOCSPValue
     * @return self
     */
    public function setEncapsulatedOCSPValue(array $encapsulatedOCSPValue)
    {
        $this->encapsulatedOCSPValue = $encapsulatedOCSPValue;
        return $this;
    }
}

