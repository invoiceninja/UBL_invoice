<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing InventoryReportLineType
 *
 * ABIE
 *  Inventory Report Line. Details
 *  A class to define a line in an Inventory Report.
 *  Inventory Report Line
 * XSD Type: InventoryReportLineType
 */
class InventoryReportLineType
{
    /**
     * BBIE
     *  Inventory Report Line. Identifier
     *  An identifier for this inventory report line.
     *  1
     *  Inventory Report Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Inventory Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Inventory Report Line. Quantity
     *  The quantity of the item reported that is currently in stock.
     *  1
     *  Inventory Report Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Inventory Report Line. Inventory_ Value. Amount
     *  The value of the quantity of the item reported that is currently in stock.
     *  0..1
     *  Inventory Report Line
     *  Inventory
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\InventoryValueAmount $inventoryValueAmount
     */
    private $inventoryValueAmount = null;

    /**
     * BBIE
     *  Inventory Report Line. Availability Date. Date
     *  The date from which the goods will be available. If not present, the goods are available now.
     *  0..1
     *  Inventory Report Line
     *  Availability Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $availabilityDate
     */
    private $availabilityDate = null;

    /**
     * BBIE
     *  Inventory Report Line. Availability Status Code. Code
     *  A code signifying the item's level of availability.
     *  0..1
     *  Inventory Report Line
     *  Availability Status Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AvailabilityStatusCode $availabilityStatusCode
     */
    private $availabilityStatusCode = null;

    /**
     * ASBIE
     *  Inventory Report Line. Item
     *  The item associated with this inventory report line.
     *  1
     *  Inventory Report Line
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\RO\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Inventory Report Line. Inventory_ Location. Location
     *  The location of the reported quantity of goods.
     *  0..1
     *  Inventory Report Line
     *  Inventory
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\RO\InventoryLocation $inventoryLocation
     */
    private $inventoryLocation = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Inventory Report Line. Identifier
     *  An identifier for this inventory report line.
     *  1
     *  Inventory Report Line
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
     *  Inventory Report Line. Identifier
     *  An identifier for this inventory report line.
     *  1
     *  Inventory Report Line
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
     * Adds as note
     *
     * BBIE
     *  Inventory Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\RO\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Inventory Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Inventory Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Inventory Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Inventory Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Note[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Inventory Report Line. Quantity
     *  The quantity of the item reported that is currently in stock.
     *  1
     *  Inventory Report Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Inventory Report Line. Quantity
     *  The quantity of the item reported that is currently in stock.
     *  1
     *  Inventory Report Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Quantity $quantity
     * @return self
     */
    public function setQuantity(\CleverIt\UBL\Invoice\RO\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as inventoryValueAmount
     *
     * BBIE
     *  Inventory Report Line. Inventory_ Value. Amount
     *  The value of the quantity of the item reported that is currently in stock.
     *  0..1
     *  Inventory Report Line
     *  Inventory
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\InventoryValueAmount
     */
    public function getInventoryValueAmount()
    {
        return $this->inventoryValueAmount;
    }

    /**
     * Sets a new inventoryValueAmount
     *
     * BBIE
     *  Inventory Report Line. Inventory_ Value. Amount
     *  The value of the quantity of the item reported that is currently in stock.
     *  0..1
     *  Inventory Report Line
     *  Inventory
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\InventoryValueAmount $inventoryValueAmount
     * @return self
     */
    public function setInventoryValueAmount(?\CleverIt\UBL\Invoice\RO\InventoryValueAmount $inventoryValueAmount = null)
    {
        $this->inventoryValueAmount = $inventoryValueAmount;
        return $this;
    }

    /**
     * Gets as availabilityDate
     *
     * BBIE
     *  Inventory Report Line. Availability Date. Date
     *  The date from which the goods will be available. If not present, the goods are available now.
     *  0..1
     *  Inventory Report Line
     *  Availability Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getAvailabilityDate()
    {
        return $this->availabilityDate;
    }

    /**
     * Sets a new availabilityDate
     *
     * BBIE
     *  Inventory Report Line. Availability Date. Date
     *  The date from which the goods will be available. If not present, the goods are available now.
     *  0..1
     *  Inventory Report Line
     *  Availability Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $availabilityDate
     * @return self
     */
    public function setAvailabilityDate(\DateTime $availabilityDate = null)
    {
        $this->availabilityDate = $availabilityDate;
        return $this;
    }

    /**
     * Gets as availabilityStatusCode
     *
     * BBIE
     *  Inventory Report Line. Availability Status Code. Code
     *  A code signifying the item's level of availability.
     *  0..1
     *  Inventory Report Line
     *  Availability Status Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AvailabilityStatusCode
     */
    public function getAvailabilityStatusCode()
    {
        return $this->availabilityStatusCode;
    }

    /**
     * Sets a new availabilityStatusCode
     *
     * BBIE
     *  Inventory Report Line. Availability Status Code. Code
     *  A code signifying the item's level of availability.
     *  0..1
     *  Inventory Report Line
     *  Availability Status Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AvailabilityStatusCode $availabilityStatusCode
     * @return self
     */
    public function setAvailabilityStatusCode(?\CleverIt\UBL\Invoice\RO\AvailabilityStatusCode $availabilityStatusCode = null)
    {
        $this->availabilityStatusCode = $availabilityStatusCode;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Inventory Report Line. Item
     *  The item associated with this inventory report line.
     *  1
     *  Inventory Report Line
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
     *  Inventory Report Line. Item
     *  The item associated with this inventory report line.
     *  1
     *  Inventory Report Line
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
     * Gets as inventoryLocation
     *
     * ASBIE
     *  Inventory Report Line. Inventory_ Location. Location
     *  The location of the reported quantity of goods.
     *  0..1
     *  Inventory Report Line
     *  Inventory
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\RO\InventoryLocation
     */
    public function getInventoryLocation()
    {
        return $this->inventoryLocation;
    }

    /**
     * Sets a new inventoryLocation
     *
     * ASBIE
     *  Inventory Report Line. Inventory_ Location. Location
     *  The location of the reported quantity of goods.
     *  0..1
     *  Inventory Report Line
     *  Inventory
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\RO\InventoryLocation $inventoryLocation
     * @return self
     */
    public function setInventoryLocation(?\CleverIt\UBL\Invoice\RO\InventoryLocation $inventoryLocation = null)
    {
        $this->inventoryLocation = $inventoryLocation;
        return $this;
    }
}

