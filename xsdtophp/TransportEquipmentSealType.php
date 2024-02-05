<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TransportEquipmentSealType
 *
 * ABIE
 *  Transport Equipment Seal. Details
 *  A class to describe a device (a transport equipment seal) for securing the doors of a shipping container.
 *  Transport Equipment Seal
 *  Container Seal
 * XSD Type: TransportEquipmentSealType
 */
class TransportEquipmentSealType
{

    /**
     * BBIE
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\SealIssuerTypeCode $sealIssuerTypeCode
     */
    private $sealIssuerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Condition $condition
     */
    private $condition = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\SealStatusCode $sealStatusCode
     */
    private $sealStatusCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @var \CleverIt\UBL\Invoice\SealingPartyType $sealingPartyType
     */
    private $sealingPartyType = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
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
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
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
     * Gets as sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\SealIssuerTypeCode
     */
    public function getSealIssuerTypeCode()
    {
        return $this->sealIssuerTypeCode;
    }

    /**
     * Sets a new sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\SealIssuerTypeCode $sealIssuerTypeCode
     * @return self
     */
    public function setSealIssuerTypeCode(\CleverIt\UBL\Invoice\SealIssuerTypeCode $sealIssuerTypeCode)
    {
        $this->sealIssuerTypeCode = $sealIssuerTypeCode;
        return $this;
    }

    /**
     * Gets as condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Condition $condition
     * @return self
     */
    public function setCondition(\CleverIt\UBL\Invoice\Condition $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\SealStatusCode
     */
    public function getSealStatusCode()
    {
        return $this->sealStatusCode;
    }

    /**
     * Sets a new sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\SealStatusCode $sealStatusCode
     * @return self
     */
    public function setSealStatusCode(\CleverIt\UBL\Invoice\SealStatusCode $sealStatusCode)
    {
        $this->sealStatusCode = $sealStatusCode;
        return $this;
    }

    /**
     * Gets as sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @return \CleverIt\UBL\Invoice\SealingPartyType
     */
    public function getSealingPartyType()
    {
        return $this->sealingPartyType;
    }

    /**
     * Sets a new sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @param \CleverIt\UBL\Invoice\SealingPartyType $sealingPartyType
     * @return self
     */
    public function setSealingPartyType(\CleverIt\UBL\Invoice\SealingPartyType $sealingPartyType)
    {
        $this->sealingPartyType = $sealingPartyType;
        return $this;
    }


}

