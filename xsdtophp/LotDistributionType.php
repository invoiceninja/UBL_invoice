<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing LotDistributionType
 *
 * ABIE
 *  Lot Distribution. Details
 *  A class defining how to treat different lots in a single procurement.
 *  Lot Distribution
 * XSD Type: LotDistributionType
 */
class LotDistributionType
{

    /**
     * BBIE
     *  Lot Distribution. Maximum Lots Awarded. Numeric
     *  The maximum number of lots that can be awarded to a single tenderer.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Awarded
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumLotsAwardedNumeric $maximumLotsAwardedNumeric
     */
    private $maximumLotsAwardedNumeric = null;

    /**
     * BBIE
     *  Lot Distribution. Maximum Lots Submitted. Numeric
     *  The maximum number of lots to which a tenderer can submit an offer to.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Submitted
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumLotsSubmittedNumeric $maximumLotsSubmittedNumeric
     */
    private $maximumLotsSubmittedNumeric = null;

    /**
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\GroupingLots[] $groupingLots
     */
    private $groupingLots = [
        
    ];

    /**
     * Gets as maximumLotsAwardedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Awarded. Numeric
     *  The maximum number of lots that can be awarded to a single tenderer.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Awarded
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumLotsAwardedNumeric
     */
    public function getMaximumLotsAwardedNumeric()
    {
        return $this->maximumLotsAwardedNumeric;
    }

    /**
     * Sets a new maximumLotsAwardedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Awarded. Numeric
     *  The maximum number of lots that can be awarded to a single tenderer.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Awarded
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumLotsAwardedNumeric $maximumLotsAwardedNumeric
     * @return self
     */
    public function setMaximumLotsAwardedNumeric(\CleverIt\UBL\Invoice\MaximumLotsAwardedNumeric $maximumLotsAwardedNumeric)
    {
        $this->maximumLotsAwardedNumeric = $maximumLotsAwardedNumeric;
        return $this;
    }

    /**
     * Gets as maximumLotsSubmittedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Submitted. Numeric
     *  The maximum number of lots to which a tenderer can submit an offer to.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Submitted
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumLotsSubmittedNumeric
     */
    public function getMaximumLotsSubmittedNumeric()
    {
        return $this->maximumLotsSubmittedNumeric;
    }

    /**
     * Sets a new maximumLotsSubmittedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Submitted. Numeric
     *  The maximum number of lots to which a tenderer can submit an offer to.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Submitted
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumLotsSubmittedNumeric $maximumLotsSubmittedNumeric
     * @return self
     */
    public function setMaximumLotsSubmittedNumeric(\CleverIt\UBL\Invoice\MaximumLotsSubmittedNumeric $maximumLotsSubmittedNumeric)
    {
        $this->maximumLotsSubmittedNumeric = $maximumLotsSubmittedNumeric;
        return $this;
    }

    /**
     * Adds as groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\GroupingLots $groupingLots
     */
    public function addToGroupingLots(\CleverIt\UBL\Invoice\GroupingLots $groupingLots)
    {
        $this->groupingLots[] = $groupingLots;
        return $this;
    }

    /**
     * isset groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroupingLots($index)
    {
        return isset($this->groupingLots[$index]);
    }

    /**
     * unset groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroupingLots($index)
    {
        unset($this->groupingLots[$index]);
    }

    /**
     * Gets as groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\GroupingLots[]
     */
    public function getGroupingLots()
    {
        return $this->groupingLots;
    }

    /**
     * Sets a new groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\GroupingLots[] $groupingLots
     * @return self
     */
    public function setGroupingLots(array $groupingLots)
    {
        $this->groupingLots = $groupingLots;
        return $this;
    }


}

