<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DigitalProcessType
 *
 * ABIE
 *  Digital Process. Details
 *  A class to describe a digital trade process.
 *  Digital Process
 *  Business Process
 * XSD Type: DigitalProcessType
 */
class DigitalProcessType
{

    /**
     * BBIE
     *  Digital Process. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Process
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Digital Process. Profile Identifier. Identifier
     *  Identifies a user-defined profile of this digital process (e.g. an UBL profile).
     *  0..1
     *  Digital Process
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:profile:bii05:ver2.0
     *
     * @var \CleverIt\UBL\Invoice\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @var \CleverIt\UBL\Invoice\DigitalCollaboration[] $digitalCollaboration
     */
    private $digitalCollaboration = [
        
    ];

    /**
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\CertificationDocumentReference[] $certificationDocumentReference
     */
    private $certificationDocumentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Digital Process. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Process
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
     *  Digital Process. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Process
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
     * Adds as description
     *
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * BBIE
     *  Digital Process. Profile Identifier. Identifier
     *  Identifies a user-defined profile of this digital process (e.g. an UBL profile).
     *  0..1
     *  Digital Process
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:profile:bii05:ver2.0
     *
     * @return \CleverIt\UBL\Invoice\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Digital Process. Profile Identifier. Identifier
     *  Identifies a user-defined profile of this digital process (e.g. an UBL profile).
     *  0..1
     *  Digital Process
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:profile:bii05:ver2.0
     *
     * @param \CleverIt\UBL\Invoice\ProfileID $profileID
     * @return self
     */
    public function setProfileID(\CleverIt\UBL\Invoice\ProfileID $profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Adds as digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\DigitalCollaboration $digitalCollaboration
     */
    public function addToDigitalCollaboration(\CleverIt\UBL\Invoice\DigitalCollaboration $digitalCollaboration)
    {
        $this->digitalCollaboration[] = $digitalCollaboration;
        return $this;
    }

    /**
     * isset digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDigitalCollaboration($index)
    {
        return isset($this->digitalCollaboration[$index]);
    }

    /**
     * unset digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDigitalCollaboration($index)
    {
        unset($this->digitalCollaboration[$index]);
    }

    /**
     * Gets as digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @return \CleverIt\UBL\Invoice\DigitalCollaboration[]
     */
    public function getDigitalCollaboration()
    {
        return $this->digitalCollaboration;
    }

    /**
     * Sets a new digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @param \CleverIt\UBL\Invoice\DigitalCollaboration[] $digitalCollaboration
     * @return self
     */
    public function setDigitalCollaboration(array $digitalCollaboration)
    {
        $this->digitalCollaboration = $digitalCollaboration;
        return $this;
    }

    /**
     * Adds as certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\CertificationDocumentReference $certificationDocumentReference
     */
    public function addToCertificationDocumentReference(\CleverIt\UBL\Invoice\CertificationDocumentReference $certificationDocumentReference)
    {
        $this->certificationDocumentReference[] = $certificationDocumentReference;
        return $this;
    }

    /**
     * isset certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificationDocumentReference($index)
    {
        return isset($this->certificationDocumentReference[$index]);
    }

    /**
     * unset certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificationDocumentReference($index)
    {
        unset($this->certificationDocumentReference[$index]);
    }

    /**
     * Gets as certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\CertificationDocumentReference[]
     */
    public function getCertificationDocumentReference()
    {
        return $this->certificationDocumentReference;
    }

    /**
     * Sets a new certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\CertificationDocumentReference[] $certificationDocumentReference
     * @return self
     */
    public function setCertificationDocumentReference(array $certificationDocumentReference)
    {
        $this->certificationDocumentReference = $certificationDocumentReference;
        return $this;
    }


}

