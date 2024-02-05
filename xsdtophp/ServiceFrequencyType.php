<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ServiceFrequencyType
 *
 * ABIE
 *  Service Frequency. Details
 *  A class to specify which day of the week a transport service is operational.
 *  Service Frequency
 * XSD Type: ServiceFrequencyType
 */
class ServiceFrequencyType
{

    /**
     * BBIE
     *  Service Frequency. Week Day. Code
     *  A day of the week, expressed as code.
     *  1
     *  Service Frequency
     *  Week Day
     *  Code
     *  Week Day
     *  Week Day_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\WeekDayCode $weekDayCode
     */
    private $weekDayCode = null;

    /**
     * Gets as weekDayCode
     *
     * BBIE
     *  Service Frequency. Week Day. Code
     *  A day of the week, expressed as code.
     *  1
     *  Service Frequency
     *  Week Day
     *  Code
     *  Week Day
     *  Week Day_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\WeekDayCode
     */
    public function getWeekDayCode()
    {
        return $this->weekDayCode;
    }

    /**
     * Sets a new weekDayCode
     *
     * BBIE
     *  Service Frequency. Week Day. Code
     *  A day of the week, expressed as code.
     *  1
     *  Service Frequency
     *  Week Day
     *  Code
     *  Week Day
     *  Week Day_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\WeekDayCode $weekDayCode
     * @return self
     */
    public function setWeekDayCode(\CleverIt\UBL\Invoice\WeekDayCode $weekDayCode)
    {
        $this->weekDayCode = $weekDayCode;
        return $this;
    }


}

