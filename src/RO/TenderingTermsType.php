<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TenderingTermsType
 *
 * ABIE
 *  Tendering Terms. Details
 *  A class to describe tendering terms for a tendering process.
 *  Tendering Terms
 * XSD Type: TenderingTermsType
 */
class TenderingTermsType
{
    /**
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @var \CleverIt\UBL\Invoice\RO\AwardingMethodTypeCode $awardingMethodTypeCode
     */
    private $awardingMethodTypeCode = null;

    /**
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @var \CleverIt\UBL\Invoice\RO\PriceEvaluationCode $priceEvaluationCode
     */
    private $priceEvaluationCode = null;

    /**
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumVariantQuantity $maximumVariantQuantity
     */
    private $maximumVariantQuantity = null;

    /**
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $variantConstraintIndicator
     */
    private $variantConstraintIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AcceptedVariantsDescription[] $acceptedVariantsDescription
     */
    private $acceptedVariantsDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     */
    private $priceRevisionFormulaDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\FundingProgramCode $fundingProgramCode
     */
    private $fundingProgramCode = null;

    /**
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\FundingProgram[] $fundingProgram
     */
    private $fundingProgram = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MaximumAdvertisementAmount $maximumAdvertisementAmount
     */
    private $maximumAdvertisementAmount = null;

    /**
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentFrequencyCode $paymentFrequencyCode
     */
    private $paymentFrequencyCode = null;

    /**
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @var \CleverIt\UBL\Invoice\RO\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     */
    private $economicOperatorRegistryURI = null;

    /**
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $requiredCurriculaIndicator
     */
    private $requiredCurriculaIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $otherConditionsIndicator
     */
    private $otherConditionsIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AdditionalConditions[] $additionalConditions
     */
    private $additionalConditions = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestSecurityClearanceDate
     */
    private $latestSecurityClearanceDate = null;

    /**
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentationFeeAmount $documentationFeeAmount
     */
    private $documentationFeeAmount = null;

    /**
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @var \CleverIt\UBL\Invoice\RO\PenaltyClause[] $penaltyClause
     */
    private $penaltyClause = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @var \CleverIt\UBL\Invoice\RO\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     */
    private $requiredFinancialGuarantee = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference
     */
    private $procurementLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference
     */
    private $fiscalLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference
     */
    private $environmentalLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference
     */
    private $employmentLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ContractualDocumentReference[] $contractualDocumentReference
     */
    private $contractualDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to the Call for Tender associated with these tendering terms.
     *  0..1
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @var \CleverIt\UBL\Invoice\RO\TendererQualificationRequest[] $tendererQualificationRequest
     */
    private $tendererQualificationRequest = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\AllowedSubcontractTerms[] $allowedSubcontractTerms
     */
    private $allowedSubcontractTerms = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @var \CleverIt\UBL\Invoice\RO\TenderPreparation[] $tenderPreparation
     */
    private $tenderPreparation = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @var \CleverIt\UBL\Invoice\RO\ContractExecutionRequirement[] $contractExecutionRequirement
     */
    private $contractExecutionRequirement = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\AwardingTerms $awardingTerms
     */
    private $awardingTerms = null;

    /**
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\AdditionalInformationParty $additionalInformationParty
     */
    private $additionalInformationParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentProviderParty $documentProviderParty
     */
    private $documentProviderParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\TenderRecipientParty $tenderRecipientParty
     */
    private $tenderRecipientParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\ContractResponsibleParty $contractResponsibleParty
     */
    private $contractResponsibleParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\TenderEvaluationParty[] $tenderEvaluationParty
     */
    private $tenderEvaluationParty = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\TenderValidityPeriod $tenderValidityPeriod
     */
    private $tenderValidityPeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\ContractAcceptancePeriod $contractAcceptancePeriod
     */
    private $contractAcceptancePeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\AppealTerms $appealTerms
     */
    private $appealTerms = null;

