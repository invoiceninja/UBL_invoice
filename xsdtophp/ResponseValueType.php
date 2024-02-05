<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ResponseValueType
 *
 * ABIE
 *  Response Value. Details
 *  A class to describe the criterion requirement response value.
 *  Response Value
 * XSD Type: ResponseValueType
 */
class ResponseValueType
{

    /**
     * BBIE
     *  Response Value. Identifier
     *  An identifier to refer to the criterion requirement response value.
     *  0..1
     *  Response Value
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Response[] $response
     */
    private $response = [
        
    ];

    /**
     * BBIE
     *  Response Value. Response Amount. Amount
     *  An amount used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseAmount $responseAmount
     */
    private $responseAmount = null;

    /**
     * BBIE
     *  Response Value. Response Binary Object. Binary Object
     *  A binary graphic, picture, sound or video object used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Binary Object
     *  Binary Object
     *  Binary Object. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseBinaryObject $responseBinaryObject
     */
    private $responseBinaryObject = null;

    /**
     * BBIE
     *  Response Value. Response Code. Code
     *  A code used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseCode $responseCode
     */
    private $responseCode = null;

    /**
     * BBIE
     *  Response Value. Response Date. Date
     *  A date used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $responseDate
     */
    private $responseDate = null;

    /**
     * BBIE
     *  Response Value. Response Identifier. Identifier
     *  An identifier used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseID $responseID
     */
    private $responseID = null;

    /**
     * BBIE
     *  Response Value. Response Indicator. Indicator
     *  An indicator used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $responseIndicator
     */
    private $responseIndicator = null;

    /**
     * BBIE
     *  Response Value. Response Measure. Measure
     *  A measure used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Measure
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseMeasure $responseMeasure
     */
    private $responseMeasure = null;

    /**
     * BBIE
     *  Response Value. Response Numeric. Numeric
     *  A number, rate or percent used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseNumeric $responseNumeric
     */
    private $responseNumeric = null;

    /**
     * BBIE
     *  Response Value. Response Quantity. Quantity
     *  A quantity used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseQuantity $responseQuantity
     */
    private $responseQuantity = null;

    /**
     * BBIE
     *  Response Value. Response Time. Time
     *  A time used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $responseTime
     */
    private $responseTime = null;

