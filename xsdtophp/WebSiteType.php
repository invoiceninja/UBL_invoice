<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing WebSiteType
 *
 * ABIE
 *  Web Site. Details
 *  A class to describe a web site.
 *  Web Site
 * XSD Type: WebSiteType
 */
class WebSiteType
{

    /**
     * BBIE
     *  Web Site. Identifier
     *  An identifier for a specific web site.
     *  0..1
     *  Web Site
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Web Site. Name
     *  The common name of the web site.
     *  0..1
     *  Web Site
     *  Name
     *  Name
     *  Name. Type
     *  UBL Online Community
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Web Site. Web Site Type Code. Code
     *  A code that specifies the type web site.
     *  0..1
     *  Web Site
     *  Web Site Type Code
     *  Code
     *  Code. Type
     *  Satellite, Portal, Operative, Industry, ...
     *
     * @var \CleverIt\UBL\Invoice\WebSiteTypeCode $webSiteTypeCode
     */
    private $webSiteTypeCode = null;

    /**
     * BBIE
     *  Web Site. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the web site; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Web Site
     *  URI
     *  Identifier
     *  Identifier. Type
     *  http://ubl.xml.org/
     *
     * @var \CleverIt\UBL\Invoice\URI $uRI
     */
    private $uRI = null;

    /**
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @var \CleverIt\UBL\Invoice\WebSiteAccess[] $webSiteAccess
     */
    private $webSiteAccess = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Web Site. Identifier
     *  An identifier for a specific web site.
     *  0..1
     *  Web Site
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL
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
     *  Web Site. Identifier
     *  An identifier for a specific web site.
     *  0..1
     *  Web Site
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL
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
     *  Web Site. Name
     *  The common name of the web site.
     *  0..1
     *  Web Site
     *  Name
     *  Name
     *  Name. Type
     *  UBL Online Community
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
     *  Web Site. Name
     *  The common name of the web site.
     *  0..1
     *  Web Site
     *  Name
     *  Name
     *  Name. Type
     *  UBL Online Community
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
     * Adds as description
     *
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
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
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
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
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
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
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
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
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
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
     * Gets as webSiteTypeCode
     *
     * BBIE
     *  Web Site. Web Site Type Code. Code
     *  A code that specifies the type web site.
     *  0..1
     *  Web Site
     *  Web Site Type Code
     *  Code
     *  Code. Type
     *  Satellite, Portal, Operative, Industry, ...
     *
     * @return \CleverIt\UBL\Invoice\WebSiteTypeCode
     */
    public function getWebSiteTypeCode()
    {
        return $this->webSiteTypeCode;
    }

    /**
     * Sets a new webSiteTypeCode
     *
     * BBIE
     *  Web Site. Web Site Type Code. Code
     *  A code that specifies the type web site.
     *  0..1
     *  Web Site
     *  Web Site Type Code
     *  Code
     *  Code. Type
     *  Satellite, Portal, Operative, Industry, ...
     *
     * @param \CleverIt\UBL\Invoice\WebSiteTypeCode $webSiteTypeCode
     * @return self
     */
    public function setWebSiteTypeCode(\CleverIt\UBL\Invoice\WebSiteTypeCode $webSiteTypeCode)
    {
        $this->webSiteTypeCode = $webSiteTypeCode;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Web Site. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the web site; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Web Site
     *  URI
     *  Identifier
     *  Identifier. Type
     *  http://ubl.xml.org/
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
     *  Web Site. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the web site; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Web Site
     *  URI
     *  Identifier
     *  Identifier. Type
     *  http://ubl.xml.org/
     *
     * @param \CleverIt\UBL\Invoice\URI $uRI
     * @return self
     */
    public function setURI(\CleverIt\UBL\Invoice\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Adds as webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\WebSiteAccess $webSiteAccess
     */
    public function addToWebSiteAccess(\CleverIt\UBL\Invoice\WebSiteAccess $webSiteAccess)
    {
        $this->webSiteAccess[] = $webSiteAccess;
        return $this;
    }

    /**
     * isset webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWebSiteAccess($index)
    {
        return isset($this->webSiteAccess[$index]);
    }

    /**
     * unset webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWebSiteAccess($index)
    {
        unset($this->webSiteAccess[$index]);
    }

    /**
     * Gets as webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @return \CleverIt\UBL\Invoice\WebSiteAccess[]
     */
    public function getWebSiteAccess()
    {
        return $this->webSiteAccess;
    }

    /**
     * Sets a new webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param \CleverIt\UBL\Invoice\WebSiteAccess[] $webSiteAccess
     * @return self
     */
    public function setWebSiteAccess(array $webSiteAccess)
    {
        $this->webSiteAccess = $webSiteAccess;
        return $this;
    }


}

