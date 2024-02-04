<?php
/**
 * Created by PhpStorm.
 * User: baselbers
 * Date: 26-10-2017
 * Time: 20:28
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class TaxScheme  extends BaseInvoice implements XmlSerializable {
    private $id;
    private $companyId;
    private $taxScheme;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return TaxScheme
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

        /**
     * @return mixed
     */
    public function getCompanyId() {
        return $this->companyId;
    }

    /**
     * @param mixed $id
     * @return TaxScheme
     */
    public function setCompanyId($companyId) {
        $this->companyId = $companyId;
        return $this;
    }

    private function setTaxScheme(): self {

        
        $this->taxScheme = $this->companyId ? [
                Schema::CBC.'CompanyID' => $this->companyId,
                Schema::CAC.'TaxScheme' => [
                    Schema::CBC.'ID' => $this->id
                
            ],
        ] : [Schema::CBC.'ID' => $this->id];

        return $this;

    }

    private function getTaxScheme() {
        return $this->taxScheme;
    }


    function xmlSerialize(Writer $writer): void {

        $this->setTaxScheme()->setProps($this->getTaxScheme());
        
        $writer->write($this->getProps());
    }
}