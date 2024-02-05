<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ServiceLevelAgreementType
 *
 * ABIE
 *  Service Level Agreement. Details
 *  A class to describe a service level agreement which regulates the quality, availability and responsibilities of digital services.
 *  Service Level Agreement
 *  SLA
 * XSD Type: ServiceLevelAgreementType
 */
class ServiceLevelAgreementType
{

    /**
     * BBIE
     *  Service Level Agreement. Identifier
     *  An identifier for this service level agreement.
     *  0..1
     *  Service Level Agreement
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Service Level Agreement. Service Type Code. Code
     *  A specific type of service subject to this service level agreement.
     *  0..1
     *  Service Level Agreement
     *  Service Type Code
     *  Code
     *  Code. Type
     *  AP, SMP
     *
     * @var \CleverIt\UBL\Invoice\ServiceTypeCode $serviceTypeCode
     */
    private $serviceTypeCode = null;

    /**
     * BBIE
     *  Service Level Agreement. Service Type. Text
     *  A specific type of service subject to this service level agreement, expressed as text.
     *  0..n
     *  Service Level Agreement
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\ServiceType[] $serviceType
     */
    private $serviceType = [
        
    ];

    /**
     * BBIE
     *  Service Level Agreement. Availability_ Time Percent. Percent
     *  The availability percentage (e.g. 98.5% of the time).
     *  0..1
     *  Service Level Agreement
     *  Availability
     *  Time Percent
     *  Percent
     *  Percent. Type
     *  Time Service Factor
     *  98.5
     *
     * @var \CleverIt\UBL\Invoice\AvailabilityTimePercent $availabilityTimePercent
     */
    private $availabilityTimePercent = null;

    /**
     * BBIE
     *  Service Level Agreement. Monday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on monday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Monday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $mondayAvailabilityIndicator
     */
    private $mondayAvailabilityIndicator = null;

    /**
     * BBIE
     *  Service Level Agreement. Tuesday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on tuesday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Tuesday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $tuesdayAvailabilityIndicator
     */
    private $tuesdayAvailabilityIndicator = null;

    /**
     * BBIE
     *  Service Level Agreement. Wednesday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on wednesday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Wednesday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $wednesdayAvailabilityIndicator
     */
    private $wednesdayAvailabilityIndicator = null;

    /**
     * BBIE
     *  Service Level Agreement. Thursday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on thursday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Thursday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $thursdayAvailabilityIndicator
     */
    private $thursdayAvailabilityIndicator = null;

    /**
     * BBIE
     *  Service Level Agreement. Friday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on friday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Friday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $fridayAvailabilityIndicator
     */
    private $fridayAvailabilityIndicator = null;

    /**
     * BBIE
     *  Service Level Agreement. Saturday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on saturday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Saturday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $saturdayAvailabilityIndicator
     */
    private $saturdayAvailabilityIndicator = null;

    /**
     * BBIE
     *  Service Level Agreement. Sunday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on sunday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Sunday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $sundayAvailabilityIndicator
     */
    private $sundayAvailabilityIndicator = null;

    /**
     * BBIE
     *  Service Level Agreement. Minimum_ Response Time Duration. Measure
     *  The response time for aknowledgment (e.g. to send a receipt to a sending Access Point within 300 seconds).
     *  0..1
     *  Service Level Agreement
     *  Minimum
     *  Response Time Duration
     *  Measure
     *  Measure. Type
     *  300
     *
     * @var \CleverIt\UBL\Invoice\MinimumResponseTimeDurationMeasure $minimumResponseTimeDurationMeasure
     */
    private $minimumResponseTimeDurationMeasure = null;

    /**
     * BBIE
     *  Service Level Agreement. Minimum_ Down Time Schedule Duration. Measure
     *  The minimum down time schedule for programmed maintenance (e.g. scheduled 3 days before).
     *  0..1
     *  Service Level Agreement
     *  Minimum
     *  Down Time Schedule Duration
     *  Measure
     *  Measure. Type
     *  3
     *
     * @var \CleverIt\UBL\Invoice\MinimumDownTimeScheduleDurationMeasure $minimumDownTimeScheduleDurationMeasure
     */
    private $minimumDownTimeScheduleDurationMeasure = null;

