<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CounterSignatureType
 *
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \CleverIt\UBL\Invoice\RO\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \CleverIt\UBL\Invoice\RO\Signature $signature
     * @return self
     */
    public function setSignature(\CleverIt\UBL\Invoice\RO\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

