<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TenderingCriterionPropertyType
 *
 * ABIE
 *  Tendering Criterion Property. Details
 *  A class to describe the criterion properties.
 *  Tendering Criterion Property
 * XSD Type: TenderingCriterionPropertyType
 */
class TenderingCriterionPropertyType
{

    /**
     * BBIE
     *  Tendering Criterion Property. Identifier
     *  An identifier to refer to the criterion property.
     *  0..1
     *  Tendering Criterion Property
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Name
     *  The name of the criterion property.
     *  0..1
     *  Tendering Criterion Property
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Type Code. Code
     *  A mutually agreed code signifying the type of the property.
     *  0..1
     *  Tendering Criterion Property
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Value Data Type Code. Code
     *  The data type of the numeric value and any constraints on the data type metadata.
     *  0..1
     *  Tendering Criterion Property
     *  Value Data Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ValueDataTypeCode $valueDataTypeCode
     */
    private $valueDataTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Value Unit Code. Code
     *  The unit of measure of the numeric value as a quantity or measure.
     *  0..1
     *  Tendering Criterion Property
     *  Value Unit Code
     *  Code
     *  Unit Of Measure
     *  Unit Of Measure_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ValueUnitCode $valueUnitCode
     */
    private $valueUnitCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Value Currency Code. Code
     *  The currency of the numeric value as an amount.
     *  0..1
     *  Tendering Criterion Property
     *  Value Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ValueCurrencyCode $valueCurrencyCode
     */
    private $valueCurrencyCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Amount. Amount
     *  The expected amount that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\ExpectedAmount $expectedAmount
     */
    private $expectedAmount = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Identifier. Identifier
     *  The expected identifier that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ExpectedID $expectedID
     */
    private $expectedID = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Code. Code
     *  The expected code that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ExpectedCode $expectedCode
     */
    private $expectedCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Value. Numeric
     *  The expected value that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\ExpectedValueNumeric $expectedValueNumeric
     */
    private $expectedValueNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Description. Text
     *  The description of the of the expected 
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\ExpectedDescription $expectedDescription
     */
    private $expectedDescription = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Maximum_ Amount. Amount
     *  The maximum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Minimum_ Amount. Amount
     *  The minimum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Maximum_ Value. Numeric
     *  The maximum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumValueNumeric $maximumValueNumeric
     */
    private $maximumValueNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Minimum_ Value. Numeric
     *  The minimum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\MinimumValueNumeric $minimumValueNumeric
     */
    private $minimumValueNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Translation Type Code. Code
     *  The type of Transation that the requirement shall be translated for example certified translation
     *  0..1
     *  Tendering Criterion Property
     *  Translation Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\TranslationTypeCode $translationTypeCode
     */
    private $translationTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\CertificationLevelDescription[] $certificationLevelDescription
     */
    private $certificationLevelDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Criterion Property. Copy Quality Type Code. Code
     *  The type of Copy quality, expressed as a code.
     *  0..1
     *  Tendering Criterion Property
     *  Copy Quality Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\CopyQualityTypeCode $copyQualityTypeCode
     */
    private $copyQualityTypeCode = null;

