<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CompleteCertificateRefsType
 *
 *
 * XSD Type: CompleteCertificateRefsType
 */
class CompleteCertificateRefsType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CertIDType[] $certRefs
     */
    private $certRefs = null;

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
     * Adds as cert
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\CertIDType $cert
     */
    public function addToCertRefs(\CleverIt\UBL\Invoice\RO\CertIDType $cert)
    {
        $this->certRefs[] = $cert;
        return $this;
    }

    /**
     * isset certRefs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertRefs($index)
    {
        return isset($this->certRefs[$index]);
    }

    /**
     * unset certRefs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertRefs($index)
    {
        unset($this->certRefs[$index]);
    }

    /**
     * Gets as certRefs
     *
     * @return \CleverIt\UBL\Invoice\RO\CertIDType[]
     */
    public function getCertRefs()
    {
        return $this->certRefs;
    }

    /**
     * Sets a new certRefs
     *
     * @param \CleverIt\UBL\Invoice\RO\CertIDType[] $certRefs
     * @return self
     */
    public function setCertRefs(array $certRefs)
    {
        $this->certRefs = $certRefs;
        return $this;
    }
}

