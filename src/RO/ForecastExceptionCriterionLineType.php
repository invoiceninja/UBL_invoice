<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ForecastExceptionCriterionLineType
 *
 * ABIE
 *  Forecast Exception Criterion Line. Details
 *  Establishes the criterion for one of the three types of exceptions. This class provides criteria for the kind of forecast exception, the identification of the purpose of the forecast, the source of data and the time basis criterion for the exception.
 *  Forecast Exception Criterion Line
 * XSD Type: ForecastExceptionCriterionLineType
 */
class ForecastExceptionCriterionLineType
{
    /**
     * BBIE
     *  Forecast Exception Criterion Line. Forecast_ Purpose Code. Code
     *  A description of the purpose for the forecast that is assigned to each forecast data item exception criterion.
     *  1
     *  Forecast Exception Criterion Line
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ForecastPurposeCode $forecastPurposeCode
     */
    private $forecastPurposeCode = null;

    /**
     * BBIE
     *  Forecast Exception Criterion Line. Forecast Type Code. Code
     *  A description of a Forecast selected from a list.
     *  1
     *  Forecast Exception Criterion Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * BBIE
     *  Forecast Exception Criterion Line. Comparison Data Source Code. Code
     *  If it is a forecast comparison exception, this value indicates the other source of information.
     *  0..1
     *  Forecast Exception Criterion Line
     *  Comparison Data Source Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ComparisonDataSourceCode $comparisonDataSourceCode
     */
    private $comparisonDataSourceCode = null;

    /**
     * BBIE
     *  Forecast Exception Criterion Line. Data Source Code. Code
     *  Indication of the partner who provides the information.
     *  1
     *  Forecast Exception Criterion Line
     *  Data Source Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DataSourceCode $dataSourceCode
     */
    private $dataSourceCode = null;

    /**
     * BBIE
     *  Forecast Exception Criterion Line. Time Delta Days Quantity. Quantity
     *  Time basis in days for the Exception.
     *  0..1
     *  Forecast Exception Criterion Line
     *  Time Delta Days Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TimeDeltaDaysQuantity $timeDeltaDaysQuantity
     */
    private $timeDeltaDaysQuantity = null;

    /**
     * Gets as forecastPurposeCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Forecast_ Purpose Code. Code
     *  A description of the purpose for the forecast that is assigned to each forecast data item exception criterion.
     *  1
     *  Forecast Exception Criterion Line
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ForecastPurposeCode
     */
    public function getForecastPurposeCode()
    {
        return $this->forecastPurposeCode;
    }

    /**
     * Sets a new forecastPurposeCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Forecast_ Purpose Code. Code
     *  A description of the purpose for the forecast that is assigned to each forecast data item exception criterion.
     *  1
     *  Forecast Exception Criterion Line
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ForecastPurposeCode $forecastPurposeCode
     * @return self
     */
    public function setForecastPurposeCode(\CleverIt\UBL\Invoice\RO\ForecastPurposeCode $forecastPurposeCode)
    {
        $this->forecastPurposeCode = $forecastPurposeCode;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Forecast Type Code. Code
     *  A description of a Forecast selected from a list.
     *  1
     *  Forecast Exception Criterion Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ForecastTypeCode
     */
    public function getForecastTypeCode()
    {
        return $this->forecastTypeCode;
    }

    /**
     * Sets a new forecastTypeCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Forecast Type Code. Code
     *  A description of a Forecast selected from a list.
     *  1
     *  Forecast Exception Criterion Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(\CleverIt\UBL\Invoice\RO\ForecastTypeCode $forecastTypeCode)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as comparisonDataSourceCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Comparison Data Source Code. Code
     *  If it is a forecast comparison exception, this value indicates the other source of information.
     *  0..1
     *  Forecast Exception Criterion Line
     *  Comparison Data Source Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ComparisonDataSourceCode
     */
    public function getComparisonDataSourceCode()
    {
        return $this->comparisonDataSourceCode;
    }

    /**
     * Sets a new comparisonDataSourceCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Comparison Data Source Code. Code
     *  If it is a forecast comparison exception, this value indicates the other source of information.
     *  0..1
     *  Forecast Exception Criterion Line
     *  Comparison Data Source Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ComparisonDataSourceCode $comparisonDataSourceCode
     * @return self
     */
    public function setComparisonDataSourceCode(?\CleverIt\UBL\Invoice\RO\ComparisonDataSourceCode $comparisonDataSourceCode = null)
    {
        $this->comparisonDataSourceCode = $comparisonDataSourceCode;
        return $this;
    }

    /**
     * Gets as dataSourceCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Data Source Code. Code
     *  Indication of the partner who provides the information.
     *  1
     *  Forecast Exception Criterion Line
     *  Data Source Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DataSourceCode
     */
    public function getDataSourceCode()
    {
        return $this->dataSourceCode;
    }

    /**
     * Sets a new dataSourceCode
     *
     * BBIE
     *  Forecast Exception Criterion Line. Data Source Code. Code
     *  Indication of the partner who provides the information.
     *  1
     *  Forecast Exception Criterion Line
     *  Data Source Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DataSourceCode $dataSourceCode
     * @return self
     */
    public function setDataSourceCode(\CleverIt\UBL\Invoice\RO\DataSourceCode $dataSourceCode)
    {
        $this->dataSourceCode = $dataSourceCode;
        return $this;
    }

    /**
     * Gets as timeDeltaDaysQuantity
     *
     * BBIE
     *  Forecast Exception Criterion Line. Time Delta Days Quantity. Quantity
     *  Time basis in days for the Exception.
     *  0..1
     *  Forecast Exception Criterion Line
     *  Time Delta Days Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TimeDeltaDaysQuantity
     */
    public function getTimeDeltaDaysQuantity()
    {
        return $this->timeDeltaDaysQuantity;
    }

    /**
     * Sets a new timeDeltaDaysQuantity
     *
     * BBIE
     *  Forecast Exception Criterion Line. Time Delta Days Quantity. Quantity
     *  Time basis in days for the Exception.
     *  0..1
     *  Forecast Exception Criterion Line
     *  Time Delta Days Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TimeDeltaDaysQuantity $timeDeltaDaysQuantity
     * @return self
     */
    public function setTimeDeltaDaysQuantity(?\CleverIt\UBL\Invoice\RO\TimeDeltaDaysQuantity $timeDeltaDaysQuantity = null)
    {
        $this->timeDeltaDaysQuantity = $timeDeltaDaysQuantity;
        return $this;
    }
}

