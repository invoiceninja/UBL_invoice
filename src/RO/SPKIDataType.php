<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing SPKIDataType
 *
 *
 * XSD Type: SPKIDataType
 */
class SPKIDataType
{
    /**
     * @var string $sPKISexp
     */
    private $sPKISexp = null;

    /**
     * Gets as sPKISexp
     *
     * @return string
     */
    public function getSPKISexp()
    {
        return $this->sPKISexp;
    }

    /**
     * Sets a new sPKISexp
     *
     * @param string $sPKISexp
     * @return self
     */
    public function setSPKISexp($sPKISexp)
    {
        $this->sPKISexp = $sPKISexp;
        return $this;
    }
}