    /**
     * BBIE
     *  Service Level Agreement. Maximum_ Incident Notification Duration. Measure
     *  The maximum length of time between the occurrence of an incident and the issuance of a notification (e.g. within 4 hours).
     *  0..1
     *  Service Level Agreement
     *  Maximum
     *  Incident Notification Duration
     *  Measure
     *  Measure. Type
     *  4
     *
     * @var \CleverIt\UBL\Invoice\MaximumIncidentNotificationDurationMeasure $maximumIncidentNotificationDurationMeasure
     */
    private $maximumIncidentNotificationDurationMeasure = null;

    /**
     * BBIE
     *  Service Level Agreement. Maximum_ Data Loss Duration. Measure
     *  The maximum data loss permitted (e.g. last 24 hours).
     *  0..1
     *  Service Level Agreement
     *  Maximum
     *  Data Loss Duration
     *  Measure
     *  Measure. Type
     *  24
     *
     * @var \CleverIt\UBL\Invoice\MaximumDataLossDurationMeasure $maximumDataLossDurationMeasure
     */
    private $maximumDataLossDurationMeasure = null;

    /**
     * BBIE
     *  Service Level Agreement. Mean_ Time To Recover Duration. Measure
     *  The time taken to recover after an outage of service (e.g. 3 hours).
     *  0..1
     *  Service Level Agreement
     *  Mean
     *  Time To Recover Duration
     *  Measure
     *  Measure. Type
     *  MTTR
     *  3
     *
     * @var \CleverIt\UBL\Invoice\MeanTimeToRecoverDurationMeasure $meanTimeToRecoverDurationMeasure
     */
    private $meanTimeToRecoverDurationMeasure = null;

    /**
     * ASBIE
     *  Service Level Agreement. Service Availability_ Period. Period
     *  The period for which the service is available.
     *  0..n
     *  Service Level Agreement
     *  Service Availability
     *  Period
     *  Period
     *  Period
     *  Uptime
     *
     * @var \CleverIt\UBL\Invoice\ServiceAvailabilityPeriod[] $serviceAvailabilityPeriod
     */
    private $serviceAvailabilityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Service Level Agreement. Service Maintenance_ Period. Period
     *  The period of time designated in advance by the technical staff, during which preventive maintenance that could cause disruption of service may be performed.
     *  0..n
     *  Service Level Agreement
     *  Service Maintenance
     *  Period
     *  Period
     *  Period
     *  Downtime
     *
     * @var \CleverIt\UBL\Invoice\ServiceMaintenancePeriod[] $serviceMaintenancePeriod
     */
    private $serviceMaintenancePeriod = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Service Level Agreement. Identifier
     *  An identifier for this service level agreement.
     *  0..1
     *  Service Level Agreement
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
     *  Service Level Agreement. Identifier
     *  An identifier for this service level agreement.
     *  0..1
     *  Service Level Agreement
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
     * Gets as serviceTypeCode
     *
     * BBIE
     *  Service Level Agreement. Service Type Code. Code
     *  A specific type of service subject to this service level agreement.
     *  0..1
     *  Service Level Agreement
     *  Service Type Code
     *  Code
     *  Code. Type
     *  AP, SMP
     *
     * @return \CleverIt\UBL\Invoice\ServiceTypeCode
     */
    public function getServiceTypeCode()
    {
        return $this->serviceTypeCode;
    }

