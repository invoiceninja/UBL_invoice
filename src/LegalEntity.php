<?php
/**
 * Created by PhpStorm.
 * User: baselbers
 * Date: 26-10-2017
 * Time: 21:45
 */

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class LegalEntity  extends BaseInvoice implements XmlSerializable {

	private $companyIdAttributes;
	private $registrationName;
	private $companyId;

	public function getRegistrationName() {
		return $this->registrationName;
	}

	public function setRegistrationName($registrationName) {
		$this->registrationName = $registrationName;
	}

	public function getCompanyId() {
		
		return $this->companyIdAttributes ? [
					'name' => Schema::CBC . 'CompanyID',
					'value' => $this->companyId,
					'attributes' => $this->companyIdAttributes,
				] : [Schema::CBC.'CompanyID' => $this->companyId]; 	
		
	}

	/**
	 * Get the value of companyIdAttributes
	 */ 
	public function getCompanyIdAttributes()
	{
		return $this->companyIdAttributes;
	}

	/**
	 * Set the value of companyIdAttributes
	 *
	 * @return  self
	 */ 
	public function setCompanyIdAttributes($companyIdAttributes)
	{
		$this->companyIdAttributes = $companyIdAttributes;

		return $this;
	}

	public function setCompanyId($companyId) {
		$this->companyId = $companyId;
	}

	function xmlSerialize(Writer $writer): void {
		
		$this->setProps(array_merge($this->getCompanyId(), [Schema::CBC.'RegistrationName' => $this->registrationName]));
				
		$writer->write($this->getProps());
	}

}