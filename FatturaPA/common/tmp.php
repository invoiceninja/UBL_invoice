class Attributes {
 public $versione; //String

}





class Sede {
 public $Indirizzo; //String
 public $CAP; //String
 public $Comune; //String
 public $Provincia; //String
 public $Nazione; //String

}
class CessionarioCommittente {
public $DatiAnagrafici; //DatiAnagrafici
public $Sede; //Sede

}
class FatturaElettronicaHeader {
public $DatiTrasmissione; //DatiTrasmissione
public $CedentePrestatore; //CedentePrestatore
public $CessionarioCommittente; //CessionarioCommittente

}
class DatiGeneraliDocumento {
 public $TipoDocumento; //String
 public $Divisa; //String
 public $Data; //Date
 public $Numero; //String
 public $Causale;  //array( String )

}
class DatiOrdineAcquisto {
 public $RiferimentoNumeroLinea; //String
 public $IdDocumento; //String
 public $NumItem; //String
 public $CodiceCUP; //String
 public $CodiceCIG; //String

}
class DatiContratto {
 public $RiferimentoNumeroLinea; //String
 public $IdDocumento; //String
 public $Data; //Date
 public $NumItem; //String
 public $CodiceCUP; //String
 public $CodiceCIG; //String

}
class DatiConvenzione {
 public $RiferimentoNumeroLinea; //String
 public $IdDocumento; //String
 public $NumItem; //String
 public $CodiceCUP; //String
 public $CodiceCIG; //String

}
class DatiRicezione {
 public $RiferimentoNumeroLinea; //String
 public $IdDocumento; //String
 public $NumItem; //String
 public $CodiceCUP; //String
 public $CodiceCIG; //String

}
class IdFiscaleIVA {
 public $IdPaese; //String
 public $IdCodice; //String

}
class Anagrafica {
 public $Denominazione; //String

}
class DatiAnagraficiVettore {
public $IdFiscaleIVA; //IdFiscaleIVA
public $Anagrafica; //Anagrafica

}
class DatiTrasporto {
public $DatiAnagraficiVettore; //DatiAnagraficiVettore
 public $DataOraConsegna; //Date

}

class DettaglioLinee {
 public $NumeroLinea; //String
 public $Descrizione; //String
 public $Quantita; //String
 public $PrezzoUnitario; //String
 public $PrezzoTotale; //String
 public $AliquotaIVA; //String

}
class DatiRiepilogo {
 public $AliquotaIVA; //String
 public $ImponibileImporto; //String
 public $Imposta; //String
 public $EsigibilitaIVA; //String

}
class DatiBeniServizi {
 public $DettaglioLinee; //array( DettaglioLinee )
public $DatiRiepilogo; //DatiRiepilogo

}
class DettaglioPagamento {
 public $ModalitaPagamento; //String
 public $DataScadenzaPagamento; //Date
 public $ImportoPagamento; //String

}
class DatiPagamento {
 public $CondizioniPagamento; //String
public $DettaglioPagamento; //DettaglioPagamento

}
class FatturaElettronicaBody {
public $DatiGenerali; //DatiGenerali
public $DatiBeniServizi; //DatiBeniServizi
public $DatiPagamento; //DatiPagamento

}
class Application {
public $@attributes; //Attributes
 public $link; //array( Link )
 public $style; //array( Style )
public $FatturaElettronicaHeader; //FatturaElettronicaHeader
public $FatturaElettronicaBody; //FatturaElettronicaBody

}