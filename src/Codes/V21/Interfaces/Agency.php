<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class Agency
{
    public string $longName;
    public int $identifier;

    public function __construct(string $longName, int $identifier)
    {
        $this->longName = $longName;
        $this->identifier = $identifier;
    }
}
