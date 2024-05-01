<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing EconomicOperatorShortListType
 *
 * ABIE
 *  Economic Operator Short List. Details
 *  A class to provide information about the preselection of a short list of economic operators for consideration as possible candidates in a tendering process.
 *  Economic Operator Short List
 * XSD Type: EconomicOperatorShortListType
 */
class EconomicOperatorShortListType
{
    /**
     * BBIE
     *  Economic Operator Short List. Limitation_ Description. Text
     *  Text describing the criteria used to restrict the number of candidates.
     *  0..n
     *  Economic Operator Short List
     *  Limitation
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\LimitationDescription[] $limitationDescription
     */
    private $limitationDescription = [
        
    ];

    /**
     * BBIE
     *  Economic Operator Short List. Expected_ Quantity. Quantity
     *  The number of economic operators expected to be on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Expected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ExpectedQuantity $expectedQuantity
     */
    private $expectedQuantity = null;

    /**
     * BBIE
     *  Economic Operator Short List. Maximum_ Quantity. Quantity
     *  The maximum number of economic operators on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Economic Operator Short List. Minimum_ Quantity. Quantity
     *  The minimum number of economic operators on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * ASBIE
     *  Economic Operator Short List. Pre Selected_ Party. Party
     *  The parties pre-selected allowed to submit tenders in a negotiated procedure. Negotiated procedure is a type of procedure where the contracting authorities can set the parties to be invited in the procurement project
     *  0..n
     *  Economic Operator Short List
     *  Pre Selected
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\PreSelectedParty[] $preSelectedParty
     */
    private $preSelectedParty = [
        
    ];

    /**
     * Adds as limitationDescription
     *
     * BBIE
     *  Economic Operator Short List. Limitation_ Description. Text
     *  Text describing the criteria used to restrict the number of candidates.
     *  0..n
     *  Economic Operator Short List
     *  Limitation
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\LimitationDescription $limitationDescription
     */
    public function addToLimitationDescription(\CleverIt\UBL\Invoice\RO\LimitationDescription $limitationDescription)
    {
        $this->limitationDescription[] = $limitationDescription;
        return $this;
    }

    /**
     * isset limitationDescription
     *
     * BBIE
     *  Economic Operator Short List. Limitation_ Description. Text
     *  Text describing the criteria used to restrict the number of candidates.
     *  0..n
     *  Economic Operator Short List
     *  Limitation
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLimitationDescription($index)
    {
        return isset($this->limitationDescription[$index]);
    }

    /**
     * unset limitationDescription
     *
     * BBIE
     *  Economic Operator Short List. Limitation_ Description. Text
     *  Text describing the criteria used to restrict the number of candidates.
     *  0..n
     *  Economic Operator Short List
     *  Limitation
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLimitationDescription($index)
    {
        unset($this->limitationDescription[$index]);
    }

    /**
     * Gets as limitationDescription
     *
     * BBIE
     *  Economic Operator Short List. Limitation_ Description. Text
     *  Text describing the criteria used to restrict the number of candidates.
     *  0..n
     *  Economic Operator Short List
     *  Limitation
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\LimitationDescription[]
     */
    public function getLimitationDescription()
    {
        return $this->limitationDescription;
    }

    /**
     * Sets a new limitationDescription
     *
     * BBIE
     *  Economic Operator Short List. Limitation_ Description. Text
     *  Text describing the criteria used to restrict the number of candidates.
     *  0..n
     *  Economic Operator Short List
     *  Limitation
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\LimitationDescription[] $limitationDescription
     * @return self
     */
    public function setLimitationDescription(array $limitationDescription = null)
    {
        $this->limitationDescription = $limitationDescription;
        return $this;
    }

    /**
     * Gets as expectedQuantity
     *
     * BBIE
     *  Economic Operator Short List. Expected_ Quantity. Quantity
     *  The number of economic operators expected to be on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Expected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ExpectedQuantity
     */
    public function getExpectedQuantity()
    {
        return $this->expectedQuantity;
    }

