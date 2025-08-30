<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing DocumentResponseType
 *
 * ABIE
 *  Document Response. Details
 *  A class to describe an application-level response to a document.
 *  Document Response
 * XSD Type: DocumentResponseType
 */
class DocumentResponseType
{
    /**
     * ASBIE
     *  Document Response. Response
     *  A response to the document as a whole.
     *  1
     *  Document Response
     *  Response
     *  Response
     *  Response
     *
     * @var \CleverIt\UBL\Invoice\RO\Response $response
     */
    private $response = null;

    /**
     * ASBIE
     *  Document Response. Document Reference
     *  A referenced document.
     *  1..n
     *  Document Response
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Document Response. Issuer_ Party. Party
     *  The party that issued the document.
     *  0..1
     *  Document Response
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Document Response. Recipient_ Party. Party
     *  The party for which the document is intended.
     *  0..1
     *  Document Response
     *  Recipient
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\RecipientParty $recipientParty
     */
    private $recipientParty = null;

    /**
     * ASBIE
     *  Document Response. Line Response
     *  A response to a particular line in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *  Line Response
     *
     * @var \CleverIt\UBL\Invoice\RO\LineResponse[] $lineResponse
     */
    private $lineResponse = [
        
    ];

    /**
     * Gets as response
     *
     * ASBIE
     *  Document Response. Response
     *  A response to the document as a whole.
     *  1
     *  Document Response
     *  Response
     *  Response
     *  Response
     *
     * @return \CleverIt\UBL\Invoice\RO\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * ASBIE
     *  Document Response. Response
     *  A response to the document as a whole.
     *  1
     *  Document Response
     *  Response
     *  Response
     *  Response
     *
     * @param \CleverIt\UBL\Invoice\RO\Response $response
     * @return self
     */
    public function setResponse(\CleverIt\UBL\Invoice\RO\Response $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Document Response. Document Reference
     *  A referenced document.
     *  1..n
     *  Document Response
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference $documentReference
     */
    public function addToDocumentReference(\CleverIt\UBL\Invoice\RO\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Document Response. Document Reference
     *  A referenced document.
     *  1..n
     *  Document Response
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Document Response. Document Reference
     *  A referenced document.
     *  1..n
     *  Document Response
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Document Response. Document Reference
     *  A referenced document.
     *  1..n
     *  Document Response
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Document Response. Document Reference
     *  A referenced document.
     *  1..n
     *  Document Response
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Document Response. Issuer_ Party. Party
     *  The party that issued the document.
     *  0..1
     *  Document Response
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Document Response. Issuer_ Party. Party
     *  The party that issued the document.
     *  0..1
     *  Document Response
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\CleverIt\UBL\Invoice\RO\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as recipientParty
     *
     * ASBIE
     *  Document Response. Recipient_ Party. Party
     *  The party for which the document is intended.
     *  0..1
     *  Document Response
     *  Recipient
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\RecipientParty
     */
    public function getRecipientParty()
    {
        return $this->recipientParty;
    }

    /**
     * Sets a new recipientParty
     *
     * ASBIE
     *  Document Response. Recipient_ Party. Party
     *  The party for which the document is intended.
     *  0..1
     *  Document Response
     *  Recipient
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\RecipientParty $recipientParty
     * @return self
     */
    public function setRecipientParty(?\CleverIt\UBL\Invoice\RO\RecipientParty $recipientParty = null)
    {
        $this->recipientParty = $recipientParty;
        return $this;
    }

    /**
     * Adds as lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  A response to a particular line in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *  Line Response
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\LineResponse $lineResponse
     */
    public function addToLineResponse(\CleverIt\UBL\Invoice\RO\LineResponse $lineResponse)
    {
        $this->lineResponse[] = $lineResponse;
        return $this;
    }

    /**
     * isset lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  A response to a particular line in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *  Line Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineResponse($index)
    {
        return isset($this->lineResponse[$index]);
    }

    /**
     * unset lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  A response to a particular line in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *  Line Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineResponse($index)
    {
        unset($this->lineResponse[$index]);
    }

    /**
     * Gets as lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  A response to a particular line in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *  Line Response
     *
     * @return \CleverIt\UBL\Invoice\RO\LineResponse[]
     */
    public function getLineResponse()
    {
        return $this->lineResponse;
    }

    /**
     * Sets a new lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  A response to a particular line in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *  Line Response
     *
     * @param \CleverIt\UBL\Invoice\RO\LineResponse[] $lineResponse
     * @return self
     */
    public function setLineResponse(array $lineResponse = null)
    {
        $this->lineResponse = $lineResponse;
        return $this;
    }
}

