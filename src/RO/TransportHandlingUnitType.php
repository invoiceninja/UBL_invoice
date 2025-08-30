<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TransportHandlingUnitType
 *
 * ABIE
 *  Transport Handling Unit. Details
 *  A class to describe a uniquely identifiable unit consisting of one or more packages, goods items, or pieces of transport equipment.
 *  Transport Handling Unit
 *  Logistics Unit, Handling Unit, THU
 * XSD Type: TransportHandlingUnitType
 */
class TransportHandlingUnitType
{
    /**
     * BBIE
     *  Transport Handling Unit. Identifier
     *  An identifier for this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Handling Unit. Transport Handling Unit Type Code. Code
     *  A code signifying the type of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Transport Handling Unit Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode
     */
    private $transportHandlingUnitTypeCode = null;

    /**
     * BBIE
     *  Transport Handling Unit. Handling Code. Code
     *  The handling required for this transport handling unit, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @var \CleverIt\UBL\Invoice\RO\HandlingCode $handlingCode
     */
    private $handlingCode = null;

    /**
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  The handling required for this transport handling unit, expressed as text.
     *  0..n
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\HandlingInstructions[] $handlingInstructions
     */
    private $handlingInstructions = [
        
    ];

    /**
     * BBIE
     *  Transport Handling Unit. Hazardous Risk_ Indicator. Indicator
     *  An indicator that the materials contained in this transport handling unit are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Transport Handling Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * BBIE
     *  Transport Handling Unit. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TotalGoodsItemQuantity $totalGoodsItemQuantity
     */
    private $totalGoodsItemQuantity = null;

    /**
     * BBIE
     *  Transport Handling Unit. Total_ Package Quantity. Quantity
     *  The total number of packages in this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Package Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TotalPackageQuantity $totalPackageQuantity
     */
    private $totalPackageQuantity = null;

    /**
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Text describing damage associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DamageRemarks[] $damageRemarks
     */
    private $damageRemarks = [
        
    ];

    /**
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Text describing the marks and numbers on this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @var \CleverIt\UBL\Invoice\RO\ShippingMarks[] $shippingMarks
     */
    private $shippingMarks = [
        
    ];

    /**
     * BBIE
     *  Transport Handling Unit. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this transport handling unit, such as the EPC number used in RFID.
     *  0..1
     *  Transport Handling Unit
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TraceID $traceID
     */
    private $traceID = null;

    /**
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  A despatch line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *  Despatch Line
     *
     * @var \CleverIt\UBL\Invoice\RO\HandlingUnitDespatchLine[] $handlingUnitDespatchLine
     */
    private $handlingUnitDespatchLine = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *  Package
     *
     * @var \CleverIt\UBL\Invoice\RO\ActualPackage[] $actualPackage
     */
    private $actualPackage = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  A receipt line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *  Receipt Line
     *
     * @var \CleverIt\UBL\Invoice\RO\ReceivedHandlingUnitReceiptLine[] $receivedHandlingUnitReceiptLine
     */
    private $receivedHandlingUnitReceiptLine = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  A piece of transport equipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \CleverIt\UBL\Invoice\RO\TransportEquipment[] $transportEquipment
     */
    private $transportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Transport Means
     *  A means of transport associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @var \CleverIt\UBL\Invoice\RO\TransportMeans[] $transportMeans
     */
    private $transportMeans = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @var \CleverIt\UBL\Invoice\RO\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \CleverIt\UBL\Invoice\RO\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \CleverIt\UBL\Invoice\RO\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * ASBIE
     *  Transport Handling Unit. Maximum_ Temperature. Temperature
     *  The maximum allowable operating temperature of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * ASBIE
     *  Transport Handling Unit. Goods Item
     *  A goods item contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @var \CleverIt\UBL\Invoice\RO\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Floor Space Measurement_ Dimension. Dimension
     *  The floor space measurement dimension associated with this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Floor Space Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \CleverIt\UBL\Invoice\RO\FloorSpaceMeasurementDimension $floorSpaceMeasurementDimension
     */
    private $floorSpaceMeasurementDimension = null;

    /**
     * ASBIE
     *  Transport Handling Unit. Pallet Space Measurement_ Dimension. Dimension
     *  The pallet space measurement dimension associated to this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Pallet Space Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \CleverIt\UBL\Invoice\RO\PalletSpaceMeasurementDimension $palletSpaceMeasurementDimension
     */
    private $palletSpaceMeasurementDimension = null;

