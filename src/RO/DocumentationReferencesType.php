<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing DocumentationReferencesType
 *
 *
 * XSD Type: DocumentationReferencesType
 */
class DocumentationReferencesType
{
    /**
     * @var string $documentationReference
     */
    private $documentationReference = null;

    /**
     * Gets as documentationReference
     *
     * @return string
     */
    public function getDocumentationReference()
    {
        return $this->documentationReference;
    }

    /**
     * Sets a new documentationReference
     *
     * @param string $documentationReference
     * @return self
     */
    public function setDocumentationReference($documentationReference)
    {
        $this->documentationReference = $documentationReference;
        return $this;
    }
}

