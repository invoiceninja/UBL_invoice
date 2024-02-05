<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ClauseType
 *
 * ABIE
 *  Clause. Details
 *  A class to define a clause (a distinct article or provision) in a contract, treaty, will, or other formal or legal written document requiring compliance.
 *  Clause
 * XSD Type: ClauseType
 */
class ClauseType
{

    /**
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Content[] $content
     */
    private $content = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
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
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
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
     * Adds as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Content $content
     */
    public function addToContent(\CleverIt\UBL\Invoice\Content $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Content[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Content[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }


}

