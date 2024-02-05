<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing HazardousGoodsTransitType
 *
 * ABIE
 *  Hazardous Goods Transit. Details
 *  A class to describe hazardous goods in transit.
 *  Hazardous Goods Transit
 * XSD Type: HazardousGoodsTransitType
 */
class HazardousGoodsTransitType
{

    /**
     * BBIE
     *  Hazardous Goods Transit. Transport Emergency Card Code. Code
     *  An identifier for a transport emergency card describing the actions to be taken in an emergency in transporting the hazardous goods. It may be the identity number of a hazardous emergency response plan assigned by the appropriate authority.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Emergency Card Code
     *  Code
     *  Code. Type
     *  TREM card
     *
     * @var \CleverIt\UBL\Invoice\TransportEmergencyCardCode $transportEmergencyCardCode
     */
    private $transportEmergencyCardCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Packing Criteria Code. Code
     *  A code signifying the packaging requirement for transportation of the hazardous goods as assigned by IATA, IMDB, ADR, RID etc.
     *  0..1
     *  Hazardous Goods Transit
     *  Packing Criteria Code
     *  Code
     *  Code. Type
     *  Packing Group
     *
     * @var \CleverIt\UBL\Invoice\PackingCriteriaCode $packingCriteriaCode
     */
    private $packingCriteriaCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Hazardous Regulation Code. Code
     *  A code signifying the set of legal regulations governing the transportation of the hazardous goods.
     *  0..1
     *  Hazardous Goods Transit
     *  Hazardous Regulation Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\HazardousRegulationCode $hazardousRegulationCode
     */
    private $hazardousRegulationCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Inhalation Toxicity Zone Code. Code
     *  A code signifying the Inhalation Toxicity Hazard Zone for the hazardous goods, as defined by the US Department of Transportation.
     *  0..1
     *  Hazardous Goods Transit
     *  Inhalation Toxicity Zone Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\InhalationToxicityZoneCode $inhalationToxicityZoneCode
     */
    private $inhalationToxicityZoneCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Transport Authorization Code. Code
     *  A code signifying authorization for the transportation of hazardous cargo.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Authorization Code
     *  Code
     *  Code. Type
     *  Permission for Transport
     *
     * @var \CleverIt\UBL\Invoice\TransportAuthorizationCode $transportAuthorizationCode
     */
    private $transportAuthorizationCode = null;

    /**
     * ASBIE
     *  Hazardous Goods Transit. Maximum_ Temperature. Temperature
     *  The maximum temperature at which the hazardous goods can safely be transported.
     *  0..1
     *  Hazardous Goods Transit
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \CleverIt\UBL\Invoice\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * ASBIE
     *  Hazardous Goods Transit. Minimum_ Temperature. Temperature
     *  The minimum temperature at which the hazardous goods can safely be transported.
     *  0..1
     *  Hazardous Goods Transit
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \CleverIt\UBL\Invoice\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * Gets as transportEmergencyCardCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Emergency Card Code. Code
     *  An identifier for a transport emergency card describing the actions to be taken in an emergency in transporting the hazardous goods. It may be the identity number of a hazardous emergency response plan assigned by the appropriate authority.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Emergency Card Code
     *  Code
     *  Code. Type
     *  TREM card
     *
     * @return \CleverIt\UBL\Invoice\TransportEmergencyCardCode
     */
    public function getTransportEmergencyCardCode()
    {
        return $this->transportEmergencyCardCode;
    }

    /**
     * Sets a new transportEmergencyCardCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Emergency Card Code. Code
     *  An identifier for a transport emergency card describing the actions to be taken in an emergency in transporting the hazardous goods. It may be the identity number of a hazardous emergency response plan assigned by the appropriate authority.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Emergency Card Code
     *  Code
     *  Code. Type
     *  TREM card
     *
     * @param \CleverIt\UBL\Invoice\TransportEmergencyCardCode $transportEmergencyCardCode
     * @return self
     */
    public function setTransportEmergencyCardCode(\CleverIt\UBL\Invoice\TransportEmergencyCardCode $transportEmergencyCardCode)
    {
        $this->transportEmergencyCardCode = $transportEmergencyCardCode;
        return $this;
    }

    /**
     * Gets as packingCriteriaCode
     *
     * BBIE
     *  Hazardous Goods Transit. Packing Criteria Code. Code
     *  A code signifying the packaging requirement for transportation of the hazardous goods as assigned by IATA, IMDB, ADR, RID etc.
     *  0..1
     *  Hazardous Goods Transit
     *  Packing Criteria Code
     *  Code
     *  Code. Type
     *  Packing Group
     *
     * @return \CleverIt\UBL\Invoice\PackingCriteriaCode
     */
    public function getPackingCriteriaCode()
    {
        return $this->packingCriteriaCode;
    }

    /**
     * Sets a new packingCriteriaCode
     *
     * BBIE
     *  Hazardous Goods Transit. Packing Criteria Code. Code
     *  A code signifying the packaging requirement for transportation of the hazardous goods as assigned by IATA, IMDB, ADR, RID etc.
     *  0..1
     *  Hazardous Goods Transit
     *  Packing Criteria Code
     *  Code
     *  Code. Type
     *  Packing Group
     *
     * @param \CleverIt\UBL\Invoice\PackingCriteriaCode $packingCriteriaCode
     * @return self
     */
    public function setPackingCriteriaCode(\CleverIt\UBL\Invoice\PackingCriteriaCode $packingCriteriaCode)
    {
        $this->packingCriteriaCode = $packingCriteriaCode;
        return $this;
    }

    /**
     * Gets as hazardousRegulationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Hazardous Regulation Code. Code
     *  A code signifying the set of legal regulations governing the transportation of the hazardous goods.
     *  0..1
     *  Hazardous Goods Transit
     *  Hazardous Regulation Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\HazardousRegulationCode
     */
    public function getHazardousRegulationCode()
    {
        return $this->hazardousRegulationCode;
    }

    /**
     * Sets a new hazardousRegulationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Hazardous Regulation Code. Code
     *  A code signifying the set of legal regulations governing the transportation of the hazardous goods.
     *  0..1
     *  Hazardous Goods Transit
     *  Hazardous Regulation Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\HazardousRegulationCode $hazardousRegulationCode
     * @return self
     */
    public function setHazardousRegulationCode(\CleverIt\UBL\Invoice\HazardousRegulationCode $hazardousRegulationCode)
    {
        $this->hazardousRegulationCode = $hazardousRegulationCode;
        return $this;
    }

    /**
     * Gets as inhalationToxicityZoneCode
     *
     * BBIE
     *  Hazardous Goods Transit. Inhalation Toxicity Zone Code. Code
     *  A code signifying the Inhalation Toxicity Hazard Zone for the hazardous goods, as defined by the US Department of Transportation.
     *  0..1
     *  Hazardous Goods Transit
     *  Inhalation Toxicity Zone Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\InhalationToxicityZoneCode
     */
    public function getInhalationToxicityZoneCode()
    {
        return $this->inhalationToxicityZoneCode;
    }

    /**
     * Sets a new inhalationToxicityZoneCode
     *
     * BBIE
     *  Hazardous Goods Transit. Inhalation Toxicity Zone Code. Code
     *  A code signifying the Inhalation Toxicity Hazard Zone for the hazardous goods, as defined by the US Department of Transportation.
     *  0..1
     *  Hazardous Goods Transit
     *  Inhalation Toxicity Zone Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\InhalationToxicityZoneCode $inhalationToxicityZoneCode
     * @return self
     */
    public function setInhalationToxicityZoneCode(\CleverIt\UBL\Invoice\InhalationToxicityZoneCode $inhalationToxicityZoneCode)
    {
        $this->inhalationToxicityZoneCode = $inhalationToxicityZoneCode;
        return $this;
    }

    /**
     * Gets as transportAuthorizationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Authorization Code. Code
     *  A code signifying authorization for the transportation of hazardous cargo.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Authorization Code
     *  Code
     *  Code. Type
     *  Permission for Transport
     *
     * @return \CleverIt\UBL\Invoice\TransportAuthorizationCode
     */
    public function getTransportAuthorizationCode()
    {
        return $this->transportAuthorizationCode;
    }

    /**
     * Sets a new transportAuthorizationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Authorization Code. Code
     *  A code signifying authorization for the transportation of hazardous cargo.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Authorization Code
     *  Code
     *  Code. Type
     *  Permission for Transport
     *
     * @param \CleverIt\UBL\Invoice\TransportAuthorizationCode $transportAuthorizationCode
     * @return self
     */
    public function setTransportAuthorizationCode(\CleverIt\UBL\Invoice\TransportAuthorizationCode $transportAuthorizationCode)
    {
        $this->transportAuthorizationCode = $transportAuthorizationCode;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Maximum_ Temperature. Temperature
     *  The maximum temperature at which the hazardous goods can safely be transported.
     *  0..1
     *  Hazardous Goods Transit
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \CleverIt\UBL\Invoice\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Maximum_ Temperature. Temperature
     *  The maximum temperature at which the hazardous goods can safely be transported.
     *  0..1
     *  Hazardous Goods Transit
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \CleverIt\UBL\Invoice\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(\CleverIt\UBL\Invoice\MaximumTemperature $maximumTemperature)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Minimum_ Temperature. Temperature
     *  The minimum temperature at which the hazardous goods can safely be transported.
     *  0..1
     *  Hazardous Goods Transit
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \CleverIt\UBL\Invoice\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Minimum_ Temperature. Temperature
     *  The minimum temperature at which the hazardous goods can safely be transported.
     *  0..1
     *  Hazardous Goods Transit
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \CleverIt\UBL\Invoice\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(\CleverIt\UBL\Invoice\MinimumTemperature $minimumTemperature)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }


}

