<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ActivityDataLineType
 *
 * ABIE
 *  Activity Data Line. Details
 *  A class to associate a time period and locations (activity data) with an item for inventory planning purposes.
 *  Activity Data Line
 * XSD Type: ActivityDataLineType
 */
class ActivityDataLineType
{
    /**
     * BBIE
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \CleverIt\UBL\Invoice\RO\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \CleverIt\UBL\Invoice\RO\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\ActivityPeriod $activityPeriod
     */
    private $activityPeriod = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\RO\ActivityOriginLocation $activityOriginLocation
     */
    private $activityOriginLocation = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\RO\ActivityFinalLocation $activityFinalLocation
     */
    private $activityFinalLocation = null;

    /**
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \CleverIt\UBL\Invoice\RO\SalesItem[] $salesItem
     */
    private $salesItem = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\RO\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as supplyChainActivityTypeCode
     *
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCode()
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * Sets a new supplyChainActivityTypeCode
     *
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(\CleverIt\UBL\Invoice\RO\SupplyChainActivityTypeCode $supplyChainActivityTypeCode)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \CleverIt\UBL\Invoice\RO\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \CleverIt\UBL\Invoice\RO\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\CleverIt\UBL\Invoice\RO\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \CleverIt\UBL\Invoice\RO\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \CleverIt\UBL\Invoice\RO\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\CleverIt\UBL\Invoice\RO\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as activityPeriod
     *
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\ActivityPeriod
     */
    public function getActivityPeriod()
    {
        return $this->activityPeriod;
    }

    /**
     * Sets a new activityPeriod
     *
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\ActivityPeriod $activityPeriod
     * @return self
     */
    public function setActivityPeriod(?\CleverIt\UBL\Invoice\RO\ActivityPeriod $activityPeriod = null)
    {
        $this->activityPeriod = $activityPeriod;
        return $this;
    }

    /**
     * Gets as activityOriginLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\RO\ActivityOriginLocation
     */
    public function getActivityOriginLocation()
    {
        return $this->activityOriginLocation;
    }

    /**
     * Sets a new activityOriginLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\RO\ActivityOriginLocation $activityOriginLocation
     * @return self
     */
    public function setActivityOriginLocation(\CleverIt\UBL\Invoice\RO\ActivityOriginLocation $activityOriginLocation)
    {
        $this->activityOriginLocation = $activityOriginLocation;
        return $this;
    }

    /**
     * Gets as activityFinalLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\RO\ActivityFinalLocation
     */
    public function getActivityFinalLocation()
    {
        return $this->activityFinalLocation;
    }

    /**
     * Sets a new activityFinalLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\RO\ActivityFinalLocation $activityFinalLocation
     * @return self
     */
    public function setActivityFinalLocation(?\CleverIt\UBL\Invoice\RO\ActivityFinalLocation $activityFinalLocation = null)
    {
        $this->activityFinalLocation = $activityFinalLocation;
        return $this;
    }

    /**
     * Adds as salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\SalesItem $salesItem
     */
    public function addToSalesItem(\CleverIt\UBL\Invoice\RO\SalesItem $salesItem)
    {
        $this->salesItem[] = $salesItem;
        return $this;
    }

    /**
     * isset salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesItem($index)
    {
        return isset($this->salesItem[$index]);
    }

    /**
     * unset salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesItem($index)
    {
        unset($this->salesItem[$index]);
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \CleverIt\UBL\Invoice\RO\SalesItem[]
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \CleverIt\UBL\Invoice\RO\SalesItem[] $salesItem
     * @return self
     */
    public function setSalesItem(array $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }
}

