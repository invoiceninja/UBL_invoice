<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TenderingCriterionType
 *
 * ABIE
 *  Tendering Criterion. Details
 *  A class to describe an item of criterion support for representations of capabilities or the ability to meet tendering requirements, which an economic operator must provide for acceptance into a tendering process.
 *  Tendering Criterion
 * XSD Type: TenderingCriterionType
 */
class TenderingCriterionType
{

    /**
     * BBIE
     *  Tendering Criterion. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion. Criterion Type Code. Code
     *  A code signifying the type of criterion.
     *  0..1
     *  Tendering Criterion
     *  Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\CriterionTypeCode $criterionTypeCode
     */
    private $criterionTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Tendering Criterion. Weight Numeric. Numeric
     *  A weighting to provide for automatic scoring of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\WeightNumeric $weightNumeric
     */
    private $weightNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator. Indicator
     *  An indication that this criterion has been fulfilled.
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means fulfilled, FALSE means not fulfilled
     *
     * @var bool $fulfilmentIndicator
     */
    private $fulfilmentIndicator = null;

    /**
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator Type Code. Code
     *  A code signifying how this criterion has been fulfilled.
     *
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode
     */
    private $fulfilmentIndicatorTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion. Evaluation Method Type Code. Code
     *  A code signifying the type of Evaluation.
     *  0..1
     *  Tendering Criterion
     *  Evaluation Method Type Code
     *  Code
     *  Code. Type
     *  Weight
     *
     * @var \CleverIt\UBL\Invoice\EvaluationMethodTypeCode $evaluationMethodTypeCode
     */
    private $evaluationMethodTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\WeightingConsiderationDescription[] $weightingConsiderationDescription
     */
    private $weightingConsiderationDescription = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @var \CleverIt\UBL\Invoice\SubTenderingCriterion[] $subTenderingCriterion
     */
    private $subTenderingCriterion = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @var \CleverIt\UBL\Invoice\Legislation[] $legislation
     */
    private $legislation = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  1..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @var \CleverIt\UBL\Invoice\TenderingCriterionPropertyGroup[] $tenderingCriterionPropertyGroup
     */
    private $tenderingCriterionPropertyGroup = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Tendering Criterion. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion
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
     *  Tendering Criterion. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion
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
     * Gets as criterionTypeCode
     *
     * BBIE
     *  Tendering Criterion. Criterion Type Code. Code
     *  A code signifying the type of criterion.
     *  0..1
     *  Tendering Criterion
     *  Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\CriterionTypeCode
     */
    public function getCriterionTypeCode()
    {
        return $this->criterionTypeCode;
    }

