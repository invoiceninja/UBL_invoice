<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class Value
{
    public int|string $simpleValue;

    public function __construct(int|string $simpleValue)
    {
        $this->simpleValue = $simpleValue;
    }
}
