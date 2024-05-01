<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing AirTransportType
 *
 * ABIE
 *  Air Transport. Details
 *  A class to identify a specific aircraft used for transportation.
 *  Air Transport
 * XSD Type: AirTransportType
 */
class AirTransportType
{
    /**
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AircraftID $aircraftID
     */
    private $aircraftID = null;

    /**
     * Gets as aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AircraftID
     */
    public function getAircraftID()
    {
        return $this->aircraftID;
    }

    /**
     * Sets a new aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AircraftID $aircraftID
     * @return self
     */
    public function setAircraftID(\CleverIt\UBL\Invoice\RO\AircraftID $aircraftID)
    {
        $this->aircraftID = $aircraftID;
        return $this;
    }
}

