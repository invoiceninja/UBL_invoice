<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TenderLineType
 *
 * ABIE
 *  Tender Line. Details
 *  A class to define a line in a Tender.
 *  Tender Line
 * XSD Type: TenderLineType
 */
class TenderLineType
{

    /**
     * BBIE
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\OrderableUnit $orderableUnit
     */
    private $orderableUnit = null;

    /**
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @var \CleverIt\UBL\Invoice\ContentUnitQuantity $contentUnitQuantity
     */
    private $contentUnitQuantity = null;

    /**
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     */
    private $orderQuantityIncrementNumeric = null;

    /**
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @var \CleverIt\UBL\Invoice\MinimumOrderQuantity $minimumOrderQuantity
     */
    private $minimumOrderQuantity = null;

    /**
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @var \CleverIt\UBL\Invoice\MaximumOrderQuantity $maximumOrderQuantity
     */
    private $maximumOrderQuantity = null;

    /**
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @var \CleverIt\UBL\Invoice\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @var \CleverIt\UBL\Invoice\PackLevelCode $packLevelCode
     */
    private $packLevelCode = null;

    /**
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \CleverIt\UBL\Invoice\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     */
    private $offeredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \CleverIt\UBL\Invoice\ReplacementRelatedItem[] $replacementRelatedItem
     */
    private $replacementRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @var \CleverIt\UBL\Invoice\SubTenderLine[] $subTenderLine
     */
    private $subTenderLine = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \CleverIt\UBL\Invoice\CallForTendersLineReference $callForTendersLineReference
     */
    private $callForTendersLineReference = null;

    /**
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
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
     * Adds as note
     *
     * BBIE
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
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
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\CleverIt\UBL\Invoice\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * BBIE
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * BBIE
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\CleverIt\UBL\Invoice\TotalTaxAmount $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as orderableUnit
     *
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\OrderableUnit
     */
    public function getOrderableUnit()
    {
        return $this->orderableUnit;
    }

    /**
     * Sets a new orderableUnit
     *
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\OrderableUnit $orderableUnit
     * @return self
     */
    public function setOrderableUnit(\CleverIt\UBL\Invoice\OrderableUnit $orderableUnit)
    {
        $this->orderableUnit = $orderableUnit;
        return $this;
    }

    /**
     * Gets as contentUnitQuantity
     *
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @return \CleverIt\UBL\Invoice\ContentUnitQuantity
     */
    public function getContentUnitQuantity()
    {
        return $this->contentUnitQuantity;
    }

    /**
     * Sets a new contentUnitQuantity
     *
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @param \CleverIt\UBL\Invoice\ContentUnitQuantity $contentUnitQuantity
     * @return self
     */
    public function setContentUnitQuantity(\CleverIt\UBL\Invoice\ContentUnitQuantity $contentUnitQuantity)
    {
        $this->contentUnitQuantity = $contentUnitQuantity;
        return $this;
    }

    /**
     * Gets as orderQuantityIncrementNumeric
     *
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\OrderQuantityIncrementNumeric
     */
    public function getOrderQuantityIncrementNumeric()
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * Sets a new orderQuantityIncrementNumeric
     *
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     * @return self
     */
    public function setOrderQuantityIncrementNumeric(\CleverIt\UBL\Invoice\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric)
    {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;
        return $this;
    }

