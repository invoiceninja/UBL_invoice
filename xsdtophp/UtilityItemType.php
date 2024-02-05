<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing UtilityItemType
 *
 * ABIE
 *  Utility Item. Details
 *  A class to describe the consumption of a utility product.
 *  Utility Item
 * XSD Type: UtilityItemType
 */
class UtilityItemType
{

    /**
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @var \CleverIt\UBL\Invoice\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @var \CleverIt\UBL\Invoice\PackQuantity $packQuantity
     */
    private $packQuantity = null;

    /**
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\PackSizeNumeric $packSizeNumeric
     */
    private $packSizeNumeric = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @var \CleverIt\UBL\Invoice\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @var \CleverIt\UBL\Invoice\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\CurrentChargeType $currentChargeType
     */
    private $currentChargeType = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\CurrentChargeTypeCode $currentChargeTypeCode
     */
    private $currentChargeTypeCode = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\OneTimeChargeType $oneTimeChargeType
     */
    private $oneTimeChargeType = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     */
    private $oneTimeChargeTypeCode = null;

    /**
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \CleverIt\UBL\Invoice\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \CleverIt\UBL\Invoice\Contract $contract
     */
    private $contract = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
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
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
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
     * Gets as subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @return \CleverIt\UBL\Invoice\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @param \CleverIt\UBL\Invoice\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(\CleverIt\UBL\Invoice\SubscriberID $subscriberID)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(\CleverIt\UBL\Invoice\SubscriberType $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(\CleverIt\UBL\Invoice\SubscriberTypeCode $subscriberTypeCode)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @return \CleverIt\UBL\Invoice\PackQuantity
     */
    public function getPackQuantity()
    {
        return $this->packQuantity;
    }

    /**
     * Sets a new packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @param \CleverIt\UBL\Invoice\PackQuantity $packQuantity
     * @return self
     */
    public function setPackQuantity(\CleverIt\UBL\Invoice\PackQuantity $packQuantity)
    {
        $this->packQuantity = $packQuantity;
        return $this;
    }

    /**
     * Gets as packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\PackSizeNumeric
     */
    public function getPackSizeNumeric()
    {
        return $this->packSizeNumeric;
    }

    /**
     * Sets a new packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\PackSizeNumeric $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric(\CleverIt\UBL\Invoice\PackSizeNumeric $packSizeNumeric)
    {
        $this->packSizeNumeric = $packSizeNumeric;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @return \CleverIt\UBL\Invoice\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @param \CleverIt\UBL\Invoice\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(\CleverIt\UBL\Invoice\ConsumptionType $consumptionType)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @return \CleverIt\UBL\Invoice\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @param \CleverIt\UBL\Invoice\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(\CleverIt\UBL\Invoice\ConsumptionTypeCode $consumptionTypeCode)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\CurrentChargeType
     */
    public function getCurrentChargeType()
    {
        return $this->currentChargeType;
    }

    /**
     * Sets a new currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\CurrentChargeType $currentChargeType
     * @return self
     */
    public function setCurrentChargeType(\CleverIt\UBL\Invoice\CurrentChargeType $currentChargeType)
    {
        $this->currentChargeType = $currentChargeType;
        return $this;
    }

    /**
     * Gets as currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\CurrentChargeTypeCode
     */
    public function getCurrentChargeTypeCode()
    {
        return $this->currentChargeTypeCode;
    }

    /**
     * Sets a new currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\CurrentChargeTypeCode $currentChargeTypeCode
     * @return self
     */
    public function setCurrentChargeTypeCode(\CleverIt\UBL\Invoice\CurrentChargeTypeCode $currentChargeTypeCode)
    {
        $this->currentChargeTypeCode = $currentChargeTypeCode;
        return $this;
    }

    /**
     * Gets as oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\OneTimeChargeType
     */
    public function getOneTimeChargeType()
    {
        return $this->oneTimeChargeType;
    }

    /**
     * Sets a new oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\OneTimeChargeType $oneTimeChargeType
     * @return self
     */
    public function setOneTimeChargeType(\CleverIt\UBL\Invoice\OneTimeChargeType $oneTimeChargeType)
    {
        $this->oneTimeChargeType = $oneTimeChargeType;
        return $this;
    }

    /**
     * Gets as oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\OneTimeChargeTypeCode
     */
    public function getOneTimeChargeTypeCode()
    {
        return $this->oneTimeChargeTypeCode;
    }

    /**
     * Sets a new oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     * @return self
     */
    public function setOneTimeChargeTypeCode(\CleverIt\UBL\Invoice\OneTimeChargeTypeCode $oneTimeChargeTypeCode)
    {
        $this->oneTimeChargeTypeCode = $oneTimeChargeTypeCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \CleverIt\UBL\Invoice\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \CleverIt\UBL\Invoice\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(\CleverIt\UBL\Invoice\TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \CleverIt\UBL\Invoice\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \CleverIt\UBL\Invoice\Contract $contract
     * @return self
     */
    public function setContract(\CleverIt\UBL\Invoice\Contract $contract)
    {
        $this->contract = $contract;
        return $this;
    }


}

