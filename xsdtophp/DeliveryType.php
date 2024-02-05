<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DeliveryType
 *
 * ABIE
 *  Delivery. Details
 *  A class to describe a delivery.
 *  Delivery
 * XSD Type: DeliveryType
 */
class DeliveryType
{

    /**
     * BBIE
     *  Delivery. Identifier
     *  An identifier for this delivery.
     *  0..1
     *  Delivery
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Delivery. Quantity
     *  The quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Delivery. Minimum_ Quantity. Quantity
     *  The minimum quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Delivery. Maximum_ Quantity. Quantity
     *  The maximum quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Delivery. Actual_ Delivery Date. Date
     *  The actual date of delivery.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $actualDeliveryDate
     */
    private $actualDeliveryDate = null;

    /**
     * BBIE
     *  Delivery. Actual_ Delivery Time. Time
     *  The actual time of delivery.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $actualDeliveryTime
     */
    private $actualDeliveryTime = null;

    /**
     * BBIE
     *  Delivery. Latest_ Delivery Date. Date
     *  The latest date of delivery allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestDeliveryDate
     */
    private $latestDeliveryDate = null;

    /**
     * BBIE
     *  Delivery. Latest_ Delivery Time. Time
     *  The latest time of delivery allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $latestDeliveryTime
     */
    private $latestDeliveryTime = null;

    /**
     * BBIE
     *  Delivery. Release. Identifier
     *  An identifier used for approval of access to delivery locations (e.g., port terminals).
     *  0..1
     *  Delivery
     *  Release
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ReleaseID $releaseID
     */
    private $releaseID = null;

    /**
     * BBIE
     *  Delivery. Tracking Identifier. Identifier
     *  The delivery Tracking ID (for transport tracking).
     *  0..1
     *  Delivery
     *  Tracking Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\TrackingID $trackingID
     */
    private $trackingID = null;

    /**
     * ASBIE
     *  Delivery. Delivery_ Address. Address
     *  The delivery address.
     *  0..1
     *  Delivery
     *  Delivery
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\DeliveryAddress $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * ASBIE
     *  Delivery. Delivery_ Location. Location
     *  The delivery location.
     *  0..1
     *  Delivery
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\DeliveryLocation $deliveryLocation
     */
    private $deliveryLocation = null;

    /**
     * ASBIE
     *  Delivery. Alternative Delivery_ Location. Location
     *  An alternative delivery location.
     *  0..1
     *  Delivery
     *  Alternative Delivery
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\AlternativeDeliveryLocation $alternativeDeliveryLocation
     */
    private $alternativeDeliveryLocation = null;

    /**
     * ASBIE
     *  Delivery. Requested Delivery_ Period. Period
     *  The period requested for delivery.
     *  0..1
     *  Delivery
     *  Requested Delivery
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RequestedDeliveryPeriod $requestedDeliveryPeriod
     */
    private $requestedDeliveryPeriod = null;

    /**
     * ASBIE
     *  Delivery. Promised Delivery_ Period. Period
     *  The period promised for delivery.
     *  0..1
     *  Delivery
     *  Promised Delivery
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\PromisedDeliveryPeriod $promisedDeliveryPeriod
     */
    private $promisedDeliveryPeriod = null;

    /**
     * ASBIE
     *  Delivery. Estimated Delivery_ Period. Period
     *  The period estimated for delivery.
     *  0..1
     *  Delivery
     *  Estimated Delivery
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\EstimatedDeliveryPeriod $estimatedDeliveryPeriod
     */
    private $estimatedDeliveryPeriod = null;

    /**
     * ASBIE
     *  Delivery. Carrier_ Party. Party
     *  The party responsible for delivering the goods.
     *  0..1
     *  Delivery
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\CarrierParty $carrierParty
     */
    private $carrierParty = null;

    /**
     * ASBIE
     *  Delivery. Delivery_ Party. Party
     *  The party to whom the goods are delivered.
     *  0..1
     *  Delivery
     *  Delivery
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\DeliveryParty $deliveryParty
     */
    private $deliveryParty = null;

