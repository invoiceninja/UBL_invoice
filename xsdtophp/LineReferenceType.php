<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing LineReferenceType
 *
 * ABIE
 *  Line Reference. Details
 *  A class to define a reference to a line in a document.
 *  Line Reference
 * XSD Type: LineReferenceType
 */
class LineReferenceType
{

    /**
     * BBIE
     *  Line Reference. Line Identifier. Identifier
     *  Identifies the referenced line in the document.
     *  1
     *  Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\LineID $lineID
     */
    private $lineID = null;

    /**
     * BBIE
     *  Line Reference. UUID. Identifier
     *  A universally unique identifier for this line reference.
     *  0..1
     *  Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced line with respect to its original state.
     *  0..1
     *  Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * ASBIE
     *  Line Reference. Document Reference
     *  A reference to the document containing the referenced line.
     *  0..1
     *  Line Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * Gets as lineID
     *
     * BBIE
     *  Line Reference. Line Identifier. Identifier
     *  Identifies the referenced line in the document.
     *  1
     *  Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\LineID
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * BBIE
     *  Line Reference. Line Identifier. Identifier
     *  Identifies the referenced line in the document.
     *  1
     *  Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\LineID $lineID
     * @return self
     */
    public function setLineID(\CleverIt\UBL\Invoice\LineID $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Line Reference. UUID. Identifier
     *  A universally unique identifier for this line reference.
     *  0..1
     *  Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Line Reference. UUID. Identifier
     *  A universally unique identifier for this line reference.
     *  0..1
     *  Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\UUID $uUID
     * @return self
     */
    public function setUUID(\CleverIt\UBL\Invoice\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as lineStatusCode
     *
     * BBIE
     *  Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced line with respect to its original state.
     *  0..1
     *  Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced line with respect to its original state.
     *  0..1
     *  Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(\CleverIt\UBL\Invoice\LineStatusCode $lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Line Reference. Document Reference
     *  A reference to the document containing the referenced line.
     *  0..1
     *  Line Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Line Reference. Document Reference
     *  A reference to the document containing the referenced line.
     *  0..1
     *  Line Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(\CleverIt\UBL\Invoice\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }


}

