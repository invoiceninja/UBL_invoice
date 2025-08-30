<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TenderPreparationType
 *
 * ABIE
 *  Tender Preparation. Details
 *  A class to describe directions for preparing a tender.
 *  Tender Preparation
 * XSD Type: TenderPreparationType
 */
class TenderPreparationType
{
    /**
     * BBIE
     *  Tender Preparation. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope to be used with the tender.
     *  1
     *  Tender Preparation
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TenderEnvelopeID $tenderEnvelopeID
     */
    private $tenderEnvelopeID = null;

    /**
     * BBIE
     *  Tender Preparation. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope (economical or objective criteria versus technical or subjective criteria).
     *  0..1
     *  Tender Preparation
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     */
    private $tenderEnvelopeTypeCode = null;

    /**
     * BBIE
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Tender Preparation. Open Tender Identifier. Identifier
     *  An identifier for the open tender associated with this tender preparation.
     *  0..1
     *  Tender Preparation
     *  Open Tender Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\OpenTenderID $openTenderID
     */
    private $openTenderID = null;

    /**
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \CleverIt\UBL\Invoice\RO\ProcurementProjectLot[] $procurementProjectLot
     */
    private $procurementProjectLot = [
        
    ];

    /**
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @var \CleverIt\UBL\Invoice\RO\DocumentTenderRequirement[] $documentTenderRequirement
     */
    private $documentTenderRequirement = [
        
    ];

    /**
     * Gets as tenderEnvelopeID
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope to be used with the tender.
     *  1
     *  Tender Preparation
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TenderEnvelopeID
     */
    public function getTenderEnvelopeID()
    {
        return $this->tenderEnvelopeID;
    }

    /**
     * Sets a new tenderEnvelopeID
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope to be used with the tender.
     *  1
     *  Tender Preparation
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TenderEnvelopeID $tenderEnvelopeID
     * @return self
     */
    public function setTenderEnvelopeID(\CleverIt\UBL\Invoice\RO\TenderEnvelopeID $tenderEnvelopeID)
    {
        $this->tenderEnvelopeID = $tenderEnvelopeID;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope (economical or objective criteria versus technical or subjective criteria).
     *  0..1
     *  Tender Preparation
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TenderEnvelopeTypeCode
     */
    public function getTenderEnvelopeTypeCode()
    {
        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * Sets a new tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope (economical or objective criteria versus technical or subjective criteria).
     *  0..1
     *  Tender Preparation
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     * @return self
     */
    public function setTenderEnvelopeTypeCode(?\CleverIt\UBL\Invoice\RO\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode = null)
    {
        $this->tenderEnvelopeTypeCode = $tenderEnvelopeTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\RO\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
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
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
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
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as openTenderID
     *
     * BBIE
     *  Tender Preparation. Open Tender Identifier. Identifier
     *  An identifier for the open tender associated with this tender preparation.
     *  0..1
     *  Tender Preparation
     *  Open Tender Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\OpenTenderID
     */
    public function getOpenTenderID()
    {
        return $this->openTenderID;
    }

    /**
     * Sets a new openTenderID
     *
     * BBIE
     *  Tender Preparation. Open Tender Identifier. Identifier
     *  An identifier for the open tender associated with this tender preparation.
     *  0..1
     *  Tender Preparation
     *  Open Tender Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\OpenTenderID $openTenderID
     * @return self
     */
    public function setOpenTenderID(?\CleverIt\UBL\Invoice\RO\OpenTenderID $openTenderID = null)
    {
        $this->openTenderID = $openTenderID;
        return $this;
    }

    /**
     * Adds as procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ProcurementProjectLot $procurementProjectLot
     */
    public function addToProcurementProjectLot(\CleverIt\UBL\Invoice\RO\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot[] = $procurementProjectLot;
        return $this;
    }

    /**
     * isset procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementProjectLot($index)
    {
        return isset($this->procurementProjectLot[$index]);
    }

    /**
     * unset procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementProjectLot($index)
    {
        unset($this->procurementProjectLot[$index]);
    }

    /**
     * Gets as procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \CleverIt\UBL\Invoice\RO\ProcurementProjectLot[]
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \CleverIt\UBL\Invoice\RO\ProcurementProjectLot[] $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(array $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DocumentTenderRequirement $documentTenderRequirement
     */
    public function addToDocumentTenderRequirement(\CleverIt\UBL\Invoice\RO\DocumentTenderRequirement $documentTenderRequirement)
    {
        $this->documentTenderRequirement[] = $documentTenderRequirement;
        return $this;
    }

    /**
     * isset documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentTenderRequirement($index)
    {
        return isset($this->documentTenderRequirement[$index]);
    }

    /**
     * unset documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentTenderRequirement($index)
    {
        unset($this->documentTenderRequirement[$index]);
    }

    /**
     * Gets as documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @return \CleverIt\UBL\Invoice\RO\DocumentTenderRequirement[]
     */
    public function getDocumentTenderRequirement()
    {
        return $this->documentTenderRequirement;
    }

    /**
     * Sets a new documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @param \CleverIt\UBL\Invoice\RO\DocumentTenderRequirement[] $documentTenderRequirement
     * @return self
     */
    public function setDocumentTenderRequirement(array $documentTenderRequirement = null)
    {
        $this->documentTenderRequirement = $documentTenderRequirement;
        return $this;
    }
}

