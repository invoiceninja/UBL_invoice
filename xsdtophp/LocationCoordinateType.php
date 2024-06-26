<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing LocationCoordinateType
 *
 * ABIE
 *  Location Coordinate. Details
 *  A class for defining a set of geographical coordinates (apparently misnamed).
 *  Location Coordinate
 * XSD Type: LocationCoordinateType
 */
class LocationCoordinateType
{

    /**
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  A code signifying the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\CoordinateSystemCode $coordinateSystemCode
     */
    private $coordinateSystemCode = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The degree component of a latitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\LatitudeDegreesMeasure $latitudeDegreesMeasure
     */
    private $latitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The minutes component of a latitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\LatitudeMinutesMeasure $latitudeMinutesMeasure
     */
    private $latitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  A code signifying the direction of latitude measurement from the equator (north or south).
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction
     *  Latitude Direction_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\LatitudeDirectionCode $latitudeDirectionCode
     */
    private $latitudeDirectionCode = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The degree component of a longitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\LongitudeDegreesMeasure $longitudeDegreesMeasure
     */
    private $longitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The minutes component of a longitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\LongitudeMinutesMeasure $longitudeMinutesMeasure
     */
    private $longitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  A code signifying the direction of longitude measurement from the prime meridian (east or west).
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction
     *  Longitude Direction_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\LongitudeDirectionCode $longitudeDirectionCode
     */
    private $longitudeDirectionCode = null;

    /**
     * BBIE
     *  Location Coordinate. Altitude. Measure
     *  The altitude of the location.
     *  0..1
     *  Location Coordinate
     *  Altitude
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\AltitudeMeasure $altitudeMeasure
     */
    private $altitudeMeasure = null;

    /**
     * Gets as coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  A code signifying the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\CoordinateSystemCode
     */
    public function getCoordinateSystemCode()
    {
        return $this->coordinateSystemCode;
    }

    /**
     * Sets a new coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  A code signifying the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\CoordinateSystemCode $coordinateSystemCode
     * @return self
     */
    public function setCoordinateSystemCode(\CleverIt\UBL\Invoice\CoordinateSystemCode $coordinateSystemCode)
    {
        $this->coordinateSystemCode = $coordinateSystemCode;
        return $this;
    }

    /**
     * Gets as latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The degree component of a latitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\LatitudeDegreesMeasure
     */
    public function getLatitudeDegreesMeasure()
    {
        return $this->latitudeDegreesMeasure;
    }

    /**
     * Sets a new latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The degree component of a latitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\LatitudeDegreesMeasure $latitudeDegreesMeasure
     * @return self
     */
    public function setLatitudeDegreesMeasure(\CleverIt\UBL\Invoice\LatitudeDegreesMeasure $latitudeDegreesMeasure)
    {
        $this->latitudeDegreesMeasure = $latitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The minutes component of a latitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\LatitudeMinutesMeasure
     */
    public function getLatitudeMinutesMeasure()
    {
        return $this->latitudeMinutesMeasure;
    }

    /**
     * Sets a new latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The minutes component of a latitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\LatitudeMinutesMeasure $latitudeMinutesMeasure
     * @return self
     */
    public function setLatitudeMinutesMeasure(\CleverIt\UBL\Invoice\LatitudeMinutesMeasure $latitudeMinutesMeasure)
    {
        $this->latitudeMinutesMeasure = $latitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  A code signifying the direction of latitude measurement from the equator (north or south).
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction
     *  Latitude Direction_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\LatitudeDirectionCode
     */
    public function getLatitudeDirectionCode()
    {
        return $this->latitudeDirectionCode;
    }

    /**
     * Sets a new latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  A code signifying the direction of latitude measurement from the equator (north or south).
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction
     *  Latitude Direction_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\LatitudeDirectionCode $latitudeDirectionCode
     * @return self
     */
    public function setLatitudeDirectionCode(\CleverIt\UBL\Invoice\LatitudeDirectionCode $latitudeDirectionCode)
    {
        $this->latitudeDirectionCode = $latitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The degree component of a longitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\LongitudeDegreesMeasure
     */
    public function getLongitudeDegreesMeasure()
    {
        return $this->longitudeDegreesMeasure;
    }

    /**
     * Sets a new longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The degree component of a longitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\LongitudeDegreesMeasure $longitudeDegreesMeasure
     * @return self
     */
    public function setLongitudeDegreesMeasure(\CleverIt\UBL\Invoice\LongitudeDegreesMeasure $longitudeDegreesMeasure)
    {
        $this->longitudeDegreesMeasure = $longitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The minutes component of a longitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\LongitudeMinutesMeasure
     */
    public function getLongitudeMinutesMeasure()
    {
        return $this->longitudeMinutesMeasure;
    }

    /**
     * Sets a new longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The minutes component of a longitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\LongitudeMinutesMeasure $longitudeMinutesMeasure
     * @return self
     */
    public function setLongitudeMinutesMeasure(\CleverIt\UBL\Invoice\LongitudeMinutesMeasure $longitudeMinutesMeasure)
    {
        $this->longitudeMinutesMeasure = $longitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  A code signifying the direction of longitude measurement from the prime meridian (east or west).
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction
     *  Longitude Direction_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\LongitudeDirectionCode
     */
    public function getLongitudeDirectionCode()
    {
        return $this->longitudeDirectionCode;
    }

    /**
     * Sets a new longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  A code signifying the direction of longitude measurement from the prime meridian (east or west).
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction
     *  Longitude Direction_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\LongitudeDirectionCode $longitudeDirectionCode
     * @return self
     */
    public function setLongitudeDirectionCode(\CleverIt\UBL\Invoice\LongitudeDirectionCode $longitudeDirectionCode)
    {
        $this->longitudeDirectionCode = $longitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as altitudeMeasure
     *
     * BBIE
     *  Location Coordinate. Altitude. Measure
     *  The altitude of the location.
     *  0..1
     *  Location Coordinate
     *  Altitude
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\AltitudeMeasure
     */
    public function getAltitudeMeasure()
    {
        return $this->altitudeMeasure;
    }

    /**
     * Sets a new altitudeMeasure
     *
     * BBIE
     *  Location Coordinate. Altitude. Measure
     *  The altitude of the location.
     *  0..1
     *  Location Coordinate
     *  Altitude
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\AltitudeMeasure $altitudeMeasure
     * @return self
     */
    public function setAltitudeMeasure(\CleverIt\UBL\Invoice\AltitudeMeasure $altitudeMeasure)
    {
        $this->altitudeMeasure = $altitudeMeasure;
        return $this;
    }


}

