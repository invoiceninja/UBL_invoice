<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ConsumptionCorrectionType
 *
 * ABIE
 *  Consumption Correction. Details
 *  The Statement of correction, for examples heating correction.
 *  Consumption Correction
 * XSD Type: ConsumptionCorrectionType
 */
class ConsumptionCorrectionType
{
    /**
     * BBIE
     *  Consumption Correction. Correction Type. Text
     *  Statement for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type
     *  Text
     *  Text. Type
     *  Heating Correction
     *
     * @var \CleverIt\UBL\Invoice\RO\CorrectionType $correctionType
     */
    private $correctionType = null;

    /**
     * BBIE
     *  Consumption Correction. Correction Type Code. Code
     *  Statement at the code for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type Code
     *  Code
     *  Code. Type
     *  HeatingCorrection
     *
     * @var \CleverIt\UBL\Invoice\RO\CorrectionTypeCode $correctionTypeCode
     */
    private $correctionTypeCode = null;

    /**
     * BBIE
     *  Consumption Correction. Meter Number. Text
     *  Statement for meter number.
     *  0..1
     *  Consumption Correction
     *  Meter Number
     *  Text
     *  Text. Type
     *  530071575
     *
     * @var \CleverIt\UBL\Invoice\RO\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * BBIE
     *  Consumption Correction. Gas Pressure. Quantity
     *  Correction of the gas pressure.
     *  0..1
     *  Consumption Correction
     *  Gas Pressure
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\GasPressureQuantity $gasPressureQuantity
     */
    private $gasPressureQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Actual_ Temperature Reduction. Quantity
     *  Statement for the actuel heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Actual
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -36.69
     *
     * @var \CleverIt\UBL\Invoice\RO\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity
     */
    private $actualTemperatureReductionQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Normal_ Temperature Reduction. Quantity
     *  Statement for the standard for heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Normal
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -37.00
     *
     * @var \CleverIt\UBL\Invoice\RO\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity
     */
    private $normalTemperatureReductionQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Difference_ Temperature Reduction. Quantity
     *  Deviation from standard heating correction.
     *  0..1
     *  Consumption Correction
     *  Difference
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  0.31
     *
     * @var \CleverIt\UBL\Invoice\RO\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity
     */
    private $differenceTemperatureReductionQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Consumption Correction. Correction Unit Amount. Amount
     *  Correction per MWH per degree C.
     *  0..1
     *  Consumption Correction
     *  Correction Unit Amount
     *  Amount
     *  Amount. Type
     *  0.0000
     *
     * @var \CleverIt\UBL\Invoice\RO\CorrectionUnitAmount $correctionUnitAmount
     */
    private $correctionUnitAmount = null;

    /**
     * BBIE
     *  Consumption Correction. Consumption Energy. Quantity
     *  Your consumpt for district heating energy.
     *  0..1
     *  Consumption Correction
     *  Consumption Energy
     *  Quantity
     *  Quantity. Type
     *  563.6240
     *
     * @var \CleverIt\UBL\Invoice\RO\ConsumptionEnergyQuantity $consumptionEnergyQuantity
     */
    private $consumptionEnergyQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Consumption Water. Quantity
     *  Your consumpt for district heating water.
     *  0..1
     *  Consumption Correction
     *  Consumption Water
     *  Quantity
     *  Quantity. Type
     *  13212.14
     *
     * @var \CleverIt\UBL\Invoice\RO\ConsumptionWaterQuantity $consumptionWaterQuantity
     */
    private $consumptionWaterQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Correction Amount. Amount
     *  Your correction for heating correction.
     *  0..1
     *  Consumption Correction
     *  Correction Amount
     *  Amount
     *  Amount. Type
     *  0.00
     *
     * @var \CleverIt\UBL\Invoice\RO\CorrectionAmount $correctionAmount
     */
    private $correctionAmount = null;

    /**
     * Gets as correctionType
     *
     * BBIE
     *  Consumption Correction. Correction Type. Text
     *  Statement for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type
     *  Text
     *  Text. Type
     *  Heating Correction
     *
     * @return \CleverIt\UBL\Invoice\RO\CorrectionType
     */
    public function getCorrectionType()
    {
        return $this->correctionType;
    }

    /**
     * Sets a new correctionType
     *
     * BBIE
     *  Consumption Correction. Correction Type. Text
     *  Statement for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type
     *  Text
     *  Text. Type
     *  Heating Correction
     *
     * @param \CleverIt\UBL\Invoice\RO\CorrectionType $correctionType
     * @return self
     */
    public function setCorrectionType(?\CleverIt\UBL\Invoice\RO\CorrectionType $correctionType = null)
    {
        $this->correctionType = $correctionType;
        return $this;
    }

    /**
     * Gets as correctionTypeCode
     *
     * BBIE
     *  Consumption Correction. Correction Type Code. Code
     *  Statement at the code for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type Code
     *  Code
     *  Code. Type
     *  HeatingCorrection
     *
     * @return \CleverIt\UBL\Invoice\RO\CorrectionTypeCode
     */
    public function getCorrectionTypeCode()
    {
        return $this->correctionTypeCode;
    }

