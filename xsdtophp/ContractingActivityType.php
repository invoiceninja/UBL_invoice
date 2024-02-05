<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ContractingActivityType
 *
 * ABIE
 *  Contracting Activity. Details
 *  The nature of the type of business of the organization.
 *  Contracting Activity
 * XSD Type: ContractingActivityType
 */
class ContractingActivityType
{

    /**
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ActivityTypeCode $activityTypeCode
     */
    private $activityTypeCode = null;

    /**
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..1
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\ActivityType $activityType
     */
    private $activityType = null;

    /**
     * Gets as activityTypeCode
     *
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ActivityTypeCode
     */
    public function getActivityTypeCode()
    {
        return $this->activityTypeCode;
    }

    /**
     * Sets a new activityTypeCode
     *
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ActivityTypeCode $activityTypeCode
     * @return self
     */
    public function setActivityTypeCode(\CleverIt\UBL\Invoice\ActivityTypeCode $activityTypeCode)
    {
        $this->activityTypeCode = $activityTypeCode;
        return $this;
    }

    /**
     * Gets as activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..1
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\ActivityType
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Sets a new activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..1
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\ActivityType $activityType
     * @return self
     */
    public function setActivityType(\CleverIt\UBL\Invoice\ActivityType $activityType)
    {
        $this->activityType = $activityType;
        return $this;
    }


}

