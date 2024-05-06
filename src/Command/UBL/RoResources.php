<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

class RoResources
{

// #[\AllowanceCharge(ChargeIndicator = false)]
// #[\AllowanceCharge\TaxCategory\ID(['type' => 'rule', 'method' =.])] -- more research
// #[\TaxCurrencyCode(['type' => 'rule', 'equals' => 'RON' ])] -- more research!
    
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

    public array $stub_validation = [
        "name" => null, 
        "base_type" => null, 
        "resource" => null, 
        "length" => null, 
        "fraction_digits" => null, 
        "total_digits" => null, 
        "max_exclusive" => null, 
        "min_exclusive" => null, 
        "max_inclusive" => null, 
        "min_inclusive" => null, 
        "max_length" => null, 
        "min_length" => null, 
        "pattern" => null, 
        "whitespace" => null,                 
    ];

    private $build_array = [];

    public function __construct()
    {

    }

    public function getBuildArray(): array
    {
        return $this->build_array;
    }

    public function setBuildArray(array $array): self
    {
        $this->build_array = array_merge($this->build_array, $array);

        return $this;
    }

    public function buildInvoice(): array
    {
        $this->build_array = [];

        $invoice = 

        $this->setBuildArray($this->invoiceRules())
             ->setBuildArray($this->genericEntityRules())
             ->setBuildArray($this->complexRules())
             ->getBuildArray();

        return ['Invoice' => $invoice];
    }

    public function ruleSet(): array 
    {
        $rules = [
            [
                'name' => 'InvoiceTypeCode',
                'base_type' => 'string', 
                'min_length' => null,
                'max_length' => null, 
                'pattern' => null,
                'resource' => ['380','384','389','751'],
            ],
            [
                'name' => 'StreetName',
                'base_type' => 'string', 
                'min_length' => 1,
                'max_length' => null, 
                'pattern' => null,
                'resource' => [],
            ],
            [
                'name' => 'CityName',
                'base_type' => 'string', 
                'min_length' => 1,
                'max_length' => null, 
                'pattern' => null,
                'resource' => [],
            ],
            [
                'name' => 'DescriptionCode',
                'base_type' => 'string', 
                'min_length' => null,
                'max_length' => null, 
                'pattern' => null,
                'resource' => ['3', '35', '432'],
            ],
            [
                'name' => 'CreditTypeCode',
                'base_type' => 'string', 
                'min_length' => null,
                'max_length' => null, 
                'pattern' => null,
                'resource' => ['381'],
            ],
            [
                'name' => 'Note',
                'base_type' => 'string', 
                'min_length' => 0,
                'max_length' => 300, 
                'pattern' => '',
                'resource' => [],
            ],
        ];

        foreach($rules as $key => $rule)
        {
            $rules[$key] = array_merge($this->stub_validation, $rule);
        }

        return $rules;
    }

    public function complexRules()
    {
        return [
            'InvoicePeriod' => [
                'DescriptionCode' => [
                    'base_type' => 'string', 
                    'min_length' => null,
                    'max_length' => null, 
                    'pattern' => null,
                    'resource' => ['3', '35', '432'],
                ],
            ],
            'AccountingSupplierParty' => [
                'Party' => $this->returnParty(),
            ],
            'AccountingCustomerParty' => [
                'Party' => $this->returnParty(),
            ],
            'TaxRepresentativeParty' => $this->returnParty(),
            'Delivery' => [
                'DeliveryLocation' => [
                    'Address' => [
                        'StreetName' => [
                            'base_type' => 'string', 
                            'min_length' => 1,
                            'max_length' => null, 
                            'pattern' => null,
                            'resource' => [],
                        ],
                        'CityName' => [
                            'base_type' => 'string', 
                            'min_length' => 1,
                            'max_length' => null, 
                            'pattern' => null,
                            'resource' => [],
                        ],
                        'CountrySubentity' => [
                            'base_type' => 'string', 
                            'min_length' => 1,
                            'max_length' => null, 
                            'pattern' => null,
                            'resource' => ['RO-AB','RO-AG','RO-AR','RO-B','RO-BC','RO-BH','RO-BN','RO-BR','RO-BT','RO-BV','RO-BZ','RO-CJ','RO-CL','RO-CS','RO-CT', 'RO-CV', 'RO-DB', 'RO-DJ', 'RO-GJ', 'RO-GL', 'RO-GR', 'RO-HD', 'RO-HR' , 'RO-IF', 'RO-IL', 'RO-IS', 'RO-MH', 'RO-MM', 'RO-MS', 'RO-NT', 'RO-OT', 'RO-PH', 'RO-SB', 'RO-SJ', 'RO-SM', 'RO-SV', 'RO-TL', 'RO-TM', 'RO-TR', 'RO-VL', 'RO-VN', 'RO-VS'],
                        ]
                    ]
                ]
            ]
        ];
    } 

    public function returnParty(): array
    {
        return [
            'PostalAddress' => [
                'StreetName' => [
                    'base_type' => 'string', 
                    'min_length' => 1,
                    'max_length' => null, 
                    'pattern' => null,
                    'resource' => [],
                ],
                'CityName' => [
                    'base_type' => 'string', 
                    'min_length' => 1,
                    'max_length' => null, 
                    'pattern' => null,
                    'resource' => [],
                ]
            ]
        ];
    }

    public function invoiceRules()
    {
        return [
            'InvoiceTypeCode' => array_merge($this->stub_validation, [
                'base_type' => 'string', 
                'min_length' => null,
                'max_length' => null, 
                'pattern' => null,
                'resource' => ['380','384','389','751'],
            ]),
        ];
    }

    public function creditRules()
    {
        return [
            'CreditTypeCode' => [
                'base_type' => 'string', 
                'min_length' => null,
                'max_length' => null, 
                'pattern' => null,
                'resource' => ['381'],
            ],
        ];
    }

    public function genericEntityRules()
    {
        return [
            'ID' => [
                'base_type' => 'string', 
                'min_length' => null,
                'max_length' => null, 
                'pattern' => '([0-9])',
                'resource' => [],
            ],
            'Note' => [
                'base_type' => 'string', 
                'min_length' => 0,
                'max_length' => 300, 
                'pattern' => '',
                'resource' => [],
            ],
            'BillingReference' => [
                'ID' => [
                    'base_type' => 'string', 
                    'min_length' => 1,
                    'max_length' => 200, 
                    'pattern' => '',
                    'resource' => [],
                ],
                'InvoiceDocumentReference' => [
                    'base_type' => 'string', 
                    'min_length' => 1,
                    'max_length' => 200, 
                    'pattern' => '',
                    'resource' => [],
                ]
            ]
        ];
    }
}
