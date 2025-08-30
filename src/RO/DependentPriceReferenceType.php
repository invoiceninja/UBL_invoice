<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing DependentPriceReferenceType
 *
 * ABIE
 *  Dependent Price Reference. Details
 *  A class to define the price of an item as a percentage of the price of a different item.
 *  Dependent Price Reference
 * XSD Type: DependentPriceReferenceType
 */
class DependentPriceReferenceType
{
    /**
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Percent $percent
     */
    private $percent = null;

    /**
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\RO\LocationAddress $locationAddress
     */
    private $locationAddress = null;

    /**
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\DependentLineReference $dependentLineReference
     */
    private $dependentLineReference = null;

    /**
     * Gets as percent
     *
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Percent $percent
     * @return self
     */
    public function setPercent(?\CleverIt\UBL\Invoice\RO\Percent $percent = null)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\RO\LocationAddress
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\RO\LocationAddress $locationAddress
     * @return self
     */
    public function setLocationAddress(?\CleverIt\UBL\Invoice\RO\LocationAddress $locationAddress = null)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as dependentLineReference
     *
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\DependentLineReference
     */
    public function getDependentLineReference()
    {
        return $this->dependentLineReference;
    }

    /**
     * Sets a new dependentLineReference
     *
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\DependentLineReference $dependentLineReference
     * @return self
     */
    public function setDependentLineReference(?\CleverIt\UBL\Invoice\RO\DependentLineReference $dependentLineReference = null)
    {
        $this->dependentLineReference = $dependentLineReference;
        return $this;
    }
}

