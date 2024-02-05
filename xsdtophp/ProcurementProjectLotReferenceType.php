<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ProcurementProjectLotReferenceType
 *
 * ABIE
 *  Procurement Project Lot Reference. Details
 *  A class to reference to a lot identifier.
 *  Procurement Project Lot Reference
 * XSD Type: ProcurementProjectLotReferenceType
 */
class ProcurementProjectLotReferenceType
{

    /**
     * BBIE
     *  Procurement Project Lot Reference. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Procurement Project Lot Reference. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot Reference
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
     *  Procurement Project Lot Reference. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot Reference
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


}