    /**
     * Sets a new criterionTypeCode
     *
     * BBIE
     *  Tendering Criterion. Criterion Type Code. Code
     *  A code signifying the type of criterion.
     *  0..1
     *  Tendering Criterion
     *  Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\CriterionTypeCode $criterionTypeCode
     * @return self
     */
    public function setCriterionTypeCode(\CleverIt\UBL\Invoice\CriterionTypeCode $criterionTypeCode)
    {
        $this->criterionTypeCode = $criterionTypeCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as weightNumeric
     *
     * BBIE
     *  Tendering Criterion. Weight Numeric. Numeric
     *  A weighting to provide for automatic scoring of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\WeightNumeric
     */
    public function getWeightNumeric()
    {
        return $this->weightNumeric;
    }

    /**
     * Sets a new weightNumeric
     *
     * BBIE
     *  Tendering Criterion. Weight Numeric. Numeric
     *  A weighting to provide for automatic scoring of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\WeightNumeric $weightNumeric
     * @return self
     */
    public function setWeightNumeric(\CleverIt\UBL\Invoice\WeightNumeric $weightNumeric)
    {
        $this->weightNumeric = $weightNumeric;
        return $this;
    }

    /**
     * Gets as fulfilmentIndicator
     *
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator. Indicator
     *  An indication that this criterion has been fulfilled.
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means fulfilled, FALSE means not fulfilled
     *
     * @return bool
     */
    public function getFulfilmentIndicator()
    {
        return $this->fulfilmentIndicator;
    }

    /**
     * Sets a new fulfilmentIndicator
     *
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator. Indicator
     *  An indication that this criterion has been fulfilled.
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means fulfilled, FALSE means not fulfilled
     *
     * @param bool $fulfilmentIndicator
     * @return self
     */
    public function setFulfilmentIndicator($fulfilmentIndicator)
    {
        $this->fulfilmentIndicator = $fulfilmentIndicator;
        return $this;
    }

    /**
     * Gets as fulfilmentIndicatorTypeCode
     *
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator Type Code. Code
     *  A code signifying how this criterion has been fulfilled.
     *
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\FulfilmentIndicatorTypeCode
     */
    public function getFulfilmentIndicatorTypeCode()
    {
        return $this->fulfilmentIndicatorTypeCode;
    }

    /**
     * Sets a new fulfilmentIndicatorTypeCode
     *
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator Type Code. Code
     *  A code signifying how this criterion has been fulfilled.
     *
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode
     * @return self
     */
    public function setFulfilmentIndicatorTypeCode(\CleverIt\UBL\Invoice\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode)
    {
        $this->fulfilmentIndicatorTypeCode = $fulfilmentIndicatorTypeCode;
        return $this;
    }

    /**
     * Gets as evaluationMethodTypeCode
     *
     * BBIE
     *  Tendering Criterion. Evaluation Method Type Code. Code
     *  A code signifying the type of Evaluation.
     *  0..1
     *  Tendering Criterion
     *  Evaluation Method Type Code
     *  Code
     *  Code. Type
     *  Weight
     *
     * @return \CleverIt\UBL\Invoice\EvaluationMethodTypeCode
     */
    public function getEvaluationMethodTypeCode()
    {
        return $this->evaluationMethodTypeCode;
    }

    /**
     * Sets a new evaluationMethodTypeCode
     *
     * BBIE
     *  Tendering Criterion. Evaluation Method Type Code. Code
     *  A code signifying the type of Evaluation.
     *  0..1
     *  Tendering Criterion
     *  Evaluation Method Type Code
     *  Code
     *  Code. Type
     *  Weight
     *
     * @param \CleverIt\UBL\Invoice\EvaluationMethodTypeCode $evaluationMethodTypeCode
     * @return self
     */
    public function setEvaluationMethodTypeCode(\CleverIt\UBL\Invoice\EvaluationMethodTypeCode $evaluationMethodTypeCode)
    {
        $this->evaluationMethodTypeCode = $evaluationMethodTypeCode;
        return $this;
    }

    /**
     * Adds as weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\WeightingConsiderationDescription $weightingConsiderationDescription
     */
    public function addToWeightingConsiderationDescription(\CleverIt\UBL\Invoice\WeightingConsiderationDescription $weightingConsiderationDescription)
    {
        $this->weightingConsiderationDescription[] = $weightingConsiderationDescription;
        return $this;
    }

    /**
     * isset weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeightingConsiderationDescription($index)
    {
        return isset($this->weightingConsiderationDescription[$index]);
    }

    /**
     * unset weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeightingConsiderationDescription($index)
    {
        unset($this->weightingConsiderationDescription[$index]);
    }

    /**
     * Gets as weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\WeightingConsiderationDescription[]
     */
    public function getWeightingConsiderationDescription()
    {
        return $this->weightingConsiderationDescription;
    }

    /**
     * Sets a new weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\WeightingConsiderationDescription[] $weightingConsiderationDescription
     * @return self
     */
    public function setWeightingConsiderationDescription(array $weightingConsiderationDescription)
    {
        $this->weightingConsiderationDescription = $weightingConsiderationDescription;
        return $this;
    }

    /**
     * Adds as subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\SubTenderingCriterion $subTenderingCriterion
     */
    public function addToSubTenderingCriterion(\CleverIt\UBL\Invoice\SubTenderingCriterion $subTenderingCriterion)
    {
        $this->subTenderingCriterion[] = $subTenderingCriterion;
        return $this;
    }

    /**
     * isset subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTenderingCriterion($index)
    {
        return isset($this->subTenderingCriterion[$index]);
    }

    /**
     * unset subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTenderingCriterion($index)
    {
        unset($this->subTenderingCriterion[$index]);
    }

    /**
     * Gets as subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @return \CleverIt\UBL\Invoice\SubTenderingCriterion[]
     */
    public function getSubTenderingCriterion()
    {
        return $this->subTenderingCriterion;
    }

    /**
     * Sets a new subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param \CleverIt\UBL\Invoice\SubTenderingCriterion[] $subTenderingCriterion
     * @return self
     */
    public function setSubTenderingCriterion(array $subTenderingCriterion)
    {
        $this->subTenderingCriterion = $subTenderingCriterion;
        return $this;
    }

    /**
     * Adds as legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Legislation $legislation
     */
    public function addToLegislation(\CleverIt\UBL\Invoice\Legislation $legislation)
    {
        $this->legislation[] = $legislation;
        return $this;
    }

    /**
     * isset legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegislation($index)
    {
        return isset($this->legislation[$index]);
    }

    /**
     * unset legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegislation($index)
    {
        unset($this->legislation[$index]);
    }

    /**
     * Gets as legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @return \CleverIt\UBL\Invoice\Legislation[]
     */
    public function getLegislation()
    {
        return $this->legislation;
    }

    /**
     * Sets a new legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @param \CleverIt\UBL\Invoice\Legislation[] $legislation
     * @return self
     */
    public function setLegislation(array $legislation)
    {
        $this->legislation = $legislation;
        return $this;
    }

    /**
     * Adds as tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  1..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\TenderingCriterionPropertyGroup $tenderingCriterionPropertyGroup
     */
    public function addToTenderingCriterionPropertyGroup(\CleverIt\UBL\Invoice\TenderingCriterionPropertyGroup $tenderingCriterionPropertyGroup)
    {
        $this->tenderingCriterionPropertyGroup[] = $tenderingCriterionPropertyGroup;
        return $this;
    }

    /**
     * isset tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  1..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderingCriterionPropertyGroup($index)
    {
        return isset($this->tenderingCriterionPropertyGroup[$index]);
    }

    /**
     * unset tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  1..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderingCriterionPropertyGroup($index)
    {
        unset($this->tenderingCriterionPropertyGroup[$index]);
    }

    /**
     * Gets as tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  1..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return \CleverIt\UBL\Invoice\TenderingCriterionPropertyGroup[]
     */
    public function getTenderingCriterionPropertyGroup()
    {
        return $this->tenderingCriterionPropertyGroup;
    }

    /**
     * Sets a new tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  1..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param \CleverIt\UBL\Invoice\TenderingCriterionPropertyGroup[] $tenderingCriterionPropertyGroup
     * @return self
     */
    public function setTenderingCriterionPropertyGroup(array $tenderingCriterionPropertyGroup)
    {
        $this->tenderingCriterionPropertyGroup = $tenderingCriterionPropertyGroup;
        return $this;
    }


}

