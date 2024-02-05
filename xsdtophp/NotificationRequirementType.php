<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing NotificationRequirementType
 *
 * ABIE
 *  Notification Requirement. Details
 *  A class to describe a notification requirement.
 *  Notification Requirement
 * XSD Type: NotificationRequirementType
 */
class NotificationRequirementType
{

    /**
     * BBIE
     *  Notification Requirement. Notification Type Code. Code
     *  A code signifying the type of notification (e.g., pickup status).
     *  1
     *  Notification Requirement
     *  Notification Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\NotificationTypeCode $notificationTypeCode
     */
    private $notificationTypeCode = null;

    /**
     * BBIE
     *  Notification Requirement. Post Event Notification Duration. Measure
     *  The length of time between the occurrence of a given event and the issuance of a notification.
     *  0..1
     *  Notification Requirement
     *  Post Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure
     */
    private $postEventNotificationDurationMeasure = null;

    /**
     * BBIE
     *  Notification Requirement. Pre Event Notification Duration. Measure
     *  The length of time to elapse between the issuance of a notification and the occurrence of the event it relates to.
     *  0..1
     *  Notification Requirement
     *  Pre Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure
     */
    private $preEventNotificationDurationMeasure = null;

    /**
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\NotifyParty[] $notifyParty
     */
    private $notifyParty = [
        
    ];

    /**
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\NotificationPeriod[] $notificationPeriod
     */
    private $notificationPeriod = [
        
    ];

    /**
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\NotificationLocation[] $notificationLocation
     */
    private $notificationLocation = [
        
    ];

    /**
     * Gets as notificationTypeCode
     *
     * BBIE
     *  Notification Requirement. Notification Type Code. Code
     *  A code signifying the type of notification (e.g., pickup status).
     *  1
     *  Notification Requirement
     *  Notification Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\NotificationTypeCode
     */
    public function getNotificationTypeCode()
    {
        return $this->notificationTypeCode;
    }

    /**
     * Sets a new notificationTypeCode
     *
     * BBIE
     *  Notification Requirement. Notification Type Code. Code
     *  A code signifying the type of notification (e.g., pickup status).
     *  1
     *  Notification Requirement
     *  Notification Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\NotificationTypeCode $notificationTypeCode
     * @return self
     */
    public function setNotificationTypeCode(\CleverIt\UBL\Invoice\NotificationTypeCode $notificationTypeCode)
    {
        $this->notificationTypeCode = $notificationTypeCode;
        return $this;
    }

    /**
     * Gets as postEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Post Event Notification Duration. Measure
     *  The length of time between the occurrence of a given event and the issuance of a notification.
     *  0..1
     *  Notification Requirement
     *  Post Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\PostEventNotificationDurationMeasure
     */
    public function getPostEventNotificationDurationMeasure()
    {
        return $this->postEventNotificationDurationMeasure;
    }

    /**
     * Sets a new postEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Post Event Notification Duration. Measure
     *  The length of time between the occurrence of a given event and the issuance of a notification.
     *  0..1
     *  Notification Requirement
     *  Post Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure
     * @return self
     */
    public function setPostEventNotificationDurationMeasure(\CleverIt\UBL\Invoice\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure)
    {
        $this->postEventNotificationDurationMeasure = $postEventNotificationDurationMeasure;
        return $this;
    }

    /**
     * Gets as preEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Pre Event Notification Duration. Measure
     *  The length of time to elapse between the issuance of a notification and the occurrence of the event it relates to.
     *  0..1
     *  Notification Requirement
     *  Pre Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\PreEventNotificationDurationMeasure
     */
    public function getPreEventNotificationDurationMeasure()
    {
        return $this->preEventNotificationDurationMeasure;
    }

    /**
     * Sets a new preEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Pre Event Notification Duration. Measure
     *  The length of time to elapse between the issuance of a notification and the occurrence of the event it relates to.
     *  0..1
     *  Notification Requirement
     *  Pre Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure
     * @return self
     */
    public function setPreEventNotificationDurationMeasure(\CleverIt\UBL\Invoice\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure)
    {
        $this->preEventNotificationDurationMeasure = $preEventNotificationDurationMeasure;
        return $this;
    }

    /**
     * Adds as notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\NotifyParty $notifyParty
     */
    public function addToNotifyParty(\CleverIt\UBL\Invoice\NotifyParty $notifyParty)
    {
        $this->notifyParty[] = $notifyParty;
        return $this;
    }

    /**
     * isset notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotifyParty($index)
    {
        return isset($this->notifyParty[$index]);
    }

    /**
     * unset notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotifyParty($index)
    {
        unset($this->notifyParty[$index]);
    }

    /**
     * Gets as notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\NotifyParty[]
     */
    public function getNotifyParty()
    {
        return $this->notifyParty;
    }

    /**
     * Sets a new notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\NotifyParty[] $notifyParty
     * @return self
     */
    public function setNotifyParty(array $notifyParty)
    {
        $this->notifyParty = $notifyParty;
        return $this;
    }

    /**
     * Adds as notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\NotificationPeriod $notificationPeriod
     */
    public function addToNotificationPeriod(\CleverIt\UBL\Invoice\NotificationPeriod $notificationPeriod)
    {
        $this->notificationPeriod[] = $notificationPeriod;
        return $this;
    }

    /**
     * isset notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationPeriod($index)
    {
        return isset($this->notificationPeriod[$index]);
    }

    /**
     * unset notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationPeriod($index)
    {
        unset($this->notificationPeriod[$index]);
    }

    /**
     * Gets as notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\NotificationPeriod[]
     */
    public function getNotificationPeriod()
    {
        return $this->notificationPeriod;
    }

    /**
     * Sets a new notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\NotificationPeriod[] $notificationPeriod
     * @return self
     */
    public function setNotificationPeriod(array $notificationPeriod)
    {
        $this->notificationPeriod = $notificationPeriod;
        return $this;
    }

    /**
     * Adds as notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\NotificationLocation $notificationLocation
     */
    public function addToNotificationLocation(\CleverIt\UBL\Invoice\NotificationLocation $notificationLocation)
    {
        $this->notificationLocation[] = $notificationLocation;
        return $this;
    }

    /**
     * isset notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationLocation($index)
    {
        return isset($this->notificationLocation[$index]);
    }

    /**
     * unset notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationLocation($index)
    {
        unset($this->notificationLocation[$index]);
    }

    /**
     * Gets as notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\NotificationLocation[]
     */
    public function getNotificationLocation()
    {
        return $this->notificationLocation;
    }

    /**
     * Sets a new notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\NotificationLocation[] $notificationLocation
     * @return self
     */
    public function setNotificationLocation(array $notificationLocation)
    {
        $this->notificationLocation = $notificationLocation;
        return $this;
    }


}

