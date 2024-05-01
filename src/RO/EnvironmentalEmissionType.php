<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing EnvironmentalEmissionType
 *
 * ABIE
 *  Environmental Emission. Details
 *  A class to describe an environmental emission.
 *  Environmental Emission
 * XSD Type: EnvironmentalEmissionType
 */
class EnvironmentalEmissionType
{
    /**
     * BBIE
     *  Environmental Emission. Environmental Emission Type Code. Code
     *  A code specifying the type of environmental emission.
     *  1
     *  Environmental Emission
     *  Environmental Emission Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode
     */
    private $environmentalEmissionTypeCode = null;

    /**
     * BBIE
     *  Environmental Emission. Value. Measure
     *  A value measurement for the environmental emission.
     *  1
     *  Environmental Emission
     *  Value
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ValueMeasure $valueMeasure
     */
    private $valueMeasure = null;

    /**
     * BBIE
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @var \CleverIt\UBL\Invoice\RO\EmissionCalculationMethod[] $emissionCalculationMethod
     */
    private $emissionCalculationMethod = [
        
    ];

    /**
     * Gets as environmentalEmissionTypeCode
     *
     * BBIE
     *  Environmental Emission. Environmental Emission Type Code. Code
     *  A code specifying the type of environmental emission.
     *  1
     *  Environmental Emission
     *  Environmental Emission Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\EnvironmentalEmissionTypeCode
     */
    public function getEnvironmentalEmissionTypeCode()
    {
        return $this->environmentalEmissionTypeCode;
    }

    /**
     * Sets a new environmentalEmissionTypeCode
     *
     * BBIE
     *  Environmental Emission. Environmental Emission Type Code. Code
     *  A code specifying the type of environmental emission.
     *  1
     *  Environmental Emission
     *  Environmental Emission Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode
     * @return self
     */
    public function setEnvironmentalEmissionTypeCode(\CleverIt\UBL\Invoice\RO\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode)
    {
        $this->environmentalEmissionTypeCode = $environmentalEmissionTypeCode;
        return $this;
    }

    /**
     * Gets as valueMeasure
     *
     * BBIE
     *  Environmental Emission. Value. Measure
     *  A value measurement for the environmental emission.
     *  1
     *  Environmental Emission
     *  Value
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ValueMeasure
     */
    public function getValueMeasure()
    {
        return $this->valueMeasure;
    }

    /**
     * Sets a new valueMeasure
     *
     * BBIE
     *  Environmental Emission. Value. Measure
     *  A value measurement for the environmental emission.
     *  1
     *  Environmental Emission
     *  Value
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ValueMeasure $valueMeasure
     * @return self
     */
    public function setValueMeasure(\CleverIt\UBL\Invoice\RO\ValueMeasure $valueMeasure)
    {
        $this->valueMeasure = $valueMeasure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     * Adds as emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EmissionCalculationMethod $emissionCalculationMethod
     */
    public function addToEmissionCalculationMethod(\CleverIt\UBL\Invoice\RO\EmissionCalculationMethod $emissionCalculationMethod)
    {
        $this->emissionCalculationMethod[] = $emissionCalculationMethod;
        return $this;
    }

    /**
     * isset emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmissionCalculationMethod($index)
    {
        return isset($this->emissionCalculationMethod[$index]);
    }

    /**
     * unset emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmissionCalculationMethod($index)
    {
        unset($this->emissionCalculationMethod[$index]);
    }

    /**
     * Gets as emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @return \CleverIt\UBL\Invoice\RO\EmissionCalculationMethod[]
     */
    public function getEmissionCalculationMethod()
    {
        return $this->emissionCalculationMethod;
    }

    /**
     * Sets a new emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @param \CleverIt\UBL\Invoice\RO\EmissionCalculationMethod[] $emissionCalculationMethod
     * @return self
     */
    public function setEmissionCalculationMethod(array $emissionCalculationMethod = null)
    {
        $this->emissionCalculationMethod = $emissionCalculationMethod;
        return $this;
    }
}

