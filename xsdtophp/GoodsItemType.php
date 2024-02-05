<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing GoodsItemType
 *
 * ABIE
 *  Goods Item. Details
 *  A class to describe a separately identifiable quantity of goods of a single product type.
 *  Goods Item
 * XSD Type: GoodsItemType
 */
class GoodsItemType
{

    /**
     * BBIE
     *  Goods Item. Identifier
     *  An identifier for this goods item.
     *  0..1
     *  Goods Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Item. Sequence Number. Identifier
     *  A sequence number differentiating a specific goods item within a consignment.
     *  0..1
     *  Goods Item
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\SequenceNumberID $sequenceNumberID
     */
    private $sequenceNumberID = null;

    /**
     * BBIE
     *  Goods Item. Description. Text
     *  Text describing this goods item to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Goods Item. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods item is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Goods Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * BBIE
     *  Goods Item. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of the goods item.
     *  0..1
     *  Goods Item
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *  For Customs Value (WCO ID 108)
     *
     * @var \CleverIt\UBL\Invoice\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     */
    private $declaredCustomsValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Declared For Carriage_ Value. Amount
     *  The value of this goods item, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Goods Item
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Interest in delivery, declared value for carriage
     *
     * @var \CleverIt\UBL\Invoice\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     */
    private $declaredForCarriageValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Declared Statistics_ Value. Amount
     *  The total declared value of all the goods items in the same consignment with this goods item that have the same statistical heading.
     *  0..1
     *  Goods Item
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value (WCO ID 114)
     *
     * @var \CleverIt\UBL\Invoice\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     */
    private $declaredStatisticsValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Goods Item
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @var \CleverIt\UBL\Invoice\FreeOnBoardValueAmount $freeOnBoardValueAmount
     */
    private $freeOnBoardValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Insurance_ Value. Amount
     *  The amount covered by insurance for this goods item.
     *  0..1
     *  Goods Item
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @var \CleverIt\UBL\Invoice\InsuranceValueAmount $insuranceValueAmount
     */
    private $insuranceValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Value. Amount
     *  The amount on which a duty, tax, or fee will be assessed.
     *  0..1
     *  Goods Item
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * BBIE
     *  Goods Item. Gross_ Weight. Measure
     *  The weight of this goods item, including packing and packaging but excluding the carrier's equipment.
     *  0..1
     *  Goods Item
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Actual Gross Weight
     *
     * @var \CleverIt\UBL\Invoice\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Net_ Weight. Measure
     *  The weight of this goods item, excluding packing but including packaging that normally accompanies the goods.
     *  0..1
     *  Goods Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Net Net_ Weight. Measure
     *  The total weight of this goods item, excluding all packing and packaging.
     *  0..1
     *  Goods Item
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *  Customs Weight (WCO ID 128)
     *
     * @var \CleverIt\UBL\Invoice\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Chargeable_ Weight. Measure
     *  The weight on which a charge is to be based.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\ChargeableWeightMeasure $chargeableWeightMeasure
     */
    private $chargeableWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Gross_ Volume. Measure
     *  The volume of this goods item, normally calculated by multiplying its maximum length, width, and height.
     *  0..1
     *  Goods Item
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Volume, Gross Measurement Cube (GMC), Cube (WCO ID 134)
     *
     * @var \CleverIt\UBL\Invoice\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Goods Item. Net_ Volume. Measure
     *  The volume contained by a goods item, excluding the volume of any packaging material.
     *  0..1
     *  Goods Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Goods Item. Quantity
     *  The number of units making up this goods item.
     *  0..1
     *  Goods Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Goods Item. Preference Criterion Code. Code
     *  A code signifying the treatment preference for this goods item according to international trading agreements.
     *  0..1
     *  Goods Item
     *  Preference Criterion Code
     *  Code
     *  Code. Type
     *  Preference Criterion is used in the following manner in the paper CO of another country (e.g.): A - The good is wholly obtained or produced entirely in the territory of one or more of the NAFTA countries as reference in Article 415. Note: The purchase of a good in the territory does not necessarily render it wholly obtained or produced . If the good is an agricultural good, see also criterion F and Annex 703.2. (Reference: Article 401(a), 415). B - ... C - ... D - ... E - ... F - The good is an originating agricultural good under preference criterion A,B, or C above and is not subjected to quantitative restriction in the importing NAFTA country because.... Thus, the column Preference Criterion will indicate either A, B, C,...
     *
     * @var \CleverIt\UBL\Invoice\PreferenceCriterionCode $preferenceCriterionCode
     */
    private $preferenceCriterionCode = null;

    /**
     * BBIE
     *  Goods Item. Required_ Customs Identifier. Identifier
     *  An identifier for a set of tariff codes required to specify a type of goods for customs, transport, statistical, or other regulatory purposes.
     *  0..1
     *  Goods Item
     *  Required
     *  Customs Identifier
     *  Identifier
     *  Identifier. Type
     *  Tariff code extensions (WCO ID 255)
     *
     * @var \CleverIt\UBL\Invoice\RequiredCustomsID $requiredCustomsID
     */
    private $requiredCustomsID = null;

