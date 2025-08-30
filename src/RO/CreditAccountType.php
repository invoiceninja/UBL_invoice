<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CreditAccountType
 *
 * ABIE
 *  Credit Account. Details
 *  A class to identify a credit account for sales on account.
 *  Credit Account
 * XSD Type: CreditAccountType
 */
class CreditAccountType
{
    /**
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  An identifier for this credit account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  Customer Code 29
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountID $accountID
     */
    private $accountID = null;

    /**
     * Gets as accountID
     *
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  An identifier for this credit account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  Customer Code 29
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountID
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  An identifier for this credit account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  Customer Code 29
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountID $accountID
     * @return self
     */
    public function setAccountID(\CleverIt\UBL\Invoice\RO\AccountID $accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }
}

