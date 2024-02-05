<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing QualificationResolutionType
 *
 * ABIE
 *  Qualification Resolution. Details
 *  A class to describe the acceptance or rejection of an economic operator in a tendering process.
 *  Qualification Resolution
 * XSD Type: QualificationResolutionType
 */
class QualificationResolutionType
{

    /**
     * BBIE
     *  Qualification Resolution. Admission Code. Code
     *  An indicator that the economic operator has been accepted into the tendering process (true) or rejected from the tendering process (false).
     *  1
     *  Qualification Resolution
     *  Admission Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\AdmissionCode $admissionCode
     */
    private $admissionCode = null;

    /**
     * BBIE
     *  Qualification Resolution. Exclusion Reason. Text
     *  Text describing a reason for an exclusion from the tendering process.
     *  0..n
     *  Qualification Resolution
     *  Exclusion Reason
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\ExclusionReason[] $exclusionReason
     */
    private $exclusionReason = [
        
    ];

    /**
     * BBIE
     *  Qualification Resolution. Resolution. Text
     *  Text describing this qualification resolution.
     *  0..n
     *  Qualification Resolution
     *  Resolution
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Resolution[] $resolution
     */
    private $resolution = [
        
    ];

    /**
     * BBIE
     *  Qualification Resolution. Resolution Date. Date
     *  The date on which this qualification resolution was formalized.
     *  1
     *  Qualification Resolution
     *  Resolution Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $resolutionDate
     */
    private $resolutionDate = null;

    /**
     * BBIE
     *  Qualification Resolution. Resolution Time. Time
     *  The time at which this qualification resolution was formalized.
     *  0..1
     *  Qualification Resolution
     *  Resolution Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $resolutionTime
     */
    private $resolutionTime = null;

    /**
     * ASBIE
     *  Qualification Resolution. Procurement Project Lot
     *  The Procurement project lot to which this tenderer is accepted or rejected.
     *  0..1
     *  Qualification Resolution
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \CleverIt\UBL\Invoice\ProcurementProjectLot $procurementProjectLot
     */
    private $procurementProjectLot = null;

    /**
     * Gets as admissionCode
     *
     * BBIE
     *  Qualification Resolution. Admission Code. Code
     *  An indicator that the economic operator has been accepted into the tendering process (true) or rejected from the tendering process (false).
     *  1
     *  Qualification Resolution
     *  Admission Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\AdmissionCode
     */
    public function getAdmissionCode()
    {
        return $this->admissionCode;
    }

    /**
     * Sets a new admissionCode
     *
     * BBIE
     *  Qualification Resolution. Admission Code. Code
     *  An indicator that the economic operator has been accepted into the tendering process (true) or rejected from the tendering process (false).
     *  1
     *  Qualification Resolution
     *  Admission Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\AdmissionCode $admissionCode
     * @return self
     */
    public function setAdmissionCode(\CleverIt\UBL\Invoice\AdmissionCode $admissionCode)
    {
        $this->admissionCode = $admissionCode;
        return $this;
    }

    /**
     * Adds as exclusionReason
     *
     * BBIE
     *  Qualification Resolution. Exclusion Reason. Text
     *  Text describing a reason for an exclusion from the tendering process.
     *  0..n
     *  Qualification Resolution
     *  Exclusion Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ExclusionReason $exclusionReason
     */
    public function addToExclusionReason(\CleverIt\UBL\Invoice\ExclusionReason $exclusionReason)
    {
        $this->exclusionReason[] = $exclusionReason;
        return $this;
    }

    /**
     * isset exclusionReason
     *
     * BBIE
     *  Qualification Resolution. Exclusion Reason. Text
     *  Text describing a reason for an exclusion from the tendering process.
     *  0..n
     *  Qualification Resolution
     *  Exclusion Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExclusionReason($index)
    {
        return isset($this->exclusionReason[$index]);
    }

    /**
     * unset exclusionReason
     *
     * BBIE
     *  Qualification Resolution. Exclusion Reason. Text
     *  Text describing a reason for an exclusion from the tendering process.
     *  0..n
     *  Qualification Resolution
     *  Exclusion Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExclusionReason($index)
    {
        unset($this->exclusionReason[$index]);
    }

    /**
     * Gets as exclusionReason
     *
     * BBIE
     *  Qualification Resolution. Exclusion Reason. Text
     *  Text describing a reason for an exclusion from the tendering process.
     *  0..n
     *  Qualification Resolution
     *  Exclusion Reason
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\ExclusionReason[]
     */
    public function getExclusionReason()
    {
        return $this->exclusionReason;
    }