    /**
     * BBIE
     *  Goods Item. Customs Status Code. Code
     *  A code assigned by customs to signify the status of this goods item.
     *  0..1
     *  Goods Item
     *  Customs Status Code
     *  Code
     *  Code. Type
     *  Customs status of goods (WCO ID 094)
     *
     * @var \CleverIt\UBL\Invoice\CustomsStatusCode $customsStatusCode
     */
    private $customsStatusCode = null;

    /**
     * BBIE
     *  Goods Item. Customs Tariff Quantity. Quantity
     *  Quantity of the units in this goods item as required by customs for tariff, statistical, or fiscal purposes.
     *  0..1
     *  Goods Item
     *  Customs Tariff Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\CustomsTariffQuantity $customsTariffQuantity
     */
    private $customsTariffQuantity = null;

    /**
     * BBIE
     *  Goods Item. Customs Import_ Classified Indicator. Indicator
     *  An indicator that this goods item has been classified for import by customs (true) or not (false).
     *  0..1
     *  Goods Item
     *  Customs Import
     *  Classified Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $customsImportClassifiedIndicator
     */
    private $customsImportClassifiedIndicator = null;

    /**
     * BBIE
     *  Goods Item. Chargeable_ Quantity. Quantity
     *  The number of units in the goods item to which charges apply.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\ChargeableQuantity $chargeableQuantity
     */
    private $chargeableQuantity = null;

    /**
     * BBIE
     *  Goods Item. Returnable_ Quantity. Quantity
     *  The number of units in the goods item that may be returned.
     *  0..1
     *  Goods Item
     *  Returnable
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\ReturnableQuantity $returnableQuantity
     */
    private $returnableQuantity = null;

    /**
     * BBIE
     *  Goods Item. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this goods item, such as the EPC number used in RFID.
     *  0..1
     *  Goods Item
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\TraceID $traceID
     */
    private $traceID = null;

    /**
     * ASBIE
     *  Goods Item. Item
     *  Product information relating to a goods item.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *  Item
     *
     * @var \CleverIt\UBL\Invoice\Item[] $item
     */
    private $item = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Goods Item Container
     *  The transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *  Goods Item Container
     *
     * @var \CleverIt\UBL\Invoice\GoodsItemContainer[] $goodsItemContainer
     */
    private $goodsItemContainer = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @var \CleverIt\UBL\Invoice\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Invoice Line
     *  Information about an invoice line relating to this goods item.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @var \CleverIt\UBL\Invoice\InvoiceLine[] $invoiceLine
     */
    private $invoiceLine = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Temperature
     *  The temperature of the goods item.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *  Temperature
     *  maximum, storage, minimum
     *
     * @var \CleverIt\UBL\Invoice\Temperature[] $temperature
     */
    private $temperature = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  A goods item contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @var \CleverIt\UBL\Invoice\ContainedGoodsItem[] $containedGoodsItem
     */
    private $containedGoodsItem = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Origin_ Address. Address
     *  The region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the customs tariff, or of quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Goods Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *  Region of origin (WCO ID 066)
     *
     * @var \CleverIt\UBL\Invoice\OriginAddress $originAddress
     */
    private $originAddress = null;

    /**
     * ASBIE
     *  Goods Item. Delivery
     *  The delivery of this goods item.
     *  0..1
     *  Goods Item
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \CleverIt\UBL\Invoice\Delivery $delivery
     */
    private $delivery = null;

    /**
     * ASBIE
     *  Goods Item. Pickup
     *  The pickup of this goods item.
     *  0..1
     *  Goods Item
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @var \CleverIt\UBL\Invoice\Pickup $pickup
     */
    private $pickup = null;

    /**
     * ASBIE
     *  Goods Item. Despatch
     *  The despatch of this goods item.
     *  0..1
     *  Goods Item
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @var \CleverIt\UBL\Invoice\Despatch $despatch
     */
    private $despatch = null;

    /**
     * ASBIE
     *  Goods Item. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this goods item.
     *  0..n
     *  Goods Item
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \CleverIt\UBL\Invoice\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Containing_ Package. Package
     *  A package containing this goods item.
     *  0..n
     *  Goods Item
     *  Containing
     *  Package
     *  Package
     *  Package
     *
     * @var \CleverIt\UBL\Invoice\ContainingPackage[] $containingPackage
     */
    private $containingPackage = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this goods item.
     *  0..1
     *  Goods Item
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\ShipmentDocumentReference $shipmentDocumentReference
     */
    private $shipmentDocumentReference = null;

