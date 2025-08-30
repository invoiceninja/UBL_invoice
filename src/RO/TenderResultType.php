<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TenderResultType
 *
 * ABIE
 *  Tender Result. Details
 *  A class to describe the awarding of a tender in a tendering process.
 *  Tender Result
 * XSD Type: TenderResultType
 */
class TenderResultType
{
    /**
     * BBIE
     *  Tender Result. Tender_ Result Code. Code
     *  A code signifying the result of the tendering process.
     *  0..1
     *  Tender Result
     *  Tender
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TenderResultCode $tenderResultCode
     */
    private $tenderResultCode = null;

    /**
     * BBIE
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Tender Result. Advertisement. Amount
     *  The monetary value of the advertisement for this tendering process. 
     *  0..1
     *  Tender Result
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AdvertisementAmount $advertisementAmount
     */
    private $advertisementAmount = null;

    /**
     * BBIE
     *  Tender Result. Award Date. Date
     *  The date on which this result was formalized.
     *  1
     *  Tender Result
     *  Award Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $awardDate
     */
    private $awardDate = null;

    /**
     * BBIE
     *  Tender Result. Award Time. Time
     *  The time at which this result was formalized.
     *  0..1
     *  Tender Result
     *  Award Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $awardTime
     */
    private $awardTime = null;

    /**
     * BBIE
     *  Tender Result. Received_ Tender. Quantity
     *  The total number of tenders received in this tendering process.
     *  0..1
     *  Tender Result
     *  Received
     *  Tender
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ReceivedTenderQuantity $receivedTenderQuantity
     */
    private $receivedTenderQuantity = null;

    /**
     * BBIE
     *  Tender Result. Lower_ Tender. Amount
     *  The least expensive tender received in the tendering process.
     *  0..1
     *  Tender Result
     *  Lower
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\LowerTenderAmount $lowerTenderAmount
     */
    private $lowerTenderAmount = null;

    /**
     * BBIE
     *  Tender Result. Higher_ Tender. Amount
     *  The most expensive tender received in this tendering process.
     *  0..1
     *  Tender Result
     *  Higher
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\HigherTenderAmount $higherTenderAmount
     */
    private $higherTenderAmount = null;

    /**
     * BBIE
     *  Tender Result. Start Date. Date
     *  The date on which the awarded contract begins.
     *  0..1
     *  Tender Result
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * BBIE
     *  Tender Result. Received_ Electronic Tender Quantity. Quantity
     *  The number of electronic tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Electronic Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity
     */
    private $receivedElectronicTenderQuantity = null;

    /**
     * BBIE
     *  Tender Result. Received_ Foreign Tender Quantity. Quantity
     *  The number of foreing tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Foreign Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity
     */
    private $receivedForeignTenderQuantity = null;

    /**
     * ASBIE
     *  Tender Result. Contract
     *  A contract governing this tender result.
     *  0..1
     *  Tender Result
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \CleverIt\UBL\Invoice\RO\Contract $contract
     */
    private $contract = null;

    /**
     * ASBIE
     *  Tender Result. Awarded_ Tendered Project. Tendered Project
     *  The awarded tendered project associated with this tender result.
     *  0..1
     *  Tender Result
     *  Awarded
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @var \CleverIt\UBL\Invoice\RO\AwardedTenderedProject $awardedTenderedProject
     */
    private $awardedTenderedProject = null;

    /**
     * ASBIE
     *  Tender Result. Contract Formalization_ Period. Period
     *  The period during which a contract associated with the awarded project is to be formalized.
     *  0..1
     *  Tender Result
     *  Contract Formalization
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\ContractFormalizationPeriod $contractFormalizationPeriod
     */
    private $contractFormalizationPeriod = null;

    /**
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\SubcontractTerms[] $subcontractTerms
     */
    private $subcontractTerms = [
        
    ];

    /**
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @var \CleverIt\UBL\Invoice\RO\WinningParty[] $winningParty
     */
    private $winningParty = [
        
    ];

