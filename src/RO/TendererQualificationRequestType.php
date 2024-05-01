<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TendererQualificationRequestType
 *
 * ABIE
 *  Tenderer Qualification Request. Details
 *  The evaluation that the Contracting Authority party requests to fulfill to the tenderers.
 *  Tenderer Qualification Request
 * XSD Type: TendererQualificationRequestType
 */
class TendererQualificationRequestType
{
    /**
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form Code. Code
     *  The legal status requested for potential tenderers, expressed as a code.
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\CompanyLegalFormCode $companyLegalFormCode
     */
    private $companyLegalFormCode = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form. Text
     *  The legal status requested for potential tenderers, expressed as text
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\CompanyLegalForm $companyLegalForm
     */
    private $companyLegalForm = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Operating Years. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\OperatingYearsQuantity $operatingYearsQuantity
     */
    private $operatingYearsQuantity = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Employee. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\EmployeeQuantity $employeeQuantity
     */
    private $employeeQuantity = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \CleverIt\UBL\Invoice\RO\RequiredBusinessClassificationScheme[] $requiredBusinessClassificationScheme
     */
    private $requiredBusinessClassificationScheme = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @var \CleverIt\UBL\Invoice\RO\TechnicalEvaluationCriterion[] $technicalEvaluationCriterion
     */
    private $technicalEvaluationCriterion = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @var \CleverIt\UBL\Invoice\RO\FinancialEvaluationCriterion[] $financialEvaluationCriterion
     */
    private $financialEvaluationCriterion = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @var \CleverIt\UBL\Invoice\RO\SpecificTendererRequirement[] $specificTendererRequirement
     */
    private $specificTendererRequirement = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @var \CleverIt\UBL\Invoice\RO\EconomicOperatorRole[] $economicOperatorRole
     */
    private $economicOperatorRole = [
        
    ];

    /**
     * Gets as companyLegalFormCode
     *
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form Code. Code
     *  The legal status requested for potential tenderers, expressed as a code.
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\CompanyLegalFormCode
     */
    public function getCompanyLegalFormCode()
    {
        return $this->companyLegalFormCode;
    }

    /**
     * Sets a new companyLegalFormCode
     *
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form Code. Code
     *  The legal status requested for potential tenderers, expressed as a code.
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\CompanyLegalFormCode $companyLegalFormCode
     * @return self
     */
    public function setCompanyLegalFormCode(?\CleverIt\UBL\Invoice\RO\CompanyLegalFormCode $companyLegalFormCode = null)
    {
        $this->companyLegalFormCode = $companyLegalFormCode;
        return $this;
    }

    /**
     * Gets as companyLegalForm
     *
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form. Text
     *  The legal status requested for potential tenderers, expressed as text
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\CompanyLegalForm
     */
    public function getCompanyLegalForm()
    {
        return $this->companyLegalForm;
    }

    /**
     * Sets a new companyLegalForm
     *
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form. Text
     *  The legal status requested for potential tenderers, expressed as text
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\CompanyLegalForm $companyLegalForm
     * @return self
     */
    public function setCompanyLegalForm(?\CleverIt\UBL\Invoice\RO\CompanyLegalForm $companyLegalForm = null)
    {
        $this->companyLegalForm = $companyLegalForm;
        return $this;
    }

    /**
     * Adds as personalSituation
     *
     * BBIE
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Operating Years. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Operating Years. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Employee. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Employee. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     * Adds as description
     *
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
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
     * Adds as requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme
     */
    public function addToRequiredBusinessClassificationScheme(\CleverIt\UBL\Invoice\RO\RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme)
    {
        $this->requiredBusinessClassificationScheme[] = $requiredBusinessClassificationScheme;
        return $this;
    }

    /**
     * isset requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredBusinessClassificationScheme($index)
    {
        return isset($this->requiredBusinessClassificationScheme[$index]);
    }

    /**
     * unset requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredBusinessClassificationScheme($index)
    {
        unset($this->requiredBusinessClassificationScheme[$index]);
    }

    /**
     * Gets as requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \CleverIt\UBL\Invoice\RO\RequiredBusinessClassificationScheme[]
     */
    public function getRequiredBusinessClassificationScheme()
    {
        return $this->requiredBusinessClassificationScheme;
    }

    /**
     * Sets a new requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \CleverIt\UBL\Invoice\RO\RequiredBusinessClassificationScheme[] $requiredBusinessClassificationScheme
     * @return self
     */
    public function setRequiredBusinessClassificationScheme(array $requiredBusinessClassificationScheme = null)
    {
        $this->requiredBusinessClassificationScheme = $requiredBusinessClassificationScheme;
        return $this;
    }

