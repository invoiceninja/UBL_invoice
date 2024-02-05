<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing EncryptionSymmetricAlgorithmType
 *
 * ABIE
 *  Encryption Symmetric Algorithm. Details
 *  Details of a symmetric algorithm used in encryption.
 *  Encryption Symmetric Algorithm
 * XSD Type: EncryptionSymmetricAlgorithmType
 */
class EncryptionSymmetricAlgorithmType
{

    /**
     * BBIE
     *  Encryption Symmetric Algorithm. Identifier
     *  A human-readable identifier the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  AES-256 Rijndael CBC
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Encryption Symmetric Algorithm. OID. Identifier
     *  The object identifier for the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  OID
     *  Identifier
     *  Identifier. Type
     *  2.16.840.1.101.3.4.1.42
     *
     * @var \CleverIt\UBL\Invoice\OID $oID
     */
    private $oID = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Encryption Symmetric Algorithm. Identifier
     *  A human-readable identifier the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  AES-256 Rijndael CBC
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
     *  Encryption Symmetric Algorithm. Identifier
     *  A human-readable identifier the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  AES-256 Rijndael CBC
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
     * Gets as oID
     *
     * BBIE
     *  Encryption Symmetric Algorithm. OID. Identifier
     *  The object identifier for the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  OID
     *  Identifier
     *  Identifier. Type
     *  2.16.840.1.101.3.4.1.42
     *
     * @return \CleverIt\UBL\Invoice\OID
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * Sets a new oID
     *
     * BBIE
     *  Encryption Symmetric Algorithm. OID. Identifier
     *  The object identifier for the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  OID
     *  Identifier
     *  Identifier. Type
     *  2.16.840.1.101.3.4.1.42
     *
     * @param \CleverIt\UBL\Invoice\OID $oID
     * @return self
     */
    public function setOID(\CleverIt\UBL\Invoice\OID $oID)
    {
        $this->oID = $oID;
        return $this;
    }


}