    /**
     * ASBIE
     *  Transport Handling Unit. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ShipmentDocumentReference[] $shipmentDocumentReference
     */
    private $shipmentDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Status
     *  The status of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Status
     *  Status
     *  Status
     *
     * @var \CleverIt\UBL\Invoice\RO\Status[] $status
     */
    private $status = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Customs Declaration
     *  Describes identifiers or references relating to customs procedures.
     *  0..n
     *  Transport Handling Unit
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @var \CleverIt\UBL\Invoice\RO\CustomsDeclaration[] $customsDeclaration
     */
    private $customsDeclaration = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Referenced_ Shipment. Shipment
     *  A shipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Referenced
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \CleverIt\UBL\Invoice\RO\ReferencedShipment[] $referencedShipment
     */
    private $referencedShipment = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Package
     *  Package
     *  Package
     *
     * @var \CleverIt\UBL\Invoice\RO\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Transport Handling Unit. Identifier
     *  An identifier for this transport handling unit.
     *  0..1
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Identifier
     *  An identifier for this transport handling unit.
     *  0..1
     *  Transport Handling Unit
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
     * Gets as transportHandlingUnitTypeCode
     *
     * BBIE
     *  Transport Handling Unit. Transport Handling Unit Type Code. Code
     *  A code signifying the type of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Transport Handling Unit Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TransportHandlingUnitTypeCode
     */
    public function getTransportHandlingUnitTypeCode()
    {
        return $this->transportHandlingUnitTypeCode;
    }

    /**
     * Sets a new transportHandlingUnitTypeCode
     *
     * BBIE
     *  Transport Handling Unit. Transport Handling Unit Type Code. Code
     *  A code signifying the type of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Transport Handling Unit Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode
     * @return self
     */
    public function setTransportHandlingUnitTypeCode(?\CleverIt\UBL\Invoice\RO\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode = null)
    {
        $this->transportHandlingUnitTypeCode = $transportHandlingUnitTypeCode;
        return $this;
    }

    /**
     * Gets as handlingCode
     *
     * BBIE
     *  Transport Handling Unit. Handling Code. Code
     *  The handling required for this transport handling unit, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @return \CleverIt\UBL\Invoice\RO\HandlingCode
     */
    public function getHandlingCode()
    {
        return $this->handlingCode;
    }

    /**
     * Sets a new handlingCode
     *
     * BBIE
     *  Transport Handling Unit. Handling Code. Code
     *  The handling required for this transport handling unit, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @param \CleverIt\UBL\Invoice\RO\HandlingCode $handlingCode
     * @return self
     */
    public function setHandlingCode(?\CleverIt\UBL\Invoice\RO\HandlingCode $handlingCode = null)
    {
        $this->handlingCode = $handlingCode;
        return $this;
    }

    /**
     * Adds as handlingInstructions
     *
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  The handling required for this transport handling unit, expressed as text.
     *  0..n
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\HandlingInstructions $handlingInstructions
     */
    public function addToHandlingInstructions(\CleverIt\UBL\Invoice\RO\HandlingInstructions $handlingInstructions)
    {
        $this->handlingInstructions[] = $handlingInstructions;
        return $this;
    }

    /**
     * isset handlingInstructions
     *
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  The handling required for this transport handling unit, expressed as text.
     *  0..n
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingInstructions($index)
    {
        return isset($this->handlingInstructions[$index]);
    }

    /**
     * unset handlingInstructions
     *
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  The handling required for this transport handling unit, expressed as text.
     *  0..n
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingInstructions($index)
    {
        unset($this->handlingInstructions[$index]);
    }

    /**
     * Gets as handlingInstructions
     *
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  The handling required for this transport handling unit, expressed as text.
     *  0..n
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\HandlingInstructions[]
     */
    public function getHandlingInstructions()
    {
        return $this->handlingInstructions;
    }

