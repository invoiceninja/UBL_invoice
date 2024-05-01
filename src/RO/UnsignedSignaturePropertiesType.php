<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing UnsignedSignaturePropertiesType
 *
 *
 * XSD Type: UnsignedSignaturePropertiesType
 */
class UnsignedSignaturePropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CounterSignatureType $counterSignature
     */
    private $counterSignature = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $signatureTimeStamp
     */
    private $signatureTimeStamp = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType $completeCertificateRefs
     */
    private $completeCertificateRefs = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType $completeRevocationRefs
     */
    private $completeRevocationRefs = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType $attributeCertificateRefs
     */
    private $attributeCertificateRefs = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType $attributeRevocationRefs
     */
    private $attributeRevocationRefs = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $sigAndRefsTimeStamp
     */
    private $sigAndRefsTimeStamp = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $refsOnlyTimeStamp
     */
    private $refsOnlyTimeStamp = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CertificateValuesType $certificateValues
     */
    private $certificateValues = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\RevocationValuesType $revocationValues
     */
    private $revocationValues = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\CertificateValuesType $attrAuthoritiesCertValues
     */
    private $attrAuthoritiesCertValues = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\RevocationValuesType $attributeRevocationValues
     */
    private $attributeRevocationValues = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $archiveTimeStamp
     */
    private $archiveTimeStamp = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as counterSignature
     *
     * @return \CleverIt\UBL\Invoice\RO\CounterSignatureType
     */
    public function getCounterSignature()
    {
        return $this->counterSignature;
    }

    /**
     * Sets a new counterSignature
     *
     * @param \CleverIt\UBL\Invoice\RO\CounterSignatureType $counterSignature
     * @return self
     */
    public function setCounterSignature(?\CleverIt\UBL\Invoice\RO\CounterSignatureType $counterSignature = null)
    {
        $this->counterSignature = $counterSignature;
        return $this;
    }

    /**
     * Gets as signatureTimeStamp
     *
     * @return \CleverIt\UBL\Invoice\RO\XAdESTimeStampType
     */
    public function getSignatureTimeStamp()
    {
        return $this->signatureTimeStamp;
    }

    /**
     * Sets a new signatureTimeStamp
     *
     * @param \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $signatureTimeStamp
     * @return self
     */
    public function setSignatureTimeStamp(?\CleverIt\UBL\Invoice\RO\XAdESTimeStampType $signatureTimeStamp = null)
    {
        $this->signatureTimeStamp = $signatureTimeStamp;
        return $this;
    }

    /**
     * Gets as completeCertificateRefs
     *
     * @return \CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType
     */
    public function getCompleteCertificateRefs()
    {
        return $this->completeCertificateRefs;
    }

    /**
     * Sets a new completeCertificateRefs
     *
     * @param \CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType $completeCertificateRefs
     * @return self
     */
    public function setCompleteCertificateRefs(?\CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType $completeCertificateRefs = null)
    {
        $this->completeCertificateRefs = $completeCertificateRefs;
        return $this;
    }

    /**
     * Gets as completeRevocationRefs
     *
     * @return \CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType
     */
    public function getCompleteRevocationRefs()
    {
        return $this->completeRevocationRefs;
    }

    /**
     * Sets a new completeRevocationRefs
     *
     * @param \CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType $completeRevocationRefs
     * @return self
     */
    public function setCompleteRevocationRefs(?\CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType $completeRevocationRefs = null)
    {
        $this->completeRevocationRefs = $completeRevocationRefs;
        return $this;
    }

    /**
     * Gets as attributeCertificateRefs
     *
     * @return \CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType
     */
    public function getAttributeCertificateRefs()
    {
        return $this->attributeCertificateRefs;
    }

    /**
     * Sets a new attributeCertificateRefs
     *
     * @param \CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType $attributeCertificateRefs
     * @return self
     */
    public function setAttributeCertificateRefs(?\CleverIt\UBL\Invoice\RO\CompleteCertificateRefsType $attributeCertificateRefs = null)
    {
        $this->attributeCertificateRefs = $attributeCertificateRefs;
        return $this;
    }

    /**
     * Gets as attributeRevocationRefs
     *
     * @return \CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType
     */
    public function getAttributeRevocationRefs()
    {
        return $this->attributeRevocationRefs;
    }

    /**
     * Sets a new attributeRevocationRefs
     *
     * @param \CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType $attributeRevocationRefs
     * @return self
     */
    public function setAttributeRevocationRefs(?\CleverIt\UBL\Invoice\RO\CompleteRevocationRefsType $attributeRevocationRefs = null)
    {
        $this->attributeRevocationRefs = $attributeRevocationRefs;
        return $this;
    }

    /**
     * Gets as sigAndRefsTimeStamp
     *
     * @return \CleverIt\UBL\Invoice\RO\XAdESTimeStampType
     */
    public function getSigAndRefsTimeStamp()
    {
        return $this->sigAndRefsTimeStamp;
    }

    /**
     * Sets a new sigAndRefsTimeStamp
     *
     * @param \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $sigAndRefsTimeStamp
     * @return self
     */
    public function setSigAndRefsTimeStamp(?\CleverIt\UBL\Invoice\RO\XAdESTimeStampType $sigAndRefsTimeStamp = null)
    {
        $this->sigAndRefsTimeStamp = $sigAndRefsTimeStamp;
        return $this;
    }

    /**
     * Gets as refsOnlyTimeStamp
     *
     * @return \CleverIt\UBL\Invoice\RO\XAdESTimeStampType
     */
    public function getRefsOnlyTimeStamp()
    {
        return $this->refsOnlyTimeStamp;
    }

    /**
     * Sets a new refsOnlyTimeStamp
     *
     * @param \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $refsOnlyTimeStamp
     * @return self
     */
    public function setRefsOnlyTimeStamp(?\CleverIt\UBL\Invoice\RO\XAdESTimeStampType $refsOnlyTimeStamp = null)
    {
        $this->refsOnlyTimeStamp = $refsOnlyTimeStamp;
        return $this;
    }

    /**
     * Gets as certificateValues
     *
     * @return \CleverIt\UBL\Invoice\RO\CertificateValuesType
     */
    public function getCertificateValues()
    {
        return $this->certificateValues;
    }

    /**
     * Sets a new certificateValues
     *
     * @param \CleverIt\UBL\Invoice\RO\CertificateValuesType $certificateValues
     * @return self
     */
    public function setCertificateValues(?\CleverIt\UBL\Invoice\RO\CertificateValuesType $certificateValues = null)
    {
        $this->certificateValues = $certificateValues;
        return $this;
    }

    /**
     * Gets as revocationValues
     *
     * @return \CleverIt\UBL\Invoice\RO\RevocationValuesType
     */
    public function getRevocationValues()
    {
        return $this->revocationValues;
    }

    /**
     * Sets a new revocationValues
     *
     * @param \CleverIt\UBL\Invoice\RO\RevocationValuesType $revocationValues
     * @return self
     */
    public function setRevocationValues(?\CleverIt\UBL\Invoice\RO\RevocationValuesType $revocationValues = null)
    {
        $this->revocationValues = $revocationValues;
        return $this;
    }

    /**
     * Gets as attrAuthoritiesCertValues
     *
     * @return \CleverIt\UBL\Invoice\RO\CertificateValuesType
     */
    public function getAttrAuthoritiesCertValues()
    {
        return $this->attrAuthoritiesCertValues;
    }

    /**
     * Sets a new attrAuthoritiesCertValues
     *
     * @param \CleverIt\UBL\Invoice\RO\CertificateValuesType $attrAuthoritiesCertValues
     * @return self
     */
    public function setAttrAuthoritiesCertValues(?\CleverIt\UBL\Invoice\RO\CertificateValuesType $attrAuthoritiesCertValues = null)
    {
        $this->attrAuthoritiesCertValues = $attrAuthoritiesCertValues;
        return $this;
    }

    /**
     * Gets as attributeRevocationValues
     *
     * @return \CleverIt\UBL\Invoice\RO\RevocationValuesType
     */
    public function getAttributeRevocationValues()
    {
        return $this->attributeRevocationValues;
    }

    /**
     * Sets a new attributeRevocationValues
     *
     * @param \CleverIt\UBL\Invoice\RO\RevocationValuesType $attributeRevocationValues
     * @return self
     */
    public function setAttributeRevocationValues(?\CleverIt\UBL\Invoice\RO\RevocationValuesType $attributeRevocationValues = null)
    {
        $this->attributeRevocationValues = $attributeRevocationValues;
        return $this;
    }

    /**
     * Gets as archiveTimeStamp
     *
     * @return \CleverIt\UBL\Invoice\RO\XAdESTimeStampType
     */
    public function getArchiveTimeStamp()
    {
        return $this->archiveTimeStamp;
    }

    /**
     * Sets a new archiveTimeStamp
     *
     * @param \CleverIt\UBL\Invoice\RO\XAdESTimeStampType $archiveTimeStamp
     * @return self
     */
    public function setArchiveTimeStamp(?\CleverIt\UBL\Invoice\RO\XAdESTimeStampType $archiveTimeStamp = null)
    {
        $this->archiveTimeStamp = $archiveTimeStamp;
        return $this;
    }
}

