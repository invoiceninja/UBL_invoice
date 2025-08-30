<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing DigestAlgAndValueType
 *
 *
 * XSD Type: DigestAlgAndValueType
 */
class DigestAlgAndValueType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\DigestMethod $digestMethod
     */
    private $digestMethod = null;

    /**
     * @var string $digestValue
     */
    private $digestValue = null;

    /**
     * Gets as digestMethod
     *
     * @return \CleverIt\UBL\Invoice\RO\DigestMethod
     */
    public function getDigestMethod()
    {
        return $this->digestMethod;
    }

    /**
     * Sets a new digestMethod
     *
     * @param \CleverIt\UBL\Invoice\RO\DigestMethod $digestMethod
     * @return self
     */
    public function setDigestMethod(\CleverIt\UBL\Invoice\RO\DigestMethod $digestMethod)
    {
        $this->digestMethod = $digestMethod;
        return $this;
    }

    /**
     * Gets as digestValue
     *
     * @return string
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * Sets a new digestValue
     *
     * @param string $digestValue
     * @return self
     */
    public function setDigestValue($digestValue)
    {
        $this->digestValue = $digestValue;
        return $this;
    }
}