    /**
     * Sets a new expectedQuantity
     *
     * BBIE
     *  Economic Operator Short List. Expected_ Quantity. Quantity
     *  The number of economic operators expected to be on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Expected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ExpectedQuantity $expectedQuantity
     * @return self
     */
    public function setExpectedQuantity(?\CleverIt\UBL\Invoice\RO\ExpectedQuantity $expectedQuantity = null)
    {
        $this->expectedQuantity = $expectedQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Economic Operator Short List. Maximum_ Quantity. Quantity
     *  The maximum number of economic operators on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Economic Operator Short List. Maximum_ Quantity. Quantity
     *  The maximum number of economic operators on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\CleverIt\UBL\Invoice\RO\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Economic Operator Short List. Minimum_ Quantity. Quantity
     *  The minimum number of economic operators on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Economic Operator Short List. Minimum_ Quantity. Quantity
     *  The minimum number of economic operators on the short list.
     *  0..1
     *  Economic Operator Short List
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\CleverIt\UBL\Invoice\RO\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Adds as preSelectedParty
     *
     * ASBIE
     *  Economic Operator Short List. Pre Selected_ Party. Party
     *  The parties pre-selected allowed to submit tenders in a negotiated procedure. Negotiated procedure is a type of procedure where the contracting authorities can set the parties to be invited in the procurement project
     *  0..n
     *  Economic Operator Short List
     *  Pre Selected
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PreSelectedParty $preSelectedParty
     */
    public function addToPreSelectedParty(\CleverIt\UBL\Invoice\RO\PreSelectedParty $preSelectedParty)
    {
        $this->preSelectedParty[] = $preSelectedParty;
        return $this;
    }

    /**
     * isset preSelectedParty
     *
     * ASBIE
     *  Economic Operator Short List. Pre Selected_ Party. Party
     *  The parties pre-selected allowed to submit tenders in a negotiated procedure. Negotiated procedure is a type of procedure where the contracting authorities can set the parties to be invited in the procurement project
     *  0..n
     *  Economic Operator Short List
     *  Pre Selected
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreSelectedParty($index)
    {
        return isset($this->preSelectedParty[$index]);
    }

    /**
     * unset preSelectedParty
     *
     * ASBIE
     *  Economic Operator Short List. Pre Selected_ Party. Party
     *  The parties pre-selected allowed to submit tenders in a negotiated procedure. Negotiated procedure is a type of procedure where the contracting authorities can set the parties to be invited in the procurement project
     *  0..n
     *  Economic Operator Short List
     *  Pre Selected
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreSelectedParty($index)
    {
        unset($this->preSelectedParty[$index]);
    }

    /**
     * Gets as preSelectedParty
     *
     * ASBIE
     *  Economic Operator Short List. Pre Selected_ Party. Party
     *  The parties pre-selected allowed to submit tenders in a negotiated procedure. Negotiated procedure is a type of procedure where the contracting authorities can set the parties to be invited in the procurement project
     *  0..n
     *  Economic Operator Short List
     *  Pre Selected
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\PreSelectedParty[]
     */
    public function getPreSelectedParty()
    {
        return $this->preSelectedParty;
    }

    /**
     * Sets a new preSelectedParty
     *
     * ASBIE
     *  Economic Operator Short List. Pre Selected_ Party. Party
     *  The parties pre-selected allowed to submit tenders in a negotiated procedure. Negotiated procedure is a type of procedure where the contracting authorities can set the parties to be invited in the procurement project
     *  0..n
     *  Economic Operator Short List
     *  Pre Selected
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\PreSelectedParty[] $preSelectedParty
     * @return self
     */
    public function setPreSelectedParty(array $preSelectedParty = null)
    {
        $this->preSelectedParty = $preSelectedParty;
        return $this;
    }
}

