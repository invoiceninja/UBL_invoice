<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CertIDListType
 *
 *
 * XSD Type: CertIDListType
 */
class CertIDListType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\CertIDType[] $cert
     */
    private $cert = [
        
    ];

    /**
     * Adds as cert
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\CertIDType $cert
     */
    public function addToCert(\CleverIt\UBL\Invoice\RO\CertIDType $cert)
    {
        $this->cert[] = $cert;
        return $this;
    }

    /**
     * isset cert
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCert($index)
    {
        return isset($this->cert[$index]);
    }

    /**
     * unset cert
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCert($index)
    {
        unset($this->cert[$index]);
    }

    /**
     * Gets as cert
     *
     * @return \CleverIt\UBL\Invoice\RO\CertIDType[]
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * Sets a new cert
     *
     * @param \CleverIt\UBL\Invoice\RO\CertIDType[] $cert
     * @return self
     */
    public function setCert(array $cert)
    {
        $this->cert = $cert;
        return $this;
    }
}