    /**
     * ASBIE
     *  Goods Item. Minimum_ Temperature. Temperature
     *  Information about minimum temperature.
     *  0..1
     *  Goods Item
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \CleverIt\UBL\Invoice\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * ASBIE
     *  Goods Item. Maximum_ Temperature. Temperature
     *  Information about maximum temperature.
     *  0..1
     *  Goods Item
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \CleverIt\UBL\Invoice\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Goods Item. Identifier
     *  An identifier for this goods item.
     *  0..1
     *  Goods Item
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
     *  Goods Item. Identifier
     *  An identifier for this goods item.
     *  0..1
     *  Goods Item
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
     * Gets as sequenceNumberID
     *
     * BBIE
     *  Goods Item. Sequence Number. Identifier
     *  A sequence number differentiating a specific goods item within a consignment.
     *  0..1
     *  Goods Item
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\SequenceNumberID
     */
    public function getSequenceNumberID()
    {
        return $this->sequenceNumberID;
    }

    /**
     * Sets a new sequenceNumberID
     *
     * BBIE
     *  Goods Item. Sequence Number. Identifier
     *  A sequence number differentiating a specific goods item within a consignment.
     *  0..1
     *  Goods Item
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\SequenceNumberID $sequenceNumberID
     * @return self
     */
    public function setSequenceNumberID(\CleverIt\UBL\Invoice\SequenceNumberID $sequenceNumberID)
    {
        $this->sequenceNumberID = $sequenceNumberID;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Goods Item. Description. Text
     *  Text describing this goods item to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Text describing this goods item to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Text describing this goods item to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Text describing this goods item to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Text describing this goods item to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Goods Item. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods item is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Goods Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Goods Item. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods item is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Goods Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Gets as declaredCustomsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of the goods item.
     *  0..1
     *  Goods Item
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *  For Customs Value (WCO ID 108)
     *
     * @return \CleverIt\UBL\Invoice\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmount()
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * Sets a new declaredCustomsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of the goods item.
     *  0..1
     *  Goods Item
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *  For Customs Value (WCO ID 108)
     *
     * @param \CleverIt\UBL\Invoice\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(\CleverIt\UBL\Invoice\DeclaredCustomsValueAmount $declaredCustomsValueAmount)
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;
        return $this;
    }

    /**
     * Gets as declaredForCarriageValueAmount
     *
     * BBIE
     *  Goods Item. Declared For Carriage_ Value. Amount
     *  The value of this goods item, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Goods Item
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Interest in delivery, declared value for carriage
     *
     * @return \CleverIt\UBL\Invoice\DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmount()
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * Sets a new declaredForCarriageValueAmount
     *
     * BBIE
     *  Goods Item. Declared For Carriage_ Value. Amount
     *  The value of this goods item, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Goods Item
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Interest in delivery, declared value for carriage
     *
     * @param \CleverIt\UBL\Invoice\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(\CleverIt\UBL\Invoice\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount)
    {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Gets as declaredStatisticsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Statistics_ Value. Amount
     *  The total declared value of all the goods items in the same consignment with this goods item that have the same statistical heading.
     *  0..1
     *  Goods Item
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value (WCO ID 114)
     *
     * @return \CleverIt\UBL\Invoice\DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmount()
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * Sets a new declaredStatisticsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Statistics_ Value. Amount
     *  The total declared value of all the goods items in the same consignment with this goods item that have the same statistical heading.
     *  0..1
     *  Goods Item
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value (WCO ID 114)
     *
     * @param \CleverIt\UBL\Invoice\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(\CleverIt\UBL\Invoice\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount)
    {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;
        return $this;
    }

    /**
     * Gets as freeOnBoardValueAmount
     *
     * BBIE
     *  Goods Item. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Goods Item
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @return \CleverIt\UBL\Invoice\FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmount()
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * Sets a new freeOnBoardValueAmount
     *
     * BBIE
     *  Goods Item. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Goods Item
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @param \CleverIt\UBL\Invoice\FreeOnBoardValueAmount $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(\CleverIt\UBL\Invoice\FreeOnBoardValueAmount $freeOnBoardValueAmount)
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;
        return $this;
    }

    /**
     * Gets as insuranceValueAmount
     *
     * BBIE
     *  Goods Item. Insurance_ Value. Amount
     *  The amount covered by insurance for this goods item.
     *  0..1
     *  Goods Item
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @return \CleverIt\UBL\Invoice\InsuranceValueAmount
     */
    public function getInsuranceValueAmount()
    {
        return $this->insuranceValueAmount;
    }

    /**
     * Sets a new insuranceValueAmount
     *
     * BBIE
     *  Goods Item. Insurance_ Value. Amount
     *  The amount covered by insurance for this goods item.
     *  0..1
     *  Goods Item
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @param \CleverIt\UBL\Invoice\InsuranceValueAmount $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(\CleverIt\UBL\Invoice\InsuranceValueAmount $insuranceValueAmount)
    {
        $this->insuranceValueAmount = $insuranceValueAmount;
        return $this;
    }

    /**
     * Gets as valueAmount
     *
     * BBIE
     *  Goods Item. Value. Amount
     *  The amount on which a duty, tax, or fee will be assessed.
     *  0..1
     *  Goods Item
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\ValueAmount
     */
    public function getValueAmount()
    {
        return $this->valueAmount;
    }