    /**
     * Gets as minimumOrderQuantity
     *
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @return \CleverIt\UBL\Invoice\MinimumOrderQuantity
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * Sets a new minimumOrderQuantity
     *
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @param \CleverIt\UBL\Invoice\MinimumOrderQuantity $minimumOrderQuantity
     * @return self
     */
    public function setMinimumOrderQuantity(\CleverIt\UBL\Invoice\MinimumOrderQuantity $minimumOrderQuantity)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        return $this;
    }

    /**
     * Gets as maximumOrderQuantity
     *
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @return \CleverIt\UBL\Invoice\MaximumOrderQuantity
     */
    public function getMaximumOrderQuantity()
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * Sets a new maximumOrderQuantity
     *
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @param \CleverIt\UBL\Invoice\MaximumOrderQuantity $maximumOrderQuantity
     * @return self
     */
    public function setMaximumOrderQuantity(\CleverIt\UBL\Invoice\MaximumOrderQuantity $maximumOrderQuantity)
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;
        return $this;
    }

    /**
     * Adds as warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\WarrantyInformation $warrantyInformation
     */
    public function addToWarrantyInformation(\CleverIt\UBL\Invoice\WarrantyInformation $warrantyInformation)
    {
        $this->warrantyInformation[] = $warrantyInformation;
        return $this;
    }

    /**
     * isset warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarrantyInformation($index)
    {
        return isset($this->warrantyInformation[$index]);
    }

    /**
     * unset warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarrantyInformation($index)
    {
        unset($this->warrantyInformation[$index]);
    }

    /**
     * Gets as warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return \CleverIt\UBL\Invoice\WarrantyInformation[]
     */
    public function getWarrantyInformation()
    {
        return $this->warrantyInformation;
    }

    /**
     * Sets a new warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param \CleverIt\UBL\Invoice\WarrantyInformation[] $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(array $warrantyInformation)
    {
        $this->warrantyInformation = $warrantyInformation;
        return $this;
    }

    /**
     * Gets as packLevelCode
     *
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @return \CleverIt\UBL\Invoice\PackLevelCode
     */
    public function getPackLevelCode()
    {
        return $this->packLevelCode;
    }

    /**
     * Sets a new packLevelCode
     *
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @param \CleverIt\UBL\Invoice\PackLevelCode $packLevelCode
     * @return self
     */
    public function setPackLevelCode(\CleverIt\UBL\Invoice\PackLevelCode $packLevelCode)
    {
        $this->packLevelCode = $packLevelCode;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\DocumentReference $documentReference
     */
    public function addToDocumentReference(\CleverIt\UBL\Invoice\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @return \CleverIt\UBL\Invoice\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @param \CleverIt\UBL\Invoice\Item $item
     * @return self
     */
    public function setItem(\CleverIt\UBL\Invoice\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\OfferedItemLocationQuantity $offeredItemLocationQuantity
     */
    public function addToOfferedItemLocationQuantity(\CleverIt\UBL\Invoice\OfferedItemLocationQuantity $offeredItemLocationQuantity)
    {
        $this->offeredItemLocationQuantity[] = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * isset offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferedItemLocationQuantity($index)
    {
        return isset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * unset offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferedItemLocationQuantity($index)
    {
        unset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * Gets as offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \CleverIt\UBL\Invoice\OfferedItemLocationQuantity[]
     */
    public function getOfferedItemLocationQuantity()
    {
        return $this->offeredItemLocationQuantity;
    }

    /**
     * Sets a new offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \CleverIt\UBL\Invoice\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     * @return self
     */
    public function setOfferedItemLocationQuantity(array $offeredItemLocationQuantity)
    {
        $this->offeredItemLocationQuantity = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ReplacementRelatedItem $replacementRelatedItem
     */
    public function addToReplacementRelatedItem(\CleverIt\UBL\Invoice\ReplacementRelatedItem $replacementRelatedItem)
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;
        return $this;
    }

    /**
     * isset replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacementRelatedItem($index)
    {
        return isset($this->replacementRelatedItem[$index]);
    }

    /**
     * unset replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacementRelatedItem($index)
    {
        unset($this->replacementRelatedItem[$index]);
    }

    /**
     * Gets as replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \CleverIt\UBL\Invoice\ReplacementRelatedItem[]
     */
    public function getReplacementRelatedItem()
    {
        return $this->replacementRelatedItem;
    }

    /**
     * Sets a new replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \CleverIt\UBL\Invoice\ReplacementRelatedItem[] $replacementRelatedItem
     * @return self
     */
    public function setReplacementRelatedItem(array $replacementRelatedItem)
    {
        $this->replacementRelatedItem = $replacementRelatedItem;
        return $this;
    }

    /**
     * Gets as warrantyParty
     *
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\WarrantyParty
     */
    public function getWarrantyParty()
    {
        return $this->warrantyParty;
    }

    /**
     * Sets a new warrantyParty
     *
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(\CleverIt\UBL\Invoice\WarrantyParty $warrantyParty)
    {
        $this->warrantyParty = $warrantyParty;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(\CleverIt\UBL\Invoice\WarrantyValidityPeriod $warrantyValidityPeriod)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Adds as subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\SubTenderLine $subTenderLine
     */
    public function addToSubTenderLine(\CleverIt\UBL\Invoice\SubTenderLine $subTenderLine)
    {
        $this->subTenderLine[] = $subTenderLine;
        return $this;
    }

    /**
     * isset subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTenderLine($index)
    {
        return isset($this->subTenderLine[$index]);
    }

    /**
     * unset subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTenderLine($index)
    {
        unset($this->subTenderLine[$index]);
    }

    /**
     * Gets as subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return \CleverIt\UBL\Invoice\SubTenderLine[]
     */
    public function getSubTenderLine()
    {
        return $this->subTenderLine;
    }

    /**
     * Sets a new subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param \CleverIt\UBL\Invoice\SubTenderLine[] $subTenderLine
     * @return self
     */
    public function setSubTenderLine(array $subTenderLine)
    {
        $this->subTenderLine = $subTenderLine;
        return $this;
    }

    /**
     * Gets as callForTendersLineReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \CleverIt\UBL\Invoice\CallForTendersLineReference
     */
    public function getCallForTendersLineReference()
    {
        return $this->callForTendersLineReference;
    }

    /**
     * Sets a new callForTendersLineReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \CleverIt\UBL\Invoice\CallForTendersLineReference $callForTendersLineReference
     * @return self
     */
    public function setCallForTendersLineReference(\CleverIt\UBL\Invoice\CallForTendersLineReference $callForTendersLineReference)
    {
        $this->callForTendersLineReference = $callForTendersLineReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(\CleverIt\UBL\Invoice\CallForTendersDocumentReference $callForTendersDocumentReference)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }


}

