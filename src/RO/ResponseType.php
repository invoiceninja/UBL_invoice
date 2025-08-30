<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ResponseType
 *
 * ABIE
 *  Response. Details
 *  A class to describe an application-level response to a document.
 *  Response
 * XSD Type: ResponseType
 */
class ResponseType
{
    /**
     * BBIE
     *  Response. Reference. Identifier
     *  An identifier for the section (or line) of the document to which this response applies.
     *  0..1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * BBIE
     *  Response. Response Code. Code
     *  A code signifying the type of response.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ResponseCode $responseCode
     */
    private $responseCode = null;

    /**
     * BBIE
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Response. Effective Date. Date
     *  The date upon which this response is valid.
     *  0..1
     *  Response
     *  Effective Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * BBIE
     *  Response. Effective Time. Time
     *  The time at which this response is valid.
     *  0..1
     *  Response
     *  Effective Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $effectiveTime
     */
    private $effectiveTime = null;

    /**
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @var \CleverIt\UBL\Invoice\RO\Status[] $status
     */
    private $status = [
        
    ];

    /**
     * Gets as referenceID
     *
     * BBIE
     *  Response. Reference. Identifier
     *  An identifier for the section (or line) of the document to which this response applies.
     *  0..1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ReferenceID
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * BBIE
     *  Response. Reference. Identifier
     *  An identifier for the section (or line) of the document to which this response applies.
     *  0..1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(?\CleverIt\UBL\Invoice\RO\ReferenceID $referenceID = null)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * BBIE
     *  Response. Response Code. Code
     *  A code signifying the type of response.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ResponseCode
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * BBIE
     *  Response. Response Code. Code
     *  A code signifying the type of response.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ResponseCode $responseCode
     * @return self
     */
    public function setResponseCode(?\CleverIt\UBL\Invoice\RO\ResponseCode $responseCode = null)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\RO\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * BBIE
     *  Response. Effective Date. Date
     *  The date upon which this response is valid.
     *  0..1
     *  Response
     *  Effective Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * BBIE
     *  Response. Effective Date. Date
     *  The date upon which this response is valid.
     *  0..1
     *  Response
     *  Effective Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as effectiveTime
     *
     * BBIE
     *  Response. Effective Time. Time
     *  The time at which this response is valid.
     *  0..1
     *  Response
     *  Effective Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEffectiveTime()
    {
        return $this->effectiveTime;
    }

    /**
     * Sets a new effectiveTime
     *
     * BBIE
     *  Response. Effective Time. Time
     *  The time at which this response is valid.
     *  0..1
     *  Response
     *  Effective Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $effectiveTime
     * @return self
     */
    public function setEffectiveTime(\DateTime $effectiveTime = null)
    {
        $this->effectiveTime = $effectiveTime;
        return $this;
    }

    /**
     * Adds as status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Status $status
     */
    public function addToStatus(\CleverIt\UBL\Invoice\RO\Status $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @return \CleverIt\UBL\Invoice\RO\Status[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @param \CleverIt\UBL\Invoice\RO\Status[] $status
     * @return self
     */
    public function setStatus(array $status = null)
    {
        $this->status = $status;
        return $this;
    }
}