    /**
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @var \CleverIt\UBL\Invoice\RO\Language[] $language
     */
    private $language = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @var \CleverIt\UBL\Invoice\RO\BudgetAccountLine[] $budgetAccountLine
     */
    private $budgetAccountLine = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     */
    private $replacedNoticeDocumentReference = null;

    /**
     * Gets as awardingMethodTypeCode
     *
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @return \CleverIt\UBL\Invoice\RO\AwardingMethodTypeCode
     */
    public function getAwardingMethodTypeCode()
    {
        return $this->awardingMethodTypeCode;
    }

    /**
     * Sets a new awardingMethodTypeCode
     *
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @param \CleverIt\UBL\Invoice\RO\AwardingMethodTypeCode $awardingMethodTypeCode
     * @return self
     */
    public function setAwardingMethodTypeCode(?\CleverIt\UBL\Invoice\RO\AwardingMethodTypeCode $awardingMethodTypeCode = null)
    {
        $this->awardingMethodTypeCode = $awardingMethodTypeCode;
        return $this;
    }

    /**
     * Gets as priceEvaluationCode
     *
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @return \CleverIt\UBL\Invoice\RO\PriceEvaluationCode
     */
    public function getPriceEvaluationCode()
    {
        return $this->priceEvaluationCode;
    }

    /**
     * Sets a new priceEvaluationCode
     *
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @param \CleverIt\UBL\Invoice\RO\PriceEvaluationCode $priceEvaluationCode
     * @return self
     */
    public function setPriceEvaluationCode(?\CleverIt\UBL\Invoice\RO\PriceEvaluationCode $priceEvaluationCode = null)
    {
        $this->priceEvaluationCode = $priceEvaluationCode;
        return $this;
    }

    /**
     * Gets as maximumVariantQuantity
     *
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumVariantQuantity
     */
    public function getMaximumVariantQuantity()
    {
        return $this->maximumVariantQuantity;
    }

    /**
     * Sets a new maximumVariantQuantity
     *
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumVariantQuantity $maximumVariantQuantity
     * @return self
     */
    public function setMaximumVariantQuantity(?\CleverIt\UBL\Invoice\RO\MaximumVariantQuantity $maximumVariantQuantity = null)
    {
        $this->maximumVariantQuantity = $maximumVariantQuantity;
        return $this;
    }

    /**
     * Gets as variantConstraintIndicator
     *
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getVariantConstraintIndicator()
    {
        return $this->variantConstraintIndicator;
    }

    /**
     * Sets a new variantConstraintIndicator
     *
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $variantConstraintIndicator
     * @return self
     */
    public function setVariantConstraintIndicator($variantConstraintIndicator)
    {
        $this->variantConstraintIndicator = $variantConstraintIndicator;
        return $this;
    }

