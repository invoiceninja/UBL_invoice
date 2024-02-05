<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing BranchType
 *
 * ABIE
 *  Branch. Details
 *  A class to describe a branch or a division of an organization.
 *  Branch
 * XSD Type: BranchType
 */
class BranchType
{

    /**
     * BBIE
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @var \CleverIt\UBL\Invoice\FinancialInstitution $financialInstitution
     */
    private $financialInstitution = null;

    /**
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\Address $address
     */
    private $address = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @return \CleverIt\UBL\Invoice\FinancialInstitution
     */
    public function getFinancialInstitution()
    {
        return $this->financialInstitution;
    }

    /**
     * Sets a new financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @param \CleverIt\UBL\Invoice\FinancialInstitution $financialInstitution
     * @return self
     */
    public function setFinancialInstitution(\CleverIt\UBL\Invoice\FinancialInstitution $financialInstitution)
    {
        $this->financialInstitution = $financialInstitution;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\Address $address
     * @return self
     */
    public function setAddress(\CleverIt\UBL\Invoice\Address $address)
    {
        $this->address = $address;
        return $this;
    }


}

