<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class Key
{
    public string $shortName;
    public string $columnRef;

    public function __construct(string $shortName, string $columnRef)
    {
        $this->shortName = $shortName;
        $this->columnRef = $columnRef;
    }
}
