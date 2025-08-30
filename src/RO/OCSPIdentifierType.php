<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing OCSPIdentifierType
 *
 *
 * XSD Type: OCSPIdentifierType
 */
class OCSPIdentifierType
{
    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\ResponderIDType $responderID
     */
    private $responderID = null;

    /**
     * @var \DateTime $producedAt
     */
    private $producedAt = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as responderID
     *
     * @return \CleverIt\UBL\Invoice\RO\ResponderIDType
     */
    public function getResponderID()
    {
        return $this->responderID;
    }

    /**
     * Sets a new responderID
     *
     * @param \CleverIt\UBL\Invoice\RO\ResponderIDType $responderID
     * @return self
     */
    public function setResponderID(\CleverIt\UBL\Invoice\RO\ResponderIDType $responderID)
    {
        $this->responderID = $responderID;
        return $this;
    }

    /**
     * Gets as producedAt
     *
     * @return \DateTime
     */
    public function getProducedAt()
    {
        return $this->producedAt;
    }

    /**
     * Sets a new producedAt
     *
     * @param \DateTime $producedAt
     * @return self
     */
    public function setProducedAt(\DateTime $producedAt)
    {
        $this->producedAt = $producedAt;
        return $this;
    }
}

