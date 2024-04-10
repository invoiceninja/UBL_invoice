<?php

namespace CleverIt\UBL\Invoice\Tests\FatturaPA;

use Generator;
use Sabre\Xml\Service;
use PHPUnit\Framework\TestCase;
use CleverIt\UBL\Invoice\FatturaPA\common\Sede;
use CleverIt\UBL\Invoice\FatturaPA\common\Anagrafica;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiGenerali;
use CleverIt\UBL\Invoice\FatturaPA\common\IdFiscaleIVA;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiContratto;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiRicezione;
use CleverIt\UBL\Invoice\FatturaPA\common\RegimeFiscale;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiAnagrafici;
use CleverIt\UBL\Invoice\FatturaPA\common\IdTrasmittente;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiTrasmissione;
use CleverIt\UBL\Invoice\FatturaPA\common\CedentePrestatore;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiOrdineAcquisto;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronica;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiGeneraliDocumento;
use CleverIt\UBL\Invoice\FatturaPA\common\CessionarioCommittente;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiAnagraficiVettore;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiBeniServizi;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiPagamento;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiRiepilogo;
use CleverIt\UBL\Invoice\FatturaPA\common\DatiTrasporto;
use CleverIt\UBL\Invoice\FatturaPA\common\DettaglioLinee;
use CleverIt\UBL\Invoice\FatturaPA\common\DettaglioPagamento;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaBody;
use CleverIt\UBL\Invoice\FatturaPA\common\FatturaElettronicaHeader;

class FatturaTest extends TestCase
{

    public function setUp(): void{
   
    }

    public function testClassIterator()
    {

        $f = new FatturaElettronicaBody();
        $f->setDatiGenerali("2024-01-01");

        foreach ($f as $property => $value)  
        {
            if($property == "DatiGenerali")
                $this->assertEquals($value, "2024-01-01");
        }

        $this->assertEquals($f->getDatiGenerali(), "2024-01-01");

    }

    public function testXmlBuild()
    {
        
        $f = new FatturaElettronicaBody();
        $f->setDatiGenerali("2024-01-01");

        $fatturaBody = new FatturaElettronicaBody();

        $xmlService = new Service();

        $xml = $xmlService->write('p:FatturaElettronica', new FatturaElettronica($f,$fatturaBody));
        
        // echo $xml;

        $this->assertIsString($xml);
    }

