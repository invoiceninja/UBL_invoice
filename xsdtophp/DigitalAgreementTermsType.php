<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DigitalAgreementTermsType
 *
 * ABIE
 *  Digital Agreement Terms. Details
 *  A class to describe the terms and conditions of a digital agreement.
 *  Digital Agreement Terms
 *  Trading Partner Agreement Terms
 * XSD Type: DigitalAgreementTermsType
 */
class DigitalAgreementTermsType
{

    /**
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Digital Agreement Terms. Validity_ Period. Period
     *  The period of time for which this digital agreement is valid.
     *  0..1
     *  Digital Agreement Terms
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Digital Agreement Terms. Adoption_ Period. Period
     *  The period during which a digital agreement must be adopted.
     *  0..1
     *  Digital Agreement Terms
     *  Adoption
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\AdoptionPeriod $adoptionPeriod
     */
    private $adoptionPeriod = null;

    /**
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @var \CleverIt\UBL\Invoice\ServiceLevelAgreement[] $serviceLevelAgreement
     */
    private $serviceLevelAgreement = [
        
    ];

    /**
     * Adds as description
     *
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Digital Agreement Terms. Validity_ Period. Period
     *  The period of time for which this digital agreement is valid.
     *  0..1
     *  Digital Agreement Terms
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Digital Agreement Terms. Validity_ Period. Period
     *  The period of time for which this digital agreement is valid.
     *  0..1
     *  Digital Agreement Terms
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\CleverIt\UBL\Invoice\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as adoptionPeriod
     *
     * ASBIE
     *  Digital Agreement Terms. Adoption_ Period. Period
     *  The period during which a digital agreement must be adopted.
     *  0..1
     *  Digital Agreement Terms
     *  Adoption
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\AdoptionPeriod
     */
    public function getAdoptionPeriod()
    {
        return $this->adoptionPeriod;
    }

    /**
     * Sets a new adoptionPeriod
     *
     * ASBIE
     *  Digital Agreement Terms. Adoption_ Period. Period
     *  The period during which a digital agreement must be adopted.
     *  0..1
     *  Digital Agreement Terms
     *  Adoption
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\AdoptionPeriod $adoptionPeriod
     * @return self
     */
    public function setAdoptionPeriod(\CleverIt\UBL\Invoice\AdoptionPeriod $adoptionPeriod)
    {
        $this->adoptionPeriod = $adoptionPeriod;
        return $this;
    }

    /**
     * Adds as serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ServiceLevelAgreement $serviceLevelAgreement
     */
    public function addToServiceLevelAgreement(\CleverIt\UBL\Invoice\ServiceLevelAgreement $serviceLevelAgreement)
    {
        $this->serviceLevelAgreement[] = $serviceLevelAgreement;
        return $this;
    }

    /**
     * isset serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceLevelAgreement($index)
    {
        return isset($this->serviceLevelAgreement[$index]);
    }

    /**
     * unset serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceLevelAgreement($index)
    {
        unset($this->serviceLevelAgreement[$index]);
    }

    /**
     * Gets as serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @return \CleverIt\UBL\Invoice\ServiceLevelAgreement[]
     */
    public function getServiceLevelAgreement()
    {
        return $this->serviceLevelAgreement;
    }

    /**
     * Sets a new serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @param \CleverIt\UBL\Invoice\ServiceLevelAgreement[] $serviceLevelAgreement
     * @return self
     */
    public function setServiceLevelAgreement(array $serviceLevelAgreement)
    {
        $this->serviceLevelAgreement = $serviceLevelAgreement;
        return $this;
    }


}

