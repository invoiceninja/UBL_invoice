<?php

namespace CleverIt\UBL\Invoice\FatturaPA\common;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use CleverIt\UBL\Invoice\BaseInvoice;

class Sede extends BaseInvoice implements XmlSerializable
{

    private array $protected = [
        'protected',
        'provences',
    ];
    
    private array $provences = [
        "Agrigento" => "AG",
        "Alessandria" => "AL",
        "Ancona" => "AN",
        "Aosta" => "AO",
        "Arezzo" => "AR",
        "Ascoli Piceno" => "AP",
        "Asti" => "AT",
        "Avellino" => "AV",
        "Bari" => "BA",
        "Barletta-Andria-Trani" => "BT",
        "Belluno" => "BL",
        "Benevento" => "BN",
        "Bergamo" => "BG",
        "Biella" => "BI",
        "Bologna" => "BO",
        "Bolzano" => "BZ",
        "Brescia" => "BS",
        "Brindisi" => "BR",
        "Cagliari" => "CA",
        "Caltanissetta" => "CL",
        "Campobasso" => "CB",
        "Carbonia-Iglesias" => "CI",
        "Caserta" => "CE",
        "Catania" => "CT",
        "Catanzaro" => "CZ",
        "Chieti" => "CH",
        "Como" => "CO",
        "Cosenza" => "CS",
        "Cremona" => "CR",
        "Crotone" => "KR",
        "Cuneo" => "CN",
        "Enna" => "EN",
        "Fermo" => "FM",
        "Ferrara" => "FE",
        "Firenze" => "FI",
        "Foggia" => "FG",
        "Forlì-Cesena" => "FC",
        "Frosinone" => "FR",
        "Genova" => "GE",
        "Gorizia" => "GO",
        "Grosseto" => "GR",
        "Imperia" => "IM",
        "Isernia" => "IS",
        "La Spezia" => "SP",
        "L'Aquila" => "AQ",
        "Latina" => "LT",
        "Lecce" => "LE",
        "Lecco" => "LC",
        "Livorno" => "LI",
        "Lodi" => "LO",
        "Lucca" => "LU",
        "Macerata" => "MC",
        "Mantova" => "MN",
        "Massa-Carrara" => "MS",
        "Matera" => "MT",
        "Medio Campidano" => "VS",
        "Messina" => "ME",
        "Milano" => "MI",
        "Modena" => "MO",
        "Monza e della Brianza" => "MB",
        "Napoli" => "NA",
        "Novara" => "NO",
        "Nuoro" => "NU",
        "Ogliastra" => "OG",
        "Olbia-Tempio" => "OT",
        "Oristano" => "OR",
        "Padova" => "PD",
        "Palermo" => "PA",
        "Parma" => "PR",
        "Pavia" => "PV",
        "Perugia" => "PG",
        "Pesaro e Urbino" => "PU",
        "Pescara" => "PE",
        "Piacenza" => "PC",
        "Pisa" => "PI",
        "Pistoia" => "PT",
        "Pordenone" => "PN",
        "Potenza" => "PZ",
        "Prato" => "PO",
        "Ragusa" => "RG",
        "Ravenna" => "RA",
        "Reggio di Calabria" => "RC",
        "Reggio nell'Emilia" => "RE",
        "Rieti" => "RI",
        "Rimini" => "RN",
        "Roma" => "RM",
        "Rovigo" => "RO",
        "Salerno" => "SA",
        "Sassari" => "SS",
        "Savona" => "SV",
        "Siena" => "SI",
        "Siracusa" => "SR",
        "Sondrio" => "SO",
        "Taranto" => "TA",
        "Teramo" => "TE",
        "Terni" => "TR",
        "Torino" => "TO",
        "Trapani" => "TP",
        "Trento" => "TN",
        "Treviso" => "TV",
        "Trieste" => "TS",
        "Udine" => "UD",
        "Varese" => "VA",
        "Venezia" => "VE",
        "Verbano-Cusio-Ossola" => "VB",
        "Vercelli" => "VC",
        "Verona" => "VR",
        "Vibo Valentia" => "VV",
        "Vicenza" => "VI",
        "Viterbo" => "VT"
    ];

    public function __construct(
        public string $Indirizzo, //string - address,  60char limit
        public ?int $CAP, //[0-9][0-9][0-9][0-9][0-9] ie 12345
        public string $Comune, //String 60char limit
        public string $Provincia, //String [A-Z]{2}
        public string $Nazione = 'IT', //String default IT
        ){}
    
    private function resolveProvincia()
    {
        if(in_array($this->Provincia, array_values($this->provences)))
            return $this;
        elseif(in_array($this->Provincia, array_keys($this->provences)))
            $this->Provincia = $this->provences[$this->Provincia];    
        else 
            $this->Provincia = "AG";

        return $this;
        
    }

    function xmlSerialize(Writer $writer): void
    {
        $this->resolveProvincia();

        $vars = [];

        foreach($this as $property => $value) {

            if(in_array($property, $this->protected)) {
                continue;
            }

            if($value !== null) {
                $vars[$property] = $value;
            }
        }

        $this->setProps($vars);

        $writer->write($this->getProps());

    }

}
