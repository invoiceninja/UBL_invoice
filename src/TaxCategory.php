<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 25-10-2016
 * Time: 15:40
 */

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class TaxCategory extends BaseInvoice implements XmlSerializable {
    
    private $id = null;
    private $percent = null;
    private $taxScheme = null;
    private $name = null;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return TaxCategory
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPercent() {
        return $this->percent;
    }

    /**
     * @param mixed $percent
     * @return TaxCategory
     */
    public function setPercent($percent) {
        $this->percent = $percent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxScheme() {
        return $this->taxScheme;
    }

    /**
     * @param mixed $taxScheme
     * @return TaxCategory
     */
    public function setTaxScheme($taxScheme) {
        $this->taxScheme = $taxScheme;
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
     * @return TaxCategory
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }


    public function validate() {
        if ($this->id === null) {
            throw new \InvalidArgumentException('Missing taxcategory id');
        }

        if ($this->percent === null) {
            throw new \InvalidArgumentException('Missing taxcategory percent');
        }
    }
    
    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {
        $this->validate();

        $this->setProps([
            Schema::CBC.'ID' => $this->id,
            Schema::CBC.'Name' => $this->name,
            Schema::CBC.'Percent' => $this->percent,
            Schema::CAC.'TaxScheme' => $this->taxScheme
        ]);

        $writer->write($this->getProps());
    }
}