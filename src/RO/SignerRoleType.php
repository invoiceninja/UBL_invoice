<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing SignerRoleType
 *
 *
 * XSD Type: SignerRoleType
 */
class SignerRoleType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\AnyType[] $claimedRoles
     */
    private $claimedRoles = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $certifiedRoles
     */
    private $certifiedRoles = null;

    /**
     * Adds as claimedRole
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AnyType $claimedRole
     */
    public function addToClaimedRoles(\CleverIt\UBL\Invoice\RO\AnyType $claimedRole)
    {
        $this->claimedRoles[] = $claimedRole;
        return $this;
    }

    /**
     * isset claimedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClaimedRoles($index)
    {
        return isset($this->claimedRoles[$index]);
    }

    /**
     * unset claimedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClaimedRoles($index)
    {
        unset($this->claimedRoles[$index]);
    }

    /**
     * Gets as claimedRoles
     *
     * @return \CleverIt\UBL\Invoice\RO\AnyType[]
     */
    public function getClaimedRoles()
    {
        return $this->claimedRoles;
    }

    /**
     * Sets a new claimedRoles
     *
     * @param \CleverIt\UBL\Invoice\RO\AnyType[] $claimedRoles
     * @return self
     */
    public function setClaimedRoles(array $claimedRoles = null)
    {
        $this->claimedRoles = $claimedRoles;
        return $this;
    }

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $certifiedRole
     */
    public function addToCertifiedRoles(\CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $certifiedRole)
    {
        $this->certifiedRoles[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRoles($index)
    {
        return isset($this->certifiedRoles[$index]);
    }

    /**
     * unset certifiedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRoles($index)
    {
        unset($this->certifiedRoles[$index]);
    }

    /**
     * Gets as certifiedRoles
     *
     * @return \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[]
     */
    public function getCertifiedRoles()
    {
        return $this->certifiedRoles;
    }

    /**
     * Sets a new certifiedRoles
     *
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $certifiedRoles
     * @return self
     */
    public function setCertifiedRoles(array $certifiedRoles = null)
    {
        $this->certifiedRoles = $certifiedRoles;
        return $this;
    }
}

