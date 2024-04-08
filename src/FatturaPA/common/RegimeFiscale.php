<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class RegimeFiscale extends BaseInvoice implements XmlSerializable
{

    private array $types = [
        "RF01" => "Regime ordinario",
        "RF02" => "Regime dei contribuenti minimi (art. 1,c.96-117, L. 244/2007)",
        "RF04" => "Agricoltura e attività connesse e pesca (artt. 34 e 34-bis, D.P.R. 633/1972)",
        "RF05" => "Vendita sali e tabacchi (art. 74, c.1, D.P.R. 633/1972)",
        "RF06" => "Commercio dei fiammiferi (art. 74, c.1, D.P.R. 633/1972)",
        "RF07" => "Editoria (art. 74, c.1, D.P.R. 633/1972)",
        "RF08" => "Gestione di servizi di telefonia pubblica (art. 74, c.1, D.P.R. 633/1972)" ,
        "RF09" => "Rivendita di documenti di trasporto pubblico e di sosta (art. 74, c.1, D.P.R. 633/1972)" ,
        "RF10" => "Intrattenimenti, giochi e altre attività di cui alla tariffa allegata al D.P.R. 640/72 (art. 74, c.6, D.P.R. 633/1972)" ,
        "RF11" => "Agenzie di viaggi e turismo (art. 74-ter, D.P.R. 633/1972)" ,
        "RF12" => "Agriturismo (art. 5, c.2, L. 413/1991)" ,
        "RF13" => "Vendite a domicilio (art. 25-bis, c.6, D.P.R. 600/1973)" ,
        "RF14" => "Rivendita di beni usati, di oggetti d’arte, d’antiquariato o da collezione (art. 36, D.L. 41/1995)" ,
        "RF15" => "Agenzie di vendite all’asta di oggetti d’arte, antiquariato o da collezione (art. 40-bis, D.L. 41/1995)" ,
        "RF16" => "IVA per cassa P.A. (art. 6, c.5, D.P.R. 633/1972)" ,
        "RF17" => "IVA per cassa (art. 32-bis, D.L. 83/2012)" ,
        "RF19" =>"Regime forfettario" ,
        "RF18" => "Altro"
    ];

    private array $protected = [
        'protected',
        'types',
    ];

    public function __construct(public string $RegimeFiscale = "RF01")
    {
    }

    public function getTypes()
    {
        return $this->types;
    }

    function xmlSerialize(Writer $writer): void
    {

        $vars = [];

        foreach($this as $property => $value) {

            if(in_array($property, $this->protected))
                continue;

            if($value !== null) {
                $vars[$property] = $value;
            }
        }

        $this->setProps($vars);

        $writer->write($this->getProps());

    }

}
