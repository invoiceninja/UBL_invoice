<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ConsumptionPointType
 *
 * ABIE
 *  Consumption Point. Details
 *  A class to define the point of consumption for a utility, such as a meter.
 *  Consumption Point
 * XSD Type: ConsumptionPointType
 */
class ConsumptionPointType
{

    /**
     * BBIE
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @var \CleverIt\UBL\Invoice\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * BBIE
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * BBIE
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
     *
     * @var \CleverIt\UBL\Invoice\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @var \CleverIt\UBL\Invoice\TotalDeliveredQuantity $totalDeliveredQuantity
     */
    private $totalDeliveredQuantity = null;

    /**
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\Address $address
     */
    private $address = null;

    /**
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @var \CleverIt\UBL\Invoice\WebSiteAccess $webSiteAccess
     */
    private $webSiteAccess = null;

    /**
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @var \CleverIt\UBL\Invoice\UtilityMeter[] $utilityMeter
     */
    private $utilityMeter = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     * Gets as subscriberID
     *
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @return \CleverIt\UBL\Invoice\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @param \CleverIt\UBL\Invoice\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(\CleverIt\UBL\Invoice\SubscriberID $subscriberID)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * BBIE
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * BBIE
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(\CleverIt\UBL\Invoice\SubscriberType $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * BBIE
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
     *
     * @return \CleverIt\UBL\Invoice\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * BBIE
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
     *
     * @param \CleverIt\UBL\Invoice\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(\CleverIt\UBL\Invoice\SubscriberTypeCode $subscriberTypeCode)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
        return $this;
    }

    /**
     * Gets as totalDeliveredQuantity
     *
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @return \CleverIt\UBL\Invoice\TotalDeliveredQuantity
     */
    public function getTotalDeliveredQuantity()
    {
        return $this->totalDeliveredQuantity;
    }

    /**
     * Sets a new totalDeliveredQuantity
     *
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @param \CleverIt\UBL\Invoice\TotalDeliveredQuantity $totalDeliveredQuantity
     * @return self
     */
    public function setTotalDeliveredQuantity(\CleverIt\UBL\Invoice\TotalDeliveredQuantity $totalDeliveredQuantity)
    {
        $this->totalDeliveredQuantity = $totalDeliveredQuantity;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\Address $address
     * @return self
     */
    public function setAddress(\CleverIt\UBL\Invoice\Address $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as webSiteAccess
     *
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @return \CleverIt\UBL\Invoice\WebSiteAccess
     */
    public function getWebSiteAccess()
    {
        return $this->webSiteAccess;
    }

    /**
     * Sets a new webSiteAccess
     *
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param \CleverIt\UBL\Invoice\WebSiteAccess $webSiteAccess
     * @return self
     */
    public function setWebSiteAccess(\CleverIt\UBL\Invoice\WebSiteAccess $webSiteAccess)
    {
        $this->webSiteAccess = $webSiteAccess;
        return $this;
    }

    /**
     * Adds as utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\UtilityMeter $utilityMeter
     */
    public function addToUtilityMeter(\CleverIt\UBL\Invoice\UtilityMeter $utilityMeter)
    {
        $this->utilityMeter[] = $utilityMeter;
        return $this;
    }

    /**
     * isset utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUtilityMeter($index)
    {
        return isset($this->utilityMeter[$index]);
    }

    /**
     * unset utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUtilityMeter($index)
    {
        unset($this->utilityMeter[$index]);
    }

    /**
     * Gets as utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @return \CleverIt\UBL\Invoice\UtilityMeter[]
     */
    public function getUtilityMeter()
    {
        return $this->utilityMeter;
    }

    /**
     * Sets a new utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param \CleverIt\UBL\Invoice\UtilityMeter[] $utilityMeter
     * @return self
     */
    public function setUtilityMeter(array $utilityMeter)
    {
        $this->utilityMeter = $utilityMeter;
        return $this;
    }


}

