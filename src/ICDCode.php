<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class ICDCode
{
    public const NATO_COMMERCIAL_AND_GOV_ENTITY_SYSTEM = "0141";
    public const LUXEMBOURG_CP_CPS_INDEX = "0171";
    public const UBL_BE_PARTY_IDENTIFIER = "0193";
    public const ENTERPRISE_NUMBER = "0208";
    public const CODICE_FISCALE = "0210";
}