    /**
     * ASBIE
     *  Delivery. Notify_ Party. Party
     *  A party to be notified of this delivery.
     *  0..n
     *  Delivery
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
     *  Delivery. Despatch
     *  The despatch (pickup) associated with this delivery.
     *  0..1
     *  Delivery
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @var \CleverIt\UBL\Invoice\Despatch $despatch
     */
    private $despatch = null;

    /**
     * ASBIE
     *  Delivery. Delivery Terms
     *  Terms and conditions relating to the delivery.
     *  0..n
     *  Delivery
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \CleverIt\UBL\Invoice\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * ASBIE
     *  Delivery. Minimum_ Delivery Unit. Delivery Unit
     *  The minimum delivery unit for this delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @var \CleverIt\UBL\Invoice\MinimumDeliveryUnit $minimumDeliveryUnit
     */
    private $minimumDeliveryUnit = null;

    /**
     * ASBIE
     *  Delivery. Maximum_ Delivery Unit. Delivery Unit
     *  The maximum delivery unit for this delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @var \CleverIt\UBL\Invoice\MaximumDeliveryUnit $maximumDeliveryUnit
     */
    private $maximumDeliveryUnit = null;

    /**
     * ASBIE
     *  Delivery. Shipment
     *  The shipment being delivered.
     *  0..1
     *  Delivery
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \CleverIt\UBL\Invoice\Shipment $shipment
     */
    private $shipment = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Delivery. Identifier
     *  An identifier for this delivery.
     *  0..1
     *  Delivery
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
     *  Delivery. Identifier
     *  An identifier for this delivery.
     *  0..1
     *  Delivery
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
     * Gets as quantity
     *
     * BBIE
     *  Delivery. Quantity
     *  The quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Delivery. Quantity
     *  The quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\Quantity $quantity
     * @return self
     */
    public function setQuantity(\CleverIt\UBL\Invoice\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Delivery. Minimum_ Quantity. Quantity
     *  The minimum quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Delivery. Minimum_ Quantity. Quantity
     *  The minimum quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(\CleverIt\UBL\Invoice\MinimumQuantity $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Delivery. Maximum_ Quantity. Quantity
     *  The maximum quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Delivery. Maximum_ Quantity. Quantity
     *  The maximum quantity of items, child consignments, shipments in this delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(\CleverIt\UBL\Invoice\MaximumQuantity $maximumQuantity)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as actualDeliveryDate
     *
     * BBIE
     *  Delivery. Actual_ Delivery Date. Date
     *  The actual date of delivery.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getActualDeliveryDate()
    {
        return $this->actualDeliveryDate;
    }

    /**
     * Sets a new actualDeliveryDate
     *
     * BBIE
     *  Delivery. Actual_ Delivery Date. Date
     *  The actual date of delivery.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $actualDeliveryDate
     * @return self
     */
    public function setActualDeliveryDate(\DateTime $actualDeliveryDate)
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
        return $this;
    }

    /**
     * Gets as actualDeliveryTime
     *
     * BBIE
     *  Delivery. Actual_ Delivery Time. Time
     *  The actual time of delivery.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getActualDeliveryTime()
    {
        return $this->actualDeliveryTime;
    }

    /**
     * Sets a new actualDeliveryTime
     *
     * BBIE
     *  Delivery. Actual_ Delivery Time. Time
     *  The actual time of delivery.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $actualDeliveryTime
     * @return self
     */
    public function setActualDeliveryTime(\DateTime $actualDeliveryTime)
    {
        $this->actualDeliveryTime = $actualDeliveryTime;
        return $this;
    }

    /**
     * Gets as latestDeliveryDate
     *
     * BBIE
     *  Delivery. Latest_ Delivery Date. Date
     *  The latest date of delivery allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestDeliveryDate()
    {
        return $this->latestDeliveryDate;
    }

    /**
     * Sets a new latestDeliveryDate
     *
     * BBIE
     *  Delivery. Latest_ Delivery Date. Date
     *  The latest date of delivery allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $latestDeliveryDate
     * @return self
     */
    public function setLatestDeliveryDate(\DateTime $latestDeliveryDate)
    {
        $this->latestDeliveryDate = $latestDeliveryDate;
        return $this;
    }

    /**
     * Gets as latestDeliveryTime
     *
     * BBIE
     *  Delivery. Latest_ Delivery Time. Time
     *  The latest time of delivery allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getLatestDeliveryTime()
    {
        return $this->latestDeliveryTime;
    }

    /**
     * Sets a new latestDeliveryTime
     *
     * BBIE
     *  Delivery. Latest_ Delivery Time. Time
     *  The latest time of delivery allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $latestDeliveryTime
     * @return self
     */
    public function setLatestDeliveryTime(\DateTime $latestDeliveryTime)
    {
        $this->latestDeliveryTime = $latestDeliveryTime;
        return $this;
    }

    /**
     * Gets as releaseID
     *
     * BBIE
     *  Delivery. Release. Identifier
     *  An identifier used for approval of access to delivery locations (e.g., port terminals).
     *  0..1
     *  Delivery
     *  Release
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ReleaseID
     */
    public function getReleaseID()
    {
        return $this->releaseID;
    }

    /**
     * Sets a new releaseID
     *
     * BBIE
     *  Delivery. Release. Identifier
     *  An identifier used for approval of access to delivery locations (e.g., port terminals).
     *  0..1
     *  Delivery
     *  Release
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ReleaseID $releaseID
     * @return self
     */
    public function setReleaseID(\CleverIt\UBL\Invoice\ReleaseID $releaseID)
    {
        $this->releaseID = $releaseID;
        return $this;
    }

    /**
     * Gets as trackingID
     *
     * BBIE
     *  Delivery. Tracking Identifier. Identifier
     *  The delivery Tracking ID (for transport tracking).
     *  0..1
     *  Delivery
     *  Tracking Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\TrackingID
     */
    public function getTrackingID()
    {
        return $this->trackingID;
    }

    /**
     * Sets a new trackingID
     *
     * BBIE
     *  Delivery. Tracking Identifier. Identifier
     *  The delivery Tracking ID (for transport tracking).
     *  0..1
     *  Delivery
     *  Tracking Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\TrackingID $trackingID
     * @return self
     */
    public function setTrackingID(\CleverIt\UBL\Invoice\TrackingID $trackingID)
    {
        $this->trackingID = $trackingID;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * ASBIE
     *  Delivery. Delivery_ Address. Address
     *  The delivery address.
     *  0..1
     *  Delivery
     *  Delivery
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\DeliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * ASBIE
     *  Delivery. Delivery_ Address. Address
     *  The delivery address.
     *  0..1
     *  Delivery
     *  Delivery
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\DeliveryAddress $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(\CleverIt\UBL\Invoice\DeliveryAddress $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as deliveryLocation
     *
     * ASBIE
     *  Delivery. Delivery_ Location. Location
     *  The delivery location.
     *  0..1
     *  Delivery
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\DeliveryLocation
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * Sets a new deliveryLocation
     *
     * ASBIE
     *  Delivery. Delivery_ Location. Location
     *  The delivery location.
     *  0..1
     *  Delivery
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\DeliveryLocation $deliveryLocation
     * @return self
     */
    public function setDeliveryLocation(\CleverIt\UBL\Invoice\DeliveryLocation $deliveryLocation)
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    /**
     * Gets as alternativeDeliveryLocation
     *
     * ASBIE
     *  Delivery. Alternative Delivery_ Location. Location
     *  An alternative delivery location.
     *  0..1
     *  Delivery
     *  Alternative Delivery
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\AlternativeDeliveryLocation
     */
    public function getAlternativeDeliveryLocation()
    {
        return $this->alternativeDeliveryLocation;
    }

    /**
     * Sets a new alternativeDeliveryLocation
     *
     * ASBIE
     *  Delivery. Alternative Delivery_ Location. Location
     *  An alternative delivery location.
     *  0..1
     *  Delivery
     *  Alternative Delivery
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\AlternativeDeliveryLocation $alternativeDeliveryLocation
     * @return self
     */
    public function setAlternativeDeliveryLocation(\CleverIt\UBL\Invoice\AlternativeDeliveryLocation $alternativeDeliveryLocation)
    {
        $this->alternativeDeliveryLocation = $alternativeDeliveryLocation;
        return $this;
    }

    /**
     * Gets as requestedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Requested Delivery_ Period. Period
     *  The period requested for delivery.
     *  0..1
     *  Delivery
     *  Requested Delivery
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RequestedDeliveryPeriod
     */
    public function getRequestedDeliveryPeriod()
    {
        return $this->requestedDeliveryPeriod;
    }

    /**
     * Sets a new requestedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Requested Delivery_ Period. Period
     *  The period requested for delivery.
     *  0..1
     *  Delivery
     *  Requested Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RequestedDeliveryPeriod $requestedDeliveryPeriod
     * @return self
     */
    public function setRequestedDeliveryPeriod(\CleverIt\UBL\Invoice\RequestedDeliveryPeriod $requestedDeliveryPeriod)
    {
        $this->requestedDeliveryPeriod = $requestedDeliveryPeriod;
        return $this;
    }

    /**
     * Gets as promisedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Promised Delivery_ Period. Period
     *  The period promised for delivery.
     *  0..1
     *  Delivery
     *  Promised Delivery
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\PromisedDeliveryPeriod
     */
    public function getPromisedDeliveryPeriod()
    {
        return $this->promisedDeliveryPeriod;
    }

    /**
     * Sets a new promisedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Promised Delivery_ Period. Period
     *  The period promised for delivery.
     *  0..1
     *  Delivery
     *  Promised Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\PromisedDeliveryPeriod $promisedDeliveryPeriod
     * @return self
     */
    public function setPromisedDeliveryPeriod(\CleverIt\UBL\Invoice\PromisedDeliveryPeriod $promisedDeliveryPeriod)
    {
        $this->promisedDeliveryPeriod = $promisedDeliveryPeriod;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Estimated Delivery_ Period. Period
     *  The period estimated for delivery.
     *  0..1
     *  Delivery
     *  Estimated Delivery
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\EstimatedDeliveryPeriod
     */
    public function getEstimatedDeliveryPeriod()
    {
        return $this->estimatedDeliveryPeriod;
    }

    /**
     * Sets a new estimatedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Estimated Delivery_ Period. Period
     *  The period estimated for delivery.
     *  0..1
     *  Delivery
     *  Estimated Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\EstimatedDeliveryPeriod $estimatedDeliveryPeriod
     * @return self
     */
    public function setEstimatedDeliveryPeriod(\CleverIt\UBL\Invoice\EstimatedDeliveryPeriod $estimatedDeliveryPeriod)
    {
        $this->estimatedDeliveryPeriod = $estimatedDeliveryPeriod;
        return $this;
    }

    /**
     * Gets as carrierParty
     *
     * ASBIE
     *  Delivery. Carrier_ Party. Party
     *  The party responsible for delivering the goods.
     *  0..1
     *  Delivery
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\CarrierParty
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * ASBIE
     *  Delivery. Carrier_ Party. Party
     *  The party responsible for delivering the goods.
     *  0..1
     *  Delivery
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\CarrierParty $carrierParty
     * @return self
     */
    public function setCarrierParty(\CleverIt\UBL\Invoice\CarrierParty $carrierParty)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as deliveryParty
     *
     * ASBIE
     *  Delivery. Delivery_ Party. Party
     *  The party to whom the goods are delivered.
     *  0..1
     *  Delivery
     *  Delivery
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\DeliveryParty
     */
    public function getDeliveryParty()
    {
        return $this->deliveryParty;
    }

    /**
     * Sets a new deliveryParty
     *
     * ASBIE
     *  Delivery. Delivery_ Party. Party
     *  The party to whom the goods are delivered.
     *  0..1
     *  Delivery
     *  Delivery
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\DeliveryParty $deliveryParty
     * @return self
     */
    public function setDeliveryParty(\CleverIt\UBL\Invoice\DeliveryParty $deliveryParty)
    {
        $this->deliveryParty = $deliveryParty;
        return $this;
    }

    /**
     * Adds as notifyParty
     *
     * ASBIE
     *  Delivery. Notify_ Party. Party
     *  A party to be notified of this delivery.
     *  0..n
     *  Delivery
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
     *  Delivery. Notify_ Party. Party
     *  A party to be notified of this delivery.
     *  0..n
     *  Delivery
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
     *  Delivery. Notify_ Party. Party
     *  A party to be notified of this delivery.
     *  0..n
     *  Delivery
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
     *  Delivery. Notify_ Party. Party
     *  A party to be notified of this delivery.
     *  0..n
     *  Delivery
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
     *  Delivery. Notify_ Party. Party
     *  A party to be notified of this delivery.
     *  0..n
     *  Delivery
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
     * Gets as despatch
     *
     * ASBIE
     *  Delivery. Despatch
     *  The despatch (pickup) associated with this delivery.
     *  0..1
     *  Delivery
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @return \CleverIt\UBL\Invoice\Despatch
     */
    public function getDespatch()
    {
        return $this->despatch;
    }

    /**
     * Sets a new despatch
     *
     * ASBIE
     *  Delivery. Despatch
     *  The despatch (pickup) associated with this delivery.
     *  0..1
     *  Delivery
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @param \CleverIt\UBL\Invoice\Despatch $despatch
     * @return self
     */
    public function setDespatch(\CleverIt\UBL\Invoice\Despatch $despatch)
    {
        $this->despatch = $despatch;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * ASBIE
     *  Delivery. Delivery Terms
     *  Terms and conditions relating to the delivery.
     *  0..n
     *  Delivery
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\CleverIt\UBL\Invoice\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * ASBIE
     *  Delivery. Delivery Terms
     *  Terms and conditions relating to the delivery.
     *  0..n
     *  Delivery
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * ASBIE
     *  Delivery. Delivery Terms
     *  Terms and conditions relating to the delivery.
     *  0..n
     *  Delivery
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Delivery. Delivery Terms
     *  Terms and conditions relating to the delivery.
     *  0..n
     *  Delivery
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \CleverIt\UBL\Invoice\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Delivery. Delivery Terms
     *  Terms and conditions relating to the delivery.
     *  0..n
     *  Delivery
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \CleverIt\UBL\Invoice\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(array $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as minimumDeliveryUnit
     *
     * ASBIE
     *  Delivery. Minimum_ Delivery Unit. Delivery Unit
     *  The minimum delivery unit for this delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return \CleverIt\UBL\Invoice\MinimumDeliveryUnit
     */
    public function getMinimumDeliveryUnit()
    {
        return $this->minimumDeliveryUnit;
    }

    /**
     * Sets a new minimumDeliveryUnit
     *
     * ASBIE
     *  Delivery. Minimum_ Delivery Unit. Delivery Unit
     *  The minimum delivery unit for this delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param \CleverIt\UBL\Invoice\MinimumDeliveryUnit $minimumDeliveryUnit
     * @return self
     */
    public function setMinimumDeliveryUnit(\CleverIt\UBL\Invoice\MinimumDeliveryUnit $minimumDeliveryUnit)
    {
        $this->minimumDeliveryUnit = $minimumDeliveryUnit;
        return $this;
    }

    /**
     * Gets as maximumDeliveryUnit
     *
     * ASBIE
     *  Delivery. Maximum_ Delivery Unit. Delivery Unit
     *  The maximum delivery unit for this delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return \CleverIt\UBL\Invoice\MaximumDeliveryUnit
     */
    public function getMaximumDeliveryUnit()
    {
        return $this->maximumDeliveryUnit;
    }

    /**
     * Sets a new maximumDeliveryUnit
     *
     * ASBIE
     *  Delivery. Maximum_ Delivery Unit. Delivery Unit
     *  The maximum delivery unit for this delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param \CleverIt\UBL\Invoice\MaximumDeliveryUnit $maximumDeliveryUnit
     * @return self
     */
    public function setMaximumDeliveryUnit(\CleverIt\UBL\Invoice\MaximumDeliveryUnit $maximumDeliveryUnit)
    {
        $this->maximumDeliveryUnit = $maximumDeliveryUnit;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Delivery. Shipment
     *  The shipment being delivered.
     *  0..1
     *  Delivery
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \CleverIt\UBL\Invoice\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Delivery. Shipment
     *  The shipment being delivered.
     *  0..1
     *  Delivery
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \CleverIt\UBL\Invoice\Shipment $shipment
     * @return self
     */
    public function setShipment(\CleverIt\UBL\Invoice\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }


}

