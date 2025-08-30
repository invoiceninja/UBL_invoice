<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing FinancialInstitutionType
 *
 * ABIE
 *  Financial Institution. Details
 *  A class to describe a financial institution.
 *  Financial Institution
 * XSD Type: FinancialInstitutionType
 */
class FinancialInstitutionType
{
    /**
     * BBIE
     *  Financial Institution. Identifier
     *  An identifier for this financial institution. It is recommended that the ISO 9362 Bank Identification Code (BIC) be used as the ID.
     *  0..1
     *  Financial Institution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Financial Institution. Name
     *  The name of this financial institution.
     *  0..1
     *  Financial Institution
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Financial Institution. Address
     *  The address of this financial institution.
     *  0..1
     *  Financial Institution
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\RO\Address $address
     */
    private $address = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Financial Institution. Identifier
     *  An identifier for this financial institution. It is recommended that the ISO 9362 Bank Identification Code (BIC) be used as the ID.
     *  0..1
     *  Financial Institution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Financial Institution. Identifier
     *  An identifier for this financial institution. It is recommended that the ISO 9362 Bank Identification Code (BIC) be used as the ID.
     *  0..1
     *  Financial Institution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(?\CleverIt\UBL\Invoice\RO\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Financial Institution. Name
     *  The name of this financial institution.
     *  0..1
     *  Financial Institution
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Financial Institution. Name
     *  The name of this financial institution.
     *  0..1
     *  Financial Institution
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Name $name
     * @return self
     */
    public function setName(?\CleverIt\UBL\Invoice\RO\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Financial Institution. Address
     *  The address of this financial institution.
     *  0..1
     *  Financial Institution
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\RO\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Financial Institution. Address
     *  The address of this financial institution.
     *  0..1
     *  Financial Institution
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\RO\Address $address
     * @return self
     */
    public function setAddress(?\CleverIt\UBL\Invoice\RO\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