    /**
     * Gets as tenderResultCode
     *
     * BBIE
     *  Tender Result. Tender_ Result Code. Code
     *  A code signifying the result of the tendering process.
     *  0..1
     *  Tender Result
     *  Tender
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TenderResultCode
     */
    public function getTenderResultCode()
    {
        return $this->tenderResultCode;
    }

    /**
     * Sets a new tenderResultCode
     *
     * BBIE
     *  Tender Result. Tender_ Result Code. Code
     *  A code signifying the result of the tendering process.
     *  0..1
     *  Tender Result
     *  Tender
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TenderResultCode $tenderResultCode
     * @return self
     */
    public function setTenderResultCode(?\CleverIt\UBL\Invoice\RO\TenderResultCode $tenderResultCode = null)
    {
        $this->tenderResultCode = $tenderResultCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     * Gets as advertisementAmount
     *
     * BBIE
     *  Tender Result. Advertisement. Amount
     *  The monetary value of the advertisement for this tendering process. 
     *  0..1
     *  Tender Result
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AdvertisementAmount
     */
    public function getAdvertisementAmount()
    {
        return $this->advertisementAmount;
    }

    /**
     * Sets a new advertisementAmount
     *
     * BBIE
     *  Tender Result. Advertisement. Amount
     *  The monetary value of the advertisement for this tendering process. 
     *  0..1
     *  Tender Result
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AdvertisementAmount $advertisementAmount
     * @return self
     */
    public function setAdvertisementAmount(?\CleverIt\UBL\Invoice\RO\AdvertisementAmount $advertisementAmount = null)
    {
        $this->advertisementAmount = $advertisementAmount;
        return $this;
    }

    /**
     * Gets as awardDate
     *
     * BBIE
     *  Tender Result. Award Date. Date
     *  The date on which this result was formalized.
     *  1
     *  Tender Result
     *  Award Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getAwardDate()
    {
        return $this->awardDate;
    }

    /**
     * Sets a new awardDate
     *
     * BBIE
     *  Tender Result. Award Date. Date
     *  The date on which this result was formalized.
     *  1
     *  Tender Result
     *  Award Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $awardDate
     * @return self
     */
    public function setAwardDate(\DateTime $awardDate)
    {
        $this->awardDate = $awardDate;
        return $this;
    }

    /**
     * Gets as awardTime
     *
     * BBIE
     *  Tender Result. Award Time. Time
     *  The time at which this result was formalized.
     *  0..1
     *  Tender Result
     *  Award Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getAwardTime()
    {
        return $this->awardTime;
    }

    /**
     * Sets a new awardTime
     *
     * BBIE
     *  Tender Result. Award Time. Time
     *  The time at which this result was formalized.
     *  0..1
     *  Tender Result
     *  Award Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $awardTime
     * @return self
     */
    public function setAwardTime(\DateTime $awardTime = null)
    {
        $this->awardTime = $awardTime;
        return $this;
    }

    /**
     * Gets as receivedTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Tender. Quantity
     *  The total number of tenders received in this tendering process.
     *  0..1
     *  Tender Result
     *  Received
     *  Tender
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ReceivedTenderQuantity
     */
    public function getReceivedTenderQuantity()
    {
        return $this->receivedTenderQuantity;
    }

    /**
     * Sets a new receivedTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Tender. Quantity
     *  The total number of tenders received in this tendering process.
     *  0..1
     *  Tender Result
     *  Received
     *  Tender
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ReceivedTenderQuantity $receivedTenderQuantity
     * @return self
     */
    public function setReceivedTenderQuantity(?\CleverIt\UBL\Invoice\RO\ReceivedTenderQuantity $receivedTenderQuantity = null)
    {
        $this->receivedTenderQuantity = $receivedTenderQuantity;
        return $this;
    }

    /**
     * Gets as lowerTenderAmount
     *
     * BBIE
     *  Tender Result. Lower_ Tender. Amount
     *  The least expensive tender received in the tendering process.
     *  0..1
     *  Tender Result
     *  Lower
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\LowerTenderAmount
     */
    public function getLowerTenderAmount()
    {
        return $this->lowerTenderAmount;
    }

    /**
     * Sets a new lowerTenderAmount
     *
     * BBIE
     *  Tender Result. Lower_ Tender. Amount
     *  The least expensive tender received in the tendering process.
     *  0..1
     *  Tender Result
     *  Lower
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\LowerTenderAmount $lowerTenderAmount
     * @return self
     */
    public function setLowerTenderAmount(?\CleverIt\UBL\Invoice\RO\LowerTenderAmount $lowerTenderAmount = null)
    {
        $this->lowerTenderAmount = $lowerTenderAmount;
        return $this;
    }

    /**
     * Gets as higherTenderAmount
     *
     * BBIE
     *  Tender Result. Higher_ Tender. Amount
     *  The most expensive tender received in this tendering process.
     *  0..1
     *  Tender Result
     *  Higher
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\HigherTenderAmount
     */
    public function getHigherTenderAmount()
    {
        return $this->higherTenderAmount;
    }

    /**
     * Sets a new higherTenderAmount
     *
     * BBIE
     *  Tender Result. Higher_ Tender. Amount
     *  The most expensive tender received in this tendering process.
     *  0..1
     *  Tender Result
     *  Higher
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\HigherTenderAmount $higherTenderAmount
     * @return self
     */
    public function setHigherTenderAmount(?\CleverIt\UBL\Invoice\RO\HigherTenderAmount $higherTenderAmount = null)
    {
        $this->higherTenderAmount = $higherTenderAmount;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * BBIE
     *  Tender Result. Start Date. Date
     *  The date on which the awarded contract begins.
     *  0..1
     *  Tender Result
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * BBIE
     *  Tender Result. Start Date. Date
     *  The date on which the awarded contract begins.
     *  0..1
     *  Tender Result
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as receivedElectronicTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Electronic Tender Quantity. Quantity
     *  The number of electronic tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Electronic Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ReceivedElectronicTenderQuantity
     */
    public function getReceivedElectronicTenderQuantity()
    {
        return $this->receivedElectronicTenderQuantity;
    }

    /**
     * Sets a new receivedElectronicTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Electronic Tender Quantity. Quantity
     *  The number of electronic tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Electronic Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity
     * @return self
     */
    public function setReceivedElectronicTenderQuantity(?\CleverIt\UBL\Invoice\RO\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity = null)
    {
        $this->receivedElectronicTenderQuantity = $receivedElectronicTenderQuantity;
        return $this;
    }

    /**
     * Gets as receivedForeignTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Foreign Tender Quantity. Quantity
     *  The number of foreing tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Foreign Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ReceivedForeignTenderQuantity
     */
    public function getReceivedForeignTenderQuantity()
    {
        return $this->receivedForeignTenderQuantity;
    }

    /**
     * Sets a new receivedForeignTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Foreign Tender Quantity. Quantity
     *  The number of foreing tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Foreign Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity
     * @return self
     */
    public function setReceivedForeignTenderQuantity(?\CleverIt\UBL\Invoice\RO\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity = null)
    {
        $this->receivedForeignTenderQuantity = $receivedForeignTenderQuantity;
        return $this;
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Tender Result. Contract
     *  A contract governing this tender result.
     *  0..1
     *  Tender Result
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \CleverIt\UBL\Invoice\RO\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Tender Result. Contract
     *  A contract governing this tender result.
     *  0..1
     *  Tender Result
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \CleverIt\UBL\Invoice\RO\Contract $contract
     * @return self
     */
    public function setContract(?\CleverIt\UBL\Invoice\RO\Contract $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as awardedTenderedProject
     *
     * ASBIE
     *  Tender Result. Awarded_ Tendered Project. Tendered Project
     *  The awarded tendered project associated with this tender result.
     *  0..1
     *  Tender Result
     *  Awarded
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @return \CleverIt\UBL\Invoice\RO\AwardedTenderedProject
     */
    public function getAwardedTenderedProject()
    {
        return $this->awardedTenderedProject;
    }

    /**
     * Sets a new awardedTenderedProject
     *
     * ASBIE
     *  Tender Result. Awarded_ Tendered Project. Tendered Project
     *  The awarded tendered project associated with this tender result.
     *  0..1
     *  Tender Result
     *  Awarded
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @param \CleverIt\UBL\Invoice\RO\AwardedTenderedProject $awardedTenderedProject
     * @return self
     */
    public function setAwardedTenderedProject(?\CleverIt\UBL\Invoice\RO\AwardedTenderedProject $awardedTenderedProject = null)
    {
        $this->awardedTenderedProject = $awardedTenderedProject;
        return $this;
    }

    /**
     * Gets as contractFormalizationPeriod
     *
     * ASBIE
     *  Tender Result. Contract Formalization_ Period. Period
     *  The period during which a contract associated with the awarded project is to be formalized.
     *  0..1
     *  Tender Result
     *  Contract Formalization
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\ContractFormalizationPeriod
     */
    public function getContractFormalizationPeriod()
    {
        return $this->contractFormalizationPeriod;
    }

    /**
     * Sets a new contractFormalizationPeriod
     *
     * ASBIE
     *  Tender Result. Contract Formalization_ Period. Period
     *  The period during which a contract associated with the awarded project is to be formalized.
     *  0..1
     *  Tender Result
     *  Contract Formalization
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\ContractFormalizationPeriod $contractFormalizationPeriod
     * @return self
     */
    public function setContractFormalizationPeriod(?\CleverIt\UBL\Invoice\RO\ContractFormalizationPeriod $contractFormalizationPeriod = null)
    {
        $this->contractFormalizationPeriod = $contractFormalizationPeriod;
        return $this;
    }

    /**
     * Adds as subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\SubcontractTerms $subcontractTerms
     */
    public function addToSubcontractTerms(\CleverIt\UBL\Invoice\RO\SubcontractTerms $subcontractTerms)
    {
        $this->subcontractTerms[] = $subcontractTerms;
        return $this;
    }

    /**
     * isset subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubcontractTerms($index)
    {
        return isset($this->subcontractTerms[$index]);
    }

    /**
     * unset subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubcontractTerms($index)
    {
        unset($this->subcontractTerms[$index]);
    }

    /**
     * Gets as subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\SubcontractTerms[]
     */
    public function getSubcontractTerms()
    {
        return $this->subcontractTerms;
    }

    /**
     * Sets a new subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\SubcontractTerms[] $subcontractTerms
     * @return self
     */
    public function setSubcontractTerms(array $subcontractTerms = null)
    {
        $this->subcontractTerms = $subcontractTerms;
        return $this;
    }

    /**
     * Adds as winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\WinningParty $winningParty
     */
    public function addToWinningParty(\CleverIt\UBL\Invoice\RO\WinningParty $winningParty)
    {
        $this->winningParty[] = $winningParty;
        return $this;
    }

    /**
     * isset winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWinningParty($index)
    {
        return isset($this->winningParty[$index]);
    }

    /**
     * unset winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWinningParty($index)
    {
        unset($this->winningParty[$index]);
    }

    /**
     * Gets as winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @return \CleverIt\UBL\Invoice\RO\WinningParty[]
     */
    public function getWinningParty()
    {
        return $this->winningParty;
    }

    /**
     * Sets a new winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @param \CleverIt\UBL\Invoice\RO\WinningParty[] $winningParty
     * @return self
     */
    public function setWinningParty(array $winningParty = null)
    {
        $this->winningParty = $winningParty;
        return $this;
    }
}

