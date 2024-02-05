<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing CommunicationType
 *
 * ABIE
 *  Communication. Details
 *  A class to describe a means of communication.
 *  Communication
 * XSD Type: CommunicationType
 */
class CommunicationType
{

    /**
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @var \CleverIt\UBL\Invoice\ChannelCode $channelCode
     */
    private $channelCode = null;

    /**
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @var \CleverIt\UBL\Invoice\Channel $channel
     */
    private $channel = null;

    /**
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @var \CleverIt\UBL\Invoice\Value $value
     */
    private $value = null;

    /**
     * Gets as channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @return \CleverIt\UBL\Invoice\ChannelCode
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets a new channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @param \CleverIt\UBL\Invoice\ChannelCode $channelCode
     * @return self
     */
    public function setChannelCode(\CleverIt\UBL\Invoice\ChannelCode $channelCode)
    {
        $this->channelCode = $channelCode;
        return $this;
    }

    /**
     * Gets as channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @return \CleverIt\UBL\Invoice\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @param \CleverIt\UBL\Invoice\Channel $channel
     * @return self
     */
    public function setChannel(\CleverIt\UBL\Invoice\Channel $channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @return \CleverIt\UBL\Invoice\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @param \CleverIt\UBL\Invoice\Value $value
     * @return self
     */
    public function setValue(\CleverIt\UBL\Invoice\Value $value)
    {
        $this->value = $value;
        return $this;
    }


}

