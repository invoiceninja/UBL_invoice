<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

class RoResources
{

// #[\AllowanceCharge(ChargeIndicator = false)]
// #[\AllowanceCharge\TaxCategory\ID(['type' => 'rule', 'method' =.])] -- more research
// #[\TaxCurrencyCode(['type' => 'rule', 'equals' => 'RON' ])] -- more research!

    #[\InvoiceTypeCode(['type' => 'rule', 'method' => 'required', 'resource' => ['380','384','389','751']])]
    public $InvoiceTypeCode;

    #[\CreditTypeCode(['type' => 'rule', 'method' => 'required', 'resource' => ['381']])]
    public $CreditTypeCode;

    #[\ID(['type' => 'rule', 'method' => 'regex', 'pattern' => '([0-9])'])]
    public $ID;

    #[\InvoicePeriod\DescriptionCode(['type' => 'rule', 'method' => 'required', 'resource' => ['3', '35', '432']])]
    public $InvoicePeriodDescriptionCode;

    /**------------------------Generics ---------------------------------*/
    #[\AccountingSupplierParty\Party\PostalAddress\StreetName(['type' => 'rule', 'method' => 'required'])]
    public $AccountingSupplierPartyPartyPostalAddressStreetName;

    #[\AccountingCustomerParty\Party\PostalAddress\StreetName(['type' => 'rule', 'method' => 'required'])]
    public $AccountingCustomerPartyPartyPostalAddressStreetName;

    #[\AccountingSupplierParty\Party\PostalAddress\CityName(['type' => 'rule', 'method' => 'required'])]
    public $AccountingSupplierPartyPartyPostalAddressCityName;

    #[\AccountingCustomerParty\Party\PostalAddress\CityName(['type' => 'rule', 'method' => 'required'])]
    public $AccountingCustomerPartyPartyPostalAddressCityName;

    #[\TaxRepresentativeParty\PostalAddress\StreetName(['type' => 'rule', 'method' => 'required_when_shown'])]
    public $TaxRepresentativePartyPostalAddressStreetName;

    #[\TaxRepresentativeParty\PostalAddress\CityName(['type' => 'rule', 'method' => 'required_when_shown'])]
    public $TaxRepresentativePartyPostalAddressCityName;

    #[\Delivery\DeliveryLocation\Address\StreetName(['type' => 'rule', 'method' => 'required_when_shown'])]
    public $DeliveryDeliveryLocationAddressStreetName;

    #[\Delivery\DeliveryLocation\Address\CityName(['type' => 'rule', 'method' => 'required_when_shown'])]
    public $DeliveryDeliveryLocationAddressCityName;

    #[\Delivery\DeliveryLocation\Address\CountrySubentity(['type' => 'rule', 'method' => 'required_when_shown'])]
    public $DeliveryDeliveryLocationAddressCountrySubentity;

    #[\Note(['type' => 'rule', 'method' => 'length', 'pattern' => '<=|300', 'max_length' => '300'])]
    public $Note;
    
    #[\InvoiceDocumentReference(['type' => 'rule', 'method' => 'count', 'pattern' => '<=|500','max_length' => '300'])]
    public $InvoiceDocumentReference;

    /**
     * Additional Document References.
     *
     * There can be up to 50 items
     *
     */
    #[\AdditionalDocumentReference(['type' => 'rule', 'method' => 'count', 'pattern' => '<=|50', 'length' => '50'])]
    public $AdditionalDocumentReference;


    /**
     * Globals
     */
    #[\Decimal\Precision(2)]
    public $DecimalPrecision;


    /**
     * Additional key values that can be stored in this node.
     * 
     * There can be up to 50 items which are key/value pairs (name/value)
     *
     */
    #[Item\AdditionalItemProperty(['type' => 'rule', 'method' => 'count', 'pattern' => '<=|50','max_length' => '50'])]
    public $ItemAdditionalItemProperty;

    #[Item\AdditionalItemProperty\Name(['type' => 'rule', 'method' => 'length', 'pattern' => '<=|50','max_length' => '50'])]
    public $ItemAdditionalItemPropertyName;

    #[Item\AdditionalItemProperty\Value(['type' => 'rule', 'method' => 'length', 'pattern' => '<=|100','max_length' => '50'])]
    public $ItemAdditionalItemPropertyValue;














    public function __construct()
    {

    }

}