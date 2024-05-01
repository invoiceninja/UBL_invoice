<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing QualifyingPartyType
 *
 * ABIE
 *  Qualifying Party. Details
 *  A class to describe the distinctive features or characteristics qualifying an economic operator to be a party in a tendering process (e.g., number of employees, number of operating units, type of business, technical and financial capabilities, completed projects).
 *  Qualifying Party
 * XSD Type: QualifyingPartyType
 */
class QualifyingPartyType
{
    /**
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ParticipationPercent $participationPercent
     */
    private $participationPercent = null;

    /**
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PersonalSituation[] $personalSituation
     */
    private $personalSituation = [
        
    ];

    /**
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\OperatingYearsQuantity $operatingYearsQuantity
     */
    private $operatingYearsQuantity = null;

    /**
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\EmployeeQuantity $employeeQuantity
     */
    private $employeeQuantity = null;

    /**
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     */
    private $businessClassificationEvidenceID = null;

    /**
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     */
    private $businessIdentityEvidenceID = null;

    /**
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TendererRoleCode $tendererRoleCode
     */
    private $tendererRoleCode = null;

    /**
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \CleverIt\UBL\Invoice\RO\BusinessClassificationScheme $businessClassificationScheme
     */
    private $businessClassificationScheme = null;

    /**
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @var \CleverIt\UBL\Invoice\RO\TechnicalCapability[] $technicalCapability
     */
    private $technicalCapability = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @var \CleverIt\UBL\Invoice\RO\FinancialCapability[] $financialCapability
     */
    private $financialCapability = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @var \CleverIt\UBL\Invoice\RO\CompletedTask[] $completedTask
     */
    private $completedTask = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @var \CleverIt\UBL\Invoice\RO\Declaration[] $declaration
     */
    private $declaration = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @var \CleverIt\UBL\Invoice\RO\EconomicOperatorRole $economicOperatorRole
     */
    private $economicOperatorRole = null;

    /**
     * Gets as participationPercent
     *
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ParticipationPercent
     */
    public function getParticipationPercent()
    {
        return $this->participationPercent;
    }

    /**
     * Sets a new participationPercent
     *
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ParticipationPercent $participationPercent
     * @return self
     */
    public function setParticipationPercent(?\CleverIt\UBL\Invoice\RO\ParticipationPercent $participationPercent = null)
    {
        $this->participationPercent = $participationPercent;
        return $this;
    }

    /**
     * Adds as personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PersonalSituation $personalSituation
     */
    public function addToPersonalSituation(\CleverIt\UBL\Invoice\RO\PersonalSituation $personalSituation)
    {
        $this->personalSituation[] = $personalSituation;
        return $this;
    }

    /**
     * isset personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonalSituation($index)
    {
        return isset($this->personalSituation[$index]);
    }

    /**
     * unset personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonalSituation($index)
    {
        unset($this->personalSituation[$index]);
    }

    /**
     * Gets as personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PersonalSituation[]
     */
    public function getPersonalSituation()
    {
        return $this->personalSituation;
    }

    /**
     * Sets a new personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PersonalSituation[] $personalSituation
     * @return self
     */
    public function setPersonalSituation(array $personalSituation = null)
    {
        $this->personalSituation = $personalSituation;
        return $this;
    }

    /**
     * Gets as operatingYearsQuantity
     *
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\OperatingYearsQuantity
     */
    public function getOperatingYearsQuantity()
    {
        return $this->operatingYearsQuantity;
    }

    /**
     * Sets a new operatingYearsQuantity
     *
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\OperatingYearsQuantity $operatingYearsQuantity
     * @return self
     */
    public function setOperatingYearsQuantity(?\CleverIt\UBL\Invoice\RO\OperatingYearsQuantity $operatingYearsQuantity = null)
    {
        $this->operatingYearsQuantity = $operatingYearsQuantity;
        return $this;
    }

    /**
     * Gets as employeeQuantity
     *
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\EmployeeQuantity
     */
    public function getEmployeeQuantity()
    {
        return $this->employeeQuantity;
    }

    /**
     * Sets a new employeeQuantity
     *
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\EmployeeQuantity $employeeQuantity
     * @return self
     */
    public function setEmployeeQuantity(?\CleverIt\UBL\Invoice\RO\EmployeeQuantity $employeeQuantity = null)
    {
        $this->employeeQuantity = $employeeQuantity;
        return $this;
    }

    /**
     * Gets as businessClassificationEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\BusinessClassificationEvidenceID
     */
    public function getBusinessClassificationEvidenceID()
    {
        return $this->businessClassificationEvidenceID;
    }

    /**
     * Sets a new businessClassificationEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     * @return self
     */
    public function setBusinessClassificationEvidenceID(?\CleverIt\UBL\Invoice\RO\BusinessClassificationEvidenceID $businessClassificationEvidenceID = null)
    {
        $this->businessClassificationEvidenceID = $businessClassificationEvidenceID;
        return $this;
    }

    /**
     * Gets as businessIdentityEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\BusinessIdentityEvidenceID
     */
    public function getBusinessIdentityEvidenceID()
    {
        return $this->businessIdentityEvidenceID;
    }

    /**
     * Sets a new businessIdentityEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     * @return self
     */
    public function setBusinessIdentityEvidenceID(?\CleverIt\UBL\Invoice\RO\BusinessIdentityEvidenceID $businessIdentityEvidenceID = null)
    {
        $this->businessIdentityEvidenceID = $businessIdentityEvidenceID;
        return $this;
    }

