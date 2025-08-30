<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CommitmentTypeQualifiersListType
 *
 *
 * XSD Type: CommitmentTypeQualifiersListType
 */
class CommitmentTypeQualifiersListType
{
    /**
     * @var \CleverIt\UBL\Invoice\RO\AnyType[] $commitmentTypeQualifier
     */
    private $commitmentTypeQualifier = [
        
    ];

    /**
     * Adds as commitmentTypeQualifier
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AnyType $commitmentTypeQualifier
     */
    public function addToCommitmentTypeQualifier(\CleverIt\UBL\Invoice\RO\AnyType $commitmentTypeQualifier)
    {
        $this->commitmentTypeQualifier[] = $commitmentTypeQualifier;
        return $this;
    }

    /**
     * isset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommitmentTypeQualifier($index)
    {
        return isset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * unset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommitmentTypeQualifier($index)
    {
        unset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * Gets as commitmentTypeQualifier
     *
     * @return \CleverIt\UBL\Invoice\RO\AnyType[]
     */
    public function getCommitmentTypeQualifier()
    {
        return $this->commitmentTypeQualifier;
    }

    /**
     * Sets a new commitmentTypeQualifier
     *
     * @param \CleverIt\UBL\Invoice\RO\AnyType[] $commitmentTypeQualifier
     * @return self
     */
    public function setCommitmentTypeQualifier(array $commitmentTypeQualifier = null)
    {
        $this->commitmentTypeQualifier = $commitmentTypeQualifier;
        return $this;
    }
}

