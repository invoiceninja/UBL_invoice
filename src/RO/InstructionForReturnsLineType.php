<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing InstructionForReturnsLineType
 *
 * ABIE
 *  Instruction For Returns Line. Details
 *  A class to define a line in an Instruction for Returns.
 *  Instruction For Returns Line
 * XSD Type: InstructionForReturnsLineType
 */
class InstructionForReturnsLineType
{
    /**
     * BBIE
     *  Instruction For Returns Line. Identifier
     *  An identifier for this instruction for returns line.
     *  1
     *  Instruction For Returns Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Quantity
     *  The quantity of goods being returned.
     *  1
     *  Instruction For Returns Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Instruction For Returns Line. Manufacturer_ Party. Party
     *  The manufacturer of the goods being returned.
     *  0..1
     *  Instruction For Returns Line
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\ManufacturerParty $manufacturerParty
     */
    private $manufacturerParty = null;

    /**
     * ASBIE
     *  Instruction For Returns Line. Item
     *  A description of the item being returned.
     *  1
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Identifier
     *  An identifier for this instruction for returns line.
     *  1
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Identifier
     *  An identifier for this instruction for returns line.
     *  1
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Quantity
     *  The quantity of goods being returned.
     *  1
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Quantity
     *  The quantity of goods being returned.
     *  1
     *  Instruction For Returns Line
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
     * Gets as manufacturerParty
     *
     * ASBIE
     *  Instruction For Returns Line. Manufacturer_ Party. Party
     *  The manufacturer of the goods being returned.
     *  0..1
     *  Instruction For Returns Line
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\ManufacturerParty
     */
    public function getManufacturerParty()
    {
        return $this->manufacturerParty;
    }

    /**
     * Sets a new manufacturerParty
     *
     * ASBIE
     *  Instruction For Returns Line. Manufacturer_ Party. Party
     *  The manufacturer of the goods being returned.
     *  0..1
     *  Instruction For Returns Line
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\ManufacturerParty $manufacturerParty
     * @return self
     */
    public function setManufacturerParty(?\CleverIt\UBL\Invoice\RO\ManufacturerParty $manufacturerParty = null)
    {
        $this->manufacturerParty = $manufacturerParty;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Instruction For Returns Line. Item
     *  A description of the item being returned.
     *  1
     *  Instruction For Returns Line
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
     *  Instruction For Returns Line. Item
     *  A description of the item being returned.
     *  1
     *  Instruction For Returns Line
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

