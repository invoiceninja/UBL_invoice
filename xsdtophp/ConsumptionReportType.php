<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ConsumptionReportType
 *
 * ABIE
 *  Consumption Report. Details
 *  A class to describe utility consumption, including details of the environment in which consumption takes place.
 *  Consumption Report
 * XSD Type: ConsumptionReportType
 */
class ConsumptionReportType
{

    /**
     * BBIE
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @var \CleverIt\UBL\Invoice\TotalConsumedQuantity $totalConsumedQuantity
     */
    private $totalConsumedQuantity = null;

    /**
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @var \CleverIt\UBL\Invoice\BasicConsumedQuantity $basicConsumedQuantity
     */
    private $basicConsumedQuantity = null;

    /**
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @var \CleverIt\UBL\Invoice\ResidentOccupantsNumeric $residentOccupantsNumeric
     */
    private $residentOccupantsNumeric = null;

    /**
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @var \CleverIt\UBL\Invoice\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     */
    private $consumersEnergyLevelCode = null;

    /**
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @var \CleverIt\UBL\Invoice\ConsumersEnergyLevel $consumersEnergyLevel
     */
    private $consumersEnergyLevel = null;

    /**
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @var \CleverIt\UBL\Invoice\ResidenceType $residenceType
     */
    private $residenceType = null;

    /**
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @var \CleverIt\UBL\Invoice\ResidenceTypeCode $residenceTypeCode
     */
    private $residenceTypeCode = null;

    /**
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @var \CleverIt\UBL\Invoice\HeatingType $heatingType
     */
    private $heatingType = null;

    /**
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @var \CleverIt\UBL\Invoice\HeatingTypeCode $heatingTypeCode
     */
    private $heatingTypeCode = null;

    /**
     * ASBIE
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\GuidanceDocumentReference $guidanceDocumentReference
     */
    private $guidanceDocumentReference = null;

    /**
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @var \CleverIt\UBL\Invoice\ConsumptionReportReference[] $consumptionReportReference
     */
    private $consumptionReportReference = [
        
    ];

    /**
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @var \CleverIt\UBL\Invoice\ConsumptionHistory[] $consumptionHistory
     */
    private $consumptionHistory = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
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
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
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
     * Gets as consumptionType
     *
     * BBIE
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     * Adds as description
     *
     * BBIE
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     * Gets as totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @return \CleverIt\UBL\Invoice\TotalConsumedQuantity
     */
    public function getTotalConsumedQuantity()
    {
        return $this->totalConsumedQuantity;
    }

    /**
     * Sets a new totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @param \CleverIt\UBL\Invoice\TotalConsumedQuantity $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(\CleverIt\UBL\Invoice\TotalConsumedQuantity $totalConsumedQuantity)
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;
        return $this;
    }

    /**
     * Gets as basicConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @return \CleverIt\UBL\Invoice\BasicConsumedQuantity
     */
    public function getBasicConsumedQuantity()
    {
        return $this->basicConsumedQuantity;
    }

    /**
     * Sets a new basicConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @param \CleverIt\UBL\Invoice\BasicConsumedQuantity $basicConsumedQuantity
     * @return self
     */
    public function setBasicConsumedQuantity(\CleverIt\UBL\Invoice\BasicConsumedQuantity $basicConsumedQuantity)
    {
        $this->basicConsumedQuantity = $basicConsumedQuantity;
        return $this;
    }

    /**
     * Gets as residentOccupantsNumeric
     *
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @return \CleverIt\UBL\Invoice\ResidentOccupantsNumeric
     */
    public function getResidentOccupantsNumeric()
    {
        return $this->residentOccupantsNumeric;
    }

