<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TransportExecutionTermsType
 *
 * ABIE
 *  Transport Execution Terms. Details
 *  A class to describe terms applying to a transport execution plan.
 *  Transport Execution Terms
 * XSD Type: TransportExecutionTermsType
 */
class TransportExecutionTermsType
{
    /**
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TransportUserSpecialTerms[] $transportUserSpecialTerms
     */
    private $transportUserSpecialTerms = [
        
    ];

    /**
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TransportServiceProviderSpecialTerms[] $transportServiceProviderSpecialTerms
     */
    private $transportServiceProviderSpecialTerms = [
        
    ];

    /**
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ChangeConditions[] $changeConditions
     */
    private $changeConditions = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Bonus_ Payment Terms. Payment Terms
     *  Terms relating to payment of applicable bonuses associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Bonus
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\BonusPaymentTerms $bonusPaymentTerms
     */
    private $bonusPaymentTerms = null;

    /**
     * ASBIE
     *  Transport Execution Terms. Commission_ Payment Terms. Payment Terms
     *  Terms of payment applying to a commission specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Commission
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\CommissionPaymentTerms $commissionPaymentTerms
     */
    private $commissionPaymentTerms = null;

    /**
     * ASBIE
     *  Transport Execution Terms. Penalty_ Payment Terms. Payment Terms
     *  Terms of payment applying to a penalty specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Penalty
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\PenaltyPaymentTerms $penaltyPaymentTerms
     */
    private $penaltyPaymentTerms = null;

    /**
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @var \CleverIt\UBL\Invoice\RO\EnvironmentalEmission[] $environmentalEmission
     */
    private $environmentalEmission = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @var \CleverIt\UBL\Invoice\RO\NotificationRequirement[] $notificationRequirement
     */
    private $notificationRequirement = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Service Charge_ Payment Terms. Payment Terms
     *  Payment terms for the service charge associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \CleverIt\UBL\Invoice\RO\ServiceChargePaymentTerms $serviceChargePaymentTerms
     */
    private $serviceChargePaymentTerms = null;

    /**
     * Adds as transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TransportUserSpecialTerms $transportUserSpecialTerms
     */
    public function addToTransportUserSpecialTerms(\CleverIt\UBL\Invoice\RO\TransportUserSpecialTerms $transportUserSpecialTerms)
    {
        $this->transportUserSpecialTerms[] = $transportUserSpecialTerms;
        return $this;
    }

    /**
     * isset transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportUserSpecialTerms($index)
    {
        return isset($this->transportUserSpecialTerms[$index]);
    }

    /**
     * unset transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportUserSpecialTerms($index)
    {
        unset($this->transportUserSpecialTerms[$index]);
    }

    /**
     * Gets as transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TransportUserSpecialTerms[]
     */
    public function getTransportUserSpecialTerms()
    {
        return $this->transportUserSpecialTerms;
    }

    /**
     * Sets a new transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TransportUserSpecialTerms[] $transportUserSpecialTerms
     * @return self
     */
    public function setTransportUserSpecialTerms(array $transportUserSpecialTerms = null)
    {
        $this->transportUserSpecialTerms = $transportUserSpecialTerms;
        return $this;
    }

    /**
     * Adds as transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TransportServiceProviderSpecialTerms $transportServiceProviderSpecialTerms
     */
    public function addToTransportServiceProviderSpecialTerms(\CleverIt\UBL\Invoice\RO\TransportServiceProviderSpecialTerms $transportServiceProviderSpecialTerms)
    {
        $this->transportServiceProviderSpecialTerms[] = $transportServiceProviderSpecialTerms;
        return $this;
    }

    /**
     * isset transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportServiceProviderSpecialTerms($index)
    {
        return isset($this->transportServiceProviderSpecialTerms[$index]);
    }

    /**
     * unset transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportServiceProviderSpecialTerms($index)
    {
        unset($this->transportServiceProviderSpecialTerms[$index]);
    }

    /**
     * Gets as transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TransportServiceProviderSpecialTerms[]
     */
    public function getTransportServiceProviderSpecialTerms()
    {
        return $this->transportServiceProviderSpecialTerms;
    }

    /**
     * Sets a new transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TransportServiceProviderSpecialTerms[] $transportServiceProviderSpecialTerms
     * @return self
     */
    public function setTransportServiceProviderSpecialTerms(array $transportServiceProviderSpecialTerms = null)
    {
        $this->transportServiceProviderSpecialTerms = $transportServiceProviderSpecialTerms;
        return $this;
    }

    /**
     * Adds as changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ChangeConditions $changeConditions
     */
    public function addToChangeConditions(\CleverIt\UBL\Invoice\RO\ChangeConditions $changeConditions)
    {
        $this->changeConditions[] = $changeConditions;
        return $this;
    }

    /**
     * isset changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChangeConditions($index)
    {
        return isset($this->changeConditions[$index]);
    }

    /**
     * unset changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChangeConditions($index)
    {
        unset($this->changeConditions[$index]);
    }

    /**
     * Gets as changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ChangeConditions[]
     */
    public function getChangeConditions()
    {
        return $this->changeConditions;
    }

    /**
     * Sets a new changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ChangeConditions[] $changeConditions
     * @return self
     */
    public function setChangeConditions(array $changeConditions = null)
    {
        $this->changeConditions = $changeConditions;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\CleverIt\UBL\Invoice\RO\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\CleverIt\UBL\Invoice\RO\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(array $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as bonusPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Bonus_ Payment Terms. Payment Terms
     *  Terms relating to payment of applicable bonuses associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Bonus
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\BonusPaymentTerms
     */
    public function getBonusPaymentTerms()
    {
        return $this->bonusPaymentTerms;
    }

    /**
     * Sets a new bonusPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Bonus_ Payment Terms. Payment Terms
     *  Terms relating to payment of applicable bonuses associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Bonus
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\BonusPaymentTerms $bonusPaymentTerms
     * @return self
     */
    public function setBonusPaymentTerms(?\CleverIt\UBL\Invoice\RO\BonusPaymentTerms $bonusPaymentTerms = null)
    {
        $this->bonusPaymentTerms = $bonusPaymentTerms;
        return $this;
    }

    /**
     * Gets as commissionPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Commission_ Payment Terms. Payment Terms
     *  Terms of payment applying to a commission specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Commission
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\CommissionPaymentTerms
     */
    public function getCommissionPaymentTerms()
    {
        return $this->commissionPaymentTerms;
    }

    /**
     * Sets a new commissionPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Commission_ Payment Terms. Payment Terms
     *  Terms of payment applying to a commission specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Commission
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\CommissionPaymentTerms $commissionPaymentTerms
     * @return self
     */
    public function setCommissionPaymentTerms(?\CleverIt\UBL\Invoice\RO\CommissionPaymentTerms $commissionPaymentTerms = null)
    {
        $this->commissionPaymentTerms = $commissionPaymentTerms;
        return $this;
    }

    /**
     * Gets as penaltyPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Penalty_ Payment Terms. Payment Terms
     *  Terms of payment applying to a penalty specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Penalty
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\PenaltyPaymentTerms
     */
    public function getPenaltyPaymentTerms()
    {
        return $this->penaltyPaymentTerms;
    }

    /**
     * Sets a new penaltyPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Penalty_ Payment Terms. Payment Terms
     *  Terms of payment applying to a penalty specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Penalty
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\PenaltyPaymentTerms $penaltyPaymentTerms
     * @return self
     */
    public function setPenaltyPaymentTerms(?\CleverIt\UBL\Invoice\RO\PenaltyPaymentTerms $penaltyPaymentTerms = null)
    {
        $this->penaltyPaymentTerms = $penaltyPaymentTerms;
        return $this;
    }

    /**
     * Adds as environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EnvironmentalEmission $environmentalEmission
     */
    public function addToEnvironmentalEmission(\CleverIt\UBL\Invoice\RO\EnvironmentalEmission $environmentalEmission)
    {
        $this->environmentalEmission[] = $environmentalEmission;
        return $this;
    }

    /**
     * isset environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmentalEmission($index)
    {
        return isset($this->environmentalEmission[$index]);
    }

    /**
     * unset environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmentalEmission($index)
    {
        unset($this->environmentalEmission[$index]);
    }

    /**
     * Gets as environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @return \CleverIt\UBL\Invoice\RO\EnvironmentalEmission[]
     */
    public function getEnvironmentalEmission()
    {
        return $this->environmentalEmission;
    }

    /**
     * Sets a new environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param \CleverIt\UBL\Invoice\RO\EnvironmentalEmission[] $environmentalEmission
     * @return self
     */
    public function setEnvironmentalEmission(array $environmentalEmission = null)
    {
        $this->environmentalEmission = $environmentalEmission;
        return $this;
    }

    /**
     * Adds as notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\NotificationRequirement $notificationRequirement
     */
    public function addToNotificationRequirement(\CleverIt\UBL\Invoice\RO\NotificationRequirement $notificationRequirement)
    {
        $this->notificationRequirement[] = $notificationRequirement;
        return $this;
    }

    /**
     * isset notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationRequirement($index)
    {
        return isset($this->notificationRequirement[$index]);
    }

    /**
     * unset notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationRequirement($index)
    {
        unset($this->notificationRequirement[$index]);
    }

    /**
     * Gets as notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @return \CleverIt\UBL\Invoice\RO\NotificationRequirement[]
     */
    public function getNotificationRequirement()
    {
        return $this->notificationRequirement;
    }

    /**
     * Sets a new notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @param \CleverIt\UBL\Invoice\RO\NotificationRequirement[] $notificationRequirement
     * @return self
     */
    public function setNotificationRequirement(array $notificationRequirement = null)
    {
        $this->notificationRequirement = $notificationRequirement;
        return $this;
    }

    /**
     * Gets as serviceChargePaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Service Charge_ Payment Terms. Payment Terms
     *  Payment terms for the service charge associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \CleverIt\UBL\Invoice\RO\ServiceChargePaymentTerms
     */
    public function getServiceChargePaymentTerms()
    {
        return $this->serviceChargePaymentTerms;
    }

    /**
     * Sets a new serviceChargePaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Service Charge_ Payment Terms. Payment Terms
     *  Payment terms for the service charge associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \CleverIt\UBL\Invoice\RO\ServiceChargePaymentTerms $serviceChargePaymentTerms
     * @return self
     */
    public function setServiceChargePaymentTerms(?\CleverIt\UBL\Invoice\RO\ServiceChargePaymentTerms $serviceChargePaymentTerms = null)
    {
        $this->serviceChargePaymentTerms = $serviceChargePaymentTerms;
        return $this;
    }
}

