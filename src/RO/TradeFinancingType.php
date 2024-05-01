<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TradeFinancingType
 *
 * ABIE
 *  Trade Financing. Details
 *  A class to describe a trade financing instrument.
 *  Trade Financing
 * XSD Type: TradeFinancingType
 */
class TradeFinancingType
{
    /**
     * BBIE
     *  Trade Financing. Identifier
     *  An identifier for this trade financing instrument.
     *  0..1
     *  Trade Financing
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Trade Financing. Financing Instrument Code. Code
     *  A code signifying the type of this financing instrument.
     *  0..1
     *  Trade Financing
     *  Financing Instrument Code
     *  Code
     *  Code. Type
     *  Factoring , Invoice Financing , Pre-shipment Financing , Letter of Credit , Irrevocable Letter of Credit .
     *
     * @var \CleverIt\UBL\Invoice\RO\FinancingInstrumentCode $financingInstrumentCode
     */
    private $financingInstrumentCode = null;

    /**
     * ASBIE
     *  Trade Financing. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..1
     *  Trade Financing
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ContractDocumentReference $contractDocumentReference
     */
    private $contractDocumentReference = null;

    /**
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Trade Financing. Financing_ Party. Party
     *  The financing party (bank or other enabled party).
     *  1
     *  Trade Financing
     *  Financing
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\FinancingParty $financingParty
     */
    private $financingParty = null;

    /**
     * ASBIE
     *  Trade Financing. Financing_ Financial Account. Financial Account
     *  An internal bank account used by the bank or its first agent to manage the line of credit granted to the financing requester.
     *  0..1
     *  Trade Financing
     *  Financing
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \CleverIt\UBL\Invoice\RO\FinancingFinancialAccount $financingFinancialAccount
     */
    private $financingFinancialAccount = null;

    /**
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @var \CleverIt\UBL\Invoice\RO\Clause[] $clause
     */
    private $clause = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Trade Financing. Identifier
     *  An identifier for this trade financing instrument.
     *  0..1
     *  Trade Financing
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
     *  Trade Financing. Identifier
     *  An identifier for this trade financing instrument.
     *  0..1
     *  Trade Financing
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
     * Gets as financingInstrumentCode
     *
     * BBIE
     *  Trade Financing. Financing Instrument Code. Code
     *  A code signifying the type of this financing instrument.
     *  0..1
     *  Trade Financing
     *  Financing Instrument Code
     *  Code
     *  Code. Type
     *  Factoring , Invoice Financing , Pre-shipment Financing , Letter of Credit , Irrevocable Letter of Credit .
     *
     * @return \CleverIt\UBL\Invoice\RO\FinancingInstrumentCode
     */
    public function getFinancingInstrumentCode()
    {
        return $this->financingInstrumentCode;
    }

    /**
     * Sets a new financingInstrumentCode
     *
     * BBIE
     *  Trade Financing. Financing Instrument Code. Code
     *  A code signifying the type of this financing instrument.
     *  0..1
     *  Trade Financing
     *  Financing Instrument Code
     *  Code
     *  Code. Type
     *  Factoring , Invoice Financing , Pre-shipment Financing , Letter of Credit , Irrevocable Letter of Credit .
     *
     * @param \CleverIt\UBL\Invoice\RO\FinancingInstrumentCode $financingInstrumentCode
     * @return self
     */
    public function setFinancingInstrumentCode(?\CleverIt\UBL\Invoice\RO\FinancingInstrumentCode $financingInstrumentCode = null)
    {
        $this->financingInstrumentCode = $financingInstrumentCode;
        return $this;
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Trade Financing. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..1
     *  Trade Financing
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ContractDocumentReference
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Trade Financing. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..1
     *  Trade Financing
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ContractDocumentReference $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(?\CleverIt\UBL\Invoice\RO\ContractDocumentReference $contractDocumentReference = null)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference $documentReference
     */
    public function addToDocumentReference(\CleverIt\UBL\Invoice\RO\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as financingParty
     *
     * ASBIE
     *  Trade Financing. Financing_ Party. Party
     *  The financing party (bank or other enabled party).
     *  1
     *  Trade Financing
     *  Financing
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\FinancingParty
     */
    public function getFinancingParty()
    {
        return $this->financingParty;
    }

    /**
     * Sets a new financingParty
     *
     * ASBIE
     *  Trade Financing. Financing_ Party. Party
     *  The financing party (bank or other enabled party).
     *  1
     *  Trade Financing
     *  Financing
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\FinancingParty $financingParty
     * @return self
     */
    public function setFinancingParty(\CleverIt\UBL\Invoice\RO\FinancingParty $financingParty)
    {
        $this->financingParty = $financingParty;
        return $this;
    }

    /**
     * Gets as financingFinancialAccount
     *
     * ASBIE
     *  Trade Financing. Financing_ Financial Account. Financial Account
     *  An internal bank account used by the bank or its first agent to manage the line of credit granted to the financing requester.
     *  0..1
     *  Trade Financing
     *  Financing
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \CleverIt\UBL\Invoice\RO\FinancingFinancialAccount
     */
    public function getFinancingFinancialAccount()
    {
        return $this->financingFinancialAccount;
    }

    /**
     * Sets a new financingFinancialAccount
     *
     * ASBIE
     *  Trade Financing. Financing_ Financial Account. Financial Account
     *  An internal bank account used by the bank or its first agent to manage the line of credit granted to the financing requester.
     *  0..1
     *  Trade Financing
     *  Financing
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \CleverIt\UBL\Invoice\RO\FinancingFinancialAccount $financingFinancialAccount
     * @return self
     */
    public function setFinancingFinancialAccount(?\CleverIt\UBL\Invoice\RO\FinancingFinancialAccount $financingFinancialAccount = null)
    {
        $this->financingFinancialAccount = $financingFinancialAccount;
        return $this;
    }

    /**
     * Adds as clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Clause $clause
     */
    public function addToClause(\CleverIt\UBL\Invoice\RO\Clause $clause)
    {
        $this->clause[] = $clause;
        return $this;
    }

    /**
     * isset clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClause($index)
    {
        return isset($this->clause[$index]);
    }

    /**
     * unset clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClause($index)
    {
        unset($this->clause[$index]);
    }

    /**
     * Gets as clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @return \CleverIt\UBL\Invoice\RO\Clause[]
     */
    public function getClause()
    {
        return $this->clause;
    }

    /**
     * Sets a new clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @param \CleverIt\UBL\Invoice\RO\Clause[] $clause
     * @return self
     */
    public function setClause(array $clause = null)
    {
        $this->clause = $clause;
        return $this;
    }
}