    /**
     * Sets a new correctionTypeCode
     *
     * BBIE
     *  Consumption Correction. Correction Type Code. Code
     *  Statement at the code for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type Code
     *  Code
     *  Code. Type
     *  HeatingCorrection
     *
     * @param \CleverIt\UBL\Invoice\RO\CorrectionTypeCode $correctionTypeCode
     * @return self
     */
    public function setCorrectionTypeCode(?\CleverIt\UBL\Invoice\RO\CorrectionTypeCode $correctionTypeCode = null)
    {
        $this->correctionTypeCode = $correctionTypeCode;
        return $this;
    }

    /**
     * Gets as meterNumber
     *
     * BBIE
     *  Consumption Correction. Meter Number. Text
     *  Statement for meter number.
     *  0..1
     *  Consumption Correction
     *  Meter Number
     *  Text
     *  Text. Type
     *  530071575
     *
     * @return \CleverIt\UBL\Invoice\RO\MeterNumber
     */
    public function getMeterNumber()
    {
        return $this->meterNumber;
    }

    /**
     * Sets a new meterNumber
     *
     * BBIE
     *  Consumption Correction. Meter Number. Text
     *  Statement for meter number.
     *  0..1
     *  Consumption Correction
     *  Meter Number
     *  Text
     *  Text. Type
     *  530071575
     *
     * @param \CleverIt\UBL\Invoice\RO\MeterNumber $meterNumber
     * @return self
     */
    public function setMeterNumber(?\CleverIt\UBL\Invoice\RO\MeterNumber $meterNumber = null)
    {
        $this->meterNumber = $meterNumber;
        return $this;
    }

    /**
     * Gets as gasPressureQuantity
     *
     * BBIE
     *  Consumption Correction. Gas Pressure. Quantity
     *  Correction of the gas pressure.
     *  0..1
     *  Consumption Correction
     *  Gas Pressure
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\GasPressureQuantity
     */
    public function getGasPressureQuantity()
    {
        return $this->gasPressureQuantity;
    }

    /**
     * Sets a new gasPressureQuantity
     *
     * BBIE
     *  Consumption Correction. Gas Pressure. Quantity
     *  Correction of the gas pressure.
     *  0..1
     *  Consumption Correction
     *  Gas Pressure
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\GasPressureQuantity $gasPressureQuantity
     * @return self
     */
    public function setGasPressureQuantity(?\CleverIt\UBL\Invoice\RO\GasPressureQuantity $gasPressureQuantity = null)
    {
        $this->gasPressureQuantity = $gasPressureQuantity;
        return $this;
    }

    /**
     * Gets as actualTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Actual_ Temperature Reduction. Quantity
     *  Statement for the actuel heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Actual
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -36.69
     *
     * @return \CleverIt\UBL\Invoice\RO\ActualTemperatureReductionQuantity
     */
    public function getActualTemperatureReductionQuantity()
    {
        return $this->actualTemperatureReductionQuantity;
    }

