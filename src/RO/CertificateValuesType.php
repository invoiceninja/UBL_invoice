<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CertificateValuesType
 *
 *
 * XSD Type: CertificateValuesType
 */
class CertificateValuesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedX509Certificate
     */
    private $encapsulatedX509Certificate = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\AnyType $otherCertificate
     */
    private $otherCertificate = null;

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
     * Gets as encapsulatedX509Certificate
     *
     * @return \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType
     */
    public function getEncapsulatedX509Certificate()
    {
        return $this->encapsulatedX509Certificate;
    }

    /**
     * Sets a new encapsulatedX509Certificate
     *
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedX509Certificate
     * @return self
     */
    public function setEncapsulatedX509Certificate(?\CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedX509Certificate = null)
    {
        $this->encapsulatedX509Certificate = $encapsulatedX509Certificate;
        return $this;
    }

    /**
     * Gets as otherCertificate
     *
     * @return \CleverIt\UBL\Invoice\RO\AnyType
     */
    public function getOtherCertificate()
    {
        return $this->otherCertificate;
    }

    /**
     * Sets a new otherCertificate
     *
     * @param \CleverIt\UBL\Invoice\RO\AnyType $otherCertificate
     * @return self
     */
    public function setOtherCertificate(?\CleverIt\UBL\Invoice\RO\AnyType $otherCertificate = null)
    {
        $this->otherCertificate = $otherCertificate;
        return $this;
    }
}

