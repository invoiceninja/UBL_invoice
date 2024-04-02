<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class Row
{
    /** @var Value[] */
    public array $value;

    /**
     * @param Value[] $value
     */
    public function __construct(array $value)
    {
        $this->value = $value;
    }
}