    /**
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\ApplicablePeriod[] $applicablePeriod
     */
    private $applicablePeriod = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @var \CleverIt\UBL\Invoice\TemplateEvidence[] $templateEvidence
     */
    private $templateEvidence = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Tendering Criterion Property. Identifier
     *  An identifier to refer to the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Identifier
     *  An identifier to refer to the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Name
     *  The name of the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Name
     *  The name of the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     * Gets as typeCode
     *
     * BBIE
     *  Tendering Criterion Property. Type Code. Code
     *  A mutually agreed code signifying the type of the property.
     *  0..1
     *  Tendering Criterion Property
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\TypeCode
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * BBIE
     *  Tendering Criterion Property. Type Code. Code
     *  A mutually agreed code signifying the type of the property.
     *  0..1
     *  Tendering Criterion Property
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\TypeCode $typeCode
     * @return self
     */
    public function setTypeCode(\CleverIt\UBL\Invoice\TypeCode $typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * Gets as valueDataTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Data Type Code. Code
     *  The data type of the numeric value and any constraints on the data type metadata.
     *  0..1
     *  Tendering Criterion Property
     *  Value Data Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ValueDataTypeCode
     */
    public function getValueDataTypeCode()
    {
        return $this->valueDataTypeCode;
    }

    /**
     * Sets a new valueDataTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Data Type Code. Code
     *  The data type of the numeric value and any constraints on the data type metadata.
     *  0..1
     *  Tendering Criterion Property
     *  Value Data Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ValueDataTypeCode $valueDataTypeCode
     * @return self
     */
    public function setValueDataTypeCode(\CleverIt\UBL\Invoice\ValueDataTypeCode $valueDataTypeCode)
    {
        $this->valueDataTypeCode = $valueDataTypeCode;
        return $this;
    }

    /**
     * Gets as valueUnitCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Unit Code. Code
     *  The unit of measure of the numeric value as a quantity or measure.
     *  0..1
     *  Tendering Criterion Property
     *  Value Unit Code
     *  Code
     *  Unit Of Measure
     *  Unit Of Measure_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ValueUnitCode
     */
    public function getValueUnitCode()
    {
        return $this->valueUnitCode;
    }

    /**
     * Sets a new valueUnitCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Unit Code. Code
     *  The unit of measure of the numeric value as a quantity or measure.
     *  0..1
     *  Tendering Criterion Property
     *  Value Unit Code
     *  Code
     *  Unit Of Measure
     *  Unit Of Measure_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ValueUnitCode $valueUnitCode
     * @return self
     */
    public function setValueUnitCode(\CleverIt\UBL\Invoice\ValueUnitCode $valueUnitCode)
    {
        $this->valueUnitCode = $valueUnitCode;
        return $this;
    }

    /**
     * Gets as valueCurrencyCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Currency Code. Code
     *  The currency of the numeric value as an amount.
     *  0..1
     *  Tendering Criterion Property
     *  Value Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ValueCurrencyCode
     */
    public function getValueCurrencyCode()
    {
        return $this->valueCurrencyCode;
    }

    /**
     * Sets a new valueCurrencyCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Currency Code. Code
     *  The currency of the numeric value as an amount.
     *  0..1
     *  Tendering Criterion Property
     *  Value Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ValueCurrencyCode $valueCurrencyCode
     * @return self
     */
    public function setValueCurrencyCode(\CleverIt\UBL\Invoice\ValueCurrencyCode $valueCurrencyCode)
    {
        $this->valueCurrencyCode = $valueCurrencyCode;
        return $this;
    }

    /**
     * Gets as expectedAmount
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Amount. Amount
     *  The expected amount that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\ExpectedAmount
     */
    public function getExpectedAmount()
    {
        return $this->expectedAmount;
    }

    /**
     * Sets a new expectedAmount
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Amount. Amount
     *  The expected amount that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\ExpectedAmount $expectedAmount
     * @return self
     */
    public function setExpectedAmount(\CleverIt\UBL\Invoice\ExpectedAmount $expectedAmount)
    {
        $this->expectedAmount = $expectedAmount;
        return $this;
    }

    /**
     * Gets as expectedID
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Identifier. Identifier
     *  The expected identifier that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ExpectedID
     */
    public function getExpectedID()
    {
        return $this->expectedID;
    }

    /**
     * Sets a new expectedID
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Identifier. Identifier
     *  The expected identifier that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ExpectedID $expectedID
     * @return self
     */
    public function setExpectedID(\CleverIt\UBL\Invoice\ExpectedID $expectedID)
    {
        $this->expectedID = $expectedID;
        return $this;
    }

    /**
     * Gets as expectedCode
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Code. Code
     *  The expected code that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ExpectedCode
     */
    public function getExpectedCode()
    {
        return $this->expectedCode;
    }

    /**
     * Sets a new expectedCode
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Code. Code
     *  The expected code that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ExpectedCode $expectedCode
     * @return self
     */
    public function setExpectedCode(\CleverIt\UBL\Invoice\ExpectedCode $expectedCode)
    {
        $this->expectedCode = $expectedCode;
        return $this;
    }

    /**
     * Gets as expectedValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Value. Numeric
     *  The expected value that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\ExpectedValueNumeric
     */
    public function getExpectedValueNumeric()
    {
        return $this->expectedValueNumeric;
    }

    /**
     * Sets a new expectedValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Value. Numeric
     *  The expected value that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\ExpectedValueNumeric $expectedValueNumeric
     * @return self
     */
    public function setExpectedValueNumeric(\CleverIt\UBL\Invoice\ExpectedValueNumeric $expectedValueNumeric)
    {
        $this->expectedValueNumeric = $expectedValueNumeric;
        return $this;
    }

    /**
     * Gets as expectedDescription
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Description. Text
     *  The description of the of the expected 
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\ExpectedDescription
     */
    public function getExpectedDescription()
    {
        return $this->expectedDescription;
    }

    /**
     * Sets a new expectedDescription
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Description. Text
     *  The description of the of the expected 
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\ExpectedDescription $expectedDescription
     * @return self
     */
    public function setExpectedDescription(\CleverIt\UBL\Invoice\ExpectedDescription $expectedDescription)
    {
        $this->expectedDescription = $expectedDescription;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Amount. Amount
     *  The maximum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Amount. Amount
     *  The maximum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(\CleverIt\UBL\Invoice\MaximumAmount $maximumAmount)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Gets as minimumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Amount. Amount
     *  The minimum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Amount. Amount
     *  The minimum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(\CleverIt\UBL\Invoice\MinimumAmount $minimumAmount)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Value. Numeric
     *  The maximum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumValueNumeric
     */
    public function getMaximumValueNumeric()
    {
        return $this->maximumValueNumeric;
    }

    /**
     * Sets a new maximumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Value. Numeric
     *  The maximum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumValueNumeric $maximumValueNumeric
     * @return self
     */
    public function setMaximumValueNumeric(\CleverIt\UBL\Invoice\MaximumValueNumeric $maximumValueNumeric)
    {
        $this->maximumValueNumeric = $maximumValueNumeric;
        return $this;
    }

    /**
     * Gets as minimumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Value. Numeric
     *  The minimum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\MinimumValueNumeric
     */
    public function getMinimumValueNumeric()
    {
        return $this->minimumValueNumeric;
    }

    /**
     * Sets a new minimumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Value. Numeric
     *  The minimum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\MinimumValueNumeric $minimumValueNumeric
     * @return self
     */
    public function setMinimumValueNumeric(\CleverIt\UBL\Invoice\MinimumValueNumeric $minimumValueNumeric)
    {
        $this->minimumValueNumeric = $minimumValueNumeric;
        return $this;
    }

    /**
     * Gets as translationTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Translation Type Code. Code
     *  The type of Transation that the requirement shall be translated for example certified translation
     *  0..1
     *  Tendering Criterion Property
     *  Translation Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\TranslationTypeCode
     */
    public function getTranslationTypeCode()
    {
        return $this->translationTypeCode;
    }

    /**
     * Sets a new translationTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Translation Type Code. Code
     *  The type of Transation that the requirement shall be translated for example certified translation
     *  0..1
     *  Tendering Criterion Property
     *  Translation Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\TranslationTypeCode $translationTypeCode
     * @return self
     */
    public function setTranslationTypeCode(\CleverIt\UBL\Invoice\TranslationTypeCode $translationTypeCode)
    {
        $this->translationTypeCode = $translationTypeCode;
        return $this;
    }

    /**
     * Adds as certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\CertificationLevelDescription $certificationLevelDescription
     */
    public function addToCertificationLevelDescription(\CleverIt\UBL\Invoice\CertificationLevelDescription $certificationLevelDescription)
    {
        $this->certificationLevelDescription[] = $certificationLevelDescription;
        return $this;
    }

    /**
     * isset certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificationLevelDescription($index)
    {
        return isset($this->certificationLevelDescription[$index]);
    }

    /**
     * unset certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificationLevelDescription($index)
    {
        unset($this->certificationLevelDescription[$index]);
    }

    /**
     * Gets as certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\CertificationLevelDescription[]
     */
    public function getCertificationLevelDescription()
    {
        return $this->certificationLevelDescription;
    }

    /**
     * Sets a new certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\CertificationLevelDescription[] $certificationLevelDescription
     * @return self
     */
    public function setCertificationLevelDescription(array $certificationLevelDescription)
    {
        $this->certificationLevelDescription = $certificationLevelDescription;
        return $this;
    }

    /**
     * Gets as copyQualityTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Copy Quality Type Code. Code
     *  The type of Copy quality, expressed as a code.
     *  0..1
     *  Tendering Criterion Property
     *  Copy Quality Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\CopyQualityTypeCode
     */
    public function getCopyQualityTypeCode()
    {
        return $this->copyQualityTypeCode;
    }

    /**
     * Sets a new copyQualityTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Copy Quality Type Code. Code
     *  The type of Copy quality, expressed as a code.
     *  0..1
     *  Tendering Criterion Property
     *  Copy Quality Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\CopyQualityTypeCode $copyQualityTypeCode
     * @return self
     */
    public function setCopyQualityTypeCode(\CleverIt\UBL\Invoice\CopyQualityTypeCode $copyQualityTypeCode)
    {
        $this->copyQualityTypeCode = $copyQualityTypeCode;
        return $this;
    }

    /**
     * Adds as applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ApplicablePeriod $applicablePeriod
     */
    public function addToApplicablePeriod(\CleverIt\UBL\Invoice\ApplicablePeriod $applicablePeriod)
    {
        $this->applicablePeriod[] = $applicablePeriod;
        return $this;
    }

    /**
     * isset applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicablePeriod($index)
    {
        return isset($this->applicablePeriod[$index]);
    }

    /**
     * unset applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicablePeriod($index)
    {
        unset($this->applicablePeriod[$index]);
    }

    /**
     * Gets as applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\ApplicablePeriod[]
     */
    public function getApplicablePeriod()
    {
        return $this->applicablePeriod;
    }

    /**
     * Sets a new applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\ApplicablePeriod[] $applicablePeriod
     * @return self
     */
    public function setApplicablePeriod(array $applicablePeriod)
    {
        $this->applicablePeriod = $applicablePeriod;
        return $this;
    }

    /**
     * Adds as templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\TemplateEvidence $templateEvidence
     */
    public function addToTemplateEvidence(\CleverIt\UBL\Invoice\TemplateEvidence $templateEvidence)
    {
        $this->templateEvidence[] = $templateEvidence;
        return $this;
    }

    /**
     * isset templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemplateEvidence($index)
    {
        return isset($this->templateEvidence[$index]);
    }

    /**
     * unset templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemplateEvidence($index)
    {
        unset($this->templateEvidence[$index]);
    }

    /**
     * Gets as templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return \CleverIt\UBL\Invoice\TemplateEvidence[]
     */
    public function getTemplateEvidence()
    {
        return $this->templateEvidence;
    }

    /**
     * Sets a new templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param \CleverIt\UBL\Invoice\TemplateEvidence[] $templateEvidence
     * @return self
     */
    public function setTemplateEvidence(array $templateEvidence)
    {
        $this->templateEvidence = $templateEvidence;
        return $this;
    }


}

