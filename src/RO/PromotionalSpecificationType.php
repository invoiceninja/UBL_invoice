<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing PromotionalSpecificationType
 *
 * ABIE
 *  Promotional Specification. Details
 *  A class to describe a promotional event as a set of item locations that share a set of promotional tactics.
 *  Promotional Specification
 * XSD Type: PromotionalSpecificationType
 */
class PromotionalSpecificationType
{
    /**
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\SpecificationID $specificationID
     */
    private $specificationID = null;

    /**
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @var \CleverIt\UBL\Invoice\RO\PromotionalEventLineItem[] $promotionalEventLineItem
     */
    private $promotionalEventLineItem = [
        
    ];

    /**
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @var \CleverIt\UBL\Invoice\RO\EventTactic[] $eventTactic
     */
    private $eventTactic = [
        
    ];

    /**
     * Gets as specificationID
     *
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\SpecificationID
     */
    public function getSpecificationID()
    {
        return $this->specificationID;
    }

    /**
     * Sets a new specificationID
     *
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\SpecificationID $specificationID
     * @return self
     */
    public function setSpecificationID(?\CleverIt\UBL\Invoice\RO\SpecificationID $specificationID = null)
    {
        $this->specificationID = $specificationID;
        return $this;
    }

    /**
     * Adds as promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PromotionalEventLineItem $promotionalEventLineItem
     */
    public function addToPromotionalEventLineItem(\CleverIt\UBL\Invoice\RO\PromotionalEventLineItem $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem[] = $promotionalEventLineItem;
        return $this;
    }

    /**
     * isset promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalEventLineItem($index)
    {
        return isset($this->promotionalEventLineItem[$index]);
    }

    /**
     * unset promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalEventLineItem($index)
    {
        unset($this->promotionalEventLineItem[$index]);
    }

    /**
     * Gets as promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @return \CleverIt\UBL\Invoice\RO\PromotionalEventLineItem[]
     */
    public function getPromotionalEventLineItem()
    {
        return $this->promotionalEventLineItem;
    }

    /**
     * Sets a new promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param \CleverIt\UBL\Invoice\RO\PromotionalEventLineItem[] $promotionalEventLineItem
     * @return self
     */
    public function setPromotionalEventLineItem(array $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem = $promotionalEventLineItem;
        return $this;
    }

    /**
     * Adds as eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EventTactic $eventTactic
     */
    public function addToEventTactic(\CleverIt\UBL\Invoice\RO\EventTactic $eventTactic)
    {
        $this->eventTactic[] = $eventTactic;
        return $this;
    }

    /**
     * isset eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventTactic($index)
    {
        return isset($this->eventTactic[$index]);
    }

    /**
     * unset eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventTactic($index)
    {
        unset($this->eventTactic[$index]);
    }

    /**
     * Gets as eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @return \CleverIt\UBL\Invoice\RO\EventTactic[]
     */
    public function getEventTactic()
    {
        return $this->eventTactic;
    }

    /**
     * Sets a new eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param \CleverIt\UBL\Invoice\RO\EventTactic[] $eventTactic
     * @return self
     */
    public function setEventTactic(array $eventTactic = null)
    {
        $this->eventTactic = $eventTactic;
        return $this;
    }
}

