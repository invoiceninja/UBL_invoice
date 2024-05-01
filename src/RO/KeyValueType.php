<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing KeyValueType
 *
 *
 * XSD Type: KeyValueType
 */
class KeyValueType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \CleverIt\UBL\Invoice\RO\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \CleverIt\UBL\Invoice\RO\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(?\CleverIt\UBL\Invoice\RO\DSAKeyValue $dSAKeyValue = null)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \CleverIt\UBL\Invoice\RO\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \CleverIt\UBL\Invoice\RO\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(?\CleverIt\UBL\Invoice\RO\RSAKeyValue $rSAKeyValue = null)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }
}

