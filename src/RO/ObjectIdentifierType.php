<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ObjectIdentifierType
 *
 *
 * XSD Type: ObjectIdentifierType
 */
class ObjectIdentifierType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\DocumentationReferencesType $documentationReferences
     */
    private $documentationReferences = null;

    /**
     * Gets as identifier
     *
     * @return \CleverIt\UBL\Invoice\RO\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * @param \CleverIt\UBL\Invoice\RO\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\CleverIt\UBL\Invoice\RO\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as documentationReferences
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentationReferencesType
     */
    public function getDocumentationReferences()
    {
        return $this->documentationReferences;
    }

    /**
     * Sets a new documentationReferences
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentationReferencesType $documentationReferences
     * @return self
     */
    public function setDocumentationReferences(?\CleverIt\UBL\Invoice\RO\DocumentationReferencesType $documentationReferences = null)
    {
        $this->documentationReferences = $documentationReferences;
        return $this;
    }
}

