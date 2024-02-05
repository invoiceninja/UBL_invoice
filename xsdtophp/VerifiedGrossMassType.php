<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing VerifiedGrossMassType
 *
 * ABIE
 *  Verified Gross Mass. Details
 *  A class to describe a verified gross mass (VGM) measure and its documentation.
 *  Verified Gross Mass
 *  VGM
 * XSD Type: VerifiedGrossMassType
 */
class VerifiedGrossMassType
{

    /**
     * BBIE
     *  Verified Gross Mass. Identifier
     *  An identifier for this mass measure.
     *  0..1
     *  Verified Gross Mass
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Verified Gross Mass. Weighing Date. Date
     *  The weighing date.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $weighingDate
     */
    private $weighingDate = null;

    /**
     * BBIE
     *  Verified Gross Mass. Weighing Time. Time
     *  The weighing time.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $weighingTime
     */
    private $weighingTime = null;

    /**
     * BBIE
     *  Verified Gross Mass. Weighing Method Code. Code
     *  A code signifying the weighing method used (e.g. according the SOLAS Convention).
     *  1
     *  Verified Gross Mass
     *  Weighing Method Code
     *  Code
     *  Weighing Method
     *  Weighing Method_ Code. Type
     *  1, 2
     *
     * @var \CleverIt\UBL\Invoice\WeighingMethodCode $weighingMethodCode
     */
    private $weighingMethodCode = null;

    /**
     * BBIE
     *  Verified Gross Mass. Weighing Device Identifier. Identifier
     *  An identifier for the weighing device used for executing the weight measurement.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Device Identifier
     *  Identifier
     *  Identifier. Type
     *  WeighScale-01
     *
     * @var \CleverIt\UBL\Invoice\WeighingDeviceID $weighingDeviceID
     */
    private $weighingDeviceID = null;

    /**
     * BBIE
     *  Verified Gross Mass. Weighing Device Type. Text
     *  Text describing the weighing device type used for executing the weight measurement.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Device Type
     *  Text
     *  Text. Type
     *  Truck Scale, Weighbridge
     *
     * @var \CleverIt\UBL\Invoice\WeighingDeviceType $weighingDeviceType
     */
    private $weighingDeviceType = null;

    /**
     * BBIE
     *  Verified Gross Mass. Gross_ Mass. Measure
     *  The total verified gross mass of a packed container which includes the cargo weight, block and bracing materials and container tare.
     *  1
     *  Verified Gross Mass
     *  Gross
     *  Mass
     *  Measure
     *  Measure. Type
     *  VGM
     *
     * @var \CleverIt\UBL\Invoice\GrossMassMeasure $grossMassMeasure
     */
    private $grossMassMeasure = null;

    /**
     * ASBIE
     *  Verified Gross Mass. Weighing_ Party. Party
     *  The party executing the weight measure.
     *  0..1
     *  Verified Gross Mass
     *  Weighing
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\WeighingParty $weighingParty
     */
    private $weighingParty = null;

    /**
     * ASBIE
     *  Verified Gross Mass. Shipper_ Party. Party
     *  The party playing the role of the Shipper (BCO, FF or NVOCC) who is responsible for the VGM (e.g. according the SOLAS Convention).
     *  0..1
     *  Verified Gross Mass
     *  Shipper
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\ShipperParty $shipperParty
     */
    private $shipperParty = null;

    /**
     * ASBIE
     *  Verified Gross Mass. Responsible_ Party. Party
     *  The party responsible for signing the VGM on behalf of the Shipper.
     *  0..1
     *  Verified Gross Mass
     *  Responsible
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\ResponsibleParty $responsibleParty
     */
    private $responsibleParty = null;

    /**
     * ASBIE
     *  Verified Gross Mass. Document Reference
     *  A reference to the VGM documentary evidence.
     *  1..n
     *  Verified Gross Mass
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Verified Gross Mass. Identifier
     *  An identifier for this mass measure.
     *  0..1
     *  Verified Gross Mass
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Verified Gross Mass. Identifier
     *  An identifier for this mass measure.
     *  0..1
     *  Verified Gross Mass
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as weighingDate
     *
     * BBIE
     *  Verified Gross Mass. Weighing Date. Date
     *  The weighing date.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getWeighingDate()
    {
        return $this->weighingDate;
    }

    /**
     * Sets a new weighingDate
     *
     * BBIE
     *  Verified Gross Mass. Weighing Date. Date
     *  The weighing date.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $weighingDate
     * @return self
     */
    public function setWeighingDate(\DateTime $weighingDate)
    {
        $this->weighingDate = $weighingDate;
        return $this;
    }

