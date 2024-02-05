<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing MessageDeliveryType
 *
 * ABIE
 *  Message Delivery. Details
 *  A class to describe how a message is delivered (routed).
 *  Message Delivery
 * XSD Type: MessageDeliveryType
 */
class MessageDeliveryType
{

    /**
     * BBIE
     *  Message Delivery. Protocol Identifier. Identifier
     *  An identifier for the protocol to be used within this message delivery.
     *  0..1
     *  Message Delivery
     *  Protocol Identifier
     *  Identifier
     *  Identifier. Type
     *  AS2, ebMS2, AS4, WS-RM
     *
     * @var \CleverIt\UBL\Invoice\ProtocolID $protocolID
     */
    private $protocolID = null;

    /**
     * BBIE
     *  Message Delivery. Envelope Type Code. Code
     *  A code signifying the type of envelope to be used within this message delivery (e.g. OASIS BDX Business Document Envelope).
     *  0..1
     *  Message Delivery
     *  Envelope Type Code
     *  Code
     *  Code. Type
     *  BDE
     *
     * @var \CleverIt\UBL\Invoice\EnvelopeTypeCode $envelopeTypeCode
     */
    private $envelopeTypeCode = null;

    /**
     * BBIE
     *  Message Delivery. Endpoint URI. Identifier
     *  The Uniform Resource Identifier (URI) of the access point (e.g. an HTTP URL including the port).
     *  0..1
     *  Message Delivery
     *  Endpoint URI
     *  Identifier
     *  Identifier. Type
     *  https://services.enterprise.com/participant-id/rx
     *
     * @var \CleverIt\UBL\Invoice\EndpointURI $endpointURI
     */
    private $endpointURI = null;

    /**
     * Gets as protocolID
     *
     * BBIE
     *  Message Delivery. Protocol Identifier. Identifier
     *  An identifier for the protocol to be used within this message delivery.
     *  0..1
     *  Message Delivery
     *  Protocol Identifier
     *  Identifier
     *  Identifier. Type
     *  AS2, ebMS2, AS4, WS-RM
     *
     * @return \CleverIt\UBL\Invoice\ProtocolID
     */
    public function getProtocolID()
    {
        return $this->protocolID;
    }

    /**
     * Sets a new protocolID
     *
     * BBIE
     *  Message Delivery. Protocol Identifier. Identifier
     *  An identifier for the protocol to be used within this message delivery.
     *  0..1
     *  Message Delivery
     *  Protocol Identifier
     *  Identifier
     *  Identifier. Type
     *  AS2, ebMS2, AS4, WS-RM
     *
     * @param \CleverIt\UBL\Invoice\ProtocolID $protocolID
     * @return self
     */
    public function setProtocolID(\CleverIt\UBL\Invoice\ProtocolID $protocolID)
    {
        $this->protocolID = $protocolID;
        return $this;
    }

    /**
     * Gets as envelopeTypeCode
     *
     * BBIE
     *  Message Delivery. Envelope Type Code. Code
     *  A code signifying the type of envelope to be used within this message delivery (e.g. OASIS BDX Business Document Envelope).
     *  0..1
     *  Message Delivery
     *  Envelope Type Code
     *  Code
     *  Code. Type
     *  BDE
     *
     * @return \CleverIt\UBL\Invoice\EnvelopeTypeCode
     */
    public function getEnvelopeTypeCode()
    {
        return $this->envelopeTypeCode;
    }

    /**
     * Sets a new envelopeTypeCode
     *
     * BBIE
     *  Message Delivery. Envelope Type Code. Code
     *  A code signifying the type of envelope to be used within this message delivery (e.g. OASIS BDX Business Document Envelope).
     *  0..1
     *  Message Delivery
     *  Envelope Type Code
     *  Code
     *  Code. Type
     *  BDE
     *
     * @param \CleverIt\UBL\Invoice\EnvelopeTypeCode $envelopeTypeCode
     * @return self
     */
    public function setEnvelopeTypeCode(\CleverIt\UBL\Invoice\EnvelopeTypeCode $envelopeTypeCode)
    {
        $this->envelopeTypeCode = $envelopeTypeCode;
        return $this;
    }

    /**
     * Gets as endpointURI
     *
     * BBIE
     *  Message Delivery. Endpoint URI. Identifier
     *  The Uniform Resource Identifier (URI) of the access point (e.g. an HTTP URL including the port).
     *  0..1
     *  Message Delivery
     *  Endpoint URI
     *  Identifier
     *  Identifier. Type
     *  https://services.enterprise.com/participant-id/rx
     *
     * @return \CleverIt\UBL\Invoice\EndpointURI
     */
    public function getEndpointURI()
    {
        return $this->endpointURI;
    }

    /**
     * Sets a new endpointURI
     *
     * BBIE
     *  Message Delivery. Endpoint URI. Identifier
     *  The Uniform Resource Identifier (URI) of the access point (e.g. an HTTP URL including the port).
     *  0..1
     *  Message Delivery
     *  Endpoint URI
     *  Identifier
     *  Identifier. Type
     *  https://services.enterprise.com/participant-id/rx
     *
     * @param \CleverIt\UBL\Invoice\EndpointURI $endpointURI
     * @return self
     */
    public function setEndpointURI(\CleverIt\UBL\Invoice\EndpointURI $endpointURI)
    {
        $this->endpointURI = $endpointURI;
        return $this;
    }


}

