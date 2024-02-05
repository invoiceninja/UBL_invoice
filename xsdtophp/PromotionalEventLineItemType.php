<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing PromotionalEventLineItemType
 *
 * ABIE
 *  Promotional Event Line Item. Details
 *  A class to describe a line item associated with a promotional event.
 *  Promotional Event Line Item
 * XSD Type: PromotionalEventLineItemType
 */
class PromotionalEventLineItemType
{

    /**
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @var \CleverIt\UBL\Invoice\EventLineItem $eventLineItem
     */
    private $eventLineItem = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\Amount $amount
     * @return self
     */
    public function setAmount(\CleverIt\UBL\Invoice\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as eventLineItem
     *
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @return \CleverIt\UBL\Invoice\EventLineItem
     */
    public function getEventLineItem()
    {
        return $this->eventLineItem;
    }

    /**
     * Sets a new eventLineItem
     *
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param \CleverIt\UBL\Invoice\EventLineItem $eventLineItem
     * @return self
     */
    public function setEventLineItem(\CleverIt\UBL\Invoice\EventLineItem $eventLineItem)
    {
        $this->eventLineItem = $eventLineItem;
        return $this;
    }


}