    /**
     * Gets as weighingTime
     *
     * BBIE
     *  Verified Gross Mass. Weighing Time. Time
     *  The weighing time.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getWeighingTime()
    {
        return $this->weighingTime;
    }

    /**
     * Sets a new weighingTime
     *
     * BBIE
     *  Verified Gross Mass. Weighing Time. Time
     *  The weighing time.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $weighingTime
     * @return self
     */
    public function setWeighingTime(\DateTime $weighingTime)
    {
        $this->weighingTime = $weighingTime;
        return $this;
    }

    /**
     * Gets as weighingMethodCode
     *
     * BBIE
     *  Verified Gross Mass. Weighing Method Code. Code
     *  A code signifying the weighing method used (e.g. according the SOLAS Convention).
     *  1
     *  Verified Gross Mass
     *  Weighing Method Code
     *  Code
     *  Weighing Method
     *  Weighing Method_ Code. Type
     *  1, 2
     *
     * @return \CleverIt\UBL\Invoice\WeighingMethodCode
     */
    public function getWeighingMethodCode()
    {
        return $this->weighingMethodCode;
    }

    /**
     * Sets a new weighingMethodCode
     *
     * BBIE
     *  Verified Gross Mass. Weighing Method Code. Code
     *  A code signifying the weighing method used (e.g. according the SOLAS Convention).
     *  1
     *  Verified Gross Mass
     *  Weighing Method Code
     *  Code
     *  Weighing Method
     *  Weighing Method_ Code. Type
     *  1, 2
     *
     * @param \CleverIt\UBL\Invoice\WeighingMethodCode $weighingMethodCode
     * @return self
     */
    public function setWeighingMethodCode(\CleverIt\UBL\Invoice\WeighingMethodCode $weighingMethodCode)
    {
        $this->weighingMethodCode = $weighingMethodCode;
        return $this;
    }

    /**
     * Gets as weighingDeviceID
     *
     * BBIE
     *  Verified Gross Mass. Weighing Device Identifier. Identifier
     *  An identifier for the weighing device used for executing the weight measurement.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Device Identifier
     *  Identifier
     *  Identifier. Type
     *  WeighScale-01
     *
     * @return \CleverIt\UBL\Invoice\WeighingDeviceID
     */
    public function getWeighingDeviceID()
    {
        return $this->weighingDeviceID;
    }

    /**
     * Sets a new weighingDeviceID
     *
     * BBIE
     *  Verified Gross Mass. Weighing Device Identifier. Identifier
     *  An identifier for the weighing device used for executing the weight measurement.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Device Identifier
     *  Identifier
     *  Identifier. Type
     *  WeighScale-01
     *
     * @param \CleverIt\UBL\Invoice\WeighingDeviceID $weighingDeviceID
     * @return self
     */
    public function setWeighingDeviceID(\CleverIt\UBL\Invoice\WeighingDeviceID $weighingDeviceID)
    {
        $this->weighingDeviceID = $weighingDeviceID;
        return $this;
    }

    /**
     * Gets as weighingDeviceType
     *
     * BBIE
     *  Verified Gross Mass. Weighing Device Type. Text
     *  Text describing the weighing device type used for executing the weight measurement.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Device Type
     *  Text
     *  Text. Type
     *  Truck Scale, Weighbridge
     *
     * @return \CleverIt\UBL\Invoice\WeighingDeviceType
     */
    public function getWeighingDeviceType()
    {
        return $this->weighingDeviceType;
    }

    /**
     * Sets a new weighingDeviceType
     *
     * BBIE
     *  Verified Gross Mass. Weighing Device Type. Text
     *  Text describing the weighing device type used for executing the weight measurement.
     *  0..1
     *  Verified Gross Mass
     *  Weighing Device Type
     *  Text
     *  Text. Type
     *  Truck Scale, Weighbridge
     *
     * @param \CleverIt\UBL\Invoice\WeighingDeviceType $weighingDeviceType
     * @return self
     */
    public function setWeighingDeviceType(\CleverIt\UBL\Invoice\WeighingDeviceType $weighingDeviceType)
    {
        $this->weighingDeviceType = $weighingDeviceType;
        return $this;
    }

    /**
     * Gets as grossMassMeasure
     *
     * BBIE
     *  Verified Gross Mass. Gross_ Mass. Measure
     *  The total verified gross mass of a packed container which includes the cargo weight, block and bracing materials and container tare.
     *  1
     *  Verified Gross Mass
     *  Gross
     *  Mass
     *  Measure
     *  Measure. Type
     *  VGM
     *
     * @return \CleverIt\UBL\Invoice\GrossMassMeasure
     */
    public function getGrossMassMeasure()
    {
        return $this->grossMassMeasure;
    }

    /**
     * Sets a new grossMassMeasure
     *
     * BBIE
     *  Verified Gross Mass. Gross_ Mass. Measure
     *  The total verified gross mass of a packed container which includes the cargo weight, block and bracing materials and container tare.
     *  1
     *  Verified Gross Mass
     *  Gross
     *  Mass
     *  Measure
     *  Measure. Type
     *  VGM
     *
     * @param \CleverIt\UBL\Invoice\GrossMassMeasure $grossMassMeasure
     * @return self
     */
    public function setGrossMassMeasure(\CleverIt\UBL\Invoice\GrossMassMeasure $grossMassMeasure)
    {
        $this->grossMassMeasure = $grossMassMeasure;
        return $this;
    }

    /**
     * Gets as weighingParty
     *
     * ASBIE
     *  Verified Gross Mass. Weighing_ Party. Party
     *  The party executing the weight measure.
     *  0..1
     *  Verified Gross Mass
     *  Weighing
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\WeighingParty
     */
    public function getWeighingParty()
    {
        return $this->weighingParty;
    }

    /**
     * Sets a new weighingParty
     *
     * ASBIE
     *  Verified Gross Mass. Weighing_ Party. Party
     *  The party executing the weight measure.
     *  0..1
     *  Verified Gross Mass
     *  Weighing
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\WeighingParty $weighingParty
     * @return self
     */
    public function setWeighingParty(\CleverIt\UBL\Invoice\WeighingParty $weighingParty)
    {
        $this->weighingParty = $weighingParty;
        return $this;
    }

    /**
     * Gets as shipperParty
     *
     * ASBIE
     *  Verified Gross Mass. Shipper_ Party. Party
     *  The party playing the role of the Shipper (BCO, FF or NVOCC) who is responsible for the VGM (e.g. according the SOLAS Convention).
     *  0..1
     *  Verified Gross Mass
     *  Shipper
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\ShipperParty
     */
    public function getShipperParty()
    {
        return $this->shipperParty;
    }

    /**
     * Sets a new shipperParty
     *
     * ASBIE
     *  Verified Gross Mass. Shipper_ Party. Party
     *  The party playing the role of the Shipper (BCO, FF or NVOCC) who is responsible for the VGM (e.g. according the SOLAS Convention).
     *  0..1
     *  Verified Gross Mass
     *  Shipper
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\ShipperParty $shipperParty
     * @return self
     */
    public function setShipperParty(\CleverIt\UBL\Invoice\ShipperParty $shipperParty)
    {
        $this->shipperParty = $shipperParty;
        return $this;
    }

    /**
     * Gets as responsibleParty
     *
     * ASBIE
     *  Verified Gross Mass. Responsible_ Party. Party
     *  The party responsible for signing the VGM on behalf of the Shipper.
     *  0..1
     *  Verified Gross Mass
     *  Responsible
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\ResponsibleParty
     */
    public function getResponsibleParty()
    {
        return $this->responsibleParty;
    }

    /**
     * Sets a new responsibleParty
     *
     * ASBIE
     *  Verified Gross Mass. Responsible_ Party. Party
     *  The party responsible for signing the VGM on behalf of the Shipper.
     *  0..1
     *  Verified Gross Mass
     *  Responsible
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\ResponsibleParty $responsibleParty
     * @return self
     */
    public function setResponsibleParty(\CleverIt\UBL\Invoice\ResponsibleParty $responsibleParty)
    {
        $this->responsibleParty = $responsibleParty;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Verified Gross Mass. Document Reference
     *  A reference to the VGM documentary evidence.
     *  1..n
     *  Verified Gross Mass
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\DocumentReference $documentReference
     */
    public function addToDocumentReference(\CleverIt\UBL\Invoice\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Verified Gross Mass. Document Reference
     *  A reference to the VGM documentary evidence.
     *  1..n
     *  Verified Gross Mass
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Verified Gross Mass. Document Reference
     *  A reference to the VGM documentary evidence.
     *  1..n
     *  Verified Gross Mass
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Verified Gross Mass. Document Reference
     *  A reference to the VGM documentary evidence.
     *  1..n
     *  Verified Gross Mass
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Verified Gross Mass. Document Reference
     *  A reference to the VGM documentary evidence.
     *  1..n
     *  Verified Gross Mass
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }


}

