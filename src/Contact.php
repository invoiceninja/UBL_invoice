<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 25-10-2016
 * Time: 13:44
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class Contact  extends BaseInvoice implements XmlSerializable {
    private $telephone;
    private $name;
    private $telefax;
    private $electronicMail;

    /**
     * @return mixed
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     * @return Contact
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Contact
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefax() {
        return $this->telefax;
    }

    /**
     * @param mixed $telefax
     * @return Contact
     */
    public function setTelefax($telefax) {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElectronicMail() {
        return $this->electronicMail;
    }

    /**
     * @param mixed $electronicMail
     * @return Contact
     */
    public function setElectronicMail($electronicMail) {
        $this->electronicMail = $electronicMail;
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
                Schema::CBC . 'Name' => $this->name,
                Schema::CBC . 'Telephone' => $this->telephone,
                Schema::CBC . 'Telefax' => $this->telefax,
                Schema::CBC . 'ElectronicMail' => $this->electronicMail,
        ]);
        
        $writer->write($this->getProps());

    }

}