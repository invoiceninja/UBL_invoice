<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing OrderedShipmentType
 *
 * ABIE
 *  Ordered Shipment. Details
 *  A class to describe an ordered shipment.
 *  Ordered Shipment
 * XSD Type: OrderedShipmentType
 */
class OrderedShipmentType
{

    /**
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \CleverIt\UBL\Invoice\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @var \CleverIt\UBL\Invoice\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \CleverIt\UBL\Invoice\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \CleverIt\UBL\Invoice\Shipment $shipment
     * @return self
     */
    public function setShipment(\CleverIt\UBL\Invoice\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Package $package
     */
    public function addToPackage(\CleverIt\UBL\Invoice\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return \CleverIt\UBL\Invoice\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param \CleverIt\UBL\Invoice\Package[] $package
     * @return self
     */
    public function setPackage(array $package)
    {
        $this->package = $package;
        return $this;
    }


}

