<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing WorkPhaseReferenceType
 *
 * ABIE
 *  Work Phase Reference. Details
 *  A class that refers to a phase of work. Used for instance to specify what part of the contract the billing is referring to.
 *  Work Phase Reference
 * XSD Type: WorkPhaseReferenceType
 */
class WorkPhaseReferenceType
{

    /**
     * BBIE
     *  Work Phase Reference. Identifier
     *  An identifier for this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Work Phase Reference. Work Phase Code. Code
     *  A code signifying this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Work Phase Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\WorkPhaseCode $workPhaseCode
     */
    private $workPhaseCode = null;

    /**
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\WorkPhase[] $workPhase
     */
    private $workPhase = [
        
    ];

    /**
     * BBIE
     *  Work Phase Reference. Progress Percent. Percent
     *  The progress percentage of the work phase.
     *  0..1
     *  Work Phase Reference
     *  Progress Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\ProgressPercent $progressPercent
     */
    private $progressPercent = null;

    /**
     * BBIE
     *  Work Phase Reference. Start Date. Date
     *  The date on which this phase of work begins.
     *  0..1
     *  Work Phase Reference
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * BBIE
     *  Work Phase Reference. End Date. Date
     *  The date on which this phase of work ends.
     *  0..1
     *  Work Phase Reference
     *  End Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\WorkOrderDocumentReference[] $workOrderDocumentReference
     */
    private $workOrderDocumentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Work Phase Reference. Identifier
     *  An identifier for this phase of work.
     *  0..1
     *  Work Phase Reference
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
     *  Work Phase Reference. Identifier
     *  An identifier for this phase of work.
     *  0..1
     *  Work Phase Reference
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
     * Gets as workPhaseCode
     *
     * BBIE
     *  Work Phase Reference. Work Phase Code. Code
     *  A code signifying this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Work Phase Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\WorkPhaseCode
     */
    public function getWorkPhaseCode()
    {
        return $this->workPhaseCode;
    }

    /**
     * Sets a new workPhaseCode
     *
     * BBIE
     *  Work Phase Reference. Work Phase Code. Code
     *  A code signifying this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Work Phase Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\WorkPhaseCode $workPhaseCode
     * @return self
     */
    public function setWorkPhaseCode(\CleverIt\UBL\Invoice\WorkPhaseCode $workPhaseCode)
    {
        $this->workPhaseCode = $workPhaseCode;
        return $this;
    }

    /**
     * Adds as workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\WorkPhase $workPhase
     */
    public function addToWorkPhase(\CleverIt\UBL\Invoice\WorkPhase $workPhase)
    {
        $this->workPhase[] = $workPhase;
        return $this;
    }

    /**
     * isset workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkPhase($index)
    {
        return isset($this->workPhase[$index]);
    }

    /**
     * unset workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkPhase($index)
    {
        unset($this->workPhase[$index]);
    }

    /**
     * Gets as workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\WorkPhase[]
     */
    public function getWorkPhase()
    {
        return $this->workPhase;
    }

    /**
     * Sets a new workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\WorkPhase[] $workPhase
     * @return self
     */
    public function setWorkPhase(array $workPhase)
    {
        $this->workPhase = $workPhase;
        return $this;
    }

    /**
     * Gets as progressPercent
     *
     * BBIE
     *  Work Phase Reference. Progress Percent. Percent
     *  The progress percentage of the work phase.
     *  0..1
     *  Work Phase Reference
     *  Progress Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\ProgressPercent
     */
    public function getProgressPercent()
    {
        return $this->progressPercent;
    }

    /**
     * Sets a new progressPercent
     *
     * BBIE
     *  Work Phase Reference. Progress Percent. Percent
     *  The progress percentage of the work phase.
     *  0..1
     *  Work Phase Reference
     *  Progress Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\ProgressPercent $progressPercent
     * @return self
     */
    public function setProgressPercent(\CleverIt\UBL\Invoice\ProgressPercent $progressPercent)
    {
        $this->progressPercent = $progressPercent;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * BBIE
     *  Work Phase Reference. Start Date. Date
     *  The date on which this phase of work begins.
     *  0..1
     *  Work Phase Reference
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
     *  Work Phase Reference. Start Date. Date
     *  The date on which this phase of work begins.
     *  0..1
     *  Work Phase Reference
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * BBIE
     *  Work Phase Reference. End Date. Date
     *  The date on which this phase of work ends.
     *  0..1
     *  Work Phase Reference
     *  End Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * BBIE
     *  Work Phase Reference. End Date. Date
     *  The date on which this phase of work ends.
     *  0..1
     *  Work Phase Reference
     *  End Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Adds as workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\WorkOrderDocumentReference $workOrderDocumentReference
     */
    public function addToWorkOrderDocumentReference(\CleverIt\UBL\Invoice\WorkOrderDocumentReference $workOrderDocumentReference)
    {
        $this->workOrderDocumentReference[] = $workOrderDocumentReference;
        return $this;
    }

    /**
     * isset workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkOrderDocumentReference($index)
    {
        return isset($this->workOrderDocumentReference[$index]);
    }

    /**
     * unset workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkOrderDocumentReference($index)
    {
        unset($this->workOrderDocumentReference[$index]);
    }

    /**
     * Gets as workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\WorkOrderDocumentReference[]
     */
    public function getWorkOrderDocumentReference()
    {
        return $this->workOrderDocumentReference;
    }

    /**
     * Sets a new workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\WorkOrderDocumentReference[] $workOrderDocumentReference
     * @return self
     */
    public function setWorkOrderDocumentReference(array $workOrderDocumentReference)
    {
        $this->workOrderDocumentReference = $workOrderDocumentReference;
        return $this;
    }


}

