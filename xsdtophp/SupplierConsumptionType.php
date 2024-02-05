<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing SupplierConsumptionType
 *
 * ABIE
 *  Supplier Consumption. Details
 *  The consumption in case the consumption is for one and only one supplier.
 *  Supplier Consumption
 * XSD Type: SupplierConsumptionType
 */
class SupplierConsumptionType
{

    /**
     * BBIE
     *  Supplier Consumption. Description. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Supplier Consumption
     *  Description
     *  Text
     *  Text. Type
     *  This is what you pay for electricity to DONG Energy North Utility
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Supplier Consumption. Utility Supplier_ Party. Party
     *  The party supplying the utility.
     *  0..1
     *  Supplier Consumption
     *  Utility Supplier
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\UtilitySupplierParty $utilitySupplierParty
     */
    private $utilitySupplierParty = null;

    /**
     * ASBIE
     *  Supplier Consumption. Utility Customer_ Party. Party
     *  The utility customer.
     *  0..1
     *  Supplier Consumption
     *  Utility Customer
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\UtilityCustomerParty $utilityCustomerParty
     */
    private $utilityCustomerParty = null;

    /**
     * ASBIE
     *  Supplier Consumption. Consumption
     *  The consumption regarding this supplier
     *  1
     *  Supplier Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @var \CleverIt\UBL\Invoice\Consumption $consumption
     */
    private $consumption = null;

    /**
     * ASBIE
     *  Supplier Consumption. Contract
     *  A contract setting forth conditions regulating the consumption.
     *  0..1
     *  Supplier Consumption
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \CleverIt\UBL\Invoice\Contract $contract
     */
    private $contract = null;

    /**
     * ASBIE
     *  Supplier Consumption. Consumption Line
     *  The consumption of a utility product.
     *  1..n
     *  Supplier Consumption
     *  Consumption Line
     *  Consumption Line
     *  Consumption Line
     *
     * @var \CleverIt\UBL\Invoice\ConsumptionLine[] $consumptionLine
     */
    private $consumptionLine = [
        
    ];

    /**
     * Adds as description
     *
     * BBIE
     *  Supplier Consumption. Description. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Supplier Consumption
     *  Description
     *  Text
     *  Text. Type
     *  This is what you pay for electricity to DONG Energy North Utility
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Supplier Consumption. Description. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Supplier Consumption
     *  Description
     *  Text
     *  Text. Type
     *  This is what you pay for electricity to DONG Energy North Utility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Supplier Consumption. Description. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Supplier Consumption
     *  Description
     *  Text
     *  Text. Type
     *  This is what you pay for electricity to DONG Energy North Utility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Supplier Consumption. Description. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Supplier Consumption
     *  Description
     *  Text
     *  Text. Type
     *  This is what you pay for electricity to DONG Energy North Utility
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Supplier Consumption. Description. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Supplier Consumption
     *  Description
     *  Text
     *  Text. Type
     *  This is what you pay for electricity to DONG Energy North Utility
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as utilitySupplierParty
     *
     * ASBIE
     *  Supplier Consumption. Utility Supplier_ Party. Party
     *  The party supplying the utility.
     *  0..1
     *  Supplier Consumption
     *  Utility Supplier
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\UtilitySupplierParty
     */
    public function getUtilitySupplierParty()
    {
        return $this->utilitySupplierParty;
    }

    /**
     * Sets a new utilitySupplierParty
     *
     * ASBIE
     *  Supplier Consumption. Utility Supplier_ Party. Party
     *  The party supplying the utility.
     *  0..1
     *  Supplier Consumption
     *  Utility Supplier
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\UtilitySupplierParty $utilitySupplierParty
     * @return self
     */
    public function setUtilitySupplierParty(\CleverIt\UBL\Invoice\UtilitySupplierParty $utilitySupplierParty)
    {
        $this->utilitySupplierParty = $utilitySupplierParty;
        return $this;
    }

