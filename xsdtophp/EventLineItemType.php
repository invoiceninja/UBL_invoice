<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing EventLineItemType
 *
 * ABIE
 *  Event Line Item. Details
 *  A class to define a line item describing the expected impacts associated with a retail event involving a specific product at a specific location.
 *  Event Line Item
 * XSD Type: EventLineItemType
 */
class EventLineItemType
{

    /**
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\LineNumberNumeric $lineNumberNumeric
     */
    private $lineNumberNumeric = null;

    /**
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\ParticipatingLocationsLocation $participatingLocationsLocation
     */
    private $participatingLocationsLocation = null;

    /**
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @var \CleverIt\UBL\Invoice\RetailPlannedImpact[] $retailPlannedImpact
     */
    private $retailPlannedImpact = [
        
    ];

    /**
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\SupplyItem $supplyItem
     */
    private $supplyItem = null;

    /**
     * Gets as lineNumberNumeric
     *
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\LineNumberNumeric
     */
    public function getLineNumberNumeric()
    {
        return $this->lineNumberNumeric;
    }

    /**
     * Sets a new lineNumberNumeric
     *
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\LineNumberNumeric $lineNumberNumeric
     * @return self
     */
    public function setLineNumberNumeric(\CleverIt\UBL\Invoice\LineNumberNumeric $lineNumberNumeric)
    {
        $this->lineNumberNumeric = $lineNumberNumeric;
        return $this;
    }

    /**
     * Gets as participatingLocationsLocation
     *
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\ParticipatingLocationsLocation
     */
    public function getParticipatingLocationsLocation()
    {
        return $this->participatingLocationsLocation;
    }

    /**
     * Sets a new participatingLocationsLocation
     *
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\ParticipatingLocationsLocation $participatingLocationsLocation
     * @return self
     */
    public function setParticipatingLocationsLocation(\CleverIt\UBL\Invoice\ParticipatingLocationsLocation $participatingLocationsLocation)
    {
        $this->participatingLocationsLocation = $participatingLocationsLocation;
        return $this;
    }

    /**
     * Adds as retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RetailPlannedImpact $retailPlannedImpact
     */
    public function addToRetailPlannedImpact(\CleverIt\UBL\Invoice\RetailPlannedImpact $retailPlannedImpact)
    {
        $this->retailPlannedImpact[] = $retailPlannedImpact;
        return $this;
    }

    /**
     * isset retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetailPlannedImpact($index)
    {
        return isset($this->retailPlannedImpact[$index]);
    }

    /**
     * unset retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetailPlannedImpact($index)
    {
        unset($this->retailPlannedImpact[$index]);
    }

    /**
     * Gets as retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @return \CleverIt\UBL\Invoice\RetailPlannedImpact[]
     */
    public function getRetailPlannedImpact()
    {
        return $this->retailPlannedImpact;
    }

    /**
     * Sets a new retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param \CleverIt\UBL\Invoice\RetailPlannedImpact[] $retailPlannedImpact
     * @return self
     */
    public function setRetailPlannedImpact(array $retailPlannedImpact)
    {
        $this->retailPlannedImpact = $retailPlannedImpact;
        return $this;
    }

    /**
     * Gets as supplyItem
     *
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @return \CleverIt\UBL\Invoice\SupplyItem
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @param \CleverIt\UBL\Invoice\SupplyItem $supplyItem
     * @return self
     */
    public function setSupplyItem(\CleverIt\UBL\Invoice\SupplyItem $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }


}

