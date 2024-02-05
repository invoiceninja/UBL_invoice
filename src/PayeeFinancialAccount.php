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

class PayeeFinancialAccount  extends BaseInvoice implements XmlSerializable {

    private $bankId;
    private $bankName;
    private $financialInstitutionBranch;

    /**
     * @return mixed
     */
    public function getBankId() {
        return $this->bankId;
    }

    /**
     * @param mixed $bankId
     * @return PayeeFinancialAccount
     */
    public function setBankId($bankId) {
        $this->bankId = $bankId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankName() {
        return $this->bankName;
    }

    /**
     * @param mixed $bankName
     * @return PayeeFinancialAccount
     */
    public function setBankName($bankName) {
        $this->bankName = $bankName;
        return $this;
    }

    
    /**
     * Get the value of financialInstitutionBranch
     */ 
    public function getFinancialInstitutionBranch()
    {
        return $this->financialInstitutionBranch;
    }

    /**
     * Set the value of financialInstitutionBranch
     *
     * @return  self
     */ 
    public function setFinancialInstitutionBranch($financialInstitutionBranch)
    {
        $this->financialInstitutionBranch = $financialInstitutionBranch;

        return $this;
    }

    function xmlSerialize(Writer $writer): void {
        $this->setProps([
            Schema::CBC . 'ID' => $this->bankId,
            Schema::CBC . 'Name' => $this->bankName,
            Schema::CAC . 'FinancialInstitutionBranch' => $this->getFinancialInstitutionBranch()

        ]);

        $writer->write($this->getProps());
    }

}