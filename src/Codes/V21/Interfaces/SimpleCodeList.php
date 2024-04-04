<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class SimpleCodeList
{
    /** @var Row[] */
    public array $row;

    /**
     * @param Row[] $row
     */
    public function __construct(array $row)
    {
        $this->row = $row;
    }
}
