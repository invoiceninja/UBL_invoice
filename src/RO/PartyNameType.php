<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing PartyNameType
 *
 * ABIE
 *  Party Name. Details
 *  A class for defining the name of a party.
 *  Party Name
 * XSD Type: PartyNameType
 */
class PartyNameType
{
    /**
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @return \CleverIt\UBL\Invoice\RO\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @param \CleverIt\UBL\Invoice\RO\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\RO\Name $name)
    {
        $this->name = $name;
        return $this;
    }
}