    /**
     * Sets a new serviceTypeCode
     *
     * BBIE
     *  Service Level Agreement. Service Type Code. Code
     *  A specific type of service subject to this service level agreement.
     *  0..1
     *  Service Level Agreement
     *  Service Type Code
     *  Code
     *  Code. Type
     *  AP, SMP
     *
     * @param \CleverIt\UBL\Invoice\ServiceTypeCode $serviceTypeCode
     * @return self
     */
    public function setServiceTypeCode(\CleverIt\UBL\Invoice\ServiceTypeCode $serviceTypeCode)
    {
        $this->serviceTypeCode = $serviceTypeCode;
        return $this;
    }

    /**
     * Adds as serviceType
     *
     * BBIE
     *  Service Level Agreement. Service Type. Text
     *  A specific type of service subject to this service level agreement, expressed as text.
     *  0..n
     *  Service Level Agreement
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ServiceType $serviceType
     */
    public function addToServiceType(\CleverIt\UBL\Invoice\ServiceType $serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * isset serviceType
     *
     * BBIE
     *  Service Level Agreement. Service Type. Text
     *  A specific type of service subject to this service level agreement, expressed as text.
     *  0..n
     *  Service Level Agreement
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceType($index)
    {
        return isset($this->serviceType[$index]);
    }

    /**
     * unset serviceType
     *
     * BBIE
     *  Service Level Agreement. Service Type. Text
     *  A specific type of service subject to this service level agreement, expressed as text.
     *  0..n
     *  Service Level Agreement
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceType($index)
    {
        unset($this->serviceType[$index]);
    }

    /**
     * Gets as serviceType
     *
     * BBIE
     *  Service Level Agreement. Service Type. Text
     *  A specific type of service subject to this service level agreement, expressed as text.
     *  0..n
     *  Service Level Agreement
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\ServiceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * BBIE
     *  Service Level Agreement. Service Type. Text
     *  A specific type of service subject to this service level agreement, expressed as text.
     *  0..n
     *  Service Level Agreement
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\ServiceType[] $serviceType
     * @return self
     */
    public function setServiceType(array $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Gets as availabilityTimePercent
     *
     * BBIE
     *  Service Level Agreement. Availability_ Time Percent. Percent
     *  The availability percentage (e.g. 98.5% of the time).
     *  0..1
     *  Service Level Agreement
     *  Availability
     *  Time Percent
     *  Percent
     *  Percent. Type
     *  Time Service Factor
     *  98.5
     *
     * @return \CleverIt\UBL\Invoice\AvailabilityTimePercent
     */
    public function getAvailabilityTimePercent()
    {
        return $this->availabilityTimePercent;
    }

    /**
     * Sets a new availabilityTimePercent
     *
     * BBIE
     *  Service Level Agreement. Availability_ Time Percent. Percent
     *  The availability percentage (e.g. 98.5% of the time).
     *  0..1
     *  Service Level Agreement
     *  Availability
     *  Time Percent
     *  Percent
     *  Percent. Type
     *  Time Service Factor
     *  98.5
     *
     * @param \CleverIt\UBL\Invoice\AvailabilityTimePercent $availabilityTimePercent
     * @return self
     */
    public function setAvailabilityTimePercent(\CleverIt\UBL\Invoice\AvailabilityTimePercent $availabilityTimePercent)
    {
        $this->availabilityTimePercent = $availabilityTimePercent;
        return $this;
    }

    /**
     * Gets as mondayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Monday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on monday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Monday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMondayAvailabilityIndicator()
    {
        return $this->mondayAvailabilityIndicator;
    }

    /**
     * Sets a new mondayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Monday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on monday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Monday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $mondayAvailabilityIndicator
     * @return self
     */
    public function setMondayAvailabilityIndicator($mondayAvailabilityIndicator)
    {
        $this->mondayAvailabilityIndicator = $mondayAvailabilityIndicator;
        return $this;
    }

    /**
     * Gets as tuesdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Tuesday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on tuesday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Tuesday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getTuesdayAvailabilityIndicator()
    {
        return $this->tuesdayAvailabilityIndicator;
    }

    /**
     * Sets a new tuesdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Tuesday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on tuesday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Tuesday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $tuesdayAvailabilityIndicator
     * @return self
     */
    public function setTuesdayAvailabilityIndicator($tuesdayAvailabilityIndicator)
    {
        $this->tuesdayAvailabilityIndicator = $tuesdayAvailabilityIndicator;
        return $this;
    }

    /**
     * Gets as wednesdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Wednesday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on wednesday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Wednesday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getWednesdayAvailabilityIndicator()
    {
        return $this->wednesdayAvailabilityIndicator;
    }

    /**
     * Sets a new wednesdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Wednesday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on wednesday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Wednesday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $wednesdayAvailabilityIndicator
     * @return self
     */
    public function setWednesdayAvailabilityIndicator($wednesdayAvailabilityIndicator)
    {
        $this->wednesdayAvailabilityIndicator = $wednesdayAvailabilityIndicator;
        return $this;
    }

    /**
     * Gets as thursdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Thursday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on thursday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Thursday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getThursdayAvailabilityIndicator()
    {
        return $this->thursdayAvailabilityIndicator;
    }

    /**
     * Sets a new thursdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Thursday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on thursday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Thursday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $thursdayAvailabilityIndicator
     * @return self
     */
    public function setThursdayAvailabilityIndicator($thursdayAvailabilityIndicator)
    {
        $this->thursdayAvailabilityIndicator = $thursdayAvailabilityIndicator;
        return $this;
    }

    /**
     * Gets as fridayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Friday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on friday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Friday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFridayAvailabilityIndicator()
    {
        return $this->fridayAvailabilityIndicator;
    }

    /**
     * Sets a new fridayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Friday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on friday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Friday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $fridayAvailabilityIndicator
     * @return self
     */
    public function setFridayAvailabilityIndicator($fridayAvailabilityIndicator)
    {
        $this->fridayAvailabilityIndicator = $fridayAvailabilityIndicator;
        return $this;
    }

    /**
     * Gets as saturdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Saturday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on saturday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Saturday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSaturdayAvailabilityIndicator()
    {
        return $this->saturdayAvailabilityIndicator;
    }

    /**
     * Sets a new saturdayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Saturday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on saturday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Saturday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $saturdayAvailabilityIndicator
     * @return self
     */
    public function setSaturdayAvailabilityIndicator($saturdayAvailabilityIndicator)
    {
        $this->saturdayAvailabilityIndicator = $saturdayAvailabilityIndicator;
        return $this;
    }

    /**
     * Gets as sundayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Sunday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on sunday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Sunday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSundayAvailabilityIndicator()
    {
        return $this->sundayAvailabilityIndicator;
    }

    /**
     * Sets a new sundayAvailabilityIndicator
     *
     * BBIE
     *  Service Level Agreement. Sunday Availability_ Indicator. Indicator
     *  Indicates whether this service is available on sunday (true) or not (false).
     *  0..1
     *  Service Level Agreement
     *  Sunday Availability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $sundayAvailabilityIndicator
     * @return self
     */
    public function setSundayAvailabilityIndicator($sundayAvailabilityIndicator)
    {
        $this->sundayAvailabilityIndicator = $sundayAvailabilityIndicator;
        return $this;
    }

    /**
     * Gets as minimumResponseTimeDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Minimum_ Response Time Duration. Measure
     *  The response time for aknowledgment (e.g. to send a receipt to a sending Access Point within 300 seconds).
     *  0..1
     *  Service Level Agreement
     *  Minimum
     *  Response Time Duration
     *  Measure
     *  Measure. Type
     *  300
     *
     * @return \CleverIt\UBL\Invoice\MinimumResponseTimeDurationMeasure
     */
    public function getMinimumResponseTimeDurationMeasure()
    {
        return $this->minimumResponseTimeDurationMeasure;
    }

    /**
     * Sets a new minimumResponseTimeDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Minimum_ Response Time Duration. Measure
     *  The response time for aknowledgment (e.g. to send a receipt to a sending Access Point within 300 seconds).
     *  0..1
     *  Service Level Agreement
     *  Minimum
     *  Response Time Duration
     *  Measure
     *  Measure. Type
     *  300
     *
     * @param \CleverIt\UBL\Invoice\MinimumResponseTimeDurationMeasure $minimumResponseTimeDurationMeasure
     * @return self
     */
    public function setMinimumResponseTimeDurationMeasure(\CleverIt\UBL\Invoice\MinimumResponseTimeDurationMeasure $minimumResponseTimeDurationMeasure)
    {
        $this->minimumResponseTimeDurationMeasure = $minimumResponseTimeDurationMeasure;
        return $this;
    }

    /**
     * Gets as minimumDownTimeScheduleDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Minimum_ Down Time Schedule Duration. Measure
     *  The minimum down time schedule for programmed maintenance (e.g. scheduled 3 days before).
     *  0..1
     *  Service Level Agreement
     *  Minimum
     *  Down Time Schedule Duration
     *  Measure
     *  Measure. Type
     *  3
     *
     * @return \CleverIt\UBL\Invoice\MinimumDownTimeScheduleDurationMeasure
     */
    public function getMinimumDownTimeScheduleDurationMeasure()
    {
        return $this->minimumDownTimeScheduleDurationMeasure;
    }

    /**
     * Sets a new minimumDownTimeScheduleDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Minimum_ Down Time Schedule Duration. Measure
     *  The minimum down time schedule for programmed maintenance (e.g. scheduled 3 days before).
     *  0..1
     *  Service Level Agreement
     *  Minimum
     *  Down Time Schedule Duration
     *  Measure
     *  Measure. Type
     *  3
     *
     * @param \CleverIt\UBL\Invoice\MinimumDownTimeScheduleDurationMeasure $minimumDownTimeScheduleDurationMeasure
     * @return self
     */
    public function setMinimumDownTimeScheduleDurationMeasure(\CleverIt\UBL\Invoice\MinimumDownTimeScheduleDurationMeasure $minimumDownTimeScheduleDurationMeasure)
    {
        $this->minimumDownTimeScheduleDurationMeasure = $minimumDownTimeScheduleDurationMeasure;
        return $this;
    }

    /**
     * Gets as maximumIncidentNotificationDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Maximum_ Incident Notification Duration. Measure
     *  The maximum length of time between the occurrence of an incident and the issuance of a notification (e.g. within 4 hours).
     *  0..1
     *  Service Level Agreement
     *  Maximum
     *  Incident Notification Duration
     *  Measure
     *  Measure. Type
     *  4
     *
     * @return \CleverIt\UBL\Invoice\MaximumIncidentNotificationDurationMeasure
     */
    public function getMaximumIncidentNotificationDurationMeasure()
    {
        return $this->maximumIncidentNotificationDurationMeasure;
    }

    /**
     * Sets a new maximumIncidentNotificationDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Maximum_ Incident Notification Duration. Measure
     *  The maximum length of time between the occurrence of an incident and the issuance of a notification (e.g. within 4 hours).
     *  0..1
     *  Service Level Agreement
     *  Maximum
     *  Incident Notification Duration
     *  Measure
     *  Measure. Type
     *  4
     *
     * @param \CleverIt\UBL\Invoice\MaximumIncidentNotificationDurationMeasure $maximumIncidentNotificationDurationMeasure
     * @return self
     */
    public function setMaximumIncidentNotificationDurationMeasure(\CleverIt\UBL\Invoice\MaximumIncidentNotificationDurationMeasure $maximumIncidentNotificationDurationMeasure)
    {
        $this->maximumIncidentNotificationDurationMeasure = $maximumIncidentNotificationDurationMeasure;
        return $this;
    }

    /**
     * Gets as maximumDataLossDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Maximum_ Data Loss Duration. Measure
     *  The maximum data loss permitted (e.g. last 24 hours).
     *  0..1
     *  Service Level Agreement
     *  Maximum
     *  Data Loss Duration
     *  Measure
     *  Measure. Type
     *  24
     *
     * @return \CleverIt\UBL\Invoice\MaximumDataLossDurationMeasure
     */
    public function getMaximumDataLossDurationMeasure()
    {
        return $this->maximumDataLossDurationMeasure;
    }

    /**
     * Sets a new maximumDataLossDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Maximum_ Data Loss Duration. Measure
     *  The maximum data loss permitted (e.g. last 24 hours).
     *  0..1
     *  Service Level Agreement
     *  Maximum
     *  Data Loss Duration
     *  Measure
     *  Measure. Type
     *  24
     *
     * @param \CleverIt\UBL\Invoice\MaximumDataLossDurationMeasure $maximumDataLossDurationMeasure
     * @return self
     */
    public function setMaximumDataLossDurationMeasure(\CleverIt\UBL\Invoice\MaximumDataLossDurationMeasure $maximumDataLossDurationMeasure)
    {
        $this->maximumDataLossDurationMeasure = $maximumDataLossDurationMeasure;
        return $this;
    }

    /**
     * Gets as meanTimeToRecoverDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Mean_ Time To Recover Duration. Measure
     *  The time taken to recover after an outage of service (e.g. 3 hours).
     *  0..1
     *  Service Level Agreement
     *  Mean
     *  Time To Recover Duration
     *  Measure
     *  Measure. Type
     *  MTTR
     *  3
     *
     * @return \CleverIt\UBL\Invoice\MeanTimeToRecoverDurationMeasure
     */
    public function getMeanTimeToRecoverDurationMeasure()
    {
        return $this->meanTimeToRecoverDurationMeasure;
    }

    /**
     * Sets a new meanTimeToRecoverDurationMeasure
     *
     * BBIE
     *  Service Level Agreement. Mean_ Time To Recover Duration. Measure
     *  The time taken to recover after an outage of service (e.g. 3 hours).
     *  0..1
     *  Service Level Agreement
     *  Mean
     *  Time To Recover Duration
     *  Measure
     *  Measure. Type
     *  MTTR
     *  3
     *
     * @param \CleverIt\UBL\Invoice\MeanTimeToRecoverDurationMeasure $meanTimeToRecoverDurationMeasure
     * @return self
     */
    public function setMeanTimeToRecoverDurationMeasure(\CleverIt\UBL\Invoice\MeanTimeToRecoverDurationMeasure $meanTimeToRecoverDurationMeasure)
    {
        $this->meanTimeToRecoverDurationMeasure = $meanTimeToRecoverDurationMeasure;
        return $this;
    }

    /**
     * Adds as serviceAvailabilityPeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Availability_ Period. Period
     *  The period for which the service is available.
     *  0..n
     *  Service Level Agreement
     *  Service Availability
     *  Period
     *  Period
     *  Period
     *  Uptime
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ServiceAvailabilityPeriod $serviceAvailabilityPeriod
     */
    public function addToServiceAvailabilityPeriod(\CleverIt\UBL\Invoice\ServiceAvailabilityPeriod $serviceAvailabilityPeriod)
    {
        $this->serviceAvailabilityPeriod[] = $serviceAvailabilityPeriod;
        return $this;
    }

    /**
     * isset serviceAvailabilityPeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Availability_ Period. Period
     *  The period for which the service is available.
     *  0..n
     *  Service Level Agreement
     *  Service Availability
     *  Period
     *  Period
     *  Period
     *  Uptime
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceAvailabilityPeriod($index)
    {
        return isset($this->serviceAvailabilityPeriod[$index]);
    }

    /**
     * unset serviceAvailabilityPeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Availability_ Period. Period
     *  The period for which the service is available.
     *  0..n
     *  Service Level Agreement
     *  Service Availability
     *  Period
     *  Period
     *  Period
     *  Uptime
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceAvailabilityPeriod($index)
    {
        unset($this->serviceAvailabilityPeriod[$index]);
    }

    /**
     * Gets as serviceAvailabilityPeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Availability_ Period. Period
     *  The period for which the service is available.
     *  0..n
     *  Service Level Agreement
     *  Service Availability
     *  Period
     *  Period
     *  Period
     *  Uptime
     *
     * @return \CleverIt\UBL\Invoice\ServiceAvailabilityPeriod[]
     */
    public function getServiceAvailabilityPeriod()
    {
        return $this->serviceAvailabilityPeriod;
    }

    /**
     * Sets a new serviceAvailabilityPeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Availability_ Period. Period
     *  The period for which the service is available.
     *  0..n
     *  Service Level Agreement
     *  Service Availability
     *  Period
     *  Period
     *  Period
     *  Uptime
     *
     * @param \CleverIt\UBL\Invoice\ServiceAvailabilityPeriod[] $serviceAvailabilityPeriod
     * @return self
     */
    public function setServiceAvailabilityPeriod(array $serviceAvailabilityPeriod)
    {
        $this->serviceAvailabilityPeriod = $serviceAvailabilityPeriod;
        return $this;
    }

    /**
     * Adds as serviceMaintenancePeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Maintenance_ Period. Period
     *  The period of time designated in advance by the technical staff, during which preventive maintenance that could cause disruption of service may be performed.
     *  0..n
     *  Service Level Agreement
     *  Service Maintenance
     *  Period
     *  Period
     *  Period
     *  Downtime
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ServiceMaintenancePeriod $serviceMaintenancePeriod
     */
    public function addToServiceMaintenancePeriod(\CleverIt\UBL\Invoice\ServiceMaintenancePeriod $serviceMaintenancePeriod)
    {
        $this->serviceMaintenancePeriod[] = $serviceMaintenancePeriod;
        return $this;
    }

    /**
     * isset serviceMaintenancePeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Maintenance_ Period. Period
     *  The period of time designated in advance by the technical staff, during which preventive maintenance that could cause disruption of service may be performed.
     *  0..n
     *  Service Level Agreement
     *  Service Maintenance
     *  Period
     *  Period
     *  Period
     *  Downtime
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceMaintenancePeriod($index)
    {
        return isset($this->serviceMaintenancePeriod[$index]);
    }

    /**
     * unset serviceMaintenancePeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Maintenance_ Period. Period
     *  The period of time designated in advance by the technical staff, during which preventive maintenance that could cause disruption of service may be performed.
     *  0..n
     *  Service Level Agreement
     *  Service Maintenance
     *  Period
     *  Period
     *  Period
     *  Downtime
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceMaintenancePeriod($index)
    {
        unset($this->serviceMaintenancePeriod[$index]);
    }

    /**
     * Gets as serviceMaintenancePeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Maintenance_ Period. Period
     *  The period of time designated in advance by the technical staff, during which preventive maintenance that could cause disruption of service may be performed.
     *  0..n
     *  Service Level Agreement
     *  Service Maintenance
     *  Period
     *  Period
     *  Period
     *  Downtime
     *
     * @return \CleverIt\UBL\Invoice\ServiceMaintenancePeriod[]
     */
    public function getServiceMaintenancePeriod()
    {
        return $this->serviceMaintenancePeriod;
    }

    /**
     * Sets a new serviceMaintenancePeriod
     *
     * ASBIE
     *  Service Level Agreement. Service Maintenance_ Period. Period
     *  The period of time designated in advance by the technical staff, during which preventive maintenance that could cause disruption of service may be performed.
     *  0..n
     *  Service Level Agreement
     *  Service Maintenance
     *  Period
     *  Period
     *  Period
     *  Downtime
     *
     * @param \CleverIt\UBL\Invoice\ServiceMaintenancePeriod[] $serviceMaintenancePeriod
     * @return self
     */
    public function setServiceMaintenancePeriod(array $serviceMaintenancePeriod)
    {
        $this->serviceMaintenancePeriod = $serviceMaintenancePeriod;
        return $this;
    }


}

