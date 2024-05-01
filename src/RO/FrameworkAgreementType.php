<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing FrameworkAgreementType
 *
 * ABIE
 *  Framework Agreement. Details
 *  A class to describe a tendering framework agreement.
 *  Framework Agreement
 * XSD Type: FrameworkAgreementType
 */
class FrameworkAgreementType
{
    /**
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ExpectedOperatorQuantity $expectedOperatorQuantity
     */
    private $expectedOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumOperatorQuantity $maximumOperatorQuantity
     */
    private $maximumOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Justification[] $justification
     */
    private $justification = [
        
    ];

    /**
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Frequency[] $frequency
     */
    private $frequency = [
        
    ];

    /**
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\DurationPeriod $durationPeriod
     */
    private $durationPeriod = null;

    /**
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @var \CleverIt\UBL\Invoice\RO\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     */
    private $subsequentProcessTenderRequirement = [
        
    ];

    /**
     * Gets as expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ExpectedOperatorQuantity
     */
    public function getExpectedOperatorQuantity()
    {
        return $this->expectedOperatorQuantity;
    }

    /**
     * Sets a new expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ExpectedOperatorQuantity $expectedOperatorQuantity
     * @return self
     */
    public function setExpectedOperatorQuantity(?\CleverIt\UBL\Invoice\RO\ExpectedOperatorQuantity $expectedOperatorQuantity = null)
    {
        $this->expectedOperatorQuantity = $expectedOperatorQuantity;
        return $this;
    }

    /**
     * Gets as maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumOperatorQuantity
     */
    public function getMaximumOperatorQuantity()
    {
        return $this->maximumOperatorQuantity;
    }

    /**
     * Sets a new maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumOperatorQuantity $maximumOperatorQuantity
     * @return self
     */
    public function setMaximumOperatorQuantity(?\CleverIt\UBL\Invoice\RO\MaximumOperatorQuantity $maximumOperatorQuantity = null)
    {
        $this->maximumOperatorQuantity = $maximumOperatorQuantity;
        return $this;
    }

    /**
     * Adds as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Justification $justification
     */
    public function addToJustification(\CleverIt\UBL\Invoice\RO\Justification $justification)
    {
        $this->justification[] = $justification;
        return $this;
    }

    /**
     * isset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJustification($index)
    {
        return isset($this->justification[$index]);
    }

    /**
     * unset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJustification($index)
    {
        unset($this->justification[$index]);
    }

    /**
     * Gets as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Justification[]
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Sets a new justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Justification[] $justification
     * @return self
     */
    public function setJustification(array $justification = null)
    {
        $this->justification = $justification;
        return $this;
    }

    /**
     * Adds as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Frequency $frequency
     */
    public function addToFrequency(\CleverIt\UBL\Invoice\RO\Frequency $frequency)
    {
        $this->frequency[] = $frequency;
        return $this;
    }

    /**
     * isset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFrequency($index)
    {
        return isset($this->frequency[$index]);
    }

    /**
     * unset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFrequency($index)
    {
        unset($this->frequency[$index]);
    }

    /**
     * Gets as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Frequency[]
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Frequency[] $frequency
     * @return self
     */
    public function setFrequency(array $frequency = null)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\DurationPeriod
     */
    public function getDurationPeriod()
    {
        return $this->durationPeriod;
    }

    /**
     * Sets a new durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\DurationPeriod $durationPeriod
     * @return self
     */
    public function setDurationPeriod(?\CleverIt\UBL\Invoice\RO\DurationPeriod $durationPeriod = null)
    {
        $this->durationPeriod = $durationPeriod;
        return $this;
    }

    /**
     * Adds as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement
     */
    public function addToSubsequentProcessTenderRequirement(\CleverIt\UBL\Invoice\RO\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement)
    {
        $this->subsequentProcessTenderRequirement[] = $subsequentProcessTenderRequirement;
        return $this;
    }

    /**
     * isset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsequentProcessTenderRequirement($index)
    {
        return isset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * unset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsequentProcessTenderRequirement($index)
    {
        unset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * Gets as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return \CleverIt\UBL\Invoice\RO\SubsequentProcessTenderRequirement[]
     */
    public function getSubsequentProcessTenderRequirement()
    {
        return $this->subsequentProcessTenderRequirement;
    }

    /**
     * Sets a new subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param \CleverIt\UBL\Invoice\RO\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     * @return self
     */
    public function setSubsequentProcessTenderRequirement(array $subsequentProcessTenderRequirement = null)
    {
        $this->subsequentProcessTenderRequirement = $subsequentProcessTenderRequirement;
        return $this;
    }
}

