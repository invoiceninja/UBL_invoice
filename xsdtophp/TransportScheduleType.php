<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TransportScheduleType
 *
 * ABIE
 *  Transport Schedule. Details
 *  Describes the location and schedule relating to a transport means.
 *  Transport Schedule
 * XSD Type: TransportScheduleType
 */
class TransportScheduleType
{

    /**
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $referenceDate
     */
    private $referenceDate = null;

    /**
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $referenceTime
     */
    private $referenceTime = null;

    /**
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\ReliabilityPercent $reliabilityPercent
     */
    private $reliabilityPercent = null;

    /**
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\StatusLocation $statusLocation
     */
    private $statusLocation = null;

    /**
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \CleverIt\UBL\Invoice\ActualArrivalTransportEvent $actualArrivalTransportEvent
     */
    private $actualArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \CleverIt\UBL\Invoice\ActualDepartureTransportEvent $actualDepartureTransportEvent
     */
    private $actualDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \CleverIt\UBL\Invoice\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     */
    private $estimatedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \CleverIt\UBL\Invoice\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     */
    private $estimatedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \CleverIt\UBL\Invoice\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     */
    private $plannedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \CleverIt\UBL\Invoice\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     */
    private $plannedArrivalTransportEvent = null;

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\CleverIt\UBL\Invoice\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as referenceDate
     *
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Sets a new referenceDate
     *
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $referenceDate
     * @return self
     */
    public function setReferenceDate(\DateTime $referenceDate)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * Gets as referenceTime
     *
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getReferenceTime()
    {
        return $this->referenceTime;
    }

    /**
     * Sets a new referenceTime
     *
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $referenceTime
     * @return self
     */
    public function setReferenceTime(\DateTime $referenceTime)
    {
        $this->referenceTime = $referenceTime;
        return $this;
    }

    /**
     * Gets as reliabilityPercent
     *
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\ReliabilityPercent
     */
    public function getReliabilityPercent()
    {
        return $this->reliabilityPercent;
    }

    /**
     * Sets a new reliabilityPercent
     *
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\ReliabilityPercent $reliabilityPercent
     * @return self
     */
    public function setReliabilityPercent(\CleverIt\UBL\Invoice\ReliabilityPercent $reliabilityPercent)
    {
        $this->reliabilityPercent = $reliabilityPercent;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Remarks $remarks
     */
    public function addToRemarks(\CleverIt\UBL\Invoice\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as statusLocation
     *
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\StatusLocation
     */
    public function getStatusLocation()
    {
        return $this->statusLocation;
    }

    /**
     * Sets a new statusLocation
     *
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\StatusLocation $statusLocation
     * @return self
     */
    public function setStatusLocation(\CleverIt\UBL\Invoice\StatusLocation $statusLocation)
    {
        $this->statusLocation = $statusLocation;
        return $this;
    }

    /**
     * Gets as actualArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \CleverIt\UBL\Invoice\ActualArrivalTransportEvent
     */
    public function getActualArrivalTransportEvent()
    {
        return $this->actualArrivalTransportEvent;
    }

    /**
     * Sets a new actualArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \CleverIt\UBL\Invoice\ActualArrivalTransportEvent $actualArrivalTransportEvent
     * @return self
     */
    public function setActualArrivalTransportEvent(\CleverIt\UBL\Invoice\ActualArrivalTransportEvent $actualArrivalTransportEvent)
    {
        $this->actualArrivalTransportEvent = $actualArrivalTransportEvent;
        return $this;
    }

    /**
     * Gets as actualDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \CleverIt\UBL\Invoice\ActualDepartureTransportEvent
     */
    public function getActualDepartureTransportEvent()
    {
        return $this->actualDepartureTransportEvent;
    }

    /**
     * Sets a new actualDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \CleverIt\UBL\Invoice\ActualDepartureTransportEvent $actualDepartureTransportEvent
     * @return self
     */
    public function setActualDepartureTransportEvent(\CleverIt\UBL\Invoice\ActualDepartureTransportEvent $actualDepartureTransportEvent)
    {
        $this->actualDepartureTransportEvent = $actualDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \CleverIt\UBL\Invoice\EstimatedDepartureTransportEvent
     */
    public function getEstimatedDepartureTransportEvent()
    {
        return $this->estimatedDepartureTransportEvent;
    }

    /**
     * Sets a new estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \CleverIt\UBL\Invoice\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     * @return self
     */
    public function setEstimatedDepartureTransportEvent(\CleverIt\UBL\Invoice\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent)
    {
        $this->estimatedDepartureTransportEvent = $estimatedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \CleverIt\UBL\Invoice\EstimatedArrivalTransportEvent
     */
    public function getEstimatedArrivalTransportEvent()
    {
        return $this->estimatedArrivalTransportEvent;
    }

    /**
     * Sets a new estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \CleverIt\UBL\Invoice\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     * @return self
     */
    public function setEstimatedArrivalTransportEvent(\CleverIt\UBL\Invoice\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent)
    {
        $this->estimatedArrivalTransportEvent = $estimatedArrivalTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \CleverIt\UBL\Invoice\PlannedDepartureTransportEvent
     */
    public function getPlannedDepartureTransportEvent()
    {
        return $this->plannedDepartureTransportEvent;
    }

    /**
     * Sets a new plannedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \CleverIt\UBL\Invoice\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     * @return self
     */
    public function setPlannedDepartureTransportEvent(\CleverIt\UBL\Invoice\PlannedDepartureTransportEvent $plannedDepartureTransportEvent)
    {
        $this->plannedDepartureTransportEvent = $plannedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \CleverIt\UBL\Invoice\PlannedArrivalTransportEvent
     */
    public function getPlannedArrivalTransportEvent()
    {
        return $this->plannedArrivalTransportEvent;
    }

    /**
     * Sets a new plannedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \CleverIt\UBL\Invoice\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     * @return self
     */
    public function setPlannedArrivalTransportEvent(\CleverIt\UBL\Invoice\PlannedArrivalTransportEvent $plannedArrivalTransportEvent)
    {
        $this->plannedArrivalTransportEvent = $plannedArrivalTransportEvent;
        return $this;
    }


}

