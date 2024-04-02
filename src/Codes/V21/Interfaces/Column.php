<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class Column
{
    public string $shortName;
    public string $data;

    public function __construct(string $shortName, string $data)
    {
        $this->shortName = $shortName;
        $this->data = $data;
    }
}
