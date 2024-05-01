<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ConsumptionHistoryType
 *
 * ABIE
 *  Consumption History. Details
 *  A class to describe the measurement of a type of consumption during a particular period, used for the subscriber to get an overview of his consumption
 *  Consumption History
 * XSD Type: ConsumptionHistoryType
 */
class ConsumptionHistoryType
{
    /**
     * BBIE
     *  Consumption History. Meter Number. Text
     *  A text identifier for the meter measuring the consumption.
     *  0..1
     *  Consumption History
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
     *
     * @var \CleverIt\UBL\Invoice\RO\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * BBIE
     *  Consumption History. Quantity
     *  The quantity consumed.
     *  1
     *  Consumption History
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  7621.00
     *
     * @var \CleverIt\UBL\Invoice\RO\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Consumption History. Amount
     *  The monetary amount to be charged for the quantity consumed.
     *  0..1
     *  Consumption History
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Consumption History. Consumption Level Code. Code
     *  The consumption level, expressed as a code used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @var \CleverIt\UBL\Invoice\RO\ConsumptionLevelCode $consumptionLevelCode
     */
    private $consumptionLevelCode = null;

    /**
     * BBIE
     *  Consumption History. Consumption Level Text. Text
     *  The consumption level, expressed as text, used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Text
     *  Text
     *  Text. Type
     *  Average
     *
     * @var \CleverIt\UBL\Invoice\RO\ConsumptionLevel $consumptionLevel
     */
    private $consumptionLevel = null;

    /**
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Consumption History. Period
     *  The period during which the consumption took place.
     *  1
     *  Consumption History
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\Period $period
     */
    private $period = null;

    /**
     * Gets as meterNumber
     *
     * BBIE
     *  Consumption History. Meter Number. Text
     *  A text identifier for the meter measuring the consumption.
     *  0..1
     *  Consumption History
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
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
     *  Consumption History. Meter Number. Text
     *  A text identifier for the meter measuring the consumption.
     *  0..1
     *  Consumption History
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
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
     * Gets as quantity
     *
     * BBIE
     *  Consumption History. Quantity
     *  The quantity consumed.
     *  1
     *  Consumption History
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  7621.00
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
     *  Consumption History. Quantity
     *  The quantity consumed.
     *  1
     *  Consumption History
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  7621.00
     *
     * @param \CleverIt\UBL\Invoice\RO\Quantity $quantity
     * @return self
     */
    public function setQuantity(\CleverIt\UBL\Invoice\RO\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Consumption History. Amount
     *  The monetary amount to be charged for the quantity consumed.
     *  0..1
     *  Consumption History
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Consumption History. Amount
     *  The monetary amount to be charged for the quantity consumed.
     *  0..1
     *  Consumption History
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Amount $amount
     * @return self
     */
    public function setAmount(?\CleverIt\UBL\Invoice\RO\Amount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as consumptionLevelCode
     *
     * BBIE
     *  Consumption History. Consumption Level Code. Code
     *  The consumption level, expressed as a code used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @return \CleverIt\UBL\Invoice\RO\ConsumptionLevelCode
     */
    public function getConsumptionLevelCode()
    {
        return $this->consumptionLevelCode;
    }

    /**
     * Sets a new consumptionLevelCode
     *
     * BBIE
     *  Consumption History. Consumption Level Code. Code
     *  The consumption level, expressed as a code used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @param \CleverIt\UBL\Invoice\RO\ConsumptionLevelCode $consumptionLevelCode
     * @return self
     */
    public function setConsumptionLevelCode(?\CleverIt\UBL\Invoice\RO\ConsumptionLevelCode $consumptionLevelCode = null)
    {
        $this->consumptionLevelCode = $consumptionLevelCode;
        return $this;
    }

    /**
     * Gets as consumptionLevel
     *
     * BBIE
     *  Consumption History. Consumption Level Text. Text
     *  The consumption level, expressed as text, used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Text
     *  Text
     *  Text. Type
     *  Average
     *
     * @return \CleverIt\UBL\Invoice\RO\ConsumptionLevel
     */
    public function getConsumptionLevel()
    {
        return $this->consumptionLevel;
    }

    /**
     * Sets a new consumptionLevel
     *
     * BBIE
     *  Consumption History. Consumption Level Text. Text
     *  The consumption level, expressed as text, used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Text
     *  Text
     *  Text. Type
     *  Average
     *
     * @param \CleverIt\UBL\Invoice\RO\ConsumptionLevel $consumptionLevel
     * @return self
     */
    public function setConsumptionLevel(?\CleverIt\UBL\Invoice\RO\ConsumptionLevel $consumptionLevel = null)
    {
        $this->consumptionLevel = $consumptionLevel;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
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
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
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
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
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
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
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
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
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
     * Gets as period
     *
     * ASBIE
     *  Consumption History. Period
     *  The period during which the consumption took place.
     *  1
     *  Consumption History
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Consumption History. Period
     *  The period during which the consumption took place.
     *  1
     *  Consumption History
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\Period $period
     * @return self
     */
    public function setPeriod(\CleverIt\UBL\Invoice\RO\Period $period)
    {
        $this->period = $period;
        return $this;
    }
}

