<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing RequestForTenderLineType
 *
 * ABIE
 *  Request For Tender Line. Details
 *  A class to define a line in a Request for Tender describing an item of goods or a service solicited in the Request for Tender.
 *  Request For Tender Line
 * XSD Type: RequestForTenderLineType
 */
class RequestForTenderLineType
{
    /**
     * BBIE
     *  Request For Tender Line. Identifier
     *  An identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Request For Tender Line. UUID. Identifier
     *  A universally unique identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Quantity
     *  The quantity of the item for which a tender is requested in this line.
     *  0..1
     *  Request For Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Request For Tender Line. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Request For Tender Line. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Request For Tender Line. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Request For Tender Line
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $taxIncludedIndicator
     */
    private $taxIncludedIndicator = null;

    /**
     * BBIE
     *  Request For Tender Line. Minimum_ Amount. Amount
     *  The minimum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * BBIE
     *  Request For Tender Line. Maximum_ Amount. Amount
     *  The maximum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * BBIE
     *  Request For Tender Line. Estimated_ Amount. Amount
     *  The estimated total amount of the deliverable.
     *  0..1
     *  Request For Tender Line
     *  Estimated
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\EstimatedAmount $estimatedAmount
     */
    private $estimatedAmount = null;

    /**
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\DeliveryPeriod[] $deliveryPeriod
     */
    private $deliveryPeriod = [
        
    ];

    /**
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \CleverIt\UBL\Invoice\RO\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Request For Tender Line. Warranty Validity_ Period. Period
     *  The period during which a warranty to be associated with this request for tender line must apply.
     *  0..1
     *  Request For Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Request For Tender Line. Item
     *  An item for which a tender is requested.
     *  1
     *  Request For Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\RO\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @var \CleverIt\UBL\Invoice\RO\SubRequestForTenderLine[] $subRequestForTenderLine
     */
    private $subRequestForTenderLine = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Request For Tender Line. Identifier
     *  An identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
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
     *  Request For Tender Line. Identifier
     *  An identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(?\CleverIt\UBL\Invoice\RO\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Request For Tender Line. UUID. Identifier
     *  A universally unique identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Request For Tender Line. UUID. Identifier
     *  A universally unique identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\UUID $uUID
     * @return self
     */
    public function setUUID(?\CleverIt\UBL\Invoice\RO\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Quantity
     *  The quantity of the item for which a tender is requested in this line.
     *  0..1
     *  Request For Tender Line
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
     *  Request For Tender Line. Quantity
     *  The quantity of the item for which a tender is requested in this line.
     *  0..1
     *  Request For Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\CleverIt\UBL\Invoice\RO\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\CleverIt\UBL\Invoice\RO\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\CleverIt\UBL\Invoice\RO\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as taxIncludedIndicator
     *
     * BBIE
     *  Request For Tender Line. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Request For Tender Line
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getTaxIncludedIndicator()
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * Sets a new taxIncludedIndicator
     *
     * BBIE
     *  Request For Tender Line. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Request For Tender Line
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator($taxIncludedIndicator)
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;
        return $this;
    }

    /**
     * Gets as minimumAmount
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Amount. Amount
     *  The minimum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Amount. Amount
     *  The minimum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?\CleverIt\UBL\Invoice\RO\MinimumAmount $minimumAmount = null)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Amount. Amount
     *  The maximum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Amount. Amount
     *  The maximum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?\CleverIt\UBL\Invoice\RO\MaximumAmount $maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Gets as estimatedAmount
     *
     * BBIE
     *  Request For Tender Line. Estimated_ Amount. Amount
     *  The estimated total amount of the deliverable.
     *  0..1
     *  Request For Tender Line
     *  Estimated
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\EstimatedAmount
     */
    public function getEstimatedAmount()
    {
        return $this->estimatedAmount;
    }

    /**
     * Sets a new estimatedAmount
     *
     * BBIE
     *  Request For Tender Line. Estimated_ Amount. Amount
     *  The estimated total amount of the deliverable.
     *  0..1
     *  Request For Tender Line
     *  Estimated
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\EstimatedAmount $estimatedAmount
     * @return self
     */
    public function setEstimatedAmount(?\CleverIt\UBL\Invoice\RO\EstimatedAmount $estimatedAmount = null)
    {
        $this->estimatedAmount = $estimatedAmount;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference $documentReference
     */
    public function addToDocumentReference(\CleverIt\UBL\Invoice\RO\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DeliveryPeriod $deliveryPeriod
     */
    public function addToDeliveryPeriod(\CleverIt\UBL\Invoice\RO\DeliveryPeriod $deliveryPeriod)
    {
        $this->deliveryPeriod[] = $deliveryPeriod;
        return $this;
    }

    /**
     * isset deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryPeriod($index)
    {
        return isset($this->deliveryPeriod[$index]);
    }

    /**
     * unset deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryPeriod($index)
    {
        unset($this->deliveryPeriod[$index]);
    }

    /**
     * Gets as deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\DeliveryPeriod[]
     */
    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }

    /**
     * Sets a new deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\DeliveryPeriod[] $deliveryPeriod
     * @return self
     */
    public function setDeliveryPeriod(array $deliveryPeriod = null)
    {
        $this->deliveryPeriod = $deliveryPeriod;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\CleverIt\UBL\Invoice\RO\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \CleverIt\UBL\Invoice\RO\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \CleverIt\UBL\Invoice\RO\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(array $requiredItemLocationQuantity = null)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Request For Tender Line. Warranty Validity_ Period. Period
     *  The period during which a warranty to be associated with this request for tender line must apply.
     *  0..1
     *  Request For Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Request For Tender Line. Warranty Validity_ Period. Period
     *  The period during which a warranty to be associated with this request for tender line must apply.
     *  0..1
     *  Request For Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?\CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod $warrantyValidityPeriod = null)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Request For Tender Line. Item
     *  An item for which a tender is requested.
     *  1
     *  Request For Tender Line
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
     *  Request For Tender Line. Item
     *  An item for which a tender is requested.
     *  1
     *  Request For Tender Line
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
     * Adds as subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\SubRequestForTenderLine $subRequestForTenderLine
     */
    public function addToSubRequestForTenderLine(\CleverIt\UBL\Invoice\RO\SubRequestForTenderLine $subRequestForTenderLine)
    {
        $this->subRequestForTenderLine[] = $subRequestForTenderLine;
        return $this;
    }

    /**
     * isset subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubRequestForTenderLine($index)
    {
        return isset($this->subRequestForTenderLine[$index]);
    }

    /**
     * unset subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubRequestForTenderLine($index)
    {
        unset($this->subRequestForTenderLine[$index]);
    }

    /**
     * Gets as subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return \CleverIt\UBL\Invoice\RO\SubRequestForTenderLine[]
     */
    public function getSubRequestForTenderLine()
    {
        return $this->subRequestForTenderLine;
    }

    /**
     * Sets a new subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param \CleverIt\UBL\Invoice\RO\SubRequestForTenderLine[] $subRequestForTenderLine
     * @return self
     */
    public function setSubRequestForTenderLine(array $subRequestForTenderLine = null)
    {
        $this->subRequestForTenderLine = $subRequestForTenderLine;
        return $this;
    }
}

