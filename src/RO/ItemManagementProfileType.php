<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ItemManagementProfileType
 *
 * ABIE
 *  Item Management Profile. Details
 *  A class to define a management profile for an item.
 *  Item Management Profile
 * XSD Type: ItemManagementProfileType
 */
class ItemManagementProfileType
{
    /**
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     */
    private $frozenPeriodDaysNumeric = null;

    /**
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MinimumInventoryQuantity $minimumInventoryQuantity
     */
    private $minimumInventoryQuantity = null;

    /**
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MultipleOrderQuantity $multipleOrderQuantity
     */
    private $multipleOrderQuantity = null;

    /**
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     */
    private $orderIntervalDaysNumeric = null;

    /**
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     */
    private $replenishmentOwnerDescription = [
        
    ];

    /**
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TargetServicePercent $targetServicePercent
     */
    private $targetServicePercent = null;

    /**
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TargetInventoryQuantity $targetInventoryQuantity
     */
    private $targetInventoryQuantity = null;

    /**
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\EffectivePeriod $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\RO\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \CleverIt\UBL\Invoice\RO\ItemLocationQuantity $itemLocationQuantity
     */
    private $itemLocationQuantity = null;

    /**
     * Gets as frozenPeriodDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\FrozenPeriodDaysNumeric
     */
    public function getFrozenPeriodDaysNumeric()
    {
        return $this->frozenPeriodDaysNumeric;
    }

    /**
     * Sets a new frozenPeriodDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     * @return self
     */
    public function setFrozenPeriodDaysNumeric(?\CleverIt\UBL\Invoice\RO\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric = null)
    {
        $this->frozenPeriodDaysNumeric = $frozenPeriodDaysNumeric;
        return $this;
    }

    /**
     * Gets as minimumInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MinimumInventoryQuantity
     */
    public function getMinimumInventoryQuantity()
    {
        return $this->minimumInventoryQuantity;
    }

    /**
     * Sets a new minimumInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MinimumInventoryQuantity $minimumInventoryQuantity
     * @return self
     */
    public function setMinimumInventoryQuantity(?\CleverIt\UBL\Invoice\RO\MinimumInventoryQuantity $minimumInventoryQuantity = null)
    {
        $this->minimumInventoryQuantity = $minimumInventoryQuantity;
        return $this;
    }

    /**
     * Gets as multipleOrderQuantity
     *
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MultipleOrderQuantity
     */
    public function getMultipleOrderQuantity()
    {
        return $this->multipleOrderQuantity;
    }

    /**
     * Sets a new multipleOrderQuantity
     *
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MultipleOrderQuantity $multipleOrderQuantity
     * @return self
     */
    public function setMultipleOrderQuantity(?\CleverIt\UBL\Invoice\RO\MultipleOrderQuantity $multipleOrderQuantity = null)
    {
        $this->multipleOrderQuantity = $multipleOrderQuantity;
        return $this;
    }

    /**
     * Gets as orderIntervalDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\OrderIntervalDaysNumeric
     */
    public function getOrderIntervalDaysNumeric()
    {
        return $this->orderIntervalDaysNumeric;
    }

    /**
     * Sets a new orderIntervalDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     * @return self
     */
    public function setOrderIntervalDaysNumeric(?\CleverIt\UBL\Invoice\RO\OrderIntervalDaysNumeric $orderIntervalDaysNumeric = null)
    {
        $this->orderIntervalDaysNumeric = $orderIntervalDaysNumeric;
        return $this;
    }

    /**
     * Adds as replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ReplenishmentOwnerDescription $replenishmentOwnerDescription
     */
    public function addToReplenishmentOwnerDescription(\CleverIt\UBL\Invoice\RO\ReplenishmentOwnerDescription $replenishmentOwnerDescription)
    {
        $this->replenishmentOwnerDescription[] = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * isset replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplenishmentOwnerDescription($index)
    {
        return isset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * unset replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplenishmentOwnerDescription($index)
    {
        unset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * Gets as replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ReplenishmentOwnerDescription[]
     */
    public function getReplenishmentOwnerDescription()
    {
        return $this->replenishmentOwnerDescription;
    }

    /**
     * Sets a new replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     * @return self
     */
    public function setReplenishmentOwnerDescription(array $replenishmentOwnerDescription = null)
    {
        $this->replenishmentOwnerDescription = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * Gets as targetServicePercent
     *
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TargetServicePercent
     */
    public function getTargetServicePercent()
    {
        return $this->targetServicePercent;
    }

    /**
     * Sets a new targetServicePercent
     *
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TargetServicePercent $targetServicePercent
     * @return self
     */
    public function setTargetServicePercent(?\CleverIt\UBL\Invoice\RO\TargetServicePercent $targetServicePercent = null)
    {
        $this->targetServicePercent = $targetServicePercent;
        return $this;
    }

    /**
     * Gets as targetInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TargetInventoryQuantity
     */
    public function getTargetInventoryQuantity()
    {
        return $this->targetInventoryQuantity;
    }

    /**
     * Sets a new targetInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TargetInventoryQuantity $targetInventoryQuantity
     * @return self
     */
    public function setTargetInventoryQuantity(?\CleverIt\UBL\Invoice\RO\TargetInventoryQuantity $targetInventoryQuantity = null)
    {
        $this->targetInventoryQuantity = $targetInventoryQuantity;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\EffectivePeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\EffectivePeriod $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\CleverIt\UBL\Invoice\RO\EffectivePeriod $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
     *  Item
     *  Item
     *  Item
     *
     * @return \CleverIt\UBL\Invoice\RO\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
     *  Item
     *  Item
     *  Item
     *
     * @param \CleverIt\UBL\Invoice\RO\Item $item
     * @return self
     */
    public function setItem(\CleverIt\UBL\Invoice\RO\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as itemLocationQuantity
     *
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \CleverIt\UBL\Invoice\RO\ItemLocationQuantity
     */
    public function getItemLocationQuantity()
    {
        return $this->itemLocationQuantity;
    }

    /**
     * Sets a new itemLocationQuantity
     *
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \CleverIt\UBL\Invoice\RO\ItemLocationQuantity $itemLocationQuantity
     * @return self
     */
    public function setItemLocationQuantity(?\CleverIt\UBL\Invoice\RO\ItemLocationQuantity $itemLocationQuantity = null)
    {
        $this->itemLocationQuantity = $itemLocationQuantity;
        return $this;
    }
}

