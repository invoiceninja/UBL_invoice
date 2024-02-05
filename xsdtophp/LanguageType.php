<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing LanguageType
 *
 * ABIE
 *  Language. Details
 *  A class to describe a language.
 *  Language
 * XSD Type: LanguageType
 */
class LanguageType
{

    /**
     * BBIE
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\LocaleCode $localeCode
     */
    private $localeCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
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
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
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
     * Gets as name
     *
     * BBIE
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
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
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
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
     * Gets as localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\LocaleCode
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Sets a new localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\LocaleCode $localeCode
     * @return self
     */
    public function setLocaleCode(\CleverIt\UBL\Invoice\LocaleCode $localeCode)
    {
        $this->localeCode = $localeCode;
        return $this;
    }


}

