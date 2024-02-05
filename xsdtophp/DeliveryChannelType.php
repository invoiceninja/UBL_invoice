<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DeliveryChannelType
 *
 * ABIE
 *  Delivery Channel. Details
 *  A class to describe a delivery channel.
 *  Delivery Channel
 * XSD Type: DeliveryChannelType
 */
class DeliveryChannelType
{

    /**
     * BBIE
     *  Delivery Channel. Network Identifier. Identifier
     *  An identifier for the network where messages are delivered (e.g. a business network).
     *  0..1
     *  Delivery Channel
     *  Network Identifier
     *  Identifier
     *  Identifier. Type
     *  OpenPEPPOL
     *
     * @var \CleverIt\UBL\Invoice\NetworkID $networkID
     */
    private $networkID = null;

    /**
     * BBIE
     *  Delivery Channel. Participant Identifier. Identifier
     *  An identifier for a registered participant in the network (e.g. according a precise scheme such as IT:VAT, DK:CVR, GLN).
     *  0..1
     *  Delivery Channel
     *  Participant Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \CleverIt\UBL\Invoice\ParticipantID $participantID
     */
    private $participantID = null;

    /**
     * BBIE
     *  Delivery Channel. Test_ Indicator. Indicator
     *  An indicator that the channel is a test channel (true).
     *  0..1
     *  Delivery Channel
     *  Test
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $testIndicator
     */
    private $testIndicator = null;

    /**
     * ASBIE
     *  Delivery Channel. Digital_ Certificate. Certificate
     *  A digital certificate associated with this delivery channel.
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @var \CleverIt\UBL\Invoice\DigitalCertificate $digitalCertificate
     */
    private $digitalCertificate = null;

    /**
     * ASBIE
     *  Delivery Channel. Digital_ Message Delivery. Message Delivery
     *  A digital message delivery associated with this delivery channel (aka routing information).
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Message Delivery
     *  Message Delivery
     *  Message Delivery
     *
     * @var \CleverIt\UBL\Invoice\DigitalMessageDelivery $digitalMessageDelivery
     */
    private $digitalMessageDelivery = null;

    /**
     * Gets as networkID
     *
     * BBIE
     *  Delivery Channel. Network Identifier. Identifier
     *  An identifier for the network where messages are delivered (e.g. a business network).
     *  0..1
     *  Delivery Channel
     *  Network Identifier
     *  Identifier
     *  Identifier. Type
     *  OpenPEPPOL
     *
     * @return \CleverIt\UBL\Invoice\NetworkID
     */
    public function getNetworkID()
    {
        return $this->networkID;
    }

    /**
     * Sets a new networkID
     *
     * BBIE
     *  Delivery Channel. Network Identifier. Identifier
     *  An identifier for the network where messages are delivered (e.g. a business network).
     *  0..1
     *  Delivery Channel
     *  Network Identifier
     *  Identifier
     *  Identifier. Type
     *  OpenPEPPOL
     *
     * @param \CleverIt\UBL\Invoice\NetworkID $networkID
     * @return self
     */
    public function setNetworkID(\CleverIt\UBL\Invoice\NetworkID $networkID)
    {
        $this->networkID = $networkID;
        return $this;
    }

    /**
     * Gets as participantID
     *
     * BBIE
     *  Delivery Channel. Participant Identifier. Identifier
     *  An identifier for a registered participant in the network (e.g. according a precise scheme such as IT:VAT, DK:CVR, GLN).
     *  0..1
     *  Delivery Channel
     *  Participant Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @return \CleverIt\UBL\Invoice\ParticipantID
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * BBIE
     *  Delivery Channel. Participant Identifier. Identifier
     *  An identifier for a registered participant in the network (e.g. according a precise scheme such as IT:VAT, DK:CVR, GLN).
     *  0..1
     *  Delivery Channel
     *  Participant Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @param \CleverIt\UBL\Invoice\ParticipantID $participantID
     * @return self
     */
    public function setParticipantID(\CleverIt\UBL\Invoice\ParticipantID $participantID)
    {
        $this->participantID = $participantID;
        return $this;
    }

    /**
     * Gets as testIndicator
     *
     * BBIE
     *  Delivery Channel. Test_ Indicator. Indicator
     *  An indicator that the channel is a test channel (true).
     *  0..1
     *  Delivery Channel
     *  Test
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getTestIndicator()
    {
        return $this->testIndicator;
    }

    /**
     * Sets a new testIndicator
     *
     * BBIE
     *  Delivery Channel. Test_ Indicator. Indicator
     *  An indicator that the channel is a test channel (true).
     *  0..1
     *  Delivery Channel
     *  Test
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $testIndicator
     * @return self
     */
    public function setTestIndicator($testIndicator)
    {
        $this->testIndicator = $testIndicator;
        return $this;
    }

    /**
     * Gets as digitalCertificate
     *
     * ASBIE
     *  Delivery Channel. Digital_ Certificate. Certificate
     *  A digital certificate associated with this delivery channel.
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return \CleverIt\UBL\Invoice\DigitalCertificate
     */
    public function getDigitalCertificate()
    {
        return $this->digitalCertificate;
    }

    /**
     * Sets a new digitalCertificate
     *
     * ASBIE
     *  Delivery Channel. Digital_ Certificate. Certificate
     *  A digital certificate associated with this delivery channel.
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param \CleverIt\UBL\Invoice\DigitalCertificate $digitalCertificate
     * @return self
     */
    public function setDigitalCertificate(\CleverIt\UBL\Invoice\DigitalCertificate $digitalCertificate)
    {
        $this->digitalCertificate = $digitalCertificate;
        return $this;
    }

    /**
     * Gets as digitalMessageDelivery
     *
     * ASBIE
     *  Delivery Channel. Digital_ Message Delivery. Message Delivery
     *  A digital message delivery associated with this delivery channel (aka routing information).
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Message Delivery
     *  Message Delivery
     *  Message Delivery
     *
     * @return \CleverIt\UBL\Invoice\DigitalMessageDelivery
     */
    public function getDigitalMessageDelivery()
    {
        return $this->digitalMessageDelivery;
    }

    /**
     * Sets a new digitalMessageDelivery
     *
     * ASBIE
     *  Delivery Channel. Digital_ Message Delivery. Message Delivery
     *  A digital message delivery associated with this delivery channel (aka routing information).
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Message Delivery
     *  Message Delivery
     *  Message Delivery
     *
     * @param \CleverIt\UBL\Invoice\DigitalMessageDelivery $digitalMessageDelivery
     * @return self
     */
    public function setDigitalMessageDelivery(\CleverIt\UBL\Invoice\DigitalMessageDelivery $digitalMessageDelivery)
    {
        $this->digitalMessageDelivery = $digitalMessageDelivery;
        return $this;
    }


}

