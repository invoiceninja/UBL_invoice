<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DocumentMetadataType
 *
 * ABIE
 *  Document Metadata. Details
 *  A class to describe the metadata of a specific business document based on any document format (e.g. UBL, EDIFACT, ...).
 *  Document Metadata
 * XSD Type: DocumentMetadataType
 */
class DocumentMetadataType
{

    /**
     * BBIE
     *  Document Metadata. Identifier
     *  An identifier for the document.
     *  0..1
     *  Document Metadata
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Document Metadata. Format Identifier. Identifier
     *  An identifier for the document format (e.g. standard business vocabularies).
     *  1
     *  Document Metadata
     *  Format Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL, ISO20022, EDIFACT
     *
     * @var \CleverIt\UBL\Invoice\FormatID $formatID
     */
    private $formatID = null;

    /**
     * BBIE
     *  Document Metadata. Version Identifier. Identifier
     *  An identifier for a precise version of a document format.
     *  1
     *  Document Metadata
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
     *
     * @var \CleverIt\UBL\Invoice\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Document Metadata. Schema URI. Identifier
     *  The Uniform Resource Identifier (URI) of a schema definition for the business document (e.g. a namespace URI for XML schemas, a message ID for non-xml legacy documents).
     *  0..1
     *  Document Metadata
     *  Schema URI
     *  Identifier
     *  Identifier. Type
     *  urn:oasis:names:specification:ubl:schema:xsd:Invoice-2, INVOIC
     *
     * @var \CleverIt\UBL\Invoice\SchemaURI $schemaURI
     */
    private $schemaURI = null;

    /**
     * BBIE
     *  Document Metadata. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Metadata
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Document Metadata. Identifier
     *  An identifier for the document.
     *  0..1
     *  Document Metadata
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
     *  Document Metadata. Identifier
     *  An identifier for the document.
     *  0..1
     *  Document Metadata
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
     * Gets as formatID
     *
     * BBIE
     *  Document Metadata. Format Identifier. Identifier
     *  An identifier for the document format (e.g. standard business vocabularies).
     *  1
     *  Document Metadata
     *  Format Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL, ISO20022, EDIFACT
     *
     * @return \CleverIt\UBL\Invoice\FormatID
     */
    public function getFormatID()
    {
        return $this->formatID;
    }

    /**
     * Sets a new formatID
     *
     * BBIE
     *  Document Metadata. Format Identifier. Identifier
     *  An identifier for the document format (e.g. standard business vocabularies).
     *  1
     *  Document Metadata
     *  Format Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL, ISO20022, EDIFACT
     *
     * @param \CleverIt\UBL\Invoice\FormatID $formatID
     * @return self
     */
    public function setFormatID(\CleverIt\UBL\Invoice\FormatID $formatID)
    {
        $this->formatID = $formatID;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Document Metadata. Version Identifier. Identifier
     *  An identifier for a precise version of a document format.
     *  1
     *  Document Metadata
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
     *
     * @return \CleverIt\UBL\Invoice\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Document Metadata. Version Identifier. Identifier
     *  An identifier for a precise version of a document format.
     *  1
     *  Document Metadata
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
     *
     * @param \CleverIt\UBL\Invoice\VersionID $versionID
     * @return self
     */
    public function setVersionID(\CleverIt\UBL\Invoice\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as schemaURI
     *
     * BBIE
     *  Document Metadata. Schema URI. Identifier
     *  The Uniform Resource Identifier (URI) of a schema definition for the business document (e.g. a namespace URI for XML schemas, a message ID for non-xml legacy documents).
     *  0..1
     *  Document Metadata
     *  Schema URI
     *  Identifier
     *  Identifier. Type
     *  urn:oasis:names:specification:ubl:schema:xsd:Invoice-2, INVOIC
     *
     * @return \CleverIt\UBL\Invoice\SchemaURI
     */
    public function getSchemaURI()
    {
        return $this->schemaURI;
    }

    /**
     * Sets a new schemaURI
     *
     * BBIE
     *  Document Metadata. Schema URI. Identifier
     *  The Uniform Resource Identifier (URI) of a schema definition for the business document (e.g. a namespace URI for XML schemas, a message ID for non-xml legacy documents).
     *  0..1
     *  Document Metadata
     *  Schema URI
     *  Identifier
     *  Identifier. Type
     *  urn:oasis:names:specification:ubl:schema:xsd:Invoice-2, INVOIC
     *
     * @param \CleverIt\UBL\Invoice\SchemaURI $schemaURI
     * @return self
     */
    public function setSchemaURI(\CleverIt\UBL\Invoice\SchemaURI $schemaURI)
    {
        $this->schemaURI = $schemaURI;
        return $this;
    }

    /**
     * Gets as documentTypeCode
     *
     * BBIE
     *  Document Metadata. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Metadata
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * BBIE
     *  Document Metadata. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Metadata
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(\CleverIt\UBL\Invoice\DocumentTypeCode $documentTypeCode)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }


}

