<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ParticipantPartyType
 *
 * ABIE
 *  Participant Party. Details
 *  A class to describe a participant party.
 *  Participant Party
 * XSD Type: ParticipantPartyType
 */
class ParticipantPartyType
{

    /**
     * BBIE
     *  Participant Party. Initiating Party_ Indicator. Indicator
     *  An indicator that this party is playing the role of the initiator within a transaction (true) or not (false).
     *  0..1
     *  Participant Party
     *  Initiating Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $initiatingPartyIndicator
     */
    private $initiatingPartyIndicator = null;

    /**
     * BBIE
     *  Participant Party. Private Party_ Indicator. Indicator
     *  An indicator that this party is a private entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Private Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $privatePartyIndicator
     */
    private $privatePartyIndicator = null;

    /**
     * BBIE
     *  Participant Party. Public Party_ Indicator. Indicator
     *  An indicator that this party is a public (governmental) entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Public Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $publicPartyIndicator
     */
    private $publicPartyIndicator = null;

    /**
     * BBIE
     *  Participant Party. Service Provider Party_ Indicator. Indicator
     *  An indicator that this party is a service provider (true) or not (false).
     *  0..1
     *  Participant Party
     *  Service Provider Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $serviceProviderPartyIndicator
     */
    private $serviceProviderPartyIndicator = null;

    /**
     * ASBIE
     *  Participant Party. Party
     *  The participant party itself.
     *  1
     *  Participant Party
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Participant Party. Legal_ Contact. Contact
     *  A legal contact associated to this participant for sending legal notices.
     *  0..1
     *  Participant Party
     *  Legal
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\LegalContact $legalContact
     */
    private $legalContact = null;

    /**
     * ASBIE
     *  Participant Party. Technical_ Contact. Contact
     *  A technical contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Technical
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\TechnicalContact $technicalContact
     */
    private $technicalContact = null;

    /**
     * ASBIE
     *  Participant Party. Support_ Contact. Contact
     *  A support contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Support
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\SupportContact $supportContact
     */
    private $supportContact = null;

    /**
     * ASBIE
     *  Participant Party. Commercial_ Contact. Contact
     *  A commercial contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Commercial
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\CommercialContact $commercialContact
     */
    private $commercialContact = null;

    /**
     * Gets as initiatingPartyIndicator
     *
     * BBIE
     *  Participant Party. Initiating Party_ Indicator. Indicator
     *  An indicator that this party is playing the role of the initiator within a transaction (true) or not (false).
     *  0..1
     *  Participant Party
     *  Initiating Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getInitiatingPartyIndicator()
    {
        return $this->initiatingPartyIndicator;
    }

    /**
     * Sets a new initiatingPartyIndicator
     *
     * BBIE
     *  Participant Party. Initiating Party_ Indicator. Indicator
     *  An indicator that this party is playing the role of the initiator within a transaction (true) or not (false).
     *  0..1
     *  Participant Party
     *  Initiating Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $initiatingPartyIndicator
     * @return self
     */
    public function setInitiatingPartyIndicator($initiatingPartyIndicator)
    {
        $this->initiatingPartyIndicator = $initiatingPartyIndicator;
        return $this;
    }

    /**
     * Gets as privatePartyIndicator
     *
     * BBIE
     *  Participant Party. Private Party_ Indicator. Indicator
     *  An indicator that this party is a private entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Private Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPrivatePartyIndicator()
    {
        return $this->privatePartyIndicator;
    }

    /**
     * Sets a new privatePartyIndicator
     *
     * BBIE
     *  Participant Party. Private Party_ Indicator. Indicator
     *  An indicator that this party is a private entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Private Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $privatePartyIndicator
     * @return self
     */
    public function setPrivatePartyIndicator($privatePartyIndicator)
    {
        $this->privatePartyIndicator = $privatePartyIndicator;
        return $this;
    }

    /**
     * Gets as publicPartyIndicator
     *
     * BBIE
     *  Participant Party. Public Party_ Indicator. Indicator
     *  An indicator that this party is a public (governmental) entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Public Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPublicPartyIndicator()
    {
        return $this->publicPartyIndicator;
    }

    /**
     * Sets a new publicPartyIndicator
     *
     * BBIE
     *  Participant Party. Public Party_ Indicator. Indicator
     *  An indicator that this party is a public (governmental) entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Public Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $publicPartyIndicator
     * @return self
     */
    public function setPublicPartyIndicator($publicPartyIndicator)
    {
        $this->publicPartyIndicator = $publicPartyIndicator;
        return $this;
    }

