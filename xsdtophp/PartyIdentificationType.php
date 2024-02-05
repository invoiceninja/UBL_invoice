<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing PartyIdentificationType
 *
 * ABIE
 *  Party Identification. Details
 *  A class to define an identifier for a party.
 *  Party Identification
 * XSD Type: PartyIdentificationType
 */
class PartyIdentificationType
{

    /**
     * BBIE
     *  Party Identification. Identifier
     *  An identifier for the party.
     *  1
     *  Party Identification
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
     *  Party Identification. Identifier
     *  An identifier for the party.
     *  1
     *  Party Identification
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
     *  Party Identification. Identifier
     *  An identifier for the party.
     *  1
     *  Party Identification
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

