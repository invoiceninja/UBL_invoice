<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TenderingCriterionResponseType
 *
 * ABIE
 *  Tendering Criterion Response. Details
 *  A class to describe a response to a criterion property.
 *  Tendering Criterion Response
 * XSD Type: TenderingCriterionResponseType
 */
class TenderingCriterionResponseType
{

    /**
     * BBIE
     *  Tendering Criterion Response. Identifier
     *  An identifier for this criterion property response.
     *  0..1
     *  Tendering Criterion Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion Response. Name
     *  The name of the criterion property response
     *  0..1
     *  Tendering Criterion Response
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Validated Criterion Property Identifier. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion Response
     *  Validated Criterion Property Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ValidatedCriterionPropertyID $validatedCriterionPropertyID
     */
    private $validatedCriterionPropertyID = null;

    /**
     * BBIE
     *  Tendering Criterion Response. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of the response to this criterion.
     *  0..1
     *  Tendering Criterion Response
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ConfidentialityLevelCode $confidentialityLevelCode
     */
    private $confidentialityLevelCode = null;

    /**
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @var \CleverIt\UBL\Invoice\ResponseValue[] $responseValue
     */
    private $responseValue = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\ApplicablePeriod[] $applicablePeriod
     */
    private $applicablePeriod = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @var \CleverIt\UBL\Invoice\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Tendering Criterion Response. Identifier
     *  An identifier for this criterion property response.
     *  0..1
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Identifier
     *  An identifier for this criterion property response.
     *  0..1
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Name
     *  The name of the criterion property response
     *  0..1
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Name
     *  The name of the criterion property response
     *  0..1
     *  Tendering Criterion Response
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
     * Adds as description
     *
     * BBIE
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     * Gets as validatedCriterionPropertyID
     *
     * BBIE
     *  Tendering Criterion Response. Validated Criterion Property Identifier. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion Response
     *  Validated Criterion Property Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ValidatedCriterionPropertyID
     */
    public function getValidatedCriterionPropertyID()
    {
        return $this->validatedCriterionPropertyID;
    }

    /**
     * Sets a new validatedCriterionPropertyID
     *
     * BBIE
     *  Tendering Criterion Response. Validated Criterion Property Identifier. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion Response
     *  Validated Criterion Property Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ValidatedCriterionPropertyID $validatedCriterionPropertyID
     * @return self
     */
    public function setValidatedCriterionPropertyID(\CleverIt\UBL\Invoice\ValidatedCriterionPropertyID $validatedCriterionPropertyID)
    {
        $this->validatedCriterionPropertyID = $validatedCriterionPropertyID;
        return $this;
    }

    /**
     * Gets as confidentialityLevelCode
     *
     * BBIE
     *  Tendering Criterion Response. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of the response to this criterion.
     *  0..1
     *  Tendering Criterion Response
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ConfidentialityLevelCode
     */
    public function getConfidentialityLevelCode()
    {
        return $this->confidentialityLevelCode;
    }

    /**
     * Sets a new confidentialityLevelCode
     *
     * BBIE
     *  Tendering Criterion Response. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of the response to this criterion.
     *  0..1
     *  Tendering Criterion Response
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ConfidentialityLevelCode $confidentialityLevelCode
     * @return self
     */
    public function setConfidentialityLevelCode(\CleverIt\UBL\Invoice\ConfidentialityLevelCode $confidentialityLevelCode)
    {
        $this->confidentialityLevelCode = $confidentialityLevelCode;
        return $this;
    }

    /**
     * Adds as responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ResponseValue $responseValue
     */
    public function addToResponseValue(\CleverIt\UBL\Invoice\ResponseValue $responseValue)
    {
        $this->responseValue[] = $responseValue;
        return $this;
    }

    /**
     * isset responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponseValue($index)
    {
        return isset($this->responseValue[$index]);
    }

    /**
     * unset responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponseValue($index)
    {
        unset($this->responseValue[$index]);
    }

    /**
     * Gets as responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @return \CleverIt\UBL\Invoice\ResponseValue[]
     */
    public function getResponseValue()
    {
        return $this->responseValue;
    }

    /**
     * Sets a new responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @param \CleverIt\UBL\Invoice\ResponseValue[] $responseValue
     * @return self
     */
    public function setResponseValue(array $responseValue)
    {
        $this->responseValue = $responseValue;
        return $this;
    }

    /**
     * Adds as applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ApplicablePeriod $applicablePeriod
     */
    public function addToApplicablePeriod(\CleverIt\UBL\Invoice\ApplicablePeriod $applicablePeriod)
    {
        $this->applicablePeriod[] = $applicablePeriod;
        return $this;
    }

    /**
     * isset applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicablePeriod($index)
    {
        return isset($this->applicablePeriod[$index]);
    }

    /**
     * unset applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicablePeriod($index)
    {
        unset($this->applicablePeriod[$index]);
    }

    /**
     * Gets as applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\ApplicablePeriod[]
     */
    public function getApplicablePeriod()
    {
        return $this->applicablePeriod;
    }

    /**
     * Sets a new applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\ApplicablePeriod[] $applicablePeriod
     * @return self
     */
    public function setApplicablePeriod(array $applicablePeriod)
    {
        $this->applicablePeriod = $applicablePeriod;
        return $this;
    }

    /**
     * Adds as evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\CleverIt\UBL\Invoice\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return \CleverIt\UBL\Invoice\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param \CleverIt\UBL\Invoice\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(array $evidenceSupplied)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }


}

