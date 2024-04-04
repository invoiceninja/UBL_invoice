<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class ColumnSet
{
    /** @var Column[] */
    public array $column;
    public Key $key;

    /**
     * @param Column[] $column
     */
    public function __construct(array $column, Key $key)
    {
        $this->column = $column;
        $this->key = $key;
    }
}
