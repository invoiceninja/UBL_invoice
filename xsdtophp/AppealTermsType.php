<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing AppealTermsType
 *
 * ABIE
 *  Appeal Terms. Details
 *  A class to describe the terms and conditions, set by the contracting authority, under which an appeal can be lodged for a tender award.
 *  Appeal Terms
 * XSD Type: AppealTermsType
 */
class AppealTermsType
{

    /**
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Appeal Terms. Presentation_ Period. Period
     *  The period during which an appeal can be presented.
     *  0..1
     *  Appeal Terms
     *  Presentation
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\PresentationPeriod $presentationPeriod
     */
    private $presentationPeriod = null;

    /**
     * ASBIE
     *  Appeal Terms. Appeal Information_ Party. Party
     *  The party presenting the information for an appeal.
     *  0..1
     *  Appeal Terms
     *  Appeal Information
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\AppealInformationParty $appealInformationParty
     */
    private $appealInformationParty = null;

    /**
     * ASBIE
     *  Appeal Terms. Appeal Receiver_ Party. Party
     *  The party to whom an appeal should be presented.
     *  0..1
     *  Appeal Terms
     *  Appeal Receiver
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\AppealReceiverParty $appealReceiverParty
     */
    private $appealReceiverParty = null;

    /**
     * ASBIE
     *  Appeal Terms. Mediation_ Party. Party
     *  The party that has been appointed to mediate any appeal.
     *  0..1
     *  Appeal Terms
     *  Mediation
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\MediationParty $mediationParty
     */
    private $mediationParty = null;

    /**
     * Adds as description
     *
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as presentationPeriod
     *
     * ASBIE
     *  Appeal Terms. Presentation_ Period. Period
     *  The period during which an appeal can be presented.
     *  0..1
     *  Appeal Terms
     *  Presentation
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\PresentationPeriod
     */
    public function getPresentationPeriod()
    {
        return $this->presentationPeriod;
    }

    /**
     * Sets a new presentationPeriod
     *
     * ASBIE
     *  Appeal Terms. Presentation_ Period. Period
     *  The period during which an appeal can be presented.
     *  0..1
     *  Appeal Terms
     *  Presentation
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\PresentationPeriod $presentationPeriod
     * @return self
     */
    public function setPresentationPeriod(\CleverIt\UBL\Invoice\PresentationPeriod $presentationPeriod)
    {
        $this->presentationPeriod = $presentationPeriod;
        return $this;
    }

    /**
     * Gets as appealInformationParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Information_ Party. Party
     *  The party presenting the information for an appeal.
     *  0..1
     *  Appeal Terms
     *  Appeal Information
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\AppealInformationParty
     */
    public function getAppealInformationParty()
    {
        return $this->appealInformationParty;
    }

    /**
     * Sets a new appealInformationParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Information_ Party. Party
     *  The party presenting the information for an appeal.
     *  0..1
     *  Appeal Terms
     *  Appeal Information
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\AppealInformationParty $appealInformationParty
     * @return self
     */
    public function setAppealInformationParty(\CleverIt\UBL\Invoice\AppealInformationParty $appealInformationParty)
    {
        $this->appealInformationParty = $appealInformationParty;
        return $this;
    }

    /**
     * Gets as appealReceiverParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Receiver_ Party. Party
     *  The party to whom an appeal should be presented.
     *  0..1
     *  Appeal Terms
     *  Appeal Receiver
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\AppealReceiverParty
     */
    public function getAppealReceiverParty()
    {
        return $this->appealReceiverParty;
    }

    /**
     * Sets a new appealReceiverParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Receiver_ Party. Party
     *  The party to whom an appeal should be presented.
     *  0..1
     *  Appeal Terms
     *  Appeal Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\AppealReceiverParty $appealReceiverParty
     * @return self
     */
    public function setAppealReceiverParty(\CleverIt\UBL\Invoice\AppealReceiverParty $appealReceiverParty)
    {
        $this->appealReceiverParty = $appealReceiverParty;
        return $this;
    }

    /**
     * Gets as mediationParty
     *
     * ASBIE
     *  Appeal Terms. Mediation_ Party. Party
     *  The party that has been appointed to mediate any appeal.
     *  0..1
     *  Appeal Terms
     *  Mediation
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\MediationParty
     */
    public function getMediationParty()
    {
        return $this->mediationParty;
    }

    /**
     * Sets a new mediationParty
     *
     * ASBIE
     *  Appeal Terms. Mediation_ Party. Party
     *  The party that has been appointed to mediate any appeal.
     *  0..1
     *  Appeal Terms
     *  Mediation
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\MediationParty $mediationParty
     * @return self
     */
    public function setMediationParty(\CleverIt\UBL\Invoice\MediationParty $mediationParty)
    {
        $this->mediationParty = $mediationParty;
        return $this;
    }


}