    /**
     * BBIE
     *  Response Value. Response URI. Identifier
     *  A URI value used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ResponseURI $responseURI
     */
    private $responseURI = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Response Value. Identifier
     *  An identifier to refer to the criterion requirement response value.
     *  0..1
     *  Response Value
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
     *  Response Value. Identifier
     *  An identifier to refer to the criterion requirement response value.
     *  0..1
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     * Adds as response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Response $response
     */
    public function addToResponse(\CleverIt\UBL\Invoice\Response $response)
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Response[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Response[] $response
     * @return self
     */
    public function setResponse(array $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as responseAmount
     *
     * BBIE
     *  Response Value. Response Amount. Amount
     *  An amount used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseAmount
     */
    public function getResponseAmount()
    {
        return $this->responseAmount;
    }

    /**
     * Sets a new responseAmount
     *
     * BBIE
     *  Response Value. Response Amount. Amount
     *  An amount used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseAmount $responseAmount
     * @return self
     */
    public function setResponseAmount(\CleverIt\UBL\Invoice\ResponseAmount $responseAmount)
    {
        $this->responseAmount = $responseAmount;
        return $this;
    }

    /**
     * Gets as responseBinaryObject
     *
     * BBIE
     *  Response Value. Response Binary Object. Binary Object
     *  A binary graphic, picture, sound or video object used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Binary Object
     *  Binary Object
     *  Binary Object. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseBinaryObject
     */
    public function getResponseBinaryObject()
    {
        return $this->responseBinaryObject;
    }

    /**
     * Sets a new responseBinaryObject
     *
     * BBIE
     *  Response Value. Response Binary Object. Binary Object
     *  A binary graphic, picture, sound or video object used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Binary Object
     *  Binary Object
     *  Binary Object. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseBinaryObject $responseBinaryObject
     * @return self
     */
    public function setResponseBinaryObject(\CleverIt\UBL\Invoice\ResponseBinaryObject $responseBinaryObject)
    {
        $this->responseBinaryObject = $responseBinaryObject;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * BBIE
     *  Response Value. Response Code. Code
     *  A code used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseCode
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * BBIE
     *  Response Value. Response Code. Code
     *  A code used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseCode $responseCode
     * @return self
     */
    public function setResponseCode(\CleverIt\UBL\Invoice\ResponseCode $responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Gets as responseDate
     *
     * BBIE
     *  Response Value. Response Date. Date
     *  A date used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getResponseDate()
    {
        return $this->responseDate;
    }

    /**
     * Sets a new responseDate
     *
     * BBIE
     *  Response Value. Response Date. Date
     *  A date used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $responseDate
     * @return self
     */
    public function setResponseDate(\DateTime $responseDate)
    {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * Gets as responseID
     *
     * BBIE
     *  Response Value. Response Identifier. Identifier
     *  An identifier used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseID
     */
    public function getResponseID()
    {
        return $this->responseID;
    }

    /**
     * Sets a new responseID
     *
     * BBIE
     *  Response Value. Response Identifier. Identifier
     *  An identifier used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseID $responseID
     * @return self
     */
    public function setResponseID(\CleverIt\UBL\Invoice\ResponseID $responseID)
    {
        $this->responseID = $responseID;
        return $this;
    }

    /**
     * Gets as responseIndicator
     *
     * BBIE
     *  Response Value. Response Indicator. Indicator
     *  An indicator used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getResponseIndicator()
    {
        return $this->responseIndicator;
    }

    /**
     * Sets a new responseIndicator
     *
     * BBIE
     *  Response Value. Response Indicator. Indicator
     *  An indicator used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $responseIndicator
     * @return self
     */
    public function setResponseIndicator($responseIndicator)
    {
        $this->responseIndicator = $responseIndicator;
        return $this;
    }

    /**
     * Gets as responseMeasure
     *
     * BBIE
     *  Response Value. Response Measure. Measure
     *  A measure used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Measure
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseMeasure
     */
    public function getResponseMeasure()
    {
        return $this->responseMeasure;
    }

    /**
     * Sets a new responseMeasure
     *
     * BBIE
     *  Response Value. Response Measure. Measure
     *  A measure used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Measure
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseMeasure $responseMeasure
     * @return self
     */
    public function setResponseMeasure(\CleverIt\UBL\Invoice\ResponseMeasure $responseMeasure)
    {
        $this->responseMeasure = $responseMeasure;
        return $this;
    }

    /**
     * Gets as responseNumeric
     *
     * BBIE
     *  Response Value. Response Numeric. Numeric
     *  A number, rate or percent used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseNumeric
     */
    public function getResponseNumeric()
    {
        return $this->responseNumeric;
    }

    /**
     * Sets a new responseNumeric
     *
     * BBIE
     *  Response Value. Response Numeric. Numeric
     *  A number, rate or percent used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseNumeric $responseNumeric
     * @return self
     */
    public function setResponseNumeric(\CleverIt\UBL\Invoice\ResponseNumeric $responseNumeric)
    {
        $this->responseNumeric = $responseNumeric;
        return $this;
    }

    /**
     * Gets as responseQuantity
     *
     * BBIE
     *  Response Value. Response Quantity. Quantity
     *  A quantity used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseQuantity
     */
    public function getResponseQuantity()
    {
        return $this->responseQuantity;
    }

    /**
     * Sets a new responseQuantity
     *
     * BBIE
     *  Response Value. Response Quantity. Quantity
     *  A quantity used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseQuantity $responseQuantity
     * @return self
     */
    public function setResponseQuantity(\CleverIt\UBL\Invoice\ResponseQuantity $responseQuantity)
    {
        $this->responseQuantity = $responseQuantity;
        return $this;
    }

    /**
     * Gets as responseTime
     *
     * BBIE
     *  Response Value. Response Time. Time
     *  A time used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getResponseTime()
    {
        return $this->responseTime;
    }

    /**
     * Sets a new responseTime
     *
     * BBIE
     *  Response Value. Response Time. Time
     *  A time used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $responseTime
     * @return self
     */
    public function setResponseTime(\DateTime $responseTime)
    {
        $this->responseTime = $responseTime;
        return $this;
    }

    /**
     * Gets as responseURI
     *
     * BBIE
     *  Response Value. Response URI. Identifier
     *  A URI value used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ResponseURI
     */
    public function getResponseURI()
    {
        return $this->responseURI;
    }

    /**
     * Sets a new responseURI
     *
     * BBIE
     *  Response Value. Response URI. Identifier
     *  A URI value used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ResponseURI $responseURI
     * @return self
     */
    public function setResponseURI(\CleverIt\UBL\Invoice\ResponseURI $responseURI)
    {
        $this->responseURI = $responseURI;
        return $this;
    }


}

