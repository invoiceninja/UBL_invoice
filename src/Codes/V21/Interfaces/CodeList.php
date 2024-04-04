<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;
class CodeList
{
    public Identification $identification;
    public ColumnSet $columnSet;
    public SimpleCodeList $simpleCodeList;

    public function __construct(
        Identification $identification,
        ColumnSet $columnSet,
        SimpleCodeList $simpleCodeList
    ) {
        $this->identification = $identification;
        $this->columnSet = $columnSet;
        $this->simpleCodeList = $simpleCodeList;
    }
}