    /**
     * Gets as utilityCustomerParty
     *
     * ASBIE
     *  Supplier Consumption. Utility Customer_ Party. Party
     *  The utility customer.
     *  0..1
     *  Supplier Consumption
     *  Utility Customer
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\UtilityCustomerParty
     */
    public function getUtilityCustomerParty()
    {
        return $this->utilityCustomerParty;
    }

    /**
     * Sets a new utilityCustomerParty
     *
     * ASBIE
     *  Supplier Consumption. Utility Customer_ Party. Party
     *  The utility customer.
     *  0..1
     *  Supplier Consumption
     *  Utility Customer
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\UtilityCustomerParty $utilityCustomerParty
     * @return self
     */
    public function setUtilityCustomerParty(\CleverIt\UBL\Invoice\UtilityCustomerParty $utilityCustomerParty)
    {
        $this->utilityCustomerParty = $utilityCustomerParty;
        return $this;
    }

    /**
     * Gets as consumption
     *
     * ASBIE
     *  Supplier Consumption. Consumption
     *  The consumption regarding this supplier
     *  1
     *  Supplier Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @return \CleverIt\UBL\Invoice\Consumption
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Sets a new consumption
     *
     * ASBIE
     *  Supplier Consumption. Consumption
     *  The consumption regarding this supplier
     *  1
     *  Supplier Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @param \CleverIt\UBL\Invoice\Consumption $consumption
     * @return self
     */
    public function setConsumption(\CleverIt\UBL\Invoice\Consumption $consumption)
    {
        $this->consumption = $consumption;
        return $this;
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Supplier Consumption. Contract
     *  A contract setting forth conditions regulating the consumption.
     *  0..1
     *  Supplier Consumption
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \CleverIt\UBL\Invoice\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Supplier Consumption. Contract
     *  A contract setting forth conditions regulating the consumption.
     *  0..1
     *  Supplier Consumption
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \CleverIt\UBL\Invoice\Contract $contract
     * @return self
     */
    public function setContract(\CleverIt\UBL\Invoice\Contract $contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Adds as consumptionLine
     *
     * ASBIE
     *  Supplier Consumption. Consumption Line
     *  The consumption of a utility product.
     *  1..n
     *  Supplier Consumption
     *  Consumption Line
     *  Consumption Line
     *  Consumption Line
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ConsumptionLine $consumptionLine
     */
    public function addToConsumptionLine(\CleverIt\UBL\Invoice\ConsumptionLine $consumptionLine)
    {
        $this->consumptionLine[] = $consumptionLine;
        return $this;
    }

    /**
     * isset consumptionLine
     *
     * ASBIE
     *  Supplier Consumption. Consumption Line
     *  The consumption of a utility product.
     *  1..n
     *  Supplier Consumption
     *  Consumption Line
     *  Consumption Line
     *  Consumption Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionLine($index)
    {
        return isset($this->consumptionLine[$index]);
    }

    /**
     * unset consumptionLine
     *
     * ASBIE
     *  Supplier Consumption. Consumption Line
     *  The consumption of a utility product.
     *  1..n
     *  Supplier Consumption
     *  Consumption Line
     *  Consumption Line
     *  Consumption Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionLine($index)
    {
        unset($this->consumptionLine[$index]);
    }

    /**
     * Gets as consumptionLine
     *
     * ASBIE
     *  Supplier Consumption. Consumption Line
     *  The consumption of a utility product.
     *  1..n
     *  Supplier Consumption
     *  Consumption Line
     *  Consumption Line
     *  Consumption Line
     *
     * @return \CleverIt\UBL\Invoice\ConsumptionLine[]
     */
    public function getConsumptionLine()
    {
        return $this->consumptionLine;
    }

    /**
     * Sets a new consumptionLine
     *
     * ASBIE
     *  Supplier Consumption. Consumption Line
     *  The consumption of a utility product.
     *  1..n
     *  Supplier Consumption
     *  Consumption Line
     *  Consumption Line
     *  Consumption Line
     *
     * @param \CleverIt\UBL\Invoice\ConsumptionLine[] $consumptionLine
     * @return self
     */
    public function setConsumptionLine(array $consumptionLine)
    {
        $this->consumptionLine = $consumptionLine;
        return $this;
    }


}

