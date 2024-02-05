<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing EconomicOperatorPartyType
 *
 * ABIE
 *  Economic Operator Party. Details
 *  A class to describe a potential contractor, supplier and service provider responding to a tender.
 *  Economic Operator Party
 * XSD Type: EconomicOperatorPartyType
 */
class EconomicOperatorPartyType
{

    /**
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @var \CleverIt\UBL\Invoice\QualifyingParty[] $qualifyingParty
     */
    private $qualifyingParty = [
        
    ];

    /**
     * ASBIE
     *  Economic Operator Party. Economic Operator Role
     *  The role of the party in a tender consortium.
     *  0..1
     *  Economic Operator Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @var \CleverIt\UBL\Invoice\EconomicOperatorRole $economicOperatorRole
     */
    private $economicOperatorRole = null;

    /**
     * ASBIE
     *  Economic Operator Party. Party
     *  The party information about the economic operator in a tender.
     *  1
     *  Economic Operator Party
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\Party $party
     */
    private $party = null;

    /**
     * Adds as qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\QualifyingParty $qualifyingParty
     */
    public function addToQualifyingParty(\CleverIt\UBL\Invoice\QualifyingParty $qualifyingParty)
    {
        $this->qualifyingParty[] = $qualifyingParty;
        return $this;
    }

    /**
     * isset qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualifyingParty($index)
    {
        return isset($this->qualifyingParty[$index]);
    }

    /**
     * unset qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualifyingParty($index)
    {
        unset($this->qualifyingParty[$index]);
    }

    /**
     * Gets as qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return \CleverIt\UBL\Invoice\QualifyingParty[]
     */
    public function getQualifyingParty()
    {
        return $this->qualifyingParty;
    }

    /**
     * Sets a new qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param \CleverIt\UBL\Invoice\QualifyingParty[] $qualifyingParty
     * @return self
     */
    public function setQualifyingParty(array $qualifyingParty)
    {
        $this->qualifyingParty = $qualifyingParty;
        return $this;
    }

    /**
     * Gets as economicOperatorRole
     *
     * ASBIE
     *  Economic Operator Party. Economic Operator Role
     *  The role of the party in a tender consortium.
     *  0..1
     *  Economic Operator Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return \CleverIt\UBL\Invoice\EconomicOperatorRole
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * ASBIE
     *  Economic Operator Party. Economic Operator Role
     *  The role of the party in a tender consortium.
     *  0..1
     *  Economic Operator Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param \CleverIt\UBL\Invoice\EconomicOperatorRole $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(\CleverIt\UBL\Invoice\EconomicOperatorRole $economicOperatorRole)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Economic Operator Party. Party
     *  The party information about the economic operator in a tender.
     *  1
     *  Economic Operator Party
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Economic Operator Party. Party
     *  The party information about the economic operator in a tender.
     *  1
     *  Economic Operator Party
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\Party $party
     * @return self
     */
    public function setParty(\CleverIt\UBL\Invoice\Party $party)
    {
        $this->party = $party;
        return $this;
    }


}

