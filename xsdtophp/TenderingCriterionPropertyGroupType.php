<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TenderingCriterionPropertyGroupType
 *
 * ABIE
 *  Tendering Criterion Property Group. Details
 *  A class to describe a group of tendering criteria
 *  Tendering Criterion Property Group
 * XSD Type: TenderingCriterionPropertyGroupType
 */
class TenderingCriterionPropertyGroupType
{

    /**
     * BBIE
     *  Tendering Criterion Property Group. Identifier
     *  An identifier for the group of criteria.
     *  0..1
     *  Tendering Criterion Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Name
     *  The name of the group.
     *  0..1
     *  Tendering Criterion Property Group
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Property Group Type Code. Code
     *  A code signifying the type of the property group
     *  0..1
     *  Tendering Criterion Property Group
     *  Property Group Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\PropertyGroupTypeCode $propertyGroupTypeCode
     */
    private $propertyGroupTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator. Indicator
     *  An indication that this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $fulfilmentIndicator
     */
    private $fulfilmentIndicator = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator Type Code. Code
     *  A code signifying how this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode
     */
    private $fulfilmentIndicatorTypeCode = null;

    /**
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @var \CleverIt\UBL\Invoice\TenderingCriterionProperty[] $tenderingCriterionProperty
     */
    private $tenderingCriterionProperty = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @var \CleverIt\UBL\Invoice\SubsidiaryTenderingCriterionPropertyGroup[] $subsidiaryTenderingCriterionPropertyGroup
     */
    private $subsidiaryTenderingCriterionPropertyGroup = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Tendering Criterion Property Group. Identifier
     *  An identifier for the group of criteria.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Identifier
     *  An identifier for the group of criteria.
     *  0..1
     *  Tendering Criterion Property Group
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
     * Gets as name
     *
     * BBIE
     *  Tendering Criterion Property Group. Name
     *  The name of the group.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Name
     *  The name of the group.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     * Gets as propertyGroupTypeCode
     *
     * BBIE
     *  Tendering Criterion Property Group. Property Group Type Code. Code
     *  A code signifying the type of the property group
     *  0..1
     *  Tendering Criterion Property Group
     *  Property Group Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\PropertyGroupTypeCode
     */
    public function getPropertyGroupTypeCode()
    {
        return $this->propertyGroupTypeCode;
    }

    /**
     * Sets a new propertyGroupTypeCode
     *
     * BBIE
     *  Tendering Criterion Property Group. Property Group Type Code. Code
     *  A code signifying the type of the property group
     *  0..1
     *  Tendering Criterion Property Group
     *  Property Group Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\PropertyGroupTypeCode $propertyGroupTypeCode
     * @return self
     */
    public function setPropertyGroupTypeCode(\CleverIt\UBL\Invoice\PropertyGroupTypeCode $propertyGroupTypeCode)
    {
        $this->propertyGroupTypeCode = $propertyGroupTypeCode;
        return $this;
    }

    /**
     * Gets as fulfilmentIndicator
     *
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator. Indicator
     *  An indication that this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
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
     *  Tendering Criterion Property Group. Fulfilment Indicator. Indicator
     *  An indication that this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
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
     *  Tendering Criterion Property Group. Fulfilment Indicator Type Code. Code
     *  A code signifying how this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Fulfilment Indicator Type Code. Code
     *  A code signifying how this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
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
     * Adds as tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\TenderingCriterionProperty $tenderingCriterionProperty
     */
    public function addToTenderingCriterionProperty(\CleverIt\UBL\Invoice\TenderingCriterionProperty $tenderingCriterionProperty)
    {
        $this->tenderingCriterionProperty[] = $tenderingCriterionProperty;
        return $this;
    }

    /**
     * isset tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderingCriterionProperty($index)
    {
        return isset($this->tenderingCriterionProperty[$index]);
    }

    /**
     * unset tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderingCriterionProperty($index)
    {
        unset($this->tenderingCriterionProperty[$index]);
    }

    /**
     * Gets as tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @return \CleverIt\UBL\Invoice\TenderingCriterionProperty[]
     */
    public function getTenderingCriterionProperty()
    {
        return $this->tenderingCriterionProperty;
    }

    /**
     * Sets a new tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @param \CleverIt\UBL\Invoice\TenderingCriterionProperty[] $tenderingCriterionProperty
     * @return self
     */
    public function setTenderingCriterionProperty(array $tenderingCriterionProperty)
    {
        $this->tenderingCriterionProperty = $tenderingCriterionProperty;
        return $this;
    }

    /**
     * Adds as subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\SubsidiaryTenderingCriterionPropertyGroup $subsidiaryTenderingCriterionPropertyGroup
     */
    public function addToSubsidiaryTenderingCriterionPropertyGroup(\CleverIt\UBL\Invoice\SubsidiaryTenderingCriterionPropertyGroup $subsidiaryTenderingCriterionPropertyGroup)
    {
        $this->subsidiaryTenderingCriterionPropertyGroup[] = $subsidiaryTenderingCriterionPropertyGroup;
        return $this;
    }

    /**
     * isset subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsidiaryTenderingCriterionPropertyGroup($index)
    {
        return isset($this->subsidiaryTenderingCriterionPropertyGroup[$index]);
    }

    /**
     * unset subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsidiaryTenderingCriterionPropertyGroup($index)
    {
        unset($this->subsidiaryTenderingCriterionPropertyGroup[$index]);
    }

    /**
     * Gets as subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return \CleverIt\UBL\Invoice\SubsidiaryTenderingCriterionPropertyGroup[]
     */
    public function getSubsidiaryTenderingCriterionPropertyGroup()
    {
        return $this->subsidiaryTenderingCriterionPropertyGroup;
    }

    /**
     * Sets a new subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param \CleverIt\UBL\Invoice\SubsidiaryTenderingCriterionPropertyGroup[] $subsidiaryTenderingCriterionPropertyGroup
     * @return self
     */
    public function setSubsidiaryTenderingCriterionPropertyGroup(array $subsidiaryTenderingCriterionPropertyGroup)
    {
        $this->subsidiaryTenderingCriterionPropertyGroup = $subsidiaryTenderingCriterionPropertyGroup;
        return $this;
    }


}