    /**
     * Sets a new actualTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Actual_ Temperature Reduction. Quantity
     *  Statement for the actuel heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Actual
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -36.69
     *
     * @param \CleverIt\UBL\Invoice\RO\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity
     * @return self
     */
    public function setActualTemperatureReductionQuantity(?\CleverIt\UBL\Invoice\RO\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity = null)
    {
        $this->actualTemperatureReductionQuantity = $actualTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Gets as normalTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Normal_ Temperature Reduction. Quantity
     *  Statement for the standard for heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Normal
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -37.00
     *
     * @return \CleverIt\UBL\Invoice\RO\NormalTemperatureReductionQuantity
     */
    public function getNormalTemperatureReductionQuantity()
    {
        return $this->normalTemperatureReductionQuantity;
    }

    /**
     * Sets a new normalTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Normal_ Temperature Reduction. Quantity
     *  Statement for the standard for heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Normal
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -37.00
     *
     * @param \CleverIt\UBL\Invoice\RO\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity
     * @return self
     */
    public function setNormalTemperatureReductionQuantity(?\CleverIt\UBL\Invoice\RO\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity = null)
    {
        $this->normalTemperatureReductionQuantity = $normalTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Gets as differenceTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Difference_ Temperature Reduction. Quantity
     *  Deviation from standard heating correction.
     *  0..1
     *  Consumption Correction
     *  Difference
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  0.31
     *
     * @return \CleverIt\UBL\Invoice\RO\DifferenceTemperatureReductionQuantity
     */
    public function getDifferenceTemperatureReductionQuantity()
    {
        return $this->differenceTemperatureReductionQuantity;
    }

    /**
     * Sets a new differenceTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Difference_ Temperature Reduction. Quantity
     *  Deviation from standard heating correction.
     *  0..1
     *  Consumption Correction
     *  Difference
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  0.31
     *
     * @param \CleverIt\UBL\Invoice\RO\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity
     * @return self
     */
    public function setDifferenceTemperatureReductionQuantity(?\CleverIt\UBL\Invoice\RO\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity = null)
    {
        $this->differenceTemperatureReductionQuantity = $differenceTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\RO\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
     *  Description
     *  Text
     *  Text. Type
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
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
     *  Description
     *  Text
     *  Text. Type
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
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as correctionUnitAmount
     *
     * BBIE
     *  Consumption Correction. Correction Unit Amount. Amount
     *  Correction per MWH per degree C.
     *  0..1
     *  Consumption Correction
     *  Correction Unit Amount
     *  Amount
     *  Amount. Type
     *  0.0000
     *
     * @return \CleverIt\UBL\Invoice\RO\CorrectionUnitAmount
     */
    public function getCorrectionUnitAmount()
    {
        return $this->correctionUnitAmount;
    }

    /**
     * Sets a new correctionUnitAmount
     *
     * BBIE
     *  Consumption Correction. Correction Unit Amount. Amount
     *  Correction per MWH per degree C.
     *  0..1
     *  Consumption Correction
     *  Correction Unit Amount
     *  Amount
     *  Amount. Type
     *  0.0000
     *
     * @param \CleverIt\UBL\Invoice\RO\CorrectionUnitAmount $correctionUnitAmount
     * @return self
     */
    public function setCorrectionUnitAmount(?\CleverIt\UBL\Invoice\RO\CorrectionUnitAmount $correctionUnitAmount = null)
    {
        $this->correctionUnitAmount = $correctionUnitAmount;
        return $this;
    }

    /**
     * Gets as consumptionEnergyQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Energy. Quantity
     *  Your consumpt for district heating energy.
     *  0..1
     *  Consumption Correction
     *  Consumption Energy
     *  Quantity
     *  Quantity. Type
     *  563.6240
     *
     * @return \CleverIt\UBL\Invoice\RO\ConsumptionEnergyQuantity
     */
    public function getConsumptionEnergyQuantity()
    {
        return $this->consumptionEnergyQuantity;
    }

    /**
     * Sets a new consumptionEnergyQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Energy. Quantity
     *  Your consumpt for district heating energy.
     *  0..1
     *  Consumption Correction
     *  Consumption Energy
     *  Quantity
     *  Quantity. Type
     *  563.6240
     *
     * @param \CleverIt\UBL\Invoice\RO\ConsumptionEnergyQuantity $consumptionEnergyQuantity
     * @return self
     */
    public function setConsumptionEnergyQuantity(?\CleverIt\UBL\Invoice\RO\ConsumptionEnergyQuantity $consumptionEnergyQuantity = null)
    {
        $this->consumptionEnergyQuantity = $consumptionEnergyQuantity;
        return $this;
    }

    /**
     * Gets as consumptionWaterQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Water. Quantity
     *  Your consumpt for district heating water.
     *  0..1
     *  Consumption Correction
     *  Consumption Water
     *  Quantity
     *  Quantity. Type
     *  13212.14
     *
     * @return \CleverIt\UBL\Invoice\RO\ConsumptionWaterQuantity
     */
    public function getConsumptionWaterQuantity()
    {
        return $this->consumptionWaterQuantity;
    }

    /**
     * Sets a new consumptionWaterQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Water. Quantity
     *  Your consumpt for district heating water.
     *  0..1
     *  Consumption Correction
     *  Consumption Water
     *  Quantity
     *  Quantity. Type
     *  13212.14
     *
     * @param \CleverIt\UBL\Invoice\RO\ConsumptionWaterQuantity $consumptionWaterQuantity
     * @return self
     */
    public function setConsumptionWaterQuantity(?\CleverIt\UBL\Invoice\RO\ConsumptionWaterQuantity $consumptionWaterQuantity = null)
    {
        $this->consumptionWaterQuantity = $consumptionWaterQuantity;
        return $this;
    }

    /**
     * Gets as correctionAmount
     *
     * BBIE
     *  Consumption Correction. Correction Amount. Amount
     *  Your correction for heating correction.
     *  0..1
     *  Consumption Correction
     *  Correction Amount
     *  Amount
     *  Amount. Type
     *  0.00
     *
     * @return \CleverIt\UBL\Invoice\RO\CorrectionAmount
     */
    public function getCorrectionAmount()
    {
        return $this->correctionAmount;
    }

    /**
     * Sets a new correctionAmount
     *
     * BBIE
     *  Consumption Correction. Correction Amount. Amount
     *  Your correction for heating correction.
     *  0..1
     *  Consumption Correction
     *  Correction Amount
     *  Amount
     *  Amount. Type
     *  0.00
     *
     * @param \CleverIt\UBL\Invoice\RO\CorrectionAmount $correctionAmount
     * @return self
     */
    public function setCorrectionAmount(?\CleverIt\UBL\Invoice\RO\CorrectionAmount $correctionAmount = null)
    {
        $this->correctionAmount = $correctionAmount;
        return $this;
    }
}

