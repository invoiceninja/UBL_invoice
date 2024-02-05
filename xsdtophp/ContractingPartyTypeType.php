<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ContractingPartyTypeType
 *
 * ABIE
 *  Contracting Party Type. Details
 *  The type of contracting party that is independent of its role.
 *  Contracting Party Type
 * XSD Type: ContractingPartyTypeType
 */
class ContractingPartyTypeType
{

    /**
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\PartyTypeCode $partyTypeCode
     */
    private $partyTypeCode = null;

    /**
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\PartyType $partyType
     */
    private $partyType = null;

    /**
     * Gets as partyTypeCode
     *
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\PartyTypeCode
     */
    public function getPartyTypeCode()
    {
        return $this->partyTypeCode;
    }

    /**
     * Sets a new partyTypeCode
     *
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\PartyTypeCode $partyTypeCode
     * @return self
     */
    public function setPartyTypeCode(\CleverIt\UBL\Invoice\PartyTypeCode $partyTypeCode)
    {
        $this->partyTypeCode = $partyTypeCode;
        return $this;
    }

    /**
     * Gets as partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\PartyType
     */
    public function getPartyType()
    {
        return $this->partyType;
    }

    /**
     * Sets a new partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\PartyType $partyType
     * @return self
     */
    public function setPartyType(\CleverIt\UBL\Invoice\PartyType $partyType)
    {
        $this->partyType = $partyType;
        return $this;
    }


}