    /**
     * Gets as serviceProviderPartyIndicator
     *
     * BBIE
     *  Participant Party. Service Provider Party_ Indicator. Indicator
     *  An indicator that this party is a service provider (true) or not (false).
     *  0..1
     *  Participant Party
     *  Service Provider Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getServiceProviderPartyIndicator()
    {
        return $this->serviceProviderPartyIndicator;
    }

    /**
     * Sets a new serviceProviderPartyIndicator
     *
     * BBIE
     *  Participant Party. Service Provider Party_ Indicator. Indicator
     *  An indicator that this party is a service provider (true) or not (false).
     *  0..1
     *  Participant Party
     *  Service Provider Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $serviceProviderPartyIndicator
     * @return self
     */
    public function setServiceProviderPartyIndicator($serviceProviderPartyIndicator)
    {
        $this->serviceProviderPartyIndicator = $serviceProviderPartyIndicator;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Participant Party. Party
     *  The participant party itself.
     *  1
     *  Participant Party
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Participant Party. Party
     *  The participant party itself.
     *  1
     *  Participant Party
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\Party $party
     * @return self
     */
    public function setParty(\CleverIt\UBL\Invoice\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as legalContact
     *
     * ASBIE
     *  Participant Party. Legal_ Contact. Contact
     *  A legal contact associated to this participant for sending legal notices.
     *  0..1
     *  Participant Party
     *  Legal
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\LegalContact
     */
    public function getLegalContact()
    {
        return $this->legalContact;
    }

    /**
     * Sets a new legalContact
     *
     * ASBIE
     *  Participant Party. Legal_ Contact. Contact
     *  A legal contact associated to this participant for sending legal notices.
     *  0..1
     *  Participant Party
     *  Legal
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\LegalContact $legalContact
     * @return self
     */
    public function setLegalContact(\CleverIt\UBL\Invoice\LegalContact $legalContact)
    {
        $this->legalContact = $legalContact;
        return $this;
    }

    /**
     * Gets as technicalContact
     *
     * ASBIE
     *  Participant Party. Technical_ Contact. Contact
     *  A technical contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Technical
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\TechnicalContact
     */
    public function getTechnicalContact()
    {
        return $this->technicalContact;
    }

    /**
     * Sets a new technicalContact
     *
     * ASBIE
     *  Participant Party. Technical_ Contact. Contact
     *  A technical contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Technical
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\TechnicalContact $technicalContact
     * @return self
     */
    public function setTechnicalContact(\CleverIt\UBL\Invoice\TechnicalContact $technicalContact)
    {
        $this->technicalContact = $technicalContact;
        return $this;
    }

    /**
     * Gets as supportContact
     *
     * ASBIE
     *  Participant Party. Support_ Contact. Contact
     *  A support contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Support
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\SupportContact
     */
    public function getSupportContact()
    {
        return $this->supportContact;
    }

    /**
     * Sets a new supportContact
     *
     * ASBIE
     *  Participant Party. Support_ Contact. Contact
     *  A support contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Support
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\SupportContact $supportContact
     * @return self
     */
    public function setSupportContact(\CleverIt\UBL\Invoice\SupportContact $supportContact)
    {
        $this->supportContact = $supportContact;
        return $this;
    }

    /**
     * Gets as commercialContact
     *
     * ASBIE
     *  Participant Party. Commercial_ Contact. Contact
     *  A commercial contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Commercial
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\CommercialContact
     */
    public function getCommercialContact()
    {
        return $this->commercialContact;
    }

    /**
     * Sets a new commercialContact
     *
     * ASBIE
     *  Participant Party. Commercial_ Contact. Contact
     *  A commercial contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Commercial
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\CommercialContact $commercialContact
     * @return self
     */
    public function setCommercialContact(\CleverIt\UBL\Invoice\CommercialContact $commercialContact)
    {
        $this->commercialContact = $commercialContact;
        return $this;
    }


}

