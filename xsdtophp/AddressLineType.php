<?php

namespace CleverIt\UBL\Invoice;

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
     * @var \CleverIt\UBL\Invoice\Line $line
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
     * @return \CleverIt\UBL\Invoice\Line
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
     * @param \CleverIt\UBL\Invoice\Line $line
     * @return self
     */
    public function setLine(\CleverIt\UBL\Invoice\Line $line)
    {
        $this->line = $line;
        return $this;
    }


}

