<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TransportEventType
 *
 * ABIE
 *  Transport Event. Details
 *  A class to describe a significant occurrence or happening related to the transportation of goods.
 *  Transport Event
 * XSD Type: TransportEventType
 */
class TransportEventType
{

    /**
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for this transport event within an agreed event identification scheme.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\IdentificationID $identificationID
     */
    private $identificationID = null;

    /**
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $occurrenceDate
     */
    private $occurrenceDate = null;

    /**
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $occurrenceTime
     */
    private $occurrenceTime = null;

    /**
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code signifying the type of this transport event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\TransportEventTypeCode $transportEventTypeCode
     */
    private $transportEventTypeCode = null;

    /**
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
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
     *  Transport Event. Completion_ Indicator. Indicator
     *  An indicator that this transport event has been completed (true) or not (false).
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $completionIndicator
     */
    private $completionIndicator = null;

    /**
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  The shipment involved in this transport event.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \CleverIt\UBL\Invoice\ReportedShipment $reportedShipment
     */
    private $reportedShipment = null;

    /**
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @var \CleverIt\UBL\Invoice\CurrentStatus[] $currentStatus
     */
    private $currentStatus = [
        
    ];

    /**
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\Contact[] $contact
     */
    private $contact = [
        
    ];

    /**
     * ASBIE
     *  Transport Event. Location
     *  The location associated with this transport event.
     *  0..1
     *  Transport Event
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\Location $location
     */
    private $location = null;

    /**
     * ASBIE
     *  Transport Event. Signature
     *  A signature that can be used to sign for an entry or an exit at a transport location (e.g., port terminal).
     *  0..1
     *  Transport Event
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \CleverIt\UBL\Invoice\Signature $signature
     */
    private $signature = null;

    /**
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\Period[] $period
     */
    private $period = [
        
    ];

    /**
     * Gets as identificationID
     *
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for this transport event within an agreed event identification scheme.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\IdentificationID
     */
    public function getIdentificationID()
    {
        return $this->identificationID;
    }

    /**
     * Sets a new identificationID
     *
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for this transport event within an agreed event identification scheme.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\IdentificationID $identificationID
     * @return self
     */
    public function setIdentificationID(\CleverIt\UBL\Invoice\IdentificationID $identificationID)
    {
        $this->identificationID = $identificationID;
        return $this;
    }

    /**
     * Gets as occurrenceDate
     *
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Sets a new occurrenceDate
     *
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(\DateTime $occurrenceDate)
    {
        $this->occurrenceDate = $occurrenceDate;
        return $this;
    }

    /**
     * Gets as occurrenceTime
     *
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceTime()
    {
        return $this->occurrenceTime;
    }

    /**
     * Sets a new occurrenceTime
     *
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $occurrenceTime
     * @return self
     */
    public function setOccurrenceTime(\DateTime $occurrenceTime)
    {
        $this->occurrenceTime = $occurrenceTime;
        return $this;
    }

    /**
     * Gets as transportEventTypeCode
     *
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code signifying the type of this transport event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\TransportEventTypeCode
     */
    public function getTransportEventTypeCode()
    {
        return $this->transportEventTypeCode;
    }

    /**
     * Sets a new transportEventTypeCode
     *
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code signifying the type of this transport event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\TransportEventTypeCode $transportEventTypeCode
     * @return self
     */
    public function setTransportEventTypeCode(\CleverIt\UBL\Invoice\TransportEventTypeCode $transportEventTypeCode)
    {
        $this->transportEventTypeCode = $transportEventTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
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
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
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
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
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
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
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
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
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
     * Gets as completionIndicator
     *
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  An indicator that this transport event has been completed (true) or not (false).
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCompletionIndicator()
    {
        return $this->completionIndicator;
    }

    /**
     * Sets a new completionIndicator
     *
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  An indicator that this transport event has been completed (true) or not (false).
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $completionIndicator
     * @return self
     */
    public function setCompletionIndicator($completionIndicator)
    {
        $this->completionIndicator = $completionIndicator;
        return $this;
    }

    /**
     * Gets as reportedShipment
     *
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  The shipment involved in this transport event.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \CleverIt\UBL\Invoice\ReportedShipment
     */
    public function getReportedShipment()
    {
        return $this->reportedShipment;
    }

    /**
     * Sets a new reportedShipment
     *
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  The shipment involved in this transport event.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \CleverIt\UBL\Invoice\ReportedShipment $reportedShipment
     * @return self
     */
    public function setReportedShipment(\CleverIt\UBL\Invoice\ReportedShipment $reportedShipment)
    {
        $this->reportedShipment = $reportedShipment;
        return $this;
    }

    /**
     * Adds as currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\CurrentStatus $currentStatus
     */
    public function addToCurrentStatus(\CleverIt\UBL\Invoice\CurrentStatus $currentStatus)
    {
        $this->currentStatus[] = $currentStatus;
        return $this;
    }

    /**
     * isset currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrentStatus($index)
    {
        return isset($this->currentStatus[$index]);
    }

    /**
     * unset currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrentStatus($index)
    {
        unset($this->currentStatus[$index]);
    }

    /**
     * Gets as currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @return \CleverIt\UBL\Invoice\CurrentStatus[]
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Sets a new currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param \CleverIt\UBL\Invoice\CurrentStatus[] $currentStatus
     * @return self
     */
    public function setCurrentStatus(array $currentStatus)
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }

    /**
     * Adds as contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Contact $contact
     */
    public function addToContact(\CleverIt\UBL\Invoice\Contact $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\Contact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\Contact[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as location
     *
     * ASBIE
     *  Transport Event. Location
     *  The location associated with this transport event.
     *  0..1
     *  Transport Event
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * ASBIE
     *  Transport Event. Location
     *  The location associated with this transport event.
     *  0..1
     *  Transport Event
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\Location $location
     * @return self
     */
    public function setLocation(\CleverIt\UBL\Invoice\Location $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Transport Event. Signature
     *  A signature that can be used to sign for an entry or an exit at a transport location (e.g., port terminal).
     *  0..1
     *  Transport Event
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \CleverIt\UBL\Invoice\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Transport Event. Signature
     *  A signature that can be used to sign for an entry or an exit at a transport location (e.g., port terminal).
     *  0..1
     *  Transport Event
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \CleverIt\UBL\Invoice\Signature $signature
     * @return self
     */
    public function setSignature(\CleverIt\UBL\Invoice\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Adds as period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Period $period
     */
    public function addToPeriod(\CleverIt\UBL\Invoice\Period $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\Period[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\Period[] $period
     * @return self
     */
    public function setPeriod(array $period)
    {
        $this->period = $period;
        return $this;
    }


}

