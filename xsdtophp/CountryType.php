<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing CountryType
 *
 * ABIE
 *  Country. Details
 *  A class to describe a country.
 *  Country
 * XSD Type: CountryType
 */
class CountryType
{

    /**
     * BBIE
     *  Country. Identification Code. Code
     *  A code signifying this country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification
     *  Country Identification_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\IdentificationCode $identificationCode
     */
    private $identificationCode = null;

    /**
     * BBIE
     *  Country. Name
     *  The name of this country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  SOUTH AFRICA
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * Gets as identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  A code signifying this country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification
     *  Country Identification_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\IdentificationCode
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
    }

    /**
     * Sets a new identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  A code signifying this country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification
     *  Country Identification_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\IdentificationCode $identificationCode
     * @return self
     */
    public function setIdentificationCode(\CleverIt\UBL\Invoice\IdentificationCode $identificationCode)
    {
        $this->identificationCode = $identificationCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Country. Name
     *  The name of this country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  SOUTH AFRICA
     *
     * @return \CleverIt\UBL\Invoice\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Country. Name
     *  The name of this country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  SOUTH AFRICA
     *
     * @param \CleverIt\UBL\Invoice\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\Name $name)
    {
        $this->name = $name;
        return $this;
    }


}

