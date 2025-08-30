<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing SPUserNoticeType
 *
 *
 * XSD Type: SPUserNoticeType
 */
class SPUserNoticeType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\NoticeReferenceType $noticeRef
     */
    private $noticeRef = null;

    /**
     * @var string $explicitText
     */
    private $explicitText = null;

    /**
     * Gets as noticeRef
     *
     * @return \CleverIt\UBL\Invoice\RO\NoticeReferenceType
     */
    public function getNoticeRef()
    {
        return $this->noticeRef;
    }

    /**
     * Sets a new noticeRef
     *
     * @param \CleverIt\UBL\Invoice\RO\NoticeReferenceType $noticeRef
     * @return self
     */
    public function setNoticeRef(?\CleverIt\UBL\Invoice\RO\NoticeReferenceType $noticeRef = null)
    {
        $this->noticeRef = $noticeRef;
        return $this;
    }

    /**
     * Gets as explicitText
     *
     * @return string
     */
    public function getExplicitText()
    {
        return $this->explicitText;
    }

    /**
     * Sets a new explicitText
     *
     * @param string $explicitText
     * @return self
     */
    public function setExplicitText($explicitText)
    {
        $this->explicitText = $explicitText;
        return $this;
    }
}

