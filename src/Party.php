<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 13-10-2016
 * Time: 17:19
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class Party extends BaseInvoice implements XmlSerializable{
    private $name = null;
    /**
     * @var Address
     */
    private $postalAddress = null;
    /**
     * @var Address
     */
    private $physicalLocation = null;
    /**
     * @var Contact
     */
    private $contact = null;

	/**
	 * @var string
	 */
    private $companyId = null;

    	/**
	 * @var string
	 */
    private $id = null;

    	/**
	 * @var mixed
	 */
    private $partyIdentification = null;

	/**
	 * @var TaxScheme
	 */
    private $taxScheme = null;

	/**
	 * @var LegalEntity
	 */
    private $legalEntity = null;

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Party
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPostalAddress() {
        return $this->postalAddress;
    }

    /**
     * @param Address $postalAddress
     * @return Party
     */
    public function setPostalAddress($postalAddress) {
        $this->postalAddress = $postalAddress;
        return $this;
    }

	/**
	 * @return string
	 */
    public function getCompanyId() {
    	return $this->companyId;
    }

    
	/**
	 * @param string $companyId
	 */
	public function setCompanyId($companyId) {
    	$this->companyId = $companyId;
	}

    	/**
	 * @return string
	 */
    public function getId() {
    	return $this->id;
    }

    
	/**
	 * @param string $id
	 */
	public function setId($id) {
    	$this->id = $id;
	}

    /**
	 * @return mixed
	 */
    public function getPartyIdentification() {
    	return $this->partyIdentification;
    }

	/**
	 * @param mixed $partyIdentification
	 */
	public function setPartyIdentification($partyIdentification) {
    	$this->partyIdentification = $partyIdentification;
        return $this;
	}

	/**
	 * @param TaxScheme $taxScheme.
	 * @return mixed
	 */
    public function getTaxScheme() {
    	return $this->taxScheme;
    }

	/**
	 * @param TaxScheme $taxScheme
	 */
    public function setTaxScheme($taxScheme) {
    	$this->taxScheme = $taxScheme;
    }

	/**
	 * @return LegalEntity
	 */
    public function getLegalEntity() {
    	return $this->legalEntity;
    }

	/**
	 * @param $legalEntity
	 * @return Party
	 */
    public function setLegalEntity($legalEntity) {
    	$this->legalEntity = $legalEntity;
    	return $this;
    }

    /**
     * @return Address
     */
    public function getPhysicalLocation() {
        return $this->physicalLocation;
    }

    /**
     * @param Address $physicalLocation
     * @return Party
     */
    public function setPhysicalLocation($physicalLocation) {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     * @return Party
     */
    public function setContact($contact) {
        $this->contact = $contact;
        return $this;
    }

    public function build(): self {

        //calculate taxScheme (if companyId exists => set it in an array with the taxScheme)

        $this->companyId ? $this->setTaxScheme([
            Schema::CBC . 'CompanyID' => $this->companyId,
            Schema::CAC . 'TaxScheme' => $this->taxScheme
        ]) : $this->setTaxScheme($this->getTaxScheme());

        return $this;
    }

    function xmlSerialize(Writer $writer): void {

        $this->build()
            ->setProps([
            Schema::CAC . 'PartyName' => [
                Schema::CBC . 'Name' => $this->name
            ],
            Schema::CAC . 'PostalAddress' => $this->postalAddress,
            Schema::CAC . 'PhysicalLocation' => [Schema::CAC . 'Address' => $this->physicalLocation],
            Schema::CAC . 'PartyTaxScheme' => $this->taxScheme,
            Schema::CAC . 'Contact' => $this->contact,
            Schema::CAC.'PartyIdentification' => [
                Schema::CBC.'ID' => $this->partyIdentification
            ],
            Schema::CAC.'PartyLegalEntity' => $this->legalEntity
        ]);

        $writer->write($this->getProps());

    }
}