<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing EncryptionDataType
 *
 * ABIE
 *  Encryption Data. Details
 *  Details of an encryption process
 *  Encryption Data
 * XSD Type: EncryptionDataType
 */
class EncryptionDataType
{

    /**
     * BBIE
     *  Encryption Data. Message Format. Text
     *  The format of the encrypted message.
     *  1
     *  Encryption Data
     *  Message Format
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\MessageFormat $messageFormat
     */
    private $messageFormat = null;

    /**
     * ASBIE
     *  Encryption Data. Encryption Certificate_ Attachment. Attachment
     *  A reference to the certificate used in the encryption process.
     *  0..1
     *  Encryption Data
     *  Encryption Certificate
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \CleverIt\UBL\Invoice\EncryptionCertificateAttachment $encryptionCertificateAttachment
     */
    private $encryptionCertificateAttachment = null;

    /**
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @var \CleverIt\UBL\Invoice\EncryptionCertificatePathChain[] $encryptionCertificatePathChain
     */
    private $encryptionCertificatePathChain = [
        
    ];

    /**
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @var \CleverIt\UBL\Invoice\EncryptionSymmetricAlgorithm[] $encryptionSymmetricAlgorithm
     */
    private $encryptionSymmetricAlgorithm = [
        
    ];

    /**
     * Gets as messageFormat
     *
     * BBIE
     *  Encryption Data. Message Format. Text
     *  The format of the encrypted message.
     *  1
     *  Encryption Data
     *  Message Format
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\MessageFormat
     */
    public function getMessageFormat()
    {
        return $this->messageFormat;
    }

    /**
     * Sets a new messageFormat
     *
     * BBIE
     *  Encryption Data. Message Format. Text
     *  The format of the encrypted message.
     *  1
     *  Encryption Data
     *  Message Format
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\MessageFormat $messageFormat
     * @return self
     */
    public function setMessageFormat(\CleverIt\UBL\Invoice\MessageFormat $messageFormat)
    {
        $this->messageFormat = $messageFormat;
        return $this;
    }

    /**
     * Gets as encryptionCertificateAttachment
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate_ Attachment. Attachment
     *  A reference to the certificate used in the encryption process.
     *  0..1
     *  Encryption Data
     *  Encryption Certificate
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \CleverIt\UBL\Invoice\EncryptionCertificateAttachment
     */
    public function getEncryptionCertificateAttachment()
    {
        return $this->encryptionCertificateAttachment;
    }

    /**
     * Sets a new encryptionCertificateAttachment
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate_ Attachment. Attachment
     *  A reference to the certificate used in the encryption process.
     *  0..1
     *  Encryption Data
     *  Encryption Certificate
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \CleverIt\UBL\Invoice\EncryptionCertificateAttachment $encryptionCertificateAttachment
     * @return self
     */
    public function setEncryptionCertificateAttachment(\CleverIt\UBL\Invoice\EncryptionCertificateAttachment $encryptionCertificateAttachment)
    {
        $this->encryptionCertificateAttachment = $encryptionCertificateAttachment;
        return $this;
    }

    /**
     * Adds as encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\EncryptionCertificatePathChain $encryptionCertificatePathChain
     */
    public function addToEncryptionCertificatePathChain(\CleverIt\UBL\Invoice\EncryptionCertificatePathChain $encryptionCertificatePathChain)
    {
        $this->encryptionCertificatePathChain[] = $encryptionCertificatePathChain;
        return $this;
    }

    /**
     * isset encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncryptionCertificatePathChain($index)
    {
        return isset($this->encryptionCertificatePathChain[$index]);
    }

    /**
     * unset encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncryptionCertificatePathChain($index)
    {
        unset($this->encryptionCertificatePathChain[$index]);
    }

    /**
     * Gets as encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @return \CleverIt\UBL\Invoice\EncryptionCertificatePathChain[]
     */
    public function getEncryptionCertificatePathChain()
    {
        return $this->encryptionCertificatePathChain;
    }

    /**
     * Sets a new encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @param \CleverIt\UBL\Invoice\EncryptionCertificatePathChain[] $encryptionCertificatePathChain
     * @return self
     */
    public function setEncryptionCertificatePathChain(array $encryptionCertificatePathChain)
    {
        $this->encryptionCertificatePathChain = $encryptionCertificatePathChain;
        return $this;
    }

    /**
     * Adds as encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\EncryptionSymmetricAlgorithm $encryptionSymmetricAlgorithm
     */
    public function addToEncryptionSymmetricAlgorithm(\CleverIt\UBL\Invoice\EncryptionSymmetricAlgorithm $encryptionSymmetricAlgorithm)
    {
        $this->encryptionSymmetricAlgorithm[] = $encryptionSymmetricAlgorithm;
        return $this;
    }

    /**
     * isset encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncryptionSymmetricAlgorithm($index)
    {
        return isset($this->encryptionSymmetricAlgorithm[$index]);
    }

    /**
     * unset encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncryptionSymmetricAlgorithm($index)
    {
        unset($this->encryptionSymmetricAlgorithm[$index]);
    }

    /**
     * Gets as encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @return \CleverIt\UBL\Invoice\EncryptionSymmetricAlgorithm[]
     */
    public function getEncryptionSymmetricAlgorithm()
    {
        return $this->encryptionSymmetricAlgorithm;
    }

    /**
     * Sets a new encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @param \CleverIt\UBL\Invoice\EncryptionSymmetricAlgorithm[] $encryptionSymmetricAlgorithm
     * @return self
     */
    public function setEncryptionSymmetricAlgorithm(array $encryptionSymmetricAlgorithm)
    {
        $this->encryptionSymmetricAlgorithm = $encryptionSymmetricAlgorithm;
        return $this;
    }


}