    /**
     * Sets a new handlingInstructions
     *
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  The handling required for this transport handling unit, expressed as text.
     *  0..n
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\HandlingInstructions[] $handlingInstructions
     * @return self
     */
    public function setHandlingInstructions(array $handlingInstructions = null)
    {
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Transport Handling Unit. Hazardous Risk_ Indicator. Indicator
     *  An indicator that the materials contained in this transport handling unit are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Transport Handling Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
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
     *  Transport Handling Unit. Hazardous Risk_ Indicator. Indicator
     *  An indicator that the materials contained in this transport handling unit are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Transport Handling Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
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
     * Gets as totalGoodsItemQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TotalGoodsItemQuantity
     */
    public function getTotalGoodsItemQuantity()
    {
        return $this->totalGoodsItemQuantity;
    }

    /**
     * Sets a new totalGoodsItemQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TotalGoodsItemQuantity $totalGoodsItemQuantity
     * @return self
     */
    public function setTotalGoodsItemQuantity(?\CleverIt\UBL\Invoice\RO\TotalGoodsItemQuantity $totalGoodsItemQuantity = null)
    {
        $this->totalGoodsItemQuantity = $totalGoodsItemQuantity;
        return $this;
    }

    /**
     * Gets as totalPackageQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Package Quantity. Quantity
     *  The total number of packages in this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Package Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TotalPackageQuantity
     */
    public function getTotalPackageQuantity()
    {
        return $this->totalPackageQuantity;
    }

    /**
     * Sets a new totalPackageQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Package Quantity. Quantity
     *  The total number of packages in this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Package Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TotalPackageQuantity $totalPackageQuantity
     * @return self
     */
    public function setTotalPackageQuantity(?\CleverIt\UBL\Invoice\RO\TotalPackageQuantity $totalPackageQuantity = null)
    {
        $this->totalPackageQuantity = $totalPackageQuantity;
        return $this;
    }

    /**
     * Adds as damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Text describing damage associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DamageRemarks $damageRemarks
     */
    public function addToDamageRemarks(\CleverIt\UBL\Invoice\RO\DamageRemarks $damageRemarks)
    {
        $this->damageRemarks[] = $damageRemarks;
        return $this;
    }

    /**
     * isset damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Text describing damage associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDamageRemarks($index)
    {
        return isset($this->damageRemarks[$index]);
    }

    /**
     * unset damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Text describing damage associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDamageRemarks($index)
    {
        unset($this->damageRemarks[$index]);
    }

    /**
     * Gets as damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Text describing damage associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DamageRemarks[]
     */
    public function getDamageRemarks()
    {
        return $this->damageRemarks;
    }

    /**
     * Sets a new damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Text describing damage associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DamageRemarks[] $damageRemarks
     * @return self
     */
    public function setDamageRemarks(array $damageRemarks = null)
    {
        $this->damageRemarks = $damageRemarks;
        return $this;
    }

    /**
     * Adds as shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Text describing the marks and numbers on this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ShippingMarks $shippingMarks
     */
    public function addToShippingMarks(\CleverIt\UBL\Invoice\RO\ShippingMarks $shippingMarks)
    {
        $this->shippingMarks[] = $shippingMarks;
        return $this;
    }

    /**
     * isset shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Text describing the marks and numbers on this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingMarks($index)
    {
        return isset($this->shippingMarks[$index]);
    }

    /**
     * unset shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Text describing the marks and numbers on this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingMarks($index)
    {
        unset($this->shippingMarks[$index]);
    }

    /**
     * Gets as shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Text describing the marks and numbers on this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @return \CleverIt\UBL\Invoice\RO\ShippingMarks[]
     */
    public function getShippingMarks()
    {
        return $this->shippingMarks;
    }

    /**
     * Sets a new shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Text describing the marks and numbers on this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @param \CleverIt\UBL\Invoice\RO\ShippingMarks[] $shippingMarks
     * @return self
     */
    public function setShippingMarks(array $shippingMarks = null)
    {
        $this->shippingMarks = $shippingMarks;
        return $this;
    }

    /**
     * Gets as traceID
     *
     * BBIE
     *  Transport Handling Unit. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this transport handling unit, such as the EPC number used in RFID.
     *  0..1
     *  Transport Handling Unit
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TraceID
     */
    public function getTraceID()
    {
        return $this->traceID;
    }

    /**
     * Sets a new traceID
     *
     * BBIE
     *  Transport Handling Unit. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this transport handling unit, such as the EPC number used in RFID.
     *  0..1
     *  Transport Handling Unit
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TraceID $traceID
     * @return self
     */
    public function setTraceID(?\CleverIt\UBL\Invoice\RO\TraceID $traceID = null)
    {
        $this->traceID = $traceID;
        return $this;
    }

    /**
     * Adds as handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  A despatch line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *  Despatch Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\HandlingUnitDespatchLine $handlingUnitDespatchLine
     */
    public function addToHandlingUnitDespatchLine(\CleverIt\UBL\Invoice\RO\HandlingUnitDespatchLine $handlingUnitDespatchLine)
    {
        $this->handlingUnitDespatchLine[] = $handlingUnitDespatchLine;
        return $this;
    }

    /**
     * isset handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  A despatch line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *  Despatch Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingUnitDespatchLine($index)
    {
        return isset($this->handlingUnitDespatchLine[$index]);
    }

    /**
     * unset handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  A despatch line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *  Despatch Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingUnitDespatchLine($index)
    {
        unset($this->handlingUnitDespatchLine[$index]);
    }

    /**
     * Gets as handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  A despatch line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *  Despatch Line
     *
     * @return \CleverIt\UBL\Invoice\RO\HandlingUnitDespatchLine[]
     */
    public function getHandlingUnitDespatchLine()
    {
        return $this->handlingUnitDespatchLine;
    }

    /**
     * Sets a new handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  A despatch line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *  Despatch Line
     *
     * @param \CleverIt\UBL\Invoice\RO\HandlingUnitDespatchLine[] $handlingUnitDespatchLine
     * @return self
     */
    public function setHandlingUnitDespatchLine(array $handlingUnitDespatchLine = null)
    {
        $this->handlingUnitDespatchLine = $handlingUnitDespatchLine;
        return $this;
    }

    /**
     * Adds as actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ActualPackage $actualPackage
     */
    public function addToActualPackage(\CleverIt\UBL\Invoice\RO\ActualPackage $actualPackage)
    {
        $this->actualPackage[] = $actualPackage;
        return $this;
    }

    /**
     * isset actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActualPackage($index)
    {
        return isset($this->actualPackage[$index]);
    }

    /**
     * unset actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActualPackage($index)
    {
        unset($this->actualPackage[$index]);
    }

    /**
     * Gets as actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *  Package
     *
     * @return \CleverIt\UBL\Invoice\RO\ActualPackage[]
     */
    public function getActualPackage()
    {
        return $this->actualPackage;
    }

    /**
     * Sets a new actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *  Package
     *
     * @param \CleverIt\UBL\Invoice\RO\ActualPackage[] $actualPackage
     * @return self
     */
    public function setActualPackage(array $actualPackage = null)
    {
        $this->actualPackage = $actualPackage;
        return $this;
    }

    /**
     * Adds as receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  A receipt line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *  Receipt Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ReceivedHandlingUnitReceiptLine $receivedHandlingUnitReceiptLine
     */
    public function addToReceivedHandlingUnitReceiptLine(\CleverIt\UBL\Invoice\RO\ReceivedHandlingUnitReceiptLine $receivedHandlingUnitReceiptLine)
    {
        $this->receivedHandlingUnitReceiptLine[] = $receivedHandlingUnitReceiptLine;
        return $this;
    }

    /**
     * isset receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  A receipt line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *  Receipt Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceivedHandlingUnitReceiptLine($index)
    {
        return isset($this->receivedHandlingUnitReceiptLine[$index]);
    }

    /**
     * unset receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  A receipt line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *  Receipt Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceivedHandlingUnitReceiptLine($index)
    {
        unset($this->receivedHandlingUnitReceiptLine[$index]);
    }

    /**
     * Gets as receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  A receipt line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *  Receipt Line
     *
     * @return \CleverIt\UBL\Invoice\RO\ReceivedHandlingUnitReceiptLine[]
     */
    public function getReceivedHandlingUnitReceiptLine()
    {
        return $this->receivedHandlingUnitReceiptLine;
    }

    /**
     * Sets a new receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  A receipt line associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *  Receipt Line
     *
     * @param \CleverIt\UBL\Invoice\RO\ReceivedHandlingUnitReceiptLine[] $receivedHandlingUnitReceiptLine
     * @return self
     */
    public function setReceivedHandlingUnitReceiptLine(array $receivedHandlingUnitReceiptLine = null)
    {
        $this->receivedHandlingUnitReceiptLine = $receivedHandlingUnitReceiptLine;
        return $this;
    }

    /**
     * Adds as transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  A piece of transport equipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TransportEquipment $transportEquipment
     */
    public function addToTransportEquipment(\CleverIt\UBL\Invoice\RO\TransportEquipment $transportEquipment)
    {
        $this->transportEquipment[] = $transportEquipment;
        return $this;
    }

    /**
     * isset transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  A piece of transport equipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEquipment($index)
    {
        return isset($this->transportEquipment[$index]);
    }

    /**
     * unset transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  A piece of transport equipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEquipment($index)
    {
        unset($this->transportEquipment[$index]);
    }

    /**
     * Gets as transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  A piece of transport equipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \CleverIt\UBL\Invoice\RO\TransportEquipment[]
     */
    public function getTransportEquipment()
    {
        return $this->transportEquipment;
    }

    /**
     * Sets a new transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  A piece of transport equipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \CleverIt\UBL\Invoice\RO\TransportEquipment[] $transportEquipment
     * @return self
     */
    public function setTransportEquipment(array $transportEquipment = null)
    {
        $this->transportEquipment = $transportEquipment;
        return $this;
    }

    /**
     * Adds as transportMeans
     *
     * ASBIE
     *  Transport Handling Unit. Transport Means
     *  A means of transport associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TransportMeans $transportMeans
     */
    public function addToTransportMeans(\CleverIt\UBL\Invoice\RO\TransportMeans $transportMeans)
    {
        $this->transportMeans[] = $transportMeans;
        return $this;
    }

    /**
     * isset transportMeans
     *
     * ASBIE
     *  Transport Handling Unit. Transport Means
     *  A means of transport associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportMeans($index)
    {
        return isset($this->transportMeans[$index]);
    }

    /**
     * unset transportMeans
     *
     * ASBIE
     *  Transport Handling Unit. Transport Means
     *  A means of transport associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportMeans($index)
    {
        unset($this->transportMeans[$index]);
    }

    /**
     * Gets as transportMeans
     *
     * ASBIE
     *  Transport Handling Unit. Transport Means
     *  A means of transport associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @return \CleverIt\UBL\Invoice\RO\TransportMeans[]
     */
    public function getTransportMeans()
    {
        return $this->transportMeans;
    }

    /**
     * Sets a new transportMeans
     *
     * ASBIE
     *  Transport Handling Unit. Transport Means
     *  A means of transport associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param \CleverIt\UBL\Invoice\RO\TransportMeans[] $transportMeans
     * @return self
     */
    public function setTransportMeans(array $transportMeans = null)
    {
        $this->transportMeans = $transportMeans;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\CleverIt\UBL\Invoice\RO\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return \CleverIt\UBL\Invoice\RO\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param \CleverIt\UBL\Invoice\RO\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(array $hazardousGoodsTransit = null)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\CleverIt\UBL\Invoice\RO\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \CleverIt\UBL\Invoice\RO\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \CleverIt\UBL\Invoice\RO\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension = null)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \CleverIt\UBL\Invoice\RO\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \CleverIt\UBL\Invoice\RO\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(?\CleverIt\UBL\Invoice\RO\MinimumTemperature $minimumTemperature = null)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Maximum_ Temperature. Temperature
     *  The maximum allowable operating temperature of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Maximum_ Temperature. Temperature
     *  The maximum allowable operating temperature of this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(?\CleverIt\UBL\Invoice\RO\MaximumTemperature $maximumTemperature = null)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * ASBIE
     *  Transport Handling Unit. Goods Item
     *  A goods item contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\GoodsItem $goodsItem
     */
    public function addToGoodsItem(\CleverIt\UBL\Invoice\RO\GoodsItem $goodsItem)
    {
        $this->goodsItem[] = $goodsItem;
        return $this;
    }

    /**
     * isset goodsItem
     *
     * ASBIE
     *  Transport Handling Unit. Goods Item
     *  A goods item contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItem($index)
    {
        return isset($this->goodsItem[$index]);
    }

    /**
     * unset goodsItem
     *
     * ASBIE
     *  Transport Handling Unit. Goods Item
     *  A goods item contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItem($index)
    {
        unset($this->goodsItem[$index]);
    }

    /**
     * Gets as goodsItem
     *
     * ASBIE
     *  Transport Handling Unit. Goods Item
     *  A goods item contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return \CleverIt\UBL\Invoice\RO\GoodsItem[]
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * ASBIE
     *  Transport Handling Unit. Goods Item
     *  A goods item contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param \CleverIt\UBL\Invoice\RO\GoodsItem[] $goodsItem
     * @return self
     */
    public function setGoodsItem(array $goodsItem = null)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }

