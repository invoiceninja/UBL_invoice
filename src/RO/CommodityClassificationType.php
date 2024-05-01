<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing CommodityClassificationType
 *
 * ABIE
 *  Commodity Classification. Details
 *  A class to describe the classification of a commodity.
 *  Commodity Classification
 * XSD Type: CommodityClassificationType
 */
class CommodityClassificationType
{
    /**
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  A code defined by a specific maintenance agency signifying the high-level nature of the commodity.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  wooden products
     *
     * @var \CleverIt\UBL\Invoice\RO\NatureCode $natureCode
     */
    private $natureCode = null;

    /**
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  A mutually agreed code signifying the type of cargo for purposes of commodity classification.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  Refrigerated
     *
     * @var \CleverIt\UBL\Invoice\RO\CargoTypeCode $cargoTypeCode
     */
    private $cargoTypeCode = null;

    /**
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for cross border and regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  1102222883
     *
     * @var \CleverIt\UBL\Invoice\RO\CommodityCode $commodityCode
     */
    private $commodityCode = null;

    /**
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  A code signifying the trade classification of the commodity.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  3440234
     *
     * @var \CleverIt\UBL\Invoice\RO\ItemClassificationCode $itemClassificationCode
     */
    private $itemClassificationCode = null;

    /**
     * Gets as natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  A code defined by a specific maintenance agency signifying the high-level nature of the commodity.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  wooden products
     *
     * @return \CleverIt\UBL\Invoice\RO\NatureCode
     */
    public function getNatureCode()
    {
        return $this->natureCode;
    }

    /**
     * Sets a new natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  A code defined by a specific maintenance agency signifying the high-level nature of the commodity.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  wooden products
     *
     * @param \CleverIt\UBL\Invoice\RO\NatureCode $natureCode
     * @return self
     */
    public function setNatureCode(?\CleverIt\UBL\Invoice\RO\NatureCode $natureCode = null)
    {
        $this->natureCode = $natureCode;
        return $this;
    }

    /**
     * Gets as cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  A mutually agreed code signifying the type of cargo for purposes of commodity classification.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  Refrigerated
     *
     * @return \CleverIt\UBL\Invoice\RO\CargoTypeCode
     */
    public function getCargoTypeCode()
    {
        return $this->cargoTypeCode;
    }

    /**
     * Sets a new cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  A mutually agreed code signifying the type of cargo for purposes of commodity classification.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  Refrigerated
     *
     * @param \CleverIt\UBL\Invoice\RO\CargoTypeCode $cargoTypeCode
     * @return self
     */
    public function setCargoTypeCode(?\CleverIt\UBL\Invoice\RO\CargoTypeCode $cargoTypeCode = null)
    {
        $this->cargoTypeCode = $cargoTypeCode;
        return $this;
    }

    /**
     * Gets as commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for cross border and regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  1102222883
     *
     * @return \CleverIt\UBL\Invoice\RO\CommodityCode
     */
    public function getCommodityCode()
    {
        return $this->commodityCode;
    }

    /**
     * Sets a new commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for cross border and regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  1102222883
     *
     * @param \CleverIt\UBL\Invoice\RO\CommodityCode $commodityCode
     * @return self
     */
    public function setCommodityCode(?\CleverIt\UBL\Invoice\RO\CommodityCode $commodityCode = null)
    {
        $this->commodityCode = $commodityCode;
        return $this;
    }

    /**
     * Gets as itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  A code signifying the trade classification of the commodity.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  3440234
     *
     * @return \CleverIt\UBL\Invoice\RO\ItemClassificationCode
     */
    public function getItemClassificationCode()
    {
        return $this->itemClassificationCode;
    }

    /**
     * Sets a new itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  A code signifying the trade classification of the commodity.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  3440234
     *
     * @param \CleverIt\UBL\Invoice\RO\ItemClassificationCode $itemClassificationCode
     * @return self
     */
    public function setItemClassificationCode(?\CleverIt\UBL\Invoice\RO\ItemClassificationCode $itemClassificationCode = null)
    {
        $this->itemClassificationCode = $itemClassificationCode;
        return $this;
    }
}

