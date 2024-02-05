<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing EvidenceSuppliedType
 *
 * ABIE
 *  Evidence Supplied. Details
 *  A reference to evidence.
 *  Evidence Supplied
 * XSD Type: EvidenceSuppliedType
 */
class EvidenceSuppliedType
{

    /**
     * BBIE
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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

