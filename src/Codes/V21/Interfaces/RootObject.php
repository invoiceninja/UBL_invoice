<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class RootObject
{
    public CodeList $codeList;

    public function __construct(CodeList $codeList)
    {
        $this->codeList = $codeList;
    }
}
