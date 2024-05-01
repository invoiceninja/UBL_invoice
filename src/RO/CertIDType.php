<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CertIDType
 *
 *
 * XSD Type: CertIDType
 */
class CertIDType
{
    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\DigestAlgAndValueType $certDigest
     */
    private $certDigest = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\X509IssuerSerialType $issuerSerial
     */
    private $issuerSerial = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as certDigest
     *
     * @return \CleverIt\UBL\Invoice\RO\DigestAlgAndValueType
     */
    public function getCertDigest()
    {
        return $this->certDigest;
    }

    /**
     * Sets a new certDigest
     *
     * @param \CleverIt\UBL\Invoice\RO\DigestAlgAndValueType $certDigest
     * @return self
     */
    public function setCertDigest(\CleverIt\UBL\Invoice\RO\DigestAlgAndValueType $certDigest)
    {
        $this->certDigest = $certDigest;
        return $this;
    }

    /**
     * Gets as issuerSerial
     *
     * @return \CleverIt\UBL\Invoice\RO\X509IssuerSerialType
     */
    public function getIssuerSerial()
    {
        return $this->issuerSerial;
    }

    /**
     * Sets a new issuerSerial
     *
     * @param \CleverIt\UBL\Invoice\RO\X509IssuerSerialType $issuerSerial
     * @return self
     */
    public function setIssuerSerial(\CleverIt\UBL\Invoice\RO\X509IssuerSerialType $issuerSerial)
    {
        $this->issuerSerial = $issuerSerial;
        return $this;
    }
}

