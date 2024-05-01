<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing StockAvailabilityReportLineType
 *
 * ABIE
 *  Stock Availability Report Line. Details
 *  A class to define a line in a Stock Availability Report describing the availability of an item of sale.
 *  Stock Availability Report Line
 * XSD Type: StockAvailabilityReportLineType
 */
class StockAvailabilityReportLineType
{
    /**
     * BBIE
     *  Stock Availability Report Line. Identifier
     *  An identifier for this stock availability line.
     *  1
     *  Stock Availability Report Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Quantity
     *  The quantity of the item currently in stock.
     *  1
     *  Stock Availability Report Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Value. Amount
     *  The monetary value of the quantity of the item currently in stock.
     *  0..1
     *  Stock Availability Report Line
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Availability Date. Date
     *  The date from which the item will be available. A date identical to or earlier than the IssueDate of the Stock Availability Report means that the item is available now
     *  0..1
     *  Stock Availability Report Line
     *  Availability Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $availabilityDate
     */
    private $availabilityDate = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Availability Status Code. Code
     *  A code signifying the level of availability of the item.
     *  0..1
     *  Stock Availability Report Line
     *  Availability Status Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AvailabilityStatusCode $availabilityStatusCode
     */
    private $availabilityStatusCode = null;

    /**
     * ASBIE
     *  Stock Availability Report Line. Item
     *  The item associated with this stock availability report line.
     *  1
     *  Stock Availability Report Line
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\RO\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Stock Availability Report Line. Identifier
     *  An identifier for this stock availability line.
     *  1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Identifier
     *  An identifier for this stock availability line.
     *  1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Quantity
     *  The quantity of the item currently in stock.
     *  1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Quantity
     *  The quantity of the item currently in stock.
     *  1
     *  Stock Availability Report Line
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
     * Gets as valueAmount
     *
     * BBIE
     *  Stock Availability Report Line. Value. Amount
     *  The monetary value of the quantity of the item currently in stock.
     *  0..1
     *  Stock Availability Report Line
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ValueAmount
     */
    public function getValueAmount()
    {
        return $this->valueAmount;
    }

    /**
     * Sets a new valueAmount
     *
     * BBIE
     *  Stock Availability Report Line. Value. Amount
     *  The monetary value of the quantity of the item currently in stock.
     *  0..1
     *  Stock Availability Report Line
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(?\CleverIt\UBL\Invoice\RO\ValueAmount $valueAmount = null)
    {
        $this->valueAmount = $valueAmount;
        return $this;
    }

    /**
     * Gets as availabilityDate
     *
     * BBIE
     *  Stock Availability Report Line. Availability Date. Date
     *  The date from which the item will be available. A date identical to or earlier than the IssueDate of the Stock Availability Report means that the item is available now
     *  0..1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Availability Date. Date
     *  The date from which the item will be available. A date identical to or earlier than the IssueDate of the Stock Availability Report means that the item is available now
     *  0..1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Availability Status Code. Code
     *  A code signifying the level of availability of the item.
     *  0..1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Availability Status Code. Code
     *  A code signifying the level of availability of the item.
     *  0..1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Item
     *  The item associated with this stock availability report line.
     *  1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Item
     *  The item associated with this stock availability report line.
     *  1
     *  Stock Availability Report Line
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
}