    /**
     * Gets as floorSpaceMeasurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Floor Space Measurement_ Dimension. Dimension
     *  The floor space measurement dimension associated with this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Floor Space Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \CleverIt\UBL\Invoice\RO\FloorSpaceMeasurementDimension
     */
    public function getFloorSpaceMeasurementDimension()
    {
        return $this->floorSpaceMeasurementDimension;
    }

    /**
     * Sets a new floorSpaceMeasurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Floor Space Measurement_ Dimension. Dimension
     *  The floor space measurement dimension associated with this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Floor Space Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \CleverIt\UBL\Invoice\RO\FloorSpaceMeasurementDimension $floorSpaceMeasurementDimension
     * @return self
     */
    public function setFloorSpaceMeasurementDimension(?\CleverIt\UBL\Invoice\RO\FloorSpaceMeasurementDimension $floorSpaceMeasurementDimension = null)
    {
        $this->floorSpaceMeasurementDimension = $floorSpaceMeasurementDimension;
        return $this;
    }

    /**
     * Gets as palletSpaceMeasurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Pallet Space Measurement_ Dimension. Dimension
     *  The pallet space measurement dimension associated to this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Pallet Space Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \CleverIt\UBL\Invoice\RO\PalletSpaceMeasurementDimension
     */
    public function getPalletSpaceMeasurementDimension()
    {
        return $this->palletSpaceMeasurementDimension;
    }

