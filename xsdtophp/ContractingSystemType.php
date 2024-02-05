<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ContractingSystemType
 *
 * ABIE
 *  Contracting System. Details
 *  A class to describe the contracting system. If the procedure is individual (nonrepetitive), this class should not be used.
 *  Contracting System
 * XSD Type: ContractingSystemType
 */
class ContractingSystemType
{

    /**
     * BBIE
     *  Contracting System. Identifier
     *  An identifier for the contracting system.
     *  0..1
     *  Contracting System
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contracting System. Contracting System Type. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). 
     *  0..1
     *  Contracting System
     *  Contracting System Type
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\ContractingSystemTypeCode $contractingSystemTypeCode
     */
    private $contractingSystemTypeCode = null;

    /**
     * BBIE
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Contracting System. Identifier
     *  An identifier for the contracting system.
     *  0..1
     *  Contracting System
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
     *  Contracting System. Identifier
     *  An identifier for the contracting system.
     *  0..1
     *  Contracting System
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
     * Gets as contractingSystemTypeCode
     *
     * BBIE
     *  Contracting System. Contracting System Type. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). 
     *  0..1
     *  Contracting System
     *  Contracting System Type
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\ContractingSystemTypeCode
     */
    public function getContractingSystemTypeCode()
    {
        return $this->contractingSystemTypeCode;
    }

    /**
     * Sets a new contractingSystemTypeCode
     *
     * BBIE
     *  Contracting System. Contracting System Type. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). 
     *  0..1
     *  Contracting System
     *  Contracting System Type
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\ContractingSystemTypeCode $contractingSystemTypeCode
     * @return self
     */
    public function setContractingSystemTypeCode(\CleverIt\UBL\Invoice\ContractingSystemTypeCode $contractingSystemTypeCode)
    {
        $this->contractingSystemTypeCode = $contractingSystemTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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


}

