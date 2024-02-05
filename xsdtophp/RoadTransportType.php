<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing RoadTransportType
 *
 * ABIE
 *  Road Transport. Details
 *  A class for identifying a vehicle used for road transport.
 *  Road Transport
 * XSD Type: RoadTransportType
 */
class RoadTransportType
{

    /**
     * BBIE
     *  Road Transport. License Plate Identifier. Identifier
     *  The license plate identifier of this vehicle.
     *  1
     *  Road Transport
     *  License Plate Identifier
     *  Identifier
     *  Identifier. Type
     *  Vehicle registration number (WCO ID 167)
     *
     * @var \CleverIt\UBL\Invoice\LicensePlateID $licensePlateID
     */
    private $licensePlateID = null;

    /**
     * Gets as licensePlateID
     *
     * BBIE
     *  Road Transport. License Plate Identifier. Identifier
     *  The license plate identifier of this vehicle.
     *  1
     *  Road Transport
     *  License Plate Identifier
     *  Identifier
     *  Identifier. Type
     *  Vehicle registration number (WCO ID 167)
     *
     * @return \CleverIt\UBL\Invoice\LicensePlateID
     */
    public function getLicensePlateID()
    {
        return $this->licensePlateID;
    }

    /**
     * Sets a new licensePlateID
     *
     * BBIE
     *  Road Transport. License Plate Identifier. Identifier
     *  The license plate identifier of this vehicle.
     *  1
     *  Road Transport
     *  License Plate Identifier
     *  Identifier
     *  Identifier. Type
     *  Vehicle registration number (WCO ID 167)
     *
     * @param \CleverIt\UBL\Invoice\LicensePlateID $licensePlateID
     * @return self
     */
    public function setLicensePlateID(\CleverIt\UBL\Invoice\LicensePlateID $licensePlateID)
    {
        $this->licensePlateID = $licensePlateID;
        return $this;
    }


}

