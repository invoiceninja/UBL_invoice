<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing SocialMediaProfileType
 *
 * ABIE
 *  Social Media Profile. Details
 *  A class to describe a social media profile.
 *  Social Media Profile
 * XSD Type: SocialMediaProfileType
 */
class SocialMediaProfileType
{

    /**
     * BBIE
     *  Social Media Profile. Identifier
     *  An identifier for a specific social media.
     *  0..1
     *  Social Media Profile
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  FB
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Social Media Profile. Name
     *  The common name of the social media.
     *  0..1
     *  Social Media Profile
     *  Name
     *  Name
     *  Name. Type
     *  Facebook
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Social Media Profile. Social Media Type Code. Code
     *  A code that specifies the type of social media.
     *  0..1
     *  Social Media Profile
     *  Social Media Type Code
     *  Code
     *  Code. Type
     *  BusinessNetwork, SocialNetwork, ...
     *
     * @var \CleverIt\UBL\Invoice\SocialMediaTypeCode $socialMediaTypeCode
     */
    private $socialMediaTypeCode = null;

    /**
     * BBIE
     *  Social Media Profile. URI. Identifier
     *  The Uniform Resource Identifier (URI) of a party profile in the social media; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Social Media Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  https://www.facebook.com/oasis.open/
     *
     * @var \CleverIt\UBL\Invoice\URI $uRI
     */
    private $uRI = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Social Media Profile. Identifier
     *  An identifier for a specific social media.
     *  0..1
     *  Social Media Profile
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  FB
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
     *  Social Media Profile. Identifier
     *  An identifier for a specific social media.
     *  0..1
     *  Social Media Profile
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  FB
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
     * Gets as name
     *
     * BBIE
     *  Social Media Profile. Name
     *  The common name of the social media.
     *  0..1
     *  Social Media Profile
     *  Name
     *  Name
     *  Name. Type
     *  Facebook
     *
     * @return \CleverIt\UBL\Invoice\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Social Media Profile. Name
     *  The common name of the social media.
     *  0..1
     *  Social Media Profile
     *  Name
     *  Name
     *  Name. Type
     *  Facebook
     *
     * @param \CleverIt\UBL\Invoice\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as socialMediaTypeCode
     *
     * BBIE
     *  Social Media Profile. Social Media Type Code. Code
     *  A code that specifies the type of social media.
     *  0..1
     *  Social Media Profile
     *  Social Media Type Code
     *  Code
     *  Code. Type
     *  BusinessNetwork, SocialNetwork, ...
     *
     * @return \CleverIt\UBL\Invoice\SocialMediaTypeCode
     */
    public function getSocialMediaTypeCode()
    {
        return $this->socialMediaTypeCode;
    }

    /**
     * Sets a new socialMediaTypeCode
     *
     * BBIE
     *  Social Media Profile. Social Media Type Code. Code
     *  A code that specifies the type of social media.
     *  0..1
     *  Social Media Profile
     *  Social Media Type Code
     *  Code
     *  Code. Type
     *  BusinessNetwork, SocialNetwork, ...
     *
     * @param \CleverIt\UBL\Invoice\SocialMediaTypeCode $socialMediaTypeCode
     * @return self
     */
    public function setSocialMediaTypeCode(\CleverIt\UBL\Invoice\SocialMediaTypeCode $socialMediaTypeCode)
    {
        $this->socialMediaTypeCode = $socialMediaTypeCode;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Social Media Profile. URI. Identifier
     *  The Uniform Resource Identifier (URI) of a party profile in the social media; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Social Media Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  https://www.facebook.com/oasis.open/
     *
     * @return \CleverIt\UBL\Invoice\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Social Media Profile. URI. Identifier
     *  The Uniform Resource Identifier (URI) of a party profile in the social media; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Social Media Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  https://www.facebook.com/oasis.open/
     *
     * @param \CleverIt\UBL\Invoice\URI $uRI
     * @return self
     */
    public function setURI(\CleverIt\UBL\Invoice\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }


}