    /**
     * Sets a new palletSpaceMeasurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Pallet Space Measurement_ Dimension. Dimension
     *  The pallet space measurement dimension associated to this transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Pallet Space Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \CleverIt\UBL\Invoice\RO\PalletSpaceMeasurementDimension $palletSpaceMeasurementDimension
     * @return self
     */
    public function setPalletSpaceMeasurementDimension(?\CleverIt\UBL\Invoice\RO\PalletSpaceMeasurementDimension $palletSpaceMeasurementDimension = null)
    {
        $this->palletSpaceMeasurementDimension = $palletSpaceMeasurementDimension;
        return $this;
    }

    /**
     * Adds as shipmentDocumentReference
     *
     * ASBIE
     *  Transport Handling Unit. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ShipmentDocumentReference $shipmentDocumentReference
     */
    public function addToShipmentDocumentReference(\CleverIt\UBL\Invoice\RO\ShipmentDocumentReference $shipmentDocumentReference)
    {
        $this->shipmentDocumentReference[] = $shipmentDocumentReference;
        return $this;
    }

    /**
     * isset shipmentDocumentReference
     *
     * ASBIE
     *  Transport Handling Unit. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentDocumentReference($index)
    {
        return isset($this->shipmentDocumentReference[$index]);
    }

    /**
     * unset shipmentDocumentReference
     *
     * ASBIE
     *  Transport Handling Unit. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentDocumentReference($index)
    {
        unset($this->shipmentDocumentReference[$index]);
    }

    /**
     * Gets as shipmentDocumentReference
     *
     * ASBIE
     *  Transport Handling Unit. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ShipmentDocumentReference[]
     */
    public function getShipmentDocumentReference()
    {
        return $this->shipmentDocumentReference;
    }

