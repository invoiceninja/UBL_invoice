<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing TenderRequirementType
 *
 * ABIE
 *  Tender Requirement. Details
 *  A template for a required document in a tendering process.
 *  Tender Requirement
 * XSD Type: TenderRequirementType
 */
class TenderRequirementType
{

    /**
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\TemplateDocumentReference $templateDocumentReference
     */
    private $templateDocumentReference = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
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
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
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
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
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
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
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
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
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
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
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
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
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
     * Gets as templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\TemplateDocumentReference
     */
    public function getTemplateDocumentReference()
    {
        return $this->templateDocumentReference;
    }

    /**
     * Sets a new templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\TemplateDocumentReference $templateDocumentReference
     * @return self
     */
    public function setTemplateDocumentReference(\CleverIt\UBL\Invoice\TemplateDocumentReference $templateDocumentReference)
    {
        $this->templateDocumentReference = $templateDocumentReference;
        return $this;
    }


}

