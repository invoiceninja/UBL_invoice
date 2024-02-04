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

    private $name;
    private $postalAddress;
    private $physicalLocation;
    private $contact;
    private $companyId;
    private $id;
    private $partyIdentification;
    private $taxScheme;
    private $legalEntity;

    private $partyIdentificationId;
    private $partyIdentificationSchemeId;
    private $partyIdentificationSchemeName;
    private $partyTaxScheme;
    private $endpointID;
    private $endpointID_schemeID;



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

        $partyIdentificationAttributes = [];

        if (!empty($this->getPartyIdentificationSchemeId())) {
            $partyIdentificationAttributes['schemeID'] = $this->getPartyIdentificationSchemeId();
        }

        if (!empty($this->getPartyIdentificationSchemeName())) {
            $partyIdentificationAttributes['schemeName'] = $this->getPartyIdentificationSchemeName();
        }

        return $this->partyIdentificationId && isset($partyIdentificationAttributes['schemeID']) ? [
            Schema::CAC . 'PartyIdentification' => [
                [
                    'name' => Schema::CBC . 'ID',
                    'value' => $this->partyIdentificationId,
                    'attributes' => $partyIdentificationAttributes
                ]
            ],
        ] : $this->partyIdentificationId;

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

    
    /**
     * Get the value of partyIdentificationId
     */ 
    public function getPartyIdentificationId()
    {
        return $this->partyIdentificationId;
    }

    /**
     * Set the value of partyIdentificationId
     *
     * @return  self
     */ 
    public function setPartyIdentificationId($partyIdentificationId)
    {
        $this->partyIdentificationId = $partyIdentificationId;

        return $this;
    }

    /**
     * Get the value of partyIdentificationSchemeId
     */ 
    public function getPartyIdentificationSchemeId()
    {
        return $this->partyIdentificationSchemeId;
    }

    /**
     * Set the value of partyIdentificationSchemeId
     *
     * @return  self
     */ 
    public function setPartyIdentificationSchemeId($partyIdentificationSchemeId)
    {
        $this->partyIdentificationSchemeId = $partyIdentificationSchemeId;

        return $this;
    }

    /**
     * Get the value of partyIdentificationSchemeName
     */ 
    public function getPartyIdentificationSchemeName()
    {
        return $this->partyIdentificationSchemeName;
    }

    /**
     * Set the value of partyIdentificationSchemeName
     *
     * @return  self
     */ 
    public function setPartyIdentificationSchemeName($partyIdentificationSchemeName)
    {
        $this->partyIdentificationSchemeName = $partyIdentificationSchemeName;

        return $this;
    }

    /**
     * Get the value of partyTaxScheme
     */ 
    public function getPartyTaxScheme()
    {
        return $this->partyTaxScheme;
    }

    /**
     * Set the value of partyTaxScheme
     *
     * @return  self
     */ 
    public function setPartyTaxScheme($partyTaxScheme)
    {
        $this->partyTaxScheme = $partyTaxScheme;

        return $this;
    }

    /**
     * Get the value of endpointID
     */ 
    public function getEndpointID()
    {

        return $this->endpointID !== null && $this->endpointID_schemeID ?
            [
                'name' => Schema::CBC . 'EndpointID',
                'value' => $this->endpointID,
                'attributes' => [
                    'schemeID' => is_numeric($this->endpointID_schemeID)
                        ? sprintf('%04d', +$this->endpointID_schemeID)
                        : $this->endpointID_schemeID
                ]
            ]
             : $this->endpointID;

    }

    /**
     * Set the value of endpointID
     *
     * @return  self
     */ 
    public function setEndpointID($endpointID)
    {
        $this->endpointID = $endpointID;

        return $this;
    }

    /**
     * Get the value of endpointID_schemeID
     */ 
    public function getEndpointID_schemeID()
    {
        return $this->endpointID_schemeID;
    }

    /**
     * Set the value of endpointID_schemeID
     *
     * @return  self
     */ 
    public function setEndpointID_schemeID($endpointID_schemeID)
    {
        $this->endpointID_schemeID = $endpointID_schemeID;

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
        
        $this->build();

        $data = [
            Schema::CAC . 'PartyName' => [
                Schema::CBC . 'Name' => $this->name
            ],
            Schema::CAC . 'PostalAddress' => $this->postalAddress,
            Schema::CAC . 'PhysicalLocation' => [Schema::CAC . 'Address' => $this->physicalLocation],
            Schema::CAC . 'PartyTaxScheme' => $this->taxScheme,
            Schema::CAC . 'Contact' => $this->contact,
            $this->getPartyIdentification(),
            Schema::CAC . 'PartyLegalEntity' => $this->legalEntity
        ];
            
        $data[] = $this->getEndpointID();

        $this->setProps($data);
                    
        $writer->write($this->getProps());

    }

}