<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CertifiedRolesListType
 *
 *
 * XSD Type: CertifiedRolesListType
 */
class CertifiedRolesListType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $certifiedRole
     */
    private $certifiedRole = [
        
    ];

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $certifiedRole
     */
    public function addToCertifiedRole(\CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $certifiedRole)
    {
        $this->certifiedRole[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRole
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRole($index)
    {
        return isset($this->certifiedRole[$index]);
    }

    /**
     * unset certifiedRole
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRole($index)
    {
        unset($this->certifiedRole[$index]);
    }

    /**
     * Gets as certifiedRole
     *
     * @return \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[]
     */
    public function getCertifiedRole()
    {
        return $this->certifiedRole;
    }

    /**
     * Sets a new certifiedRole
     *
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $certifiedRole
     * @return self
     */
    public function setCertifiedRole(array $certifiedRole)
    {
        $this->certifiedRole = $certifiedRole;
        return $this;
    }
}

