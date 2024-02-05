<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing LegislationType
 *
 * ABIE
 *  Legislation. Details
 *  A class to describe a reference to a piece of legislation.
 *  Legislation
 * XSD Type: LegislationType
 */
class LegislationType
{

    /**
     * BBIE
     *  Legislation. Identifier
     *  An identifier to refer to the legislation.
     *  0..1
     *  Legislation
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Title[] $title
     */
    private $title = [
        
    ];

    /**
     * BBIE
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\JurisdictionLevel[] $jurisdictionLevel
     */
    private $jurisdictionLevel = [
        
    ];

    /**
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Article[] $article
     */
    private $article = [
        
    ];

    /**
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\URI[] $uRI
     */
    private $uRI = [
        
    ];

    /**
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @var \CleverIt\UBL\Invoice\Language[] $language
     */
    private $language = [
        
    ];

    /**
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     */
    private $jurisdictionRegionAddress = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Legislation. Identifier
     *  An identifier to refer to the legislation.
     *  0..1
     *  Legislation
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
     *  Legislation. Identifier
     *  An identifier to refer to the legislation.
     *  0..1
     *  Legislation
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
     * Adds as title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Title $title
     */
    public function addToTitle(\CleverIt\UBL\Invoice\Title $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Title[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Title[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
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
     * Adds as jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\JurisdictionLevel $jurisdictionLevel
     */
    public function addToJurisdictionLevel(\CleverIt\UBL\Invoice\JurisdictionLevel $jurisdictionLevel)
    {
        $this->jurisdictionLevel[] = $jurisdictionLevel;
        return $this;
    }

    /**
     * isset jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionLevel($index)
    {
        return isset($this->jurisdictionLevel[$index]);
    }

    /**
     * unset jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionLevel($index)
    {
        unset($this->jurisdictionLevel[$index]);
    }

    /**
     * Gets as jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\JurisdictionLevel[]
     */
    public function getJurisdictionLevel()
    {
        return $this->jurisdictionLevel;
    }

    /**
     * Sets a new jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\JurisdictionLevel[] $jurisdictionLevel
     * @return self
     */
    public function setJurisdictionLevel(array $jurisdictionLevel)
    {
        $this->jurisdictionLevel = $jurisdictionLevel;
        return $this;
    }

    /**
     * Adds as article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Article $article
     */
    public function addToArticle(\CleverIt\UBL\Invoice\Article $article)
    {
        $this->article[] = $article;
        return $this;
    }

    /**
     * isset article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticle($index)
    {
        return isset($this->article[$index]);
    }

    /**
     * unset article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticle($index)
    {
        unset($this->article[$index]);
    }

    /**
     * Gets as article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Article[]
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Sets a new article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Article[] $article
     * @return self
     */
    public function setArticle(array $article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * Adds as uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\URI $uRI
     */
    public function addToURI(\CleverIt\UBL\Invoice\URI $uRI)
    {
        $this->uRI[] = $uRI;
        return $this;
    }

    /**
     * isset uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURI($index)
    {
        return isset($this->uRI[$index]);
    }

    /**
     * unset uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURI($index)
    {
        unset($this->uRI[$index]);
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\URI[]
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\URI[] $uRI
     * @return self
     */
    public function setURI(array $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Adds as language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Language $language
     */
    public function addToLanguage(\CleverIt\UBL\Invoice\Language $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @return \CleverIt\UBL\Invoice\Language[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @param \CleverIt\UBL\Invoice\Language[] $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\JurisdictionRegionAddress $jurisdictionRegionAddress
     */
    public function addToJurisdictionRegionAddress(\CleverIt\UBL\Invoice\JurisdictionRegionAddress $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress[] = $jurisdictionRegionAddress;
        return $this;
    }

    /**
     * isset jurisdictionRegionAddress
     *
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionRegionAddress($index)
    {
        return isset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * unset jurisdictionRegionAddress
     *
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionRegionAddress($index)
    {
        unset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * Gets as jurisdictionRegionAddress
     *
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\JurisdictionRegionAddress[]
     */
    public function getJurisdictionRegionAddress()
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * Sets a new jurisdictionRegionAddress
     *
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(array $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }


}