    /**
     * Adds as acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AcceptedVariantsDescription $acceptedVariantsDescription
     */
    public function addToAcceptedVariantsDescription(\CleverIt\UBL\Invoice\RO\AcceptedVariantsDescription $acceptedVariantsDescription)
    {
        $this->acceptedVariantsDescription[] = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * isset acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedVariantsDescription($index)
    {
        return isset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * unset acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedVariantsDescription($index)
    {
        unset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * Gets as acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AcceptedVariantsDescription[]
     */
    public function getAcceptedVariantsDescription()
    {
        return $this->acceptedVariantsDescription;
    }

    /**
     * Sets a new acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AcceptedVariantsDescription[] $acceptedVariantsDescription
     * @return self
     */
    public function setAcceptedVariantsDescription(array $acceptedVariantsDescription = null)
    {
        $this->acceptedVariantsDescription = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * Adds as priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PriceRevisionFormulaDescription $priceRevisionFormulaDescription
     */
    public function addToPriceRevisionFormulaDescription(\CleverIt\UBL\Invoice\RO\PriceRevisionFormulaDescription $priceRevisionFormulaDescription)
    {
        $this->priceRevisionFormulaDescription[] = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * isset priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceRevisionFormulaDescription($index)
    {
        return isset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * unset priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceRevisionFormulaDescription($index)
    {
        unset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * Gets as priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PriceRevisionFormulaDescription[]
     */
    public function getPriceRevisionFormulaDescription()
    {
        return $this->priceRevisionFormulaDescription;
    }

    /**
     * Sets a new priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     * @return self
     */
    public function setPriceRevisionFormulaDescription(array $priceRevisionFormulaDescription = null)
    {
        $this->priceRevisionFormulaDescription = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * Gets as fundingProgramCode
     *
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\FundingProgramCode
     */
    public function getFundingProgramCode()
    {
        return $this->fundingProgramCode;
    }

    /**
     * Sets a new fundingProgramCode
     *
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\FundingProgramCode $fundingProgramCode
     * @return self
     */
    public function setFundingProgramCode(?\CleverIt\UBL\Invoice\RO\FundingProgramCode $fundingProgramCode = null)
    {
        $this->fundingProgramCode = $fundingProgramCode;
        return $this;
    }

    /**
     * Adds as fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\FundingProgram $fundingProgram
     */
    public function addToFundingProgram(\CleverIt\UBL\Invoice\RO\FundingProgram $fundingProgram)
    {
        $this->fundingProgram[] = $fundingProgram;
        return $this;
    }

    /**
     * isset fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFundingProgram($index)
    {
        return isset($this->fundingProgram[$index]);
    }

    /**
     * unset fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFundingProgram($index)
    {
        unset($this->fundingProgram[$index]);
    }

    /**
     * Gets as fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\FundingProgram[]
     */
    public function getFundingProgram()
    {
        return $this->fundingProgram;
    }

    /**
     * Sets a new fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\FundingProgram[] $fundingProgram
     * @return self
     */
    public function setFundingProgram(array $fundingProgram = null)
    {
        $this->fundingProgram = $fundingProgram;
        return $this;
    }

    /**
     * Gets as maximumAdvertisementAmount
     *
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MaximumAdvertisementAmount
     */
    public function getMaximumAdvertisementAmount()
    {
        return $this->maximumAdvertisementAmount;
    }

    /**
     * Sets a new maximumAdvertisementAmount
     *
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MaximumAdvertisementAmount $maximumAdvertisementAmount
     * @return self
     */
    public function setMaximumAdvertisementAmount(?\CleverIt\UBL\Invoice\RO\MaximumAdvertisementAmount $maximumAdvertisementAmount = null)
    {
        $this->maximumAdvertisementAmount = $maximumAdvertisementAmount;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\RO\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Note[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as paymentFrequencyCode
     *
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentFrequencyCode
     */
    public function getPaymentFrequencyCode()
    {
        return $this->paymentFrequencyCode;
    }

    /**
     * Sets a new paymentFrequencyCode
     *
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentFrequencyCode $paymentFrequencyCode
     * @return self
     */
    public function setPaymentFrequencyCode(?\CleverIt\UBL\Invoice\RO\PaymentFrequencyCode $paymentFrequencyCode = null)
    {
        $this->paymentFrequencyCode = $paymentFrequencyCode;
        return $this;
    }

    /**
     * Gets as economicOperatorRegistryURI
     *
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @return \CleverIt\UBL\Invoice\RO\EconomicOperatorRegistryURI
     */
    public function getEconomicOperatorRegistryURI()
    {
        return $this->economicOperatorRegistryURI;
    }

    /**
     * Sets a new economicOperatorRegistryURI
     *
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @param \CleverIt\UBL\Invoice\RO\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     * @return self
     */
    public function setEconomicOperatorRegistryURI(?\CleverIt\UBL\Invoice\RO\EconomicOperatorRegistryURI $economicOperatorRegistryURI = null)
    {
        $this->economicOperatorRegistryURI = $economicOperatorRegistryURI;
        return $this;
    }

    /**
     * Gets as requiredCurriculaIndicator
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRequiredCurriculaIndicator()
    {
        return $this->requiredCurriculaIndicator;
    }

    /**
     * Sets a new requiredCurriculaIndicator
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $requiredCurriculaIndicator
     * @return self
     */
    public function setRequiredCurriculaIndicator($requiredCurriculaIndicator)
    {
        $this->requiredCurriculaIndicator = $requiredCurriculaIndicator;
        return $this;
    }

    /**
     * Gets as otherConditionsIndicator
     *
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getOtherConditionsIndicator()
    {
        return $this->otherConditionsIndicator;
    }

    /**
     * Sets a new otherConditionsIndicator
     *
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $otherConditionsIndicator
     * @return self
     */
    public function setOtherConditionsIndicator($otherConditionsIndicator)
    {
        $this->otherConditionsIndicator = $otherConditionsIndicator;
        return $this;
    }

    /**
     * Adds as additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AdditionalConditions $additionalConditions
     */
    public function addToAdditionalConditions(\CleverIt\UBL\Invoice\RO\AdditionalConditions $additionalConditions)
    {
        $this->additionalConditions[] = $additionalConditions;
        return $this;
    }

    /**
     * isset additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalConditions($index)
    {
        return isset($this->additionalConditions[$index]);
    }

    /**
     * unset additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalConditions($index)
    {
        unset($this->additionalConditions[$index]);
    }

    /**
     * Gets as additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AdditionalConditions[]
     */
    public function getAdditionalConditions()
    {
        return $this->additionalConditions;
    }

    /**
     * Sets a new additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AdditionalConditions[] $additionalConditions
     * @return self
     */
    public function setAdditionalConditions(array $additionalConditions = null)
    {
        $this->additionalConditions = $additionalConditions;
        return $this;
    }

    /**
     * Gets as latestSecurityClearanceDate
     *
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestSecurityClearanceDate()
    {
        return $this->latestSecurityClearanceDate;
    }

    /**
     * Sets a new latestSecurityClearanceDate
     *
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $latestSecurityClearanceDate
     * @return self
     */
    public function setLatestSecurityClearanceDate(\DateTime $latestSecurityClearanceDate = null)
    {
        $this->latestSecurityClearanceDate = $latestSecurityClearanceDate;
        return $this;
    }

    /**
     * Gets as documentationFeeAmount
     *
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentationFeeAmount
     */
    public function getDocumentationFeeAmount()
    {
        return $this->documentationFeeAmount;
    }

    /**
     * Sets a new documentationFeeAmount
     *
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentationFeeAmount $documentationFeeAmount
     * @return self
     */
    public function setDocumentationFeeAmount(?\CleverIt\UBL\Invoice\RO\DocumentationFeeAmount $documentationFeeAmount = null)
    {
        $this->documentationFeeAmount = $documentationFeeAmount;
        return $this;
    }

    /**
     * Adds as penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PenaltyClause $penaltyClause
     */
    public function addToPenaltyClause(\CleverIt\UBL\Invoice\RO\PenaltyClause $penaltyClause)
    {
        $this->penaltyClause[] = $penaltyClause;
        return $this;
    }

    /**
     * isset penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPenaltyClause($index)
    {
        return isset($this->penaltyClause[$index]);
    }

    /**
     * unset penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPenaltyClause($index)
    {
        unset($this->penaltyClause[$index]);
    }

    /**
     * Gets as penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @return \CleverIt\UBL\Invoice\RO\PenaltyClause[]
     */
    public function getPenaltyClause()
    {
        return $this->penaltyClause;
    }

    /**
     * Sets a new penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param \CleverIt\UBL\Invoice\RO\PenaltyClause[] $penaltyClause
     * @return self
     */
    public function setPenaltyClause(array $penaltyClause = null)
    {
        $this->penaltyClause = $penaltyClause;
        return $this;
    }

    /**
     * Adds as requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\RequiredFinancialGuarantee $requiredFinancialGuarantee
     */
    public function addToRequiredFinancialGuarantee(\CleverIt\UBL\Invoice\RO\RequiredFinancialGuarantee $requiredFinancialGuarantee)
    {
        $this->requiredFinancialGuarantee[] = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * isset requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredFinancialGuarantee($index)
    {
        return isset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * unset requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredFinancialGuarantee($index)
    {
        unset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * Gets as requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @return \CleverIt\UBL\Invoice\RO\RequiredFinancialGuarantee[]
     */
    public function getRequiredFinancialGuarantee()
    {
        return $this->requiredFinancialGuarantee;
    }

    /**
     * Sets a new requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param \CleverIt\UBL\Invoice\RO\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     * @return self
     */
    public function setRequiredFinancialGuarantee(array $requiredFinancialGuarantee = null)
    {
        $this->requiredFinancialGuarantee = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * Gets as procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ProcurementLegislationDocumentReference
     */
    public function getProcurementLegislationDocumentReference()
    {
        return $this->procurementLegislationDocumentReference;
    }

    /**
     * Sets a new procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference
     * @return self
     */
    public function setProcurementLegislationDocumentReference(?\CleverIt\UBL\Invoice\RO\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference = null)
    {
        $this->procurementLegislationDocumentReference = $procurementLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\FiscalLegislationDocumentReference
     */
    public function getFiscalLegislationDocumentReference()
    {
        return $this->fiscalLegislationDocumentReference;
    }

    /**
     * Sets a new fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference
     * @return self
     */
    public function setFiscalLegislationDocumentReference(?\CleverIt\UBL\Invoice\RO\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference = null)
    {
        $this->fiscalLegislationDocumentReference = $fiscalLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\EnvironmentalLegislationDocumentReference
     */
    public function getEnvironmentalLegislationDocumentReference()
    {
        return $this->environmentalLegislationDocumentReference;
    }

    /**
     * Sets a new environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference
     * @return self
     */
    public function setEnvironmentalLegislationDocumentReference(?\CleverIt\UBL\Invoice\RO\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference = null)
    {
        $this->environmentalLegislationDocumentReference = $environmentalLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\EmploymentLegislationDocumentReference
     */
    public function getEmploymentLegislationDocumentReference()
    {
        return $this->employmentLegislationDocumentReference;
    }

    /**
     * Sets a new employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference
     * @return self
     */
    public function setEmploymentLegislationDocumentReference(?\CleverIt\UBL\Invoice\RO\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference = null)
    {
        $this->employmentLegislationDocumentReference = $employmentLegislationDocumentReference;
        return $this;
    }

    /**
     * Adds as contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ContractualDocumentReference $contractualDocumentReference
     */
    public function addToContractualDocumentReference(\CleverIt\UBL\Invoice\RO\ContractualDocumentReference $contractualDocumentReference)
    {
        $this->contractualDocumentReference[] = $contractualDocumentReference;
        return $this;
    }

    /**
     * isset contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractualDocumentReference($index)
    {
        return isset($this->contractualDocumentReference[$index]);
    }

    /**
     * unset contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractualDocumentReference($index)
    {
        unset($this->contractualDocumentReference[$index]);
    }

    /**
     * Gets as contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ContractualDocumentReference[]
     */
    public function getContractualDocumentReference()
    {
        return $this->contractualDocumentReference;
    }

    /**
     * Sets a new contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ContractualDocumentReference[] $contractualDocumentReference
     * @return self
     */
    public function setContractualDocumentReference(array $contractualDocumentReference = null)
    {
        $this->contractualDocumentReference = $contractualDocumentReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to the Call for Tender associated with these tendering terms.
     *  0..1
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to the Call for Tender associated with these tendering terms.
     *  0..1
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(?\CleverIt\UBL\Invoice\RO\CallForTendersDocumentReference $callForTendersDocumentReference = null)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?\CleverIt\UBL\Invoice\RO\WarrantyValidityPeriod $warrantyValidityPeriod = null)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\CleverIt\UBL\Invoice\RO\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TendererQualificationRequest $tendererQualificationRequest
     */
    public function addToTendererQualificationRequest(\CleverIt\UBL\Invoice\RO\TendererQualificationRequest $tendererQualificationRequest)
    {
        $this->tendererQualificationRequest[] = $tendererQualificationRequest;
        return $this;
    }

    /**
     * isset tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTendererQualificationRequest($index)
    {
        return isset($this->tendererQualificationRequest[$index]);
    }

    /**
     * unset tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTendererQualificationRequest($index)
    {
        unset($this->tendererQualificationRequest[$index]);
    }

    /**
     * Gets as tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @return \CleverIt\UBL\Invoice\RO\TendererQualificationRequest[]
     */
    public function getTendererQualificationRequest()
    {
        return $this->tendererQualificationRequest;
    }

    /**
     * Sets a new tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param \CleverIt\UBL\Invoice\RO\TendererQualificationRequest[] $tendererQualificationRequest
     * @return self
     */
    public function setTendererQualificationRequest(array $tendererQualificationRequest = null)
    {
        $this->tendererQualificationRequest = $tendererQualificationRequest;
        return $this;
    }

    /**
     * Adds as allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AllowedSubcontractTerms $allowedSubcontractTerms
     */
    public function addToAllowedSubcontractTerms(\CleverIt\UBL\Invoice\RO\AllowedSubcontractTerms $allowedSubcontractTerms)
    {
        $this->allowedSubcontractTerms[] = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * isset allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowedSubcontractTerms($index)
    {
        return isset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * unset allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowedSubcontractTerms($index)
    {
        unset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * Gets as allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\AllowedSubcontractTerms[]
     */
    public function getAllowedSubcontractTerms()
    {
        return $this->allowedSubcontractTerms;
    }

    /**
     * Sets a new allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\AllowedSubcontractTerms[] $allowedSubcontractTerms
     * @return self
     */
    public function setAllowedSubcontractTerms(array $allowedSubcontractTerms = null)
    {
        $this->allowedSubcontractTerms = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * Adds as tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TenderPreparation $tenderPreparation
     */
    public function addToTenderPreparation(\CleverIt\UBL\Invoice\RO\TenderPreparation $tenderPreparation)
    {
        $this->tenderPreparation[] = $tenderPreparation;
        return $this;
    }

    /**
     * isset tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderPreparation($index)
    {
        return isset($this->tenderPreparation[$index]);
    }

    /**
     * unset tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderPreparation($index)
    {
        unset($this->tenderPreparation[$index]);
    }

    /**
     * Gets as tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @return \CleverIt\UBL\Invoice\RO\TenderPreparation[]
     */
    public function getTenderPreparation()
    {
        return $this->tenderPreparation;
    }

    /**
     * Sets a new tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param \CleverIt\UBL\Invoice\RO\TenderPreparation[] $tenderPreparation
     * @return self
     */
    public function setTenderPreparation(array $tenderPreparation = null)
    {
        $this->tenderPreparation = $tenderPreparation;
        return $this;
    }

    /**
     * Adds as contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ContractExecutionRequirement $contractExecutionRequirement
     */
    public function addToContractExecutionRequirement(\CleverIt\UBL\Invoice\RO\ContractExecutionRequirement $contractExecutionRequirement)
    {
        $this->contractExecutionRequirement[] = $contractExecutionRequirement;
        return $this;
    }

    /**
     * isset contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractExecutionRequirement($index)
    {
        return isset($this->contractExecutionRequirement[$index]);
    }

    /**
     * unset contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractExecutionRequirement($index)
    {
        unset($this->contractExecutionRequirement[$index]);
    }

    /**
     * Gets as contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @return \CleverIt\UBL\Invoice\RO\ContractExecutionRequirement[]
     */
    public function getContractExecutionRequirement()
    {
        return $this->contractExecutionRequirement;
    }

    /**
     * Sets a new contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param \CleverIt\UBL\Invoice\RO\ContractExecutionRequirement[] $contractExecutionRequirement
     * @return self
     */
    public function setContractExecutionRequirement(array $contractExecutionRequirement = null)
    {
        $this->contractExecutionRequirement = $contractExecutionRequirement;
        return $this;
    }

    /**
     * Gets as awardingTerms
     *
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\AwardingTerms
     */
    public function getAwardingTerms()
    {
        return $this->awardingTerms;
    }

    /**
     * Sets a new awardingTerms
     *
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\AwardingTerms $awardingTerms
     * @return self
     */
    public function setAwardingTerms(?\CleverIt\UBL\Invoice\RO\AwardingTerms $awardingTerms = null)
    {
        $this->awardingTerms = $awardingTerms;
        return $this;
    }

    /**
     * Gets as additionalInformationParty
     *
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\AdditionalInformationParty
     */
    public function getAdditionalInformationParty()
    {
        return $this->additionalInformationParty;
    }

    /**
     * Sets a new additionalInformationParty
     *
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\AdditionalInformationParty $additionalInformationParty
     * @return self
     */
    public function setAdditionalInformationParty(?\CleverIt\UBL\Invoice\RO\AdditionalInformationParty $additionalInformationParty = null)
    {
        $this->additionalInformationParty = $additionalInformationParty;
        return $this;
    }

    /**
     * Gets as documentProviderParty
     *
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentProviderParty
     */
    public function getDocumentProviderParty()
    {
        return $this->documentProviderParty;
    }

    /**
     * Sets a new documentProviderParty
     *
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentProviderParty $documentProviderParty
     * @return self
     */
    public function setDocumentProviderParty(?\CleverIt\UBL\Invoice\RO\DocumentProviderParty $documentProviderParty = null)
    {
        $this->documentProviderParty = $documentProviderParty;
        return $this;
    }

    /**
     * Gets as tenderRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\TenderRecipientParty
     */
    public function getTenderRecipientParty()
    {
        return $this->tenderRecipientParty;
    }

    /**
     * Sets a new tenderRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\TenderRecipientParty $tenderRecipientParty
     * @return self
     */
    public function setTenderRecipientParty(?\CleverIt\UBL\Invoice\RO\TenderRecipientParty $tenderRecipientParty = null)
    {
        $this->tenderRecipientParty = $tenderRecipientParty;
        return $this;
    }

    /**
     * Gets as contractResponsibleParty
     *
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\ContractResponsibleParty
     */
    public function getContractResponsibleParty()
    {
        return $this->contractResponsibleParty;
    }

    /**
     * Sets a new contractResponsibleParty
     *
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\ContractResponsibleParty $contractResponsibleParty
     * @return self
     */
    public function setContractResponsibleParty(?\CleverIt\UBL\Invoice\RO\ContractResponsibleParty $contractResponsibleParty = null)
    {
        $this->contractResponsibleParty = $contractResponsibleParty;
        return $this;
    }

    /**
     * Adds as tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TenderEvaluationParty $tenderEvaluationParty
     */
    public function addToTenderEvaluationParty(\CleverIt\UBL\Invoice\RO\TenderEvaluationParty $tenderEvaluationParty)
    {
        $this->tenderEvaluationParty[] = $tenderEvaluationParty;
        return $this;
    }

    /**
     * isset tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderEvaluationParty($index)
    {
        return isset($this->tenderEvaluationParty[$index]);
    }

    /**
     * unset tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderEvaluationParty($index)
    {
        unset($this->tenderEvaluationParty[$index]);
    }

    /**
     * Gets as tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\TenderEvaluationParty[]
     */
    public function getTenderEvaluationParty()
    {
        return $this->tenderEvaluationParty;
    }

    /**
     * Sets a new tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\TenderEvaluationParty[] $tenderEvaluationParty
     * @return self
     */
    public function setTenderEvaluationParty(array $tenderEvaluationParty = null)
    {
        $this->tenderEvaluationParty = $tenderEvaluationParty;
        return $this;
    }

    /**
     * Gets as tenderValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\TenderValidityPeriod
     */
    public function getTenderValidityPeriod()
    {
        return $this->tenderValidityPeriod;
    }

    /**
     * Sets a new tenderValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\TenderValidityPeriod $tenderValidityPeriod
     * @return self
     */
    public function setTenderValidityPeriod(?\CleverIt\UBL\Invoice\RO\TenderValidityPeriod $tenderValidityPeriod = null)
    {
        $this->tenderValidityPeriod = $tenderValidityPeriod;
        return $this;
    }

    /**
     * Gets as contractAcceptancePeriod
     *
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\ContractAcceptancePeriod
     */
    public function getContractAcceptancePeriod()
    {
        return $this->contractAcceptancePeriod;
    }

    /**
     * Sets a new contractAcceptancePeriod
     *
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\ContractAcceptancePeriod $contractAcceptancePeriod
     * @return self
     */
    public function setContractAcceptancePeriod(?\CleverIt\UBL\Invoice\RO\ContractAcceptancePeriod $contractAcceptancePeriod = null)
    {
        $this->contractAcceptancePeriod = $contractAcceptancePeriod;
        return $this;
    }

    /**
     * Gets as appealTerms
     *
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\AppealTerms
     */
    public function getAppealTerms()
    {
        return $this->appealTerms;
    }

    /**
     * Sets a new appealTerms
     *
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\AppealTerms $appealTerms
     * @return self
     */
    public function setAppealTerms(?\CleverIt\UBL\Invoice\RO\AppealTerms $appealTerms = null)
    {
        $this->appealTerms = $appealTerms;
        return $this;
    }

    /**
     * Adds as language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Language $language
     */
    public function addToLanguage(\CleverIt\UBL\Invoice\RO\Language $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @return \CleverIt\UBL\Invoice\RO\Language[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param \CleverIt\UBL\Invoice\RO\Language[] $language
     * @return self
     */
    public function setLanguage(array $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\BudgetAccountLine $budgetAccountLine
     */
    public function addToBudgetAccountLine(\CleverIt\UBL\Invoice\RO\BudgetAccountLine $budgetAccountLine)
    {
        $this->budgetAccountLine[] = $budgetAccountLine;
        return $this;
    }

    /**
     * isset budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBudgetAccountLine($index)
    {
        return isset($this->budgetAccountLine[$index]);
    }

    /**
     * unset budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBudgetAccountLine($index)
    {
        unset($this->budgetAccountLine[$index]);
    }

    /**
     * Gets as budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @return \CleverIt\UBL\Invoice\RO\BudgetAccountLine[]
     */
    public function getBudgetAccountLine()
    {
        return $this->budgetAccountLine;
    }

    /**
     * Sets a new budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param \CleverIt\UBL\Invoice\RO\BudgetAccountLine[] $budgetAccountLine
     * @return self
     */
    public function setBudgetAccountLine(array $budgetAccountLine = null)
    {
        $this->budgetAccountLine = $budgetAccountLine;
        return $this;
    }

    /**
     * Gets as replacedNoticeDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ReplacedNoticeDocumentReference
     */
    public function getReplacedNoticeDocumentReference()
    {
        return $this->replacedNoticeDocumentReference;
    }

    /**
     * Sets a new replacedNoticeDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     * @return self
     */
    public function setReplacedNoticeDocumentReference(?\CleverIt\UBL\Invoice\RO\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference = null)
    {
        $this->replacedNoticeDocumentReference = $replacedNoticeDocumentReference;
        return $this;
    }
}

