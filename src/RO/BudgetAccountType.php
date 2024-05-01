<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing BudgetAccountType
 *
 * ABIE
 *  Budget Account. Details
 *  A class to define a budget account.
 *  Budget Account
 * XSD Type: BudgetAccountType
 */
class BudgetAccountType
{
    /**
     * BBIE
     *  Budget Account. Identifier
     *  An identifier for the budget account, typically an internal accounting reference.
     *  0..1
     *  Budget Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Budget Account. Budget Year. Numeric
     *  The number of the year for this budget account, e.g. 2012
     *  0..1
     *  Budget Account
     *  Budget Year
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\BudgetYearNumeric $budgetYearNumeric
     */
    private $budgetYearNumeric = null;

    /**
     * ASBIE
     *  Budget Account. Required_ Classification Scheme. Classification Scheme
     *  A classification scheme required for this budget account.
     *  0..1
     *  Budget Account
     *  Required
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \CleverIt\UBL\Invoice\RO\RequiredClassificationScheme $requiredClassificationScheme
     */
    private $requiredClassificationScheme = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Budget Account. Identifier
     *  An identifier for the budget account, typically an internal accounting reference.
     *  0..1
     *  Budget Account
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
     *  Budget Account. Identifier
     *  An identifier for the budget account, typically an internal accounting reference.
     *  0..1
     *  Budget Account
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
     * Gets as budgetYearNumeric
     *
     * BBIE
     *  Budget Account. Budget Year. Numeric
     *  The number of the year for this budget account, e.g. 2012
     *  0..1
     *  Budget Account
     *  Budget Year
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\BudgetYearNumeric
     */
    public function getBudgetYearNumeric()
    {
        return $this->budgetYearNumeric;
    }

    /**
     * Sets a new budgetYearNumeric
     *
     * BBIE
     *  Budget Account. Budget Year. Numeric
     *  The number of the year for this budget account, e.g. 2012
     *  0..1
     *  Budget Account
     *  Budget Year
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\BudgetYearNumeric $budgetYearNumeric
     * @return self
     */
    public function setBudgetYearNumeric(?\CleverIt\UBL\Invoice\RO\BudgetYearNumeric $budgetYearNumeric = null)
    {
        $this->budgetYearNumeric = $budgetYearNumeric;
        return $this;
    }

    /**
     * Gets as requiredClassificationScheme
     *
     * ASBIE
     *  Budget Account. Required_ Classification Scheme. Classification Scheme
     *  A classification scheme required for this budget account.
     *  0..1
     *  Budget Account
     *  Required
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \CleverIt\UBL\Invoice\RO\RequiredClassificationScheme
     */
    public function getRequiredClassificationScheme()
    {
        return $this->requiredClassificationScheme;
    }

    /**
     * Sets a new requiredClassificationScheme
     *
     * ASBIE
     *  Budget Account. Required_ Classification Scheme. Classification Scheme
     *  A classification scheme required for this budget account.
     *  0..1
     *  Budget Account
     *  Required
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \CleverIt\UBL\Invoice\RO\RequiredClassificationScheme $requiredClassificationScheme
     * @return self
     */
    public function setRequiredClassificationScheme(?\CleverIt\UBL\Invoice\RO\RequiredClassificationScheme $requiredClassificationScheme = null)
    {
        $this->requiredClassificationScheme = $requiredClassificationScheme;
        return $this;
    }
}