    /**
     * Gets as tendererRoleCode
     *
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TendererRoleCode
     */
    public function getTendererRoleCode()
    {
        return $this->tendererRoleCode;
    }

    /**
     * Sets a new tendererRoleCode
     *
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TendererRoleCode $tendererRoleCode
     * @return self
     */
    public function setTendererRoleCode(?\CleverIt\UBL\Invoice\RO\TendererRoleCode $tendererRoleCode = null)
    {
        $this->tendererRoleCode = $tendererRoleCode;
        return $this;
    }

    /**
     * Gets as businessClassificationScheme
     *
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \CleverIt\UBL\Invoice\RO\BusinessClassificationScheme
     */
    public function getBusinessClassificationScheme()
    {
        return $this->businessClassificationScheme;
    }

    /**
     * Sets a new businessClassificationScheme
     *
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \CleverIt\UBL\Invoice\RO\BusinessClassificationScheme $businessClassificationScheme
     * @return self
     */
    public function setBusinessClassificationScheme(?\CleverIt\UBL\Invoice\RO\BusinessClassificationScheme $businessClassificationScheme = null)
    {
        $this->businessClassificationScheme = $businessClassificationScheme;
        return $this;
    }

    /**
     * Adds as technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TechnicalCapability $technicalCapability
     */
    public function addToTechnicalCapability(\CleverIt\UBL\Invoice\RO\TechnicalCapability $technicalCapability)
    {
        $this->technicalCapability[] = $technicalCapability;
        return $this;
    }

    /**
     * isset technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCapability($index)
    {
        return isset($this->technicalCapability[$index]);
    }

    /**
     * unset technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCapability($index)
    {
        unset($this->technicalCapability[$index]);
    }

    /**
     * Gets as technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @return \CleverIt\UBL\Invoice\RO\TechnicalCapability[]
     */
    public function getTechnicalCapability()
    {
        return $this->technicalCapability;
    }

    /**
     * Sets a new technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param \CleverIt\UBL\Invoice\RO\TechnicalCapability[] $technicalCapability
     * @return self
     */
    public function setTechnicalCapability(array $technicalCapability = null)
    {
        $this->technicalCapability = $technicalCapability;
        return $this;
    }

    /**
     * Adds as financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\FinancialCapability $financialCapability
     */
    public function addToFinancialCapability(\CleverIt\UBL\Invoice\RO\FinancialCapability $financialCapability)
    {
        $this->financialCapability[] = $financialCapability;
        return $this;
    }

    /**
     * isset financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancialCapability($index)
    {
        return isset($this->financialCapability[$index]);
    }

    /**
     * unset financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancialCapability($index)
    {
        unset($this->financialCapability[$index]);
    }

    /**
     * Gets as financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @return \CleverIt\UBL\Invoice\RO\FinancialCapability[]
     */
    public function getFinancialCapability()
    {
        return $this->financialCapability;
    }

    /**
     * Sets a new financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param \CleverIt\UBL\Invoice\RO\FinancialCapability[] $financialCapability
     * @return self
     */
    public function setFinancialCapability(array $financialCapability = null)
    {
        $this->financialCapability = $financialCapability;
        return $this;
    }

    /**
     * Adds as completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\CompletedTask $completedTask
     */
    public function addToCompletedTask(\CleverIt\UBL\Invoice\RO\CompletedTask $completedTask)
    {
        $this->completedTask[] = $completedTask;
        return $this;
    }

    /**
     * isset completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompletedTask($index)
    {
        return isset($this->completedTask[$index]);
    }

    /**
     * unset completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompletedTask($index)
    {
        unset($this->completedTask[$index]);
    }

    /**
     * Gets as completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @return \CleverIt\UBL\Invoice\RO\CompletedTask[]
     */
    public function getCompletedTask()
    {
        return $this->completedTask;
    }

    /**
     * Sets a new completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param \CleverIt\UBL\Invoice\RO\CompletedTask[] $completedTask
     * @return self
     */
    public function setCompletedTask(array $completedTask = null)
    {
        $this->completedTask = $completedTask;
        return $this;
    }

    /**
     * Adds as declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Declaration $declaration
     */
    public function addToDeclaration(\CleverIt\UBL\Invoice\RO\Declaration $declaration)
    {
        $this->declaration[] = $declaration;
        return $this;
    }

    /**
     * isset declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeclaration($index)
    {
        return isset($this->declaration[$index]);
    }

    /**
     * unset declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeclaration($index)
    {
        unset($this->declaration[$index]);
    }

    /**
     * Gets as declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @return \CleverIt\UBL\Invoice\RO\Declaration[]
     */
    public function getDeclaration()
    {
        return $this->declaration;
    }

    /**
     * Sets a new declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param \CleverIt\UBL\Invoice\RO\Declaration[] $declaration
     * @return self
     */
    public function setDeclaration(array $declaration = null)
    {
        $this->declaration = $declaration;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\Party $party
     * @return self
     */
    public function setParty(?\CleverIt\UBL\Invoice\RO\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as economicOperatorRole
     *
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return \CleverIt\UBL\Invoice\RO\EconomicOperatorRole
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param \CleverIt\UBL\Invoice\RO\EconomicOperatorRole $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(?\CleverIt\UBL\Invoice\RO\EconomicOperatorRole $economicOperatorRole = null)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }
}

