<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ProcurementProjectLotType
 *
 * ABIE
 *  Procurement Project Lot. Details
 *  A class to describe one of the parts of a procurement project that is being subdivided to allow the contracting party to award different lots to different economic operators under different contracts.
 *  Procurement Project Lot
 * XSD Type: ProcurementProjectLotType
 */
class ProcurementProjectLotType
{

    /**
     * BBIE
     *  Procurement Project Lot. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Procurement Project Lot. Tendering Terms
     *  Tendering terms for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @var \CleverIt\UBL\Invoice\TenderingTerms $tenderingTerms
     */
    private $tenderingTerms = null;

    /**
     * ASBIE
     *  Procurement Project Lot. Procurement Project
     *  A description of the procurement project to be divided.
     *  0..1
     *  Procurement Project Lot
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @var \CleverIt\UBL\Invoice\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Procurement Project Lot. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot
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
     *  Procurement Project Lot. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot
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
     * Gets as tenderingTerms
     *
     * ASBIE
     *  Procurement Project Lot. Tendering Terms
     *  Tendering terms for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @return \CleverIt\UBL\Invoice\TenderingTerms
     */
    public function getTenderingTerms()
    {
        return $this->tenderingTerms;
    }

    /**
     * Sets a new tenderingTerms
     *
     * ASBIE
     *  Procurement Project Lot. Tendering Terms
     *  Tendering terms for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @param \CleverIt\UBL\Invoice\TenderingTerms $tenderingTerms
     * @return self
     */
    public function setTenderingTerms(\CleverIt\UBL\Invoice\TenderingTerms $tenderingTerms)
    {
        $this->tenderingTerms = $tenderingTerms;
        return $this;
    }

    /**
     * Gets as procurementProject
     *
     * ASBIE
     *  Procurement Project Lot. Procurement Project
     *  A description of the procurement project to be divided.
     *  0..1
     *  Procurement Project Lot
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @return \CleverIt\UBL\Invoice\ProcurementProject
     */
    public function getProcurementProject()
    {
        return $this->procurementProject;
    }

    /**
     * Sets a new procurementProject
     *
     * ASBIE
     *  Procurement Project Lot. Procurement Project
     *  A description of the procurement project to be divided.
     *  0..1
     *  Procurement Project Lot
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @param \CleverIt\UBL\Invoice\ProcurementProject $procurementProject
     * @return self
     */
    public function setProcurementProject(\CleverIt\UBL\Invoice\ProcurementProject $procurementProject)
    {
        $this->procurementProject = $procurementProject;
        return $this;
    }


}

