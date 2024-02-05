<?php
/**
 * Created by PhpStorm.
 * User: bram.vaneijk
 * Date: 26-10-2016
 * Time: 10:49
 */

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Service;

class Generator {
    public static $currencyID;

    public static function invoice(Invoice $invoice, $currencyId = 'EUR') {
        self::$currencyID = $currencyId;

        $xmlService = new Service();

        $xmlService->namespaceMap = [
            'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2' => '',
            'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2' => 'cbc',
            'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2' => 'cac',
            // 'urn:un:unece:uncefact:documentation:2' => 'ccts',
            // 'urn:oasis:names:specification:ubl:schema:xsd:QualifiedDataTypes-2' => 'qdt',
            // 'http://www.w3.org/2001/XMLSchema-instance' => 'xsi',
            // 'urn:oasis:names:specification:ubl:schema:xsd:UnqualifiedDataTypes-2' => 'udt'
        ];

        return $xmlService->write('Invoice', [
            $invoice
        ]);
    }

    public static function creditNote(CreditNote $creditNote, $currencyId = 'EUR')
    {
        return self::invoice($creditNote, $currencyId);
    }
}