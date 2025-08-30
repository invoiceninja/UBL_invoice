<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing DeliveryTermsType
 *
 * ABIE
 *  Delivery Terms. Details
 *  A class for describing the terms and conditions applying to the delivery of goods.
 *  Delivery Terms
 * XSD Type: DeliveryTermsType
 */
class DeliveryTermsType
{
    /**
     * BBIE
     *  Delivery Terms. Identifier
     *  An identifier for this description of delivery terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\SpecialTerms[] $specialTerms
     */
    private $specialTerms = [
        
    ];

    /**
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  A code that identifies one of various responsibilities for loss risk in the execution of the delivery.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\LossRiskResponsibilityCode $lossRiskResponsibilityCode
     */
    private $lossRiskResponsibilityCode = null;

    /**
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\LossRisk[] $lossRisk
     */
    private $lossRisk = [
        
    ];

    /**
     * BBIE
     *  Delivery Terms. Amount
     *  The monetary amount covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  The location for the contracted delivery.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @var \CleverIt\UBL\Invoice\RO\DeliveryLocation $deliveryLocation
     */
    private $deliveryLocation = null;

    /**
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An allowance or charge covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \CleverIt\UBL\Invoice\RO\AllowanceCharge $allowanceCharge
     */
    private $allowanceCharge = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Delivery Terms. Identifier
     *  An identifier for this description of delivery terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Delivery Terms. Identifier
     *  An identifier for this description of delivery terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(?\CleverIt\UBL\Invoice\RO\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\SpecialTerms $specialTerms
     */
    public function addToSpecialTerms(\CleverIt\UBL\Invoice\RO\SpecialTerms $specialTerms)
    {
        $this->specialTerms[] = $specialTerms;
        return $this;
    }

    /**
     * isset specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialTerms($index)
    {
        return isset($this->specialTerms[$index]);
    }

    /**
     * unset specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialTerms($index)
    {
        unset($this->specialTerms[$index]);
    }

    /**
     * Gets as specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\SpecialTerms[]
     */
    public function getSpecialTerms()
    {
        return $this->specialTerms;
    }

    /**
     * Sets a new specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\SpecialTerms[] $specialTerms
     * @return self
     */
    public function setSpecialTerms(array $specialTerms = null)
    {
        $this->specialTerms = $specialTerms;
        return $this;
    }

    /**
     * Gets as lossRiskResponsibilityCode
     *
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  A code that identifies one of various responsibilities for loss risk in the execution of the delivery.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\LossRiskResponsibilityCode
     */
    public function getLossRiskResponsibilityCode()
    {
        return $this->lossRiskResponsibilityCode;
    }

    /**
     * Sets a new lossRiskResponsibilityCode
     *
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  A code that identifies one of various responsibilities for loss risk in the execution of the delivery.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\LossRiskResponsibilityCode $lossRiskResponsibilityCode
     * @return self
     */
    public function setLossRiskResponsibilityCode(?\CleverIt\UBL\Invoice\RO\LossRiskResponsibilityCode $lossRiskResponsibilityCode = null)
    {
        $this->lossRiskResponsibilityCode = $lossRiskResponsibilityCode;
        return $this;
    }

    /**
     * Adds as lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\LossRisk $lossRisk
     */
    public function addToLossRisk(\CleverIt\UBL\Invoice\RO\LossRisk $lossRisk)
    {
        $this->lossRisk[] = $lossRisk;
        return $this;
    }

    /**
     * isset lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLossRisk($index)
    {
        return isset($this->lossRisk[$index]);
    }

    /**
     * unset lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLossRisk($index)
    {
        unset($this->lossRisk[$index]);
    }

    /**
     * Gets as lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\LossRisk[]
     */
    public function getLossRisk()
    {
        return $this->lossRisk;
    }

    /**
     * Sets a new lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\LossRisk[] $lossRisk
     * @return self
     */
    public function setLossRisk(array $lossRisk = null)
    {
        $this->lossRisk = $lossRisk;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Delivery Terms. Amount
     *  The monetary amount covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Delivery Terms. Amount
     *  The monetary amount covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Amount $amount
     * @return self
     */
    public function setAmount(?\CleverIt\UBL\Invoice\RO\Amount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as deliveryLocation
     *
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  The location for the contracted delivery.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @return \CleverIt\UBL\Invoice\RO\DeliveryLocation
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * Sets a new deliveryLocation
     *
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  The location for the contracted delivery.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @param \CleverIt\UBL\Invoice\RO\DeliveryLocation $deliveryLocation
     * @return self
     */
    public function setDeliveryLocation(?\CleverIt\UBL\Invoice\RO\DeliveryLocation $deliveryLocation = null)
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An allowance or charge covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \CleverIt\UBL\Invoice\RO\AllowanceCharge
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An allowance or charge covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \CleverIt\UBL\Invoice\RO\AllowanceCharge $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?\CleverIt\UBL\Invoice\RO\AllowanceCharge $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }
}

