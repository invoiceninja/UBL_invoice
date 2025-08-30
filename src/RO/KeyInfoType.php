<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing KeyInfoType
 *
 *
 * XSD Type: KeyInfoType
 */
class KeyInfoType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $keyName
     */
    private $keyName = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\KeyValue $keyValue
     */
    private $keyValue = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\RetrievalMethod $retrievalMethod
     */
    private $retrievalMethod = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\X509Data $x509Data
     */
    private $x509Data = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\PGPData $pGPData
     */
    private $pGPData = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\SPKIData $sPKIData
     */
    private $sPKIData = null;

    /**
     * @var string $mgmtData
     */
    private $mgmtData = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as keyName
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * @param string $keyName
     * @return self
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as keyValue
     *
     * @return \CleverIt\UBL\Invoice\RO\KeyValue
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * Sets a new keyValue
     *
     * @param \CleverIt\UBL\Invoice\RO\KeyValue $keyValue
     * @return self
     */
    public function setKeyValue(?\CleverIt\UBL\Invoice\RO\KeyValue $keyValue = null)
    {
        $this->keyValue = $keyValue;
        return $this;
    }

    /**
     * Gets as retrievalMethod
     *
     * @return \CleverIt\UBL\Invoice\RO\RetrievalMethod
     */
    public function getRetrievalMethod()
    {
        return $this->retrievalMethod;
    }

    /**
     * Sets a new retrievalMethod
     *
     * @param \CleverIt\UBL\Invoice\RO\RetrievalMethod $retrievalMethod
     * @return self
     */
    public function setRetrievalMethod(?\CleverIt\UBL\Invoice\RO\RetrievalMethod $retrievalMethod = null)
    {
        $this->retrievalMethod = $retrievalMethod;
        return $this;
    }

    /**
     * Gets as x509Data
     *
     * @return \CleverIt\UBL\Invoice\RO\X509Data
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * @param \CleverIt\UBL\Invoice\RO\X509Data $x509Data
     * @return self
     */
    public function setX509Data(?\CleverIt\UBL\Invoice\RO\X509Data $x509Data = null)
    {
        $this->x509Data = $x509Data;
        return $this;
    }

    /**
     * Gets as pGPData
     *
     * @return \CleverIt\UBL\Invoice\RO\PGPData
     */
    public function getPGPData()
    {
        return $this->pGPData;
    }

    /**
     * Sets a new pGPData
     *
     * @param \CleverIt\UBL\Invoice\RO\PGPData $pGPData
     * @return self
     */
    public function setPGPData(?\CleverIt\UBL\Invoice\RO\PGPData $pGPData = null)
    {
        $this->pGPData = $pGPData;
        return $this;
    }

    /**
     * Gets as sPKIData
     *
     * @return \CleverIt\UBL\Invoice\RO\SPKIData
     */
    public function getSPKIData()
    {
        return $this->sPKIData;
    }

    /**
     * Sets a new sPKIData
     *
     * @param \CleverIt\UBL\Invoice\RO\SPKIData $sPKIData
     * @return self
     */
    public function setSPKIData(?\CleverIt\UBL\Invoice\RO\SPKIData $sPKIData = null)
    {
        $this->sPKIData = $sPKIData;
        return $this;
    }

    /**
     * Gets as mgmtData
     *
     * @return string
     */
    public function getMgmtData()
    {
        return $this->mgmtData;
    }

    /**
     * Sets a new mgmtData
     *
     * @param string $mgmtData
     * @return self
     */
    public function setMgmtData($mgmtData)
    {
        $this->mgmtData = $mgmtData;
        return $this;
    }
}

