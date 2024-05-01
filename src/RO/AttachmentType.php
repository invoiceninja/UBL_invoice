<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing AttachmentType
 *
 * ABIE
 *  Attachment. Details
 *  A class to describe an attached document. An attachment can refer to an external document or be included with the document being exchanged.
 *  Attachment
 * XSD Type: AttachmentType
 */
class AttachmentType
{
    /**
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     */
    private $embeddedDocumentBinaryObject = null;

    /**
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\ExternalReference $externalReference
     */
    private $externalReference = null;

    /**
     * Gets as embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\EmbeddedDocumentBinaryObject
     */
    public function getEmbeddedDocumentBinaryObject()
    {
        return $this->embeddedDocumentBinaryObject;
    }

    /**
     * Sets a new embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     * @return self
     */
    public function setEmbeddedDocumentBinaryObject(?\CleverIt\UBL\Invoice\RO\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject = null)
    {
        $this->embeddedDocumentBinaryObject = $embeddedDocumentBinaryObject;
        return $this;
    }

    /**
     * Gets as externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\ExternalReference
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\ExternalReference $externalReference
     * @return self
     */
    public function setExternalReference(?\CleverIt\UBL\Invoice\RO\ExternalReference $externalReference = null)
    {
        $this->externalReference = $externalReference;
        return $this;
    }
}