    /**
     * Sets a new valueAmount
     *
     * BBIE
     *  Goods Item. Value. Amount
     *  The amount on which a duty, tax, or fee will be assessed.
     *  0..1
     *  Goods Item
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(\CleverIt\UBL\Invoice\ValueAmount $valueAmount)
    {
        $this->valueAmount = $valueAmount;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Weight. Measure
     *  The weight of this goods item, including packing and packaging but excluding the carrier's equipment.
     *  0..1
     *  Goods Item
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Actual Gross Weight
     *
     * @return \CleverIt\UBL\Invoice\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Weight. Measure
     *  The weight of this goods item, including packing and packaging but excluding the carrier's equipment.
     *  0..1
     *  Goods Item
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Actual Gross Weight
     *
     * @param \CleverIt\UBL\Invoice\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(\CleverIt\UBL\Invoice\GrossWeightMeasure $grossWeightMeasure)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Goods Item. Net_ Weight. Measure
     *  The weight of this goods item, excluding packing but including packaging that normally accompanies the goods.
     *  0..1
     *  Goods Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Goods Item. Net_ Weight. Measure
     *  The weight of this goods item, excluding packing but including packaging that normally accompanies the goods.
     *  0..1
     *  Goods Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(\CleverIt\UBL\Invoice\NetWeightMeasure $netWeightMeasure)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Goods Item. Net Net_ Weight. Measure
     *  The total weight of this goods item, excluding all packing and packaging.
     *  0..1
     *  Goods Item
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *  Customs Weight (WCO ID 128)
     *
     * @return \CleverIt\UBL\Invoice\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Goods Item. Net Net_ Weight. Measure
     *  The total weight of this goods item, excluding all packing and packaging.
     *  0..1
     *  Goods Item
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *  Customs Weight (WCO ID 128)
     *
     * @param \CleverIt\UBL\Invoice\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(\CleverIt\UBL\Invoice\NetNetWeightMeasure $netNetWeightMeasure)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as chargeableWeightMeasure
     *
     * BBIE
     *  Goods Item. Chargeable_ Weight. Measure
     *  The weight on which a charge is to be based.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\ChargeableWeightMeasure
     */
    public function getChargeableWeightMeasure()
    {
        return $this->chargeableWeightMeasure;
    }

