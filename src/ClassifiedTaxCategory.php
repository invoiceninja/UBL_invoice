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

class ClassifiedTaxCategory  extends BaseInvoice implements XmlSerializable {
    private $id;
    private $percent;
    private $taxScheme;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ClassifiedTaxCategory
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
     * @return ClassifiedTaxCategory
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
     * @return ClassifiedTaxCategory
     */
    public function setTaxScheme($taxScheme) {
        $this->taxScheme = $taxScheme;
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
            Schema::CBC.'ID' => $this->id,
            Schema::CBC.'Percent' => $this->percent,
            Schema::CAC.'TaxScheme' =>[
                Schema::CBC.'ID' => $this->taxScheme
            ],
        ]);

        $writer->write($this->getProps());
    }
}