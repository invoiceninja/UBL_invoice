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

    public function testSchema()
    {
        $xml = '<?xml version="1.0"?>
<p:FatturaElettronica versione="FPA12" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd">
 <FatturaElettronicaHeader>
  <DatiTrasmissione>
   <IdTrasmittente>
    <IdPaese>IT</IdPaese>
    <IdCodice>vat number</IdCodice>
   </IdTrasmittente>
   <ProgressivoInvio>0033</ProgressivoInvio>
   <FormatoTrasmissione>FPR12</FormatoTrasmissione>
   <CodiceDestinatario>AB34589</CodiceDestinatario>
  </DatiTrasmissione>
  <CedentePrestatore>
   <DatiAnagrafici>
    <IdFiscaleIVA>
     <IdPaese>IT</IdPaese>
     <IdCodice>vat number</IdCodice>
    </IdFiscaleIVA>
    <Anagrafica>
     <Denominazione>Claudia Reichert</Denominazione>
    </Anagrafica>
    <RegimeFiscale>RF01</RegimeFiscale>
   </DatiAnagrafici>
   <Sede>
    <Indirizzo>Glover Oval</Indirizzo>
    <CAP>33432</CAP>
    <Comune>lanciano</Comune>
    <Provincia>CH</Provincia>
    <Nazione>IT</Nazione>
   </Sede>
  </CedentePrestatore>
  <CessionarioCommittente>
   <DatiAnagrafici>
    <Anagrafica>
     <Denominazione>Via Romangioli</Denominazione>
    </Anagrafica>
   </DatiAnagrafici>
   <Sede>
    <Indirizzo>Via Rom</Indirizzo>
    <CAP>12356</CAP>
    <Comune>Lanciano</Comune>
    <Provincia>CH</Provincia>
    <Nazione>IT</Nazione>
   </Sede>
  </CessionarioCommittente>
 </FatturaElettronicaHeader>
 <FatturaElettronicaBody>
  <DatiGenerali>
   <DatiGeneraliDocumento>
    <TipoDocumento>TD01</TipoDocumento>
    <Divisa>EUR</Divisa>
    <Data>2024-04-10</Data>
    <Numero>0033</Numero>
   </DatiGeneraliDocumento>
  </DatiGenerali>
  <DatiBeniServizi>
   <DettaglioLinee>
    <NumeroLinea>1</NumeroLinea>
    <Descrizione>Descrizione</Descrizione>
    <Quantita>1.00</Quantita>
    <PrezzoUnitario>100.00</PrezzoUnitario>
    <PrezzoTotale>100.00</PrezzoTotale>
    <AliquotaIVA>0.00</AliquotaIVA>
   </DettaglioLinee>
   <DatiRiepilogo>
    <AliquotaIVA>22.00</AliquotaIVA>
    <ImponibileImporto>100.00</ImponibileImporto>
    <Imposta>18.03</Imposta>
    <EsigibilitaIVA>I</EsigibilitaIVA>
   </DatiRiepilogo>
  </DatiBeniServizi>
  <DatiPagamento>
   <CondizioniPagamento>TP02</CondizioniPagamento>
   <DettaglioPagamento>
    <ModalitaPagamento>MP01</ModalitaPagamento>
    <ImportoPagamento>100.00</ImportoPagamento>
   </DettaglioPagamento>
  </DatiPagamento>
 </FatturaElettronicaBody>
</p:FatturaElettronica>';

        $domdoc = new \DOMDocument();
        $domdoc->loadXML($xml);
        
        libxml_use_internal_errors(true);

        $validation = $domdoc->schemaValidate("src/FatturaPA/Schema_del_file_xml_FatturaPA_v1.2.2.xsd");

        $errors = libxml_get_errors(); //supposed to give back errors?
        var_dump($errors);

        $this->assertTrue($validation);
    }
}