    /**
     * Sets a new exclusionReason
     *
     * BBIE
     *  Qualification Resolution. Exclusion Reason. Text
     *  Text describing a reason for an exclusion from the tendering process.
     *  0..n
     *  Qualification Resolution
     *  Exclusion Reason
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\ExclusionReason[] $exclusionReason
     * @return self
     */
    public function setExclusionReason(array $exclusionReason)
    {
        $this->exclusionReason = $exclusionReason;
        return $this;
    }

    /**
     * Adds as resolution
     *
     * BBIE
     *  Qualification Resolution. Resolution. Text
     *  Text describing this qualification resolution.
     *  0..n
     *  Qualification Resolution
     *  Resolution
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Resolution $resolution
     */
    public function addToResolution(\CleverIt\UBL\Invoice\Resolution $resolution)
    {
        $this->resolution[] = $resolution;
        return $this;
    }

    /**
     * isset resolution
     *
     * BBIE
     *  Qualification Resolution. Resolution. Text
     *  Text describing this qualification resolution.
     *  0..n
     *  Qualification Resolution
     *  Resolution
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResolution($index)
    {
        return isset($this->resolution[$index]);
    }

    /**
     * unset resolution
     *
     * BBIE
     *  Qualification Resolution. Resolution. Text
     *  Text describing this qualification resolution.
     *  0..n
     *  Qualification Resolution
     *  Resolution
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResolution($index)
    {
        unset($this->resolution[$index]);
    }

    /**
     * Gets as resolution
     *
     * BBIE
     *  Qualification Resolution. Resolution. Text
     *  Text describing this qualification resolution.
     *  0..n
     *  Qualification Resolution
     *  Resolution
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Resolution[]
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * BBIE
     *  Qualification Resolution. Resolution. Text
     *  Text describing this qualification resolution.
     *  0..n
     *  Qualification Resolution
     *  Resolution
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Resolution[] $resolution
     * @return self
     */
    public function setResolution(array $resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * Gets as resolutionDate
     *
     * BBIE
     *  Qualification Resolution. Resolution Date. Date
     *  The date on which this qualification resolution was formalized.
     *  1
     *  Qualification Resolution
     *  Resolution Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getResolutionDate()
    {
        return $this->resolutionDate;
    }

    /**
     * Sets a new resolutionDate
     *
     * BBIE
     *  Qualification Resolution. Resolution Date. Date
     *  The date on which this qualification resolution was formalized.
     *  1
     *  Qualification Resolution
     *  Resolution Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $resolutionDate
     * @return self
     */
    public function setResolutionDate(\DateTime $resolutionDate)
    {
        $this->resolutionDate = $resolutionDate;
        return $this;
    }

    /**
     * Gets as resolutionTime
     *
     * BBIE
     *  Qualification Resolution. Resolution Time. Time
     *  The time at which this qualification resolution was formalized.
     *  0..1
     *  Qualification Resolution
     *  Resolution Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getResolutionTime()
    {
        return $this->resolutionTime;
    }

    /**
     * Sets a new resolutionTime
     *
     * BBIE
     *  Qualification Resolution. Resolution Time. Time
     *  The time at which this qualification resolution was formalized.
     *  0..1
     *  Qualification Resolution
     *  Resolution Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $resolutionTime
     * @return self
     */
    public function setResolutionTime(\DateTime $resolutionTime)
    {
        $this->resolutionTime = $resolutionTime;
        return $this;
    }

    /**
     * Gets as procurementProjectLot
     *
     * ASBIE
     *  Qualification Resolution. Procurement Project Lot
     *  The Procurement project lot to which this tenderer is accepted or rejected.
     *  0..1
     *  Qualification Resolution
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \CleverIt\UBL\Invoice\ProcurementProjectLot
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Qualification Resolution. Procurement Project Lot
     *  The Procurement project lot to which this tenderer is accepted or rejected.
     *  0..1
     *  Qualification Resolution
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \CleverIt\UBL\Invoice\ProcurementProjectLot $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(\CleverIt\UBL\Invoice\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }


}