    /**
     * Sets a new chargeableWeightMeasure
     *
     * BBIE
     *  Goods Item. Chargeable_ Weight. Measure
     *  The weight on which a charge is to be based.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\ChargeableWeightMeasure $chargeableWeightMeasure
     * @return self
     */
    public function setChargeableWeightMeasure(\CleverIt\UBL\Invoice\ChargeableWeightMeasure $chargeableWeightMeasure)
    {
        $this->chargeableWeightMeasure = $chargeableWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Volume. Measure
     *  The volume of this goods item, normally calculated by multiplying its maximum length, width, and height.
     *  0..1
     *  Goods Item
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Volume, Gross Measurement Cube (GMC), Cube (WCO ID 134)
     *
     * @return \CleverIt\UBL\Invoice\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Volume. Measure
     *  The volume of this goods item, normally calculated by multiplying its maximum length, width, and height.
     *  0..1
     *  Goods Item
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Volume, Gross Measurement Cube (GMC), Cube (WCO ID 134)
     *
     * @param \CleverIt\UBL\Invoice\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(\CleverIt\UBL\Invoice\GrossVolumeMeasure $grossVolumeMeasure)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Goods Item. Net_ Volume. Measure
     *  The volume contained by a goods item, excluding the volume of any packaging material.
     *  0..1
     *  Goods Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Goods Item. Net_ Volume. Measure
     *  The volume contained by a goods item, excluding the volume of any packaging material.
     *  0..1
     *  Goods Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(\CleverIt\UBL\Invoice\NetVolumeMeasure $netVolumeMeasure)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Goods Item. Quantity
     *  The number of units making up this goods item.
     *  0..1
     *  Goods Item
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
     *  Goods Item. Quantity
     *  The number of units making up this goods item.
     *  0..1
     *  Goods Item
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
     * Gets as preferenceCriterionCode
     *
     * BBIE
     *  Goods Item. Preference Criterion Code. Code
     *  A code signifying the treatment preference for this goods item according to international trading agreements.
     *  0..1
     *  Goods Item
     *  Preference Criterion Code
     *  Code
     *  Code. Type
     *  Preference Criterion is used in the following manner in the paper CO of another country (e.g.): A - The good is wholly obtained or produced entirely in the territory of one or more of the NAFTA countries as reference in Article 415. Note: The purchase of a good in the territory does not necessarily render it wholly obtained or produced . If the good is an agricultural good, see also criterion F and Annex 703.2. (Reference: Article 401(a), 415). B - ... C - ... D - ... E - ... F - The good is an originating agricultural good under preference criterion A,B, or C above and is not subjected to quantitative restriction in the importing NAFTA country because.... Thus, the column Preference Criterion will indicate either A, B, C,...
     *
     * @return \CleverIt\UBL\Invoice\PreferenceCriterionCode
     */
    public function getPreferenceCriterionCode()
    {
        return $this->preferenceCriterionCode;
    }

    /**
     * Sets a new preferenceCriterionCode
     *
     * BBIE
     *  Goods Item. Preference Criterion Code. Code
     *  A code signifying the treatment preference for this goods item according to international trading agreements.
     *  0..1
     *  Goods Item
     *  Preference Criterion Code
     *  Code
     *  Code. Type
     *  Preference Criterion is used in the following manner in the paper CO of another country (e.g.): A - The good is wholly obtained or produced entirely in the territory of one or more of the NAFTA countries as reference in Article 415. Note: The purchase of a good in the territory does not necessarily render it wholly obtained or produced . If the good is an agricultural good, see also criterion F and Annex 703.2. (Reference: Article 401(a), 415). B - ... C - ... D - ... E - ... F - The good is an originating agricultural good under preference criterion A,B, or C above and is not subjected to quantitative restriction in the importing NAFTA country because.... Thus, the column Preference Criterion will indicate either A, B, C,...
     *
     * @param \CleverIt\UBL\Invoice\PreferenceCriterionCode $preferenceCriterionCode
     * @return self
     */
    public function setPreferenceCriterionCode(\CleverIt\UBL\Invoice\PreferenceCriterionCode $preferenceCriterionCode)
    {
        $this->preferenceCriterionCode = $preferenceCriterionCode;
        return $this;
    }

    /**
     * Gets as requiredCustomsID
     *
     * BBIE
     *  Goods Item. Required_ Customs Identifier. Identifier
     *  An identifier for a set of tariff codes required to specify a type of goods for customs, transport, statistical, or other regulatory purposes.
     *  0..1
     *  Goods Item
     *  Required
     *  Customs Identifier
     *  Identifier
     *  Identifier. Type
     *  Tariff code extensions (WCO ID 255)
     *
     * @return \CleverIt\UBL\Invoice\RequiredCustomsID
     */
    public function getRequiredCustomsID()
    {
        return $this->requiredCustomsID;
    }

    /**
     * Sets a new requiredCustomsID
     *
     * BBIE
     *  Goods Item. Required_ Customs Identifier. Identifier
     *  An identifier for a set of tariff codes required to specify a type of goods for customs, transport, statistical, or other regulatory purposes.
     *  0..1
     *  Goods Item
     *  Required
     *  Customs Identifier
     *  Identifier
     *  Identifier. Type
     *  Tariff code extensions (WCO ID 255)
     *
     * @param \CleverIt\UBL\Invoice\RequiredCustomsID $requiredCustomsID
     * @return self
     */
    public function setRequiredCustomsID(\CleverIt\UBL\Invoice\RequiredCustomsID $requiredCustomsID)
    {
        $this->requiredCustomsID = $requiredCustomsID;
        return $this;
    }

    /**
     * Gets as customsStatusCode
     *
     * BBIE
     *  Goods Item. Customs Status Code. Code
     *  A code assigned by customs to signify the status of this goods item.
     *  0..1
     *  Goods Item
     *  Customs Status Code
     *  Code
     *  Code. Type
     *  Customs status of goods (WCO ID 094)
     *
     * @return \CleverIt\UBL\Invoice\CustomsStatusCode
     */
    public function getCustomsStatusCode()
    {
        return $this->customsStatusCode;
    }

    /**
     * Sets a new customsStatusCode
     *
     * BBIE
     *  Goods Item. Customs Status Code. Code
     *  A code assigned by customs to signify the status of this goods item.
     *  0..1
     *  Goods Item
     *  Customs Status Code
     *  Code
     *  Code. Type
     *  Customs status of goods (WCO ID 094)
     *
     * @param \CleverIt\UBL\Invoice\CustomsStatusCode $customsStatusCode
     * @return self
     */
    public function setCustomsStatusCode(\CleverIt\UBL\Invoice\CustomsStatusCode $customsStatusCode)
    {
        $this->customsStatusCode = $customsStatusCode;
        return $this;
    }

    /**
     * Gets as customsTariffQuantity
     *
     * BBIE
     *  Goods Item. Customs Tariff Quantity. Quantity
     *  Quantity of the units in this goods item as required by customs for tariff, statistical, or fiscal purposes.
     *  0..1
     *  Goods Item
     *  Customs Tariff Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\CustomsTariffQuantity
     */
    public function getCustomsTariffQuantity()
    {
        return $this->customsTariffQuantity;
    }

    /**
     * Sets a new customsTariffQuantity
     *
     * BBIE
     *  Goods Item. Customs Tariff Quantity. Quantity
     *  Quantity of the units in this goods item as required by customs for tariff, statistical, or fiscal purposes.
     *  0..1
     *  Goods Item
     *  Customs Tariff Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\CustomsTariffQuantity $customsTariffQuantity
     * @return self
     */
    public function setCustomsTariffQuantity(\CleverIt\UBL\Invoice\CustomsTariffQuantity $customsTariffQuantity)
    {
        $this->customsTariffQuantity = $customsTariffQuantity;
        return $this;
    }

    /**
     * Gets as customsImportClassifiedIndicator
     *
     * BBIE
     *  Goods Item. Customs Import_ Classified Indicator. Indicator
     *  An indicator that this goods item has been classified for import by customs (true) or not (false).
     *  0..1
     *  Goods Item
     *  Customs Import
     *  Classified Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCustomsImportClassifiedIndicator()
    {
        return $this->customsImportClassifiedIndicator;
    }

    /**
     * Sets a new customsImportClassifiedIndicator
     *
     * BBIE
     *  Goods Item. Customs Import_ Classified Indicator. Indicator
     *  An indicator that this goods item has been classified for import by customs (true) or not (false).
     *  0..1
     *  Goods Item
     *  Customs Import
     *  Classified Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $customsImportClassifiedIndicator
     * @return self
     */
    public function setCustomsImportClassifiedIndicator($customsImportClassifiedIndicator)
    {
        $this->customsImportClassifiedIndicator = $customsImportClassifiedIndicator;
        return $this;
    }

    /**
     * Gets as chargeableQuantity
     *
     * BBIE
     *  Goods Item. Chargeable_ Quantity. Quantity
     *  The number of units in the goods item to which charges apply.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\ChargeableQuantity
     */
    public function getChargeableQuantity()
    {
        return $this->chargeableQuantity;
    }

    /**
     * Sets a new chargeableQuantity
     *
     * BBIE
     *  Goods Item. Chargeable_ Quantity. Quantity
     *  The number of units in the goods item to which charges apply.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\ChargeableQuantity $chargeableQuantity
     * @return self
     */
    public function setChargeableQuantity(\CleverIt\UBL\Invoice\ChargeableQuantity $chargeableQuantity)
    {
        $this->chargeableQuantity = $chargeableQuantity;
        return $this;
    }

    /**
     * Gets as returnableQuantity
     *
     * BBIE
     *  Goods Item. Returnable_ Quantity. Quantity
     *  The number of units in the goods item that may be returned.
     *  0..1
     *  Goods Item
     *  Returnable
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\ReturnableQuantity
     */
    public function getReturnableQuantity()
    {
        return $this->returnableQuantity;
    }

    /**
     * Sets a new returnableQuantity
     *
     * BBIE
     *  Goods Item. Returnable_ Quantity. Quantity
     *  The number of units in the goods item that may be returned.
     *  0..1
     *  Goods Item
     *  Returnable
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\ReturnableQuantity $returnableQuantity
     * @return self
     */
    public function setReturnableQuantity(\CleverIt\UBL\Invoice\ReturnableQuantity $returnableQuantity)
    {
        $this->returnableQuantity = $returnableQuantity;
        return $this;
    }

    /**
     * Gets as traceID
     *
     * BBIE
     *  Goods Item. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this goods item, such as the EPC number used in RFID.
     *  0..1
     *  Goods Item
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\TraceID
     */
    public function getTraceID()
    {
        return $this->traceID;
    }

    /**
     * Sets a new traceID
     *
     * BBIE
     *  Goods Item. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this goods item, such as the EPC number used in RFID.
     *  0..1
     *  Goods Item
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\TraceID $traceID
     * @return self
     */
    public function setTraceID(\CleverIt\UBL\Invoice\TraceID $traceID)
    {
        $this->traceID = $traceID;
        return $this;
    }

    /**
     * Adds as item
     *
     * ASBIE
     *  Goods Item. Item
     *  Product information relating to a goods item.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *  Item
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Item $item
     */
    public function addToItem(\CleverIt\UBL\Invoice\Item $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * ASBIE
     *  Goods Item. Item
     *  Product information relating to a goods item.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * ASBIE
     *  Goods Item. Item
     *  Product information relating to a goods item.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Goods Item. Item
     *  Product information relating to a goods item.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *  Item
     *
     * @return \CleverIt\UBL\Invoice\Item[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Goods Item. Item
     *  Product information relating to a goods item.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *  Item
     *
     * @param \CleverIt\UBL\Invoice\Item[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  The transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *  Goods Item Container
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\GoodsItemContainer $goodsItemContainer
     */
    public function addToGoodsItemContainer(\CleverIt\UBL\Invoice\GoodsItemContainer $goodsItemContainer)
    {
        $this->goodsItemContainer[] = $goodsItemContainer;
        return $this;
    }

    /**
     * isset goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  The transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *  Goods Item Container
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItemContainer($index)
    {
        return isset($this->goodsItemContainer[$index]);
    }

    /**
     * unset goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  The transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *  Goods Item Container
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItemContainer($index)
    {
        unset($this->goodsItemContainer[$index]);
    }

    /**
     * Gets as goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  The transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *  Goods Item Container
     *
     * @return \CleverIt\UBL\Invoice\GoodsItemContainer[]
     */
    public function getGoodsItemContainer()
    {
        return $this->goodsItemContainer;
    }

    /**
     * Sets a new goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  The transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *  Goods Item Container
     *
     * @param \CleverIt\UBL\Invoice\GoodsItemContainer[] $goodsItemContainer
     * @return self
     */
    public function setGoodsItemContainer(array $goodsItemContainer)
    {
        $this->goodsItemContainer = $goodsItemContainer;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\CleverIt\UBL\Invoice\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @return \CleverIt\UBL\Invoice\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param \CleverIt\UBL\Invoice\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }

    /**
     * Adds as invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Information about an invoice line relating to this goods item.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\InvoiceLine $invoiceLine
     */
    public function addToInvoiceLine(\CleverIt\UBL\Invoice\InvoiceLine $invoiceLine)
    {
        $this->invoiceLine[] = $invoiceLine;
        return $this;
    }

    /**
     * isset invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Information about an invoice line relating to this goods item.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceLine($index)
    {
        return isset($this->invoiceLine[$index]);
    }

    /**
     * unset invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Information about an invoice line relating to this goods item.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceLine($index)
    {
        unset($this->invoiceLine[$index]);
    }

    /**
     * Gets as invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Information about an invoice line relating to this goods item.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return \CleverIt\UBL\Invoice\InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->invoiceLine;
    }

    /**
     * Sets a new invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Information about an invoice line relating to this goods item.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param \CleverIt\UBL\Invoice\InvoiceLine[] $invoiceLine
     * @return self
     */
    public function setInvoiceLine(array $invoiceLine)
    {
        $this->invoiceLine = $invoiceLine;
        return $this;
    }

    /**
     * Adds as temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  The temperature of the goods item.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *  Temperature
     *  maximum, storage, minimum
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Temperature $temperature
     */
    public function addToTemperature(\CleverIt\UBL\Invoice\Temperature $temperature)
    {
        $this->temperature[] = $temperature;
        return $this;
    }

    /**
     * isset temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  The temperature of the goods item.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *  Temperature
     *  maximum, storage, minimum
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemperature($index)
    {
        return isset($this->temperature[$index]);
    }

    /**
     * unset temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  The temperature of the goods item.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *  Temperature
     *  maximum, storage, minimum
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemperature($index)
    {
        unset($this->temperature[$index]);
    }

    /**
     * Gets as temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  The temperature of the goods item.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *  Temperature
     *  maximum, storage, minimum
     *
     * @return \CleverIt\UBL\Invoice\Temperature[]
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Sets a new temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  The temperature of the goods item.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *  Temperature
     *  maximum, storage, minimum
     *
     * @param \CleverIt\UBL\Invoice\Temperature[] $temperature
     * @return self
     */
    public function setTemperature(array $temperature)
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * Adds as containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  A goods item contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ContainedGoodsItem $containedGoodsItem
     */
    public function addToContainedGoodsItem(\CleverIt\UBL\Invoice\ContainedGoodsItem $containedGoodsItem)
    {
        $this->containedGoodsItem[] = $containedGoodsItem;
        return $this;
    }

    /**
     * isset containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  A goods item contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedGoodsItem($index)
    {
        return isset($this->containedGoodsItem[$index]);
    }

    /**
     * unset containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  A goods item contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedGoodsItem($index)
    {
        unset($this->containedGoodsItem[$index]);
    }

    /**
     * Gets as containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  A goods item contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return \CleverIt\UBL\Invoice\ContainedGoodsItem[]
     */
    public function getContainedGoodsItem()
    {
        return $this->containedGoodsItem;
    }

    /**
     * Sets a new containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  A goods item contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param \CleverIt\UBL\Invoice\ContainedGoodsItem[] $containedGoodsItem
     * @return self
     */
    public function setContainedGoodsItem(array $containedGoodsItem)
    {
        $this->containedGoodsItem = $containedGoodsItem;
        return $this;
    }

    /**
     * Gets as originAddress
     *
     * ASBIE
     *  Goods Item. Origin_ Address. Address
     *  The region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the customs tariff, or of quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Goods Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *  Region of origin (WCO ID 066)
     *
     * @return \CleverIt\UBL\Invoice\OriginAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * ASBIE
     *  Goods Item. Origin_ Address. Address
     *  The region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the customs tariff, or of quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Goods Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *  Region of origin (WCO ID 066)
     *
     * @param \CleverIt\UBL\Invoice\OriginAddress $originAddress
     * @return self
     */
    public function setOriginAddress(\CleverIt\UBL\Invoice\OriginAddress $originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Goods Item. Delivery
     *  The delivery of this goods item.
     *  0..1
     *  Goods Item
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \CleverIt\UBL\Invoice\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Goods Item. Delivery
     *  The delivery of this goods item.
     *  0..1
     *  Goods Item
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \CleverIt\UBL\Invoice\Delivery $delivery
     * @return self
     */
    public function setDelivery(\CleverIt\UBL\Invoice\Delivery $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as pickup
     *
     * ASBIE
     *  Goods Item. Pickup
     *  The pickup of this goods item.
     *  0..1
     *  Goods Item
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @return \CleverIt\UBL\Invoice\Pickup
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Sets a new pickup
     *
     * ASBIE
     *  Goods Item. Pickup
     *  The pickup of this goods item.
     *  0..1
     *  Goods Item
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @param \CleverIt\UBL\Invoice\Pickup $pickup
     * @return self
     */
    public function setPickup(\CleverIt\UBL\Invoice\Pickup $pickup)
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * Gets as despatch
     *
     * ASBIE
     *  Goods Item. Despatch
     *  The despatch of this goods item.
     *  0..1
     *  Goods Item
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @return \CleverIt\UBL\Invoice\Despatch
     */
    public function getDespatch()
    {
        return $this->despatch;
    }

    /**
     * Sets a new despatch
     *
     * ASBIE
     *  Goods Item. Despatch
     *  The despatch of this goods item.
     *  0..1
     *  Goods Item
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @param \CleverIt\UBL\Invoice\Despatch $despatch
     * @return self
     */
    public function setDespatch(\CleverIt\UBL\Invoice\Despatch $despatch)
    {
        $this->despatch = $despatch;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Goods Item. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this goods item.
     *  0..n
     *  Goods Item
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\CleverIt\UBL\Invoice\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Goods Item. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this goods item.
     *  0..n
     *  Goods Item
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Goods Item. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this goods item.
     *  0..n
     *  Goods Item
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Goods Item. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this goods item.
     *  0..n
     *  Goods Item
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \CleverIt\UBL\Invoice\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Goods Item. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this goods item.
     *  0..n
     *  Goods Item
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \CleverIt\UBL\Invoice\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Adds as containingPackage
     *
     * ASBIE
     *  Goods Item. Containing_ Package. Package
     *  A package containing this goods item.
     *  0..n
     *  Goods Item
     *  Containing
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ContainingPackage $containingPackage
     */
    public function addToContainingPackage(\CleverIt\UBL\Invoice\ContainingPackage $containingPackage)
    {
        $this->containingPackage[] = $containingPackage;
        return $this;
    }

    /**
     * isset containingPackage
     *
     * ASBIE
     *  Goods Item. Containing_ Package. Package
     *  A package containing this goods item.
     *  0..n
     *  Goods Item
     *  Containing
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainingPackage($index)
    {
        return isset($this->containingPackage[$index]);
    }

    /**
     * unset containingPackage
     *
     * ASBIE
     *  Goods Item. Containing_ Package. Package
     *  A package containing this goods item.
     *  0..n
     *  Goods Item
     *  Containing
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainingPackage($index)
    {
        unset($this->containingPackage[$index]);
    }

    /**
     * Gets as containingPackage
     *
     * ASBIE
     *  Goods Item. Containing_ Package. Package
     *  A package containing this goods item.
     *  0..n
     *  Goods Item
     *  Containing
     *  Package
     *  Package
     *  Package
     *
     * @return \CleverIt\UBL\Invoice\ContainingPackage[]
     */
    public function getContainingPackage()
    {
        return $this->containingPackage;
    }

    /**
     * Sets a new containingPackage
     *
     * ASBIE
     *  Goods Item. Containing_ Package. Package
     *  A package containing this goods item.
     *  0..n
     *  Goods Item
     *  Containing
     *  Package
     *  Package
     *  Package
     *
     * @param \CleverIt\UBL\Invoice\ContainingPackage[] $containingPackage
     * @return self
     */
    public function setContainingPackage(array $containingPackage)
    {
        $this->containingPackage = $containingPackage;
        return $this;
    }

    /**
     * Gets as shipmentDocumentReference
     *
     * ASBIE
     *  Goods Item. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this goods item.
     *  0..1
     *  Goods Item
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\ShipmentDocumentReference
     */
    public function getShipmentDocumentReference()
    {
        return $this->shipmentDocumentReference;
    }

    /**
     * Sets a new shipmentDocumentReference
     *
     * ASBIE
     *  Goods Item. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this goods item.
     *  0..1
     *  Goods Item
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\ShipmentDocumentReference $shipmentDocumentReference
     * @return self
     */
    public function setShipmentDocumentReference(\CleverIt\UBL\Invoice\ShipmentDocumentReference $shipmentDocumentReference)
    {
        $this->shipmentDocumentReference = $shipmentDocumentReference;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Goods Item. Minimum_ Temperature. Temperature
     *  Information about minimum temperature.
     *  0..1
     *  Goods Item
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \CleverIt\UBL\Invoice\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Goods Item. Minimum_ Temperature. Temperature
     *  Information about minimum temperature.
     *  0..1
     *  Goods Item
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \CleverIt\UBL\Invoice\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(\CleverIt\UBL\Invoice\MinimumTemperature $minimumTemperature)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Goods Item. Maximum_ Temperature. Temperature
     *  Information about maximum temperature.
     *  0..1
     *  Goods Item
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \CleverIt\UBL\Invoice\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Goods Item. Maximum_ Temperature. Temperature
     *  Information about maximum temperature.
     *  0..1
     *  Goods Item
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \CleverIt\UBL\Invoice\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(\CleverIt\UBL\Invoice\MaximumTemperature $maximumTemperature)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }


}

