<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing AddressLineType
 *
 * ABIE
 *  Address Line. Details
 *  A class to define an unstructured address line.
 *  Address Line
 * XSD Type: AddressLineType
 */
class AddressLineType
{
    /**
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @var \CleverIt\UBL\Invoice\RO\Line $line
     */
    private $line = null;

    /**
     * Gets as line
     *
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @return \CleverIt\UBL\Invoice\RO\Line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @param \CleverIt\UBL\Invoice\RO\Line $line
     * @return self
     */
    public function setLine(\CleverIt\UBL\Invoice\RO\Line $line)
    {
        $this->line = $line;
        return $this;
    }
}

