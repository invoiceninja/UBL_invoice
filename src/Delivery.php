<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;


class Delivery extends BaseInvoice implements XmlSerializable
{
    private $actualDeliveryDate;
    private $deliveryLocation;
    private $deliveryParty;

    /**
     * @return DateTime
     */
    public function getActualDeliveryDate()
    {
        return $this->actualDeliveryDate ? $this->actualDeliveryDate->format('Y-m-d') : null;
    }

    /**
     * @param DateTime $actualDeliveryDate
     * @return Delivery
     */
    public function setActualDeliveryDate($actualDeliveryDate): Delivery
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
        return $this;
    }

    /**
     * @return Address
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * @param Address $deliveryLocation
     * @return Delivery
     */
    public function setDeliveryLocation($deliveryLocation): Delivery
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    /**
     * @return Party
     */
    public function getDeliveryParty()
    {
        return $this->deliveryParty;
    }

    /**
     * @param Party $deliveryParty
     * @return Delivery
     */
    public function setDeliveryParty($deliveryParty): Delivery
    {
        $this->deliveryParty = $deliveryParty;
        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        $this->setProps([
        Schema::CBC . 'ActualDeliveryDate' => $this->getActualDeliveryDate(),
        Schema::CAC . 'DeliveryLocation' => [ Schema::CAC . 'Address' => $this->deliveryLocation ],
        Schema::CAC . 'DeliveryParty' => $this->deliveryParty,
        ]);

        $writer->write($this->getProps());
        
    }
}
