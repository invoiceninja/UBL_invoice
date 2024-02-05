<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 25-10-2016
 * Time: 12:29
 */

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class Address extends BaseInvoice implements XmlSerializable{
    private $streetName;
    private $buildingNumber;
    private $cityName;
    private $postalZone;
    private $countrySubentity;
    private $additionalStreetName;

    /**
     * @var Country
     */
    private $country;

    /**
     * @return mixed
     */
    public function getStreetName() {
        return $this->streetName;
    }

    /**
     * @param mixed $streetName
     * @return Address
     */
    public function setStreetName($streetName) {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuildingNumber() {
        return $this->buildingNumber;
    }

    /**
     * @param mixed $buildingNumber
     * @return Address
     */
    public function setBuildingNumber($buildingNumber) {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityName() {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     * @return Address
     */
    public function setCityName($cityName) {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalZone() {
        return $this->postalZone;
    }

    /**
     * @param mixed $postalZone
     * @return Address
     */
    public function setPostalZone($postalZone) {
        $this->postalZone = $postalZone;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return Address
     */
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

       /**
     * @return mixed
     */
    public function getCountrySubentity() {
        return $this->countrySubentity;
    }

    /**
     * @param mixed $countrySubentity
     * @return Address
     */
    public function setCountrySubentity($countrySubentity) {
        $this->countrySubentity = $countrySubentity;
        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {
        // TODO: Implement xmlSerialize() method.
        $cbc = '{urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2}';
        $cac = '{urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2}';

        $this->setProps([
            Schema::CBC.'StreetName' => $this->streetName,
            Schema::CBC.'BuildingNumber' => $this->buildingNumber,
            Schema::CBC.'CityName' => $this->cityName,
            Schema::CBC.'PostalZone' => $this->postalZone,
            Schema::CBC.'CountrySubentity' => $this->countrySubentity,
            Schema::CAC.'Country' => $this->country,
        ]);

        $writer->write($this->getProps());
    }

    /**
     * Get the value of additionalStreetName
     */ 
    public function getAdditionalStreetName()
    {
        return $this->additionalStreetName;
    }

    /**
     * Set the value of additionalStreetName
     *
     * @return  self
     */ 
    public function setAdditionalStreetName($additionalStreetName)
    {
        $this->additionalStreetName = $additionalStreetName;

        return $this;
    }
}