<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class Country extends BaseInvoice implements  XmlSerializable {
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
     * @var ?string $identificationCode
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
     * @var ?string $name
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
     * @return ?string
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
     * @param ?string $identificationCode
     * @return self
     */
    public function setIdentificationCode(?string $identificationCode)
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
     * @return ?string
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
     * @param ?string $name
     * @return self
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {

        $this->setProps([
            Schema::CBC.'IdentificationCode' => $this->getIdentificationCode(),
            Schema::CBC.'Name' => $this->getName(),
        ]);

        $writer->write($this->getProps());
    }


}