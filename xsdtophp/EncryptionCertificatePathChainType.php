<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing EncryptionCertificatePathChainType
 *
 * ABIE
 *  Encryption Certificate Path Chain. Details
 *  Details of a certificate path chain used in encryption.
 *  Encryption Certificate Path Chain
 * XSD Type: EncryptionCertificatePathChainType
 */
class EncryptionCertificatePathChainType
{

    /**
     * BBIE
     *  Encryption Certificate Path Chain. Value. Text
     *  The path chain value manifest in the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Encryption Certificate Path Chain. URI. Identifier
     *  The path chain value references external to the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\URI $uRI
     */
    private $uRI = null;

    /**
     * Gets as value
     *
     * BBIE
     *  Encryption Certificate Path Chain. Value. Text
     *  The path chain value manifest in the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  Value
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Encryption Certificate Path Chain. Value. Text
     *  The path chain value manifest in the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Value $value
     * @return self
     */
    public function setValue(\CleverIt\UBL\Invoice\Value $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Encryption Certificate Path Chain. URI. Identifier
     *  The path chain value references external to the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Encryption Certificate Path Chain. URI. Identifier
     *  The path chain value references external to the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\URI $uRI
     * @return self
     */
    public function setURI(\CleverIt\UBL\Invoice\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }


}