    /**
     * Sets a new shipmentDocumentReference
     *
     * ASBIE
     *  Transport Handling Unit. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ShipmentDocumentReference[] $shipmentDocumentReference
     * @return self
     */
    public function setShipmentDocumentReference(array $shipmentDocumentReference = null)
    {
        $this->shipmentDocumentReference = $shipmentDocumentReference;
        return $this;
    }

    /**
     * Adds as status
     *
     * ASBIE
     *  Transport Handling Unit. Status
     *  The status of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Status
     *  Status
     *  Status
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Status $status
     */
    public function addToStatus(\CleverIt\UBL\Invoice\RO\Status $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * ASBIE
     *  Transport Handling Unit. Status
     *  The status of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * ASBIE
     *  Transport Handling Unit. Status
     *  The status of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * ASBIE
     *  Transport Handling Unit. Status
     *  The status of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Status
     *  Status
     *  Status
     *
     * @return \CleverIt\UBL\Invoice\RO\Status[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * ASBIE
     *  Transport Handling Unit. Status
     *  The status of this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Status
     *  Status
     *  Status
     *
     * @param \CleverIt\UBL\Invoice\RO\Status[] $status
     * @return self
     */
    public function setStatus(array $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as customsDeclaration
     *
     * ASBIE
     *  Transport Handling Unit. Customs Declaration
     *  Describes identifiers or references relating to customs procedures.
     *  0..n
     *  Transport Handling Unit
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\CustomsDeclaration $customsDeclaration
     */
    public function addToCustomsDeclaration(\CleverIt\UBL\Invoice\RO\CustomsDeclaration $customsDeclaration)
    {
        $this->customsDeclaration[] = $customsDeclaration;
        return $this;
    }

    /**
     * isset customsDeclaration
     *
     * ASBIE
     *  Transport Handling Unit. Customs Declaration
     *  Describes identifiers or references relating to customs procedures.
     *  0..n
     *  Transport Handling Unit
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomsDeclaration($index)
    {
        return isset($this->customsDeclaration[$index]);
    }

    /**
     * unset customsDeclaration
     *
     * ASBIE
     *  Transport Handling Unit. Customs Declaration
     *  Describes identifiers or references relating to customs procedures.
     *  0..n
     *  Transport Handling Unit
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomsDeclaration($index)
    {
        unset($this->customsDeclaration[$index]);
    }

    /**
     * Gets as customsDeclaration
     *
     * ASBIE
     *  Transport Handling Unit. Customs Declaration
     *  Describes identifiers or references relating to customs procedures.
     *  0..n
     *  Transport Handling Unit
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @return \CleverIt\UBL\Invoice\RO\CustomsDeclaration[]
     */
    public function getCustomsDeclaration()
    {
        return $this->customsDeclaration;
    }

    /**
     * Sets a new customsDeclaration
     *
     * ASBIE
     *  Transport Handling Unit. Customs Declaration
     *  Describes identifiers or references relating to customs procedures.
     *  0..n
     *  Transport Handling Unit
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param \CleverIt\UBL\Invoice\RO\CustomsDeclaration[] $customsDeclaration
     * @return self
     */
    public function setCustomsDeclaration(array $customsDeclaration = null)
    {
        $this->customsDeclaration = $customsDeclaration;
        return $this;
    }

    /**
     * Adds as referencedShipment
     *
     * ASBIE
     *  Transport Handling Unit. Referenced_ Shipment. Shipment
     *  A shipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Referenced
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ReferencedShipment $referencedShipment
     */
    public function addToReferencedShipment(\CleverIt\UBL\Invoice\RO\ReferencedShipment $referencedShipment)
    {
        $this->referencedShipment[] = $referencedShipment;
        return $this;
    }

    /**
     * isset referencedShipment
     *
     * ASBIE
     *  Transport Handling Unit. Referenced_ Shipment. Shipment
     *  A shipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Referenced
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedShipment($index)
    {
        return isset($this->referencedShipment[$index]);
    }

    /**
     * unset referencedShipment
     *
     * ASBIE
     *  Transport Handling Unit. Referenced_ Shipment. Shipment
     *  A shipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Referenced
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedShipment($index)
    {
        unset($this->referencedShipment[$index]);
    }

    /**
     * Gets as referencedShipment
     *
     * ASBIE
     *  Transport Handling Unit. Referenced_ Shipment. Shipment
     *  A shipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Referenced
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \CleverIt\UBL\Invoice\RO\ReferencedShipment[]
     */
    public function getReferencedShipment()
    {
        return $this->referencedShipment;
    }

    /**
     * Sets a new referencedShipment
     *
     * ASBIE
     *  Transport Handling Unit. Referenced_ Shipment. Shipment
     *  A shipment associated with this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Referenced
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \CleverIt\UBL\Invoice\RO\ReferencedShipment[] $referencedShipment
     * @return self
     */
    public function setReferencedShipment(array $referencedShipment = null)
    {
        $this->referencedShipment = $referencedShipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Transport Handling Unit. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Package $package
     */
    public function addToPackage(\CleverIt\UBL\Invoice\RO\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Transport Handling Unit. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Transport Handling Unit. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Transport Handling Unit. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Package
     *  Package
     *  Package
     *
     * @return \CleverIt\UBL\Invoice\RO\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Transport Handling Unit. Package
     *  A package contained in this transport handling unit.
     *  0..n
     *  Transport Handling Unit
     *  Package
     *  Package
     *  Package
     *
     * @param \CleverIt\UBL\Invoice\RO\Package[] $package
     * @return self
     */
    public function setPackage(array $package = null)
    {
        $this->package = $package;
        return $this;
    }
}