    /**
     * Sets a new residentOccupantsNumeric
     *
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @param \CleverIt\UBL\Invoice\ResidentOccupantsNumeric $residentOccupantsNumeric
     * @return self
     */
    public function setResidentOccupantsNumeric(\CleverIt\UBL\Invoice\ResidentOccupantsNumeric $residentOccupantsNumeric)
    {
        $this->residentOccupantsNumeric = $residentOccupantsNumeric;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevelCode
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @return \CleverIt\UBL\Invoice\ConsumersEnergyLevelCode
     */
    public function getConsumersEnergyLevelCode()
    {
        return $this->consumersEnergyLevelCode;
    }

    /**
     * Sets a new consumersEnergyLevelCode
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @param \CleverIt\UBL\Invoice\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     * @return self
     */
    public function setConsumersEnergyLevelCode(\CleverIt\UBL\Invoice\ConsumersEnergyLevelCode $consumersEnergyLevelCode)
    {
        $this->consumersEnergyLevelCode = $consumersEnergyLevelCode;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevel
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @return \CleverIt\UBL\Invoice\ConsumersEnergyLevel
     */
    public function getConsumersEnergyLevel()
    {
        return $this->consumersEnergyLevel;
    }

    /**
     * Sets a new consumersEnergyLevel
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @param \CleverIt\UBL\Invoice\ConsumersEnergyLevel $consumersEnergyLevel
     * @return self
     */
    public function setConsumersEnergyLevel(\CleverIt\UBL\Invoice\ConsumersEnergyLevel $consumersEnergyLevel)
    {
        $this->consumersEnergyLevel = $consumersEnergyLevel;
        return $this;
    }

    /**
     * Gets as residenceType
     *
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @return \CleverIt\UBL\Invoice\ResidenceType
     */
    public function getResidenceType()
    {
        return $this->residenceType;
    }

    /**
     * Sets a new residenceType
     *
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @param \CleverIt\UBL\Invoice\ResidenceType $residenceType
     * @return self
     */
    public function setResidenceType(\CleverIt\UBL\Invoice\ResidenceType $residenceType)
    {
        $this->residenceType = $residenceType;
        return $this;
    }

    /**
     * Gets as residenceTypeCode
     *
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @return \CleverIt\UBL\Invoice\ResidenceTypeCode
     */
    public function getResidenceTypeCode()
    {
        return $this->residenceTypeCode;
    }

    /**
     * Sets a new residenceTypeCode
     *
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @param \CleverIt\UBL\Invoice\ResidenceTypeCode $residenceTypeCode
     * @return self
     */
    public function setResidenceTypeCode(\CleverIt\UBL\Invoice\ResidenceTypeCode $residenceTypeCode)
    {
        $this->residenceTypeCode = $residenceTypeCode;
        return $this;
    }

    /**
     * Gets as heatingType
     *
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @return \CleverIt\UBL\Invoice\HeatingType
     */
    public function getHeatingType()
    {
        return $this->heatingType;
    }

    /**
     * Sets a new heatingType
     *
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @param \CleverIt\UBL\Invoice\HeatingType $heatingType
     * @return self
     */
    public function setHeatingType(\CleverIt\UBL\Invoice\HeatingType $heatingType)
    {
        $this->heatingType = $heatingType;
        return $this;
    }

    /**
     * Gets as heatingTypeCode
     *
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @return \CleverIt\UBL\Invoice\HeatingTypeCode
     */
    public function getHeatingTypeCode()
    {
        return $this->heatingTypeCode;
    }

    /**
     * Sets a new heatingTypeCode
     *
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @param \CleverIt\UBL\Invoice\HeatingTypeCode $heatingTypeCode
     * @return self
     */
    public function setHeatingTypeCode(\CleverIt\UBL\Invoice\HeatingTypeCode $heatingTypeCode)
    {
        $this->heatingTypeCode = $heatingTypeCode;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\Period $period
     * @return self
     */
    public function setPeriod(\CleverIt\UBL\Invoice\Period $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as guidanceDocumentReference
     *
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\GuidanceDocumentReference
     */
    public function getGuidanceDocumentReference()
    {
        return $this->guidanceDocumentReference;
    }

    /**
     * Sets a new guidanceDocumentReference
     *
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\GuidanceDocumentReference $guidanceDocumentReference
     * @return self
     */
    public function setGuidanceDocumentReference(\CleverIt\UBL\Invoice\GuidanceDocumentReference $guidanceDocumentReference)
    {
        $this->guidanceDocumentReference = $guidanceDocumentReference;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(\CleverIt\UBL\Invoice\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ConsumptionReportReference $consumptionReportReference
     */
    public function addToConsumptionReportReference(\CleverIt\UBL\Invoice\ConsumptionReportReference $consumptionReportReference)
    {
        $this->consumptionReportReference[] = $consumptionReportReference;
        return $this;
    }

    /**
     * isset consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionReportReference($index)
    {
        return isset($this->consumptionReportReference[$index]);
    }

    /**
     * unset consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionReportReference($index)
    {
        unset($this->consumptionReportReference[$index]);
    }

    /**
     * Gets as consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @return \CleverIt\UBL\Invoice\ConsumptionReportReference[]
     */
    public function getConsumptionReportReference()
    {
        return $this->consumptionReportReference;
    }

    /**
     * Sets a new consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param \CleverIt\UBL\Invoice\ConsumptionReportReference[] $consumptionReportReference
     * @return self
     */
    public function setConsumptionReportReference(array $consumptionReportReference)
    {
        $this->consumptionReportReference = $consumptionReportReference;
        return $this;
    }

    /**
     * Adds as consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ConsumptionHistory $consumptionHistory
     */
    public function addToConsumptionHistory(\CleverIt\UBL\Invoice\ConsumptionHistory $consumptionHistory)
    {
        $this->consumptionHistory[] = $consumptionHistory;
        return $this;
    }

    /**
     * isset consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionHistory($index)
    {
        return isset($this->consumptionHistory[$index]);
    }

    /**
     * unset consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionHistory($index)
    {
        unset($this->consumptionHistory[$index]);
    }

    /**
     * Gets as consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @return \CleverIt\UBL\Invoice\ConsumptionHistory[]
     */
    public function getConsumptionHistory()
    {
        return $this->consumptionHistory;
    }

    /**
     * Sets a new consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param \CleverIt\UBL\Invoice\ConsumptionHistory[] $consumptionHistory
     * @return self
     */
    public function setConsumptionHistory(array $consumptionHistory)
    {
        $this->consumptionHistory = $consumptionHistory;
        return $this;
    }


}

