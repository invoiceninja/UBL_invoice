<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing BillingReferenceLineType
 *
 * ABIE
 *  Billing Reference Line. Details
 *  A class to define a reference to a transaction line in a billing document.
 *  Billing Reference Line
 * XSD Type: BillingReferenceLineType
 */
class BillingReferenceLineType
{

    /**
     * BBIE
     *  Billing Reference Line. Identifier
     *  An identifier for this transaction line in a billing document.
     *  1
     *  Billing Reference Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Billing Reference Line. Amount
     *  The monetary amount of the transaction line, including any allowances and charges but excluding taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An allowance or charge applicable to the transaction line.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \CleverIt\UBL\Invoice\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Billing Reference Line. Identifier
     *  An identifier for this transaction line in a billing document.
     *  1
     *  Billing Reference Line
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
     *  Billing Reference Line. Identifier
     *  An identifier for this transaction line in a billing document.
     *  1
     *  Billing Reference Line
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
     * Gets as amount
     *
     * BBIE
     *  Billing Reference Line. Amount
     *  The monetary amount of the transaction line, including any allowances and charges but excluding taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Billing Reference Line. Amount
     *  The monetary amount of the transaction line, including any allowances and charges but excluding taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\Amount $amount
     * @return self
     */
    public function setAmount(\CleverIt\UBL\Invoice\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An allowance or charge applicable to the transaction line.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\CleverIt\UBL\Invoice\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An allowance or charge applicable to the transaction line.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An allowance or charge applicable to the transaction line.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An allowance or charge applicable to the transaction line.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \CleverIt\UBL\Invoice\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An allowance or charge applicable to the transaction line.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \CleverIt\UBL\Invoice\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }


}

