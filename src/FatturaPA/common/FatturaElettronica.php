<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class FatturaElettronica extends BaseInvoice implements XmlSerializable
{

    public string $versione = 'FPA12';

    public string $p = 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2';
  
    public string $ds = 'http://www.w3.org/2000/09/xmldsig#';

    public string $xsi = 'http://www.w3.org/2001/XMLSchema-instance';

    public string $schemaLocation = 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd';

    function __construct(public $fattura) {}

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void
    {
        $root_attributes = [
            'versione' => $this->versione,
            'xmlns:ds' => $this->ds,
            'xmlns:p' => $this->p,
            'xmlns:xsi' => $this->xsi,
            'xsi:schemaLocation' => $this->schemaLocation,
        ];

        $writer->writeAttributes($root_attributes);
        $writer->write($this->fattura);

    }

}