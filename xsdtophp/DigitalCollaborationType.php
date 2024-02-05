<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DigitalCollaborationType
 *
 * ABIE
 *  Digital Collaboration. Details
 *  A class to describe a digital trade collaboration.
 *  Digital Collaboration
 *  Business Collaboration
 * XSD Type: DigitalCollaborationType
 */
class DigitalCollaborationType
{

    /**
     * BBIE
     *  Digital Collaboration. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Digital Collaboration. Sending_ Digital Service. Digital Service
     *  The sending digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Sending
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @var \CleverIt\UBL\Invoice\SendingDigitalService $sendingDigitalService
     */
    private $sendingDigitalService = null;

    /**
     * ASBIE
     *  Digital Collaboration. Receiving_ Digital Service. Digital Service
     *  The receiving digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Receiving
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @var \CleverIt\UBL\Invoice\ReceivingDigitalService $receivingDigitalService
     */
    private $receivingDigitalService = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Digital Collaboration. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Digital Collaboration. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as sendingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Sending_ Digital Service. Digital Service
     *  The sending digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Sending
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @return \CleverIt\UBL\Invoice\SendingDigitalService
     */
    public function getSendingDigitalService()
    {
        return $this->sendingDigitalService;
    }

    /**
     * Sets a new sendingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Sending_ Digital Service. Digital Service
     *  The sending digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Sending
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @param \CleverIt\UBL\Invoice\SendingDigitalService $sendingDigitalService
     * @return self
     */
    public function setSendingDigitalService(\CleverIt\UBL\Invoice\SendingDigitalService $sendingDigitalService)
    {
        $this->sendingDigitalService = $sendingDigitalService;
        return $this;
    }

    /**
     * Gets as receivingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Receiving_ Digital Service. Digital Service
     *  The receiving digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Receiving
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @return \CleverIt\UBL\Invoice\ReceivingDigitalService
     */
    public function getReceivingDigitalService()
    {
        return $this->receivingDigitalService;
    }

    /**
     * Sets a new receivingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Receiving_ Digital Service. Digital Service
     *  The receiving digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Receiving
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @param \CleverIt\UBL\Invoice\ReceivingDigitalService $receivingDigitalService
     * @return self
     */
    public function setReceivingDigitalService(\CleverIt\UBL\Invoice\ReceivingDigitalService $receivingDigitalService)
    {
        $this->receivingDigitalService = $receivingDigitalService;
        return $this;
    }


}