    public function testInvoice()
    {
        $fatturaHeader = new FatturaElettronicaHeader();

        $datiTrasmissione = new DatiTrasmissione();
        $datiTrasmissione->setFormatoTrasmissione("FPR12");
        $datiTrasmissione->setCodiceDestinatario("0000000");
        $datiTrasmissione->setProgressivoInvio("0000000");

        $idPaese = new IdTrasmittente();
        $idPaese->setIdPaese("IT");
        $idPaese->setIdCodice("12345678901");

        $datiTrasmissione->setIdTrasmittente($idPaese);
        $fatturaHeader->setDatiTrasmissione($datiTrasmissione);

        $cedentePrestatore = new CedentePrestatore();

        $datiAnagrafici = new DatiAnagrafici();
        
        $idFiscaleIVA = new IdFiscaleIVA(IdPaese: "IT", IdCodice: "12345678901");
        $datiAnagrafici->setIdFiscaleIVA($idFiscaleIVA);
        
        $anagrafica = new Anagrafica(Denominazione: "Company Name");
        $datiAnagrafici->setAnagrafica($anagrafica);

        // $regimaFiscale = new RegimeFiscale();

        $datiAnagrafici->setRegimeFiscale("RF19");

        $cedentePrestatore->setDatiAnagrafici($datiAnagrafici);
        
        $sede = new Sede(Indirizzo: "Via Roma", CAP: 12345, Comune: "Lanciano", Provincia: "CH");
        $cedentePrestatore->setSede($sede);
        
        $fatturaHeader->setCedentePrestatore($cedentePrestatore);

        //client deets
        $datiAnagrafici = new DatiAnagrafici();
        
        //for some reason the validation does not like codice fiscale for the client?
        //perhaps it may need IdFiscaleIVA?
        // $datiAnagrafici->setCodiceFiscale("09876543210");

        $anagrafica = new Anagrafica(Denominazione: "Client Name");
        $datiAnagrafici->setAnagrafica($anagrafica);

        $sede = new Sede(Indirizzo: "Via Roma", CAP: 12345, Comune: "Lanciano", Provincia: "CH");
        
        $cessionarioCommittente = new CessionarioCommittente($datiAnagrafici, $sede);

        $fatturaHeader->setCessionarioCommittente($cessionarioCommittente);

        ////////////////// Fattura Body //////////////////
        $fatturaBody = new FatturaElettronicaBody();

        $datiGeneraliDocument = new DatiGeneraliDocumento();
        $datiGeneraliDocument->setTipoDocumento("TD01")
                             ->setDivisa("EUR")
                             ->setData("2024-01-01")
                             ->setNumero("123")
                             ->setCausale("A description")
                             ->setCausale("A secondary Description");

        $datiOrdineAcquisto = new DatiOrdineAcquisto();
        $datiOrdineAcquisto->setRiferimentoNumeroLinea(1)
                           ->setIdDocumento(66685)
                           ->setNumItem(1)
                           ->setCodiceCIG("123abc")
                           ->setCodiceCUP("456def");

        $datiContratto = new DatiContratto(
            RiferimentoNumeroLinea: 1,
            IdDocumento: 6685, 
            Data: "2024-01-01", 
            NumItem: 5, 
            CodiceCUP: "123abc", 
            CodiceCIG: "456def", 
        );

        
        $datiRicezione = new DatiRicezione(
            RiferimentoNumeroLinea: 1,
            IdDocumento: 6685,
            Data: "2024-01-01",
            NumItem: 5,
            CodiceCUP: "123abc",
            CodiceCIG: "456def",
        );

        $datiAnagraficiVettore = new DatiAnagraficiVettore();
        $idFiscaleIVA = new IdFiscaleIVA("IT", "24681012141");
        $anagrafica = new Anagrafica("Trasport SPA");

        $datiAnagraficiVettore->setIdFiscaleIVA($idFiscaleIVA)
                              ->setAnagrafica($anagrafica);

        $datiTrasporto = new DatiTrasporto();
        $datiTrasporto->setDatiAnagraficiVettore($datiAnagraficiVettore)
                      ->setDataOraConsegna("2017-01-10T16:46:12.000+02:00");

        $datiGenerali = new DatiGenerali();
        $datiGenerali->setDatiGeneraliDocumento($datiGeneraliDocument);
                    //  ->setDatiOrdineAcquisto($datiOrdineAcquisto)
                    //  ->setDatiContratto($datiContratto)
                    //  ->setDatiRicezione($datiRicezione);

        $dettaglioLinee = new DettaglioLinee(
            NumeroLinea: 1, 
            Descrizione: "Decrizione",
            Quantita: "1.00",
            PrezzoUnitario: "1.00", 
            PrezzoTotale: "5.00",
            AliquotaIVA: "22.00",            
        );

        
        $dettaglioLinee2 = new DettaglioLinee(
            NumeroLinea: 2,
            Descrizione: "Decrizione",
            Quantita: "1.00",
            PrezzoUnitario: "1.00",
            PrezzoTotale: "5.00",
            AliquotaIVA: "22.00",
        );


        $datiRiepilogo = new DatiRiepilogo(
            AliquotaIVA: "22.00", 
            ImponibileImporto: "5.00", 
            Imposta: "1.00", 
            EsigibilitaIVA: "I",             
        );

        $datiBeniServizi  = new DatiBeniServizi();
        $datiBeniServizi->setDettaglioLinee($dettaglioLinee)
                        ->setDettaglioLinee($dettaglioLinee2)
                        ->setDatiRiepilogo($datiRiepilogo);

        $dettalioPagament = new DettaglioPagamento(
            ModalitaPagamento: "MP01", //String
            DataScadenzaPagamento: "2017-02-18", //Date
            ImportoPagamento: "6.00", //String            
        );

        $datiPagamento = new DatiPagamento();
        $datiPagamento->setCondizioniPagamento("TP01")
                      ->setDettaglioPagamento($dettalioPagament);

        $fatturaBody->setDatiGenerali($datiGenerali)
                    ->setDatiBeniServizi($datiBeniServizi)
                    ->setDatiPagamento($datiPagamento);

        ////////////////////////////////////
        $xmlService = new Service();

        $xml = $xmlService->write('p:FatturaElettronica', new FatturaElettronica($fatturaHeader, $fatturaBody));

        echo $xml;

        $this->assertIsString($xml);

        $fattura_pa_xl = simplexml_load_string($xml);

        // Check if xml schema is correct.
        $domdoc = new \DOMDocument();
        $domdoc->loadXML($xml);
        
        libxml_use_internal_errors(true);

        $validation = $domdoc->schemaValidate("src/FatturaPA/Schema_del_file_xml_FatturaPA_v1.2.2.xsd");

        $errors = libxml_get_errors(); //supposed to give back errors?
        var_dump($errors);

        $this->assertTrue($validation);

        

    }
}