    /**
     * Adds as technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TechnicalEvaluationCriterion $technicalEvaluationCriterion
     */
    public function addToTechnicalEvaluationCriterion(\CleverIt\UBL\Invoice\RO\TechnicalEvaluationCriterion $technicalEvaluationCriterion)
    {
        $this->technicalEvaluationCriterion[] = $technicalEvaluationCriterion;
        return $this;
    }

    /**
     * isset technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalEvaluationCriterion($index)
    {
        return isset($this->technicalEvaluationCriterion[$index]);
    }

    /**
     * unset technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalEvaluationCriterion($index)
    {
        unset($this->technicalEvaluationCriterion[$index]);
    }

    /**
     * Gets as technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return \CleverIt\UBL\Invoice\RO\TechnicalEvaluationCriterion[]
     */
    public function getTechnicalEvaluationCriterion()
    {
        return $this->technicalEvaluationCriterion;
    }

    /**
     * Sets a new technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param \CleverIt\UBL\Invoice\RO\TechnicalEvaluationCriterion[] $technicalEvaluationCriterion
     * @return self
     */
    public function setTechnicalEvaluationCriterion(array $technicalEvaluationCriterion = null)
    {
        $this->technicalEvaluationCriterion = $technicalEvaluationCriterion;
        return $this;
    }

    /**
     * Adds as financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\FinancialEvaluationCriterion $financialEvaluationCriterion
     */
    public function addToFinancialEvaluationCriterion(\CleverIt\UBL\Invoice\RO\FinancialEvaluationCriterion $financialEvaluationCriterion)
    {
        $this->financialEvaluationCriterion[] = $financialEvaluationCriterion;
        return $this;
    }

    /**
     * isset financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancialEvaluationCriterion($index)
    {
        return isset($this->financialEvaluationCriterion[$index]);
    }

    /**
     * unset financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancialEvaluationCriterion($index)
    {
        unset($this->financialEvaluationCriterion[$index]);
    }

    /**
     * Gets as financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return \CleverIt\UBL\Invoice\RO\FinancialEvaluationCriterion[]
     */
    public function getFinancialEvaluationCriterion()
    {
        return $this->financialEvaluationCriterion;
    }

    /**
     * Sets a new financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param \CleverIt\UBL\Invoice\RO\FinancialEvaluationCriterion[] $financialEvaluationCriterion
     * @return self
     */
    public function setFinancialEvaluationCriterion(array $financialEvaluationCriterion = null)
    {
        $this->financialEvaluationCriterion = $financialEvaluationCriterion;
        return $this;
    }

    /**
     * Adds as specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\SpecificTendererRequirement $specificTendererRequirement
     */
    public function addToSpecificTendererRequirement(\CleverIt\UBL\Invoice\RO\SpecificTendererRequirement $specificTendererRequirement)
    {
        $this->specificTendererRequirement[] = $specificTendererRequirement;
        return $this;
    }

    /**
     * isset specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecificTendererRequirement($index)
    {
        return isset($this->specificTendererRequirement[$index]);
    }

    /**
     * unset specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecificTendererRequirement($index)
    {
        unset($this->specificTendererRequirement[$index]);
    }

    /**
     * Gets as specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @return \CleverIt\UBL\Invoice\RO\SpecificTendererRequirement[]
     */
    public function getSpecificTendererRequirement()
    {
        return $this->specificTendererRequirement;
    }

    /**
     * Sets a new specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @param \CleverIt\UBL\Invoice\RO\SpecificTendererRequirement[] $specificTendererRequirement
     * @return self
     */
    public function setSpecificTendererRequirement(array $specificTendererRequirement = null)
    {
        $this->specificTendererRequirement = $specificTendererRequirement;
        return $this;
    }

    /**
     * Adds as economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EconomicOperatorRole $economicOperatorRole
     */
    public function addToEconomicOperatorRole(\CleverIt\UBL\Invoice\RO\EconomicOperatorRole $economicOperatorRole)
    {
        $this->economicOperatorRole[] = $economicOperatorRole;
        return $this;
    }

    /**
     * isset economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEconomicOperatorRole($index)
    {
        return isset($this->economicOperatorRole[$index]);
    }

    /**
     * unset economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEconomicOperatorRole($index)
    {
        unset($this->economicOperatorRole[$index]);
    }

    /**
     * Gets as economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return \CleverIt\UBL\Invoice\RO\EconomicOperatorRole[]
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param \CleverIt\UBL\Invoice\RO\EconomicOperatorRole[] $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(array $economicOperatorRole = null)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }
}

