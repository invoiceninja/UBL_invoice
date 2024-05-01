<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CRLRefsType
 *
 *
 * XSD Type: CRLRefsType
 */
class CRLRefsType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\CRLRefType[] $cRLRef
     */
    private $cRLRef = [
        
    ];

    /**
     * Adds as cRLRef
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\CRLRefType $cRLRef
     */
    public function addToCRLRef(\CleverIt\UBL\Invoice\RO\CRLRefType $cRLRef)
    {
        $this->cRLRef[] = $cRLRef;
        return $this;
    }

    /**
     * isset cRLRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCRLRef($index)
    {
        return isset($this->cRLRef[$index]);
    }

    /**
     * unset cRLRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCRLRef($index)
    {
        unset($this->cRLRef[$index]);
    }

    /**
     * Gets as cRLRef
     *
     * @return \CleverIt\UBL\Invoice\RO\CRLRefType[]
     */
    public function getCRLRef()
    {
        return $this->cRLRef;
    }

    /**
     * Sets a new cRLRef
     *
     * @param \CleverIt\UBL\Invoice\RO\CRLRefType[] $cRLRef
     * @return self
     */
    public function setCRLRef(array $cRLRef)
    {
        $this->cRLRef = $cRLRef;
        return $this;
    }
}

