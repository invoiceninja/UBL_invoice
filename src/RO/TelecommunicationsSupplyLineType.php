<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing TelecommunicationsSupplyLineType
 *
 * ABIE
 *  Telecommunications Supply Line. Details
 *  A class that outlines the telecommunication supply in details
 *  Telecommunications Supply Line
 * XSD Type: TelecommunicationsSupplyLineType
 */
class TelecommunicationsSupplyLineType
{
    /**
     * BBIE
     *  Telecommunications Supply Line. Identifier
     *  An identifier for this telecommunications supply line.
     *  1
     *  Telecommunications Supply Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Telecommunications Supply Line. Phone Number. Text
     *  The phone number used for this telecommunication supply line
     *  1
     *  Telecommunications Supply Line
     *  Phone Number
     *  Text
     *  Text. Type
     *  12345678
     *
     * @var \CleverIt\UBL\Invoice\RO\PhoneNumber $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * BBIE
     *  Telecommunications Supply Line. Description. Text
     *  The description of the telecommunication supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Telecommunications Supply Line. Line Extension Amount. Amount
     *  An amount specifying the cost of this telecommunication line
     *  0..1
     *  Telecommunications Supply Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * ASBIE
     *  Telecommunications Supply Line. Exchange Rate
     *  Exchanges rates used to calculate the amount for this line.
     *  0..n
     *  Telecommunications Supply Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\RO\ExchangeRate[] $exchangeRate
     */
    private $exchangeRate = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Supply Line. Allowance Charge
     *  An allowance or charge that applies to this telecommunication supply line.
     *  0..n
     *  Telecommunications Supply Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \CleverIt\UBL\Invoice\RO\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Supply Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \CleverIt\UBL\Invoice\RO\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Supply Line. Telecommunications Service
     *  A telecommunications service (e.g., a telephone call).
     *  1..n
     *  Telecommunications Supply Line
     *  Telecommunications Service
     *  Telecommunications Service
     *  Telecommunications Service
     *
     * @var \CleverIt\UBL\Invoice\RO\TelecommunicationsService[] $telecommunicationsService
     */
    private $telecommunicationsService = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Telecommunications Supply Line. Identifier
     *  An identifier for this telecommunications supply line.
     *  1
     *  Telecommunications Supply Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Telecommunications Supply Line. Identifier
     *  An identifier for this telecommunications supply line.
     *  1
     *  Telecommunications Supply Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\RO\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * BBIE
     *  Telecommunications Supply Line. Phone Number. Text
     *  The phone number used for this telecommunication supply line
     *  1
     *  Telecommunications Supply Line
     *  Phone Number
     *  Text
     *  Text. Type
     *  12345678
     *
     * @return \CleverIt\UBL\Invoice\RO\PhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * BBIE
     *  Telecommunications Supply Line. Phone Number. Text
     *  The phone number used for this telecommunication supply line
     *  1
     *  Telecommunications Supply Line
     *  Phone Number
     *  Text
     *  Text. Type
     *  12345678
     *
     * @param \CleverIt\UBL\Invoice\RO\PhoneNumber $phoneNumber
     * @return self
     */
    public function setPhoneNumber(\CleverIt\UBL\Invoice\RO\PhoneNumber $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Telecommunications Supply Line. Description. Text
     *  The description of the telecommunication supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\RO\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Telecommunications Supply Line. Description. Text
     *  The description of the telecommunication supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations
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
     *  Telecommunications Supply Line. Description. Text
     *  The description of the telecommunication supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations
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
     *  Telecommunications Supply Line. Description. Text
     *  The description of the telecommunication supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations
     *
     * @return \CleverIt\UBL\Invoice\RO\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Telecommunications Supply Line. Description. Text
     *  The description of the telecommunication supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations
     *
     * @param \CleverIt\UBL\Invoice\RO\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Telecommunications Supply Line. Line Extension Amount. Amount
     *  An amount specifying the cost of this telecommunication line
     *  0..1
     *  Telecommunications Supply Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Telecommunications Supply Line. Line Extension Amount. Amount
     *  An amount specifying the cost of this telecommunication line
     *  0..1
     *  Telecommunications Supply Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?\CleverIt\UBL\Invoice\RO\LineExtensionAmount $lineExtensionAmount = null)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Adds as exchangeRate
     *
     * ASBIE
     *  Telecommunications Supply Line. Exchange Rate
     *  Exchanges rates used to calculate the amount for this line.
     *  0..n
     *  Telecommunications Supply Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate
     */
    public function addToExchangeRate(\CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate[] = $exchangeRate;
        return $this;
    }

    /**
     * isset exchangeRate
     *
     * ASBIE
     *  Telecommunications Supply Line. Exchange Rate
     *  Exchanges rates used to calculate the amount for this line.
     *  0..n
     *  Telecommunications Supply Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExchangeRate($index)
    {
        return isset($this->exchangeRate[$index]);
    }

    /**
     * unset exchangeRate
     *
     * ASBIE
     *  Telecommunications Supply Line. Exchange Rate
     *  Exchanges rates used to calculate the amount for this line.
     *  0..n
     *  Telecommunications Supply Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExchangeRate($index)
    {
        unset($this->exchangeRate[$index]);
    }

    /**
     * Gets as exchangeRate
     *
     * ASBIE
     *  Telecommunications Supply Line. Exchange Rate
     *  Exchanges rates used to calculate the amount for this line.
     *  0..n
     *  Telecommunications Supply Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\RO\ExchangeRate[]
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Telecommunications Supply Line. Exchange Rate
     *  Exchanges rates used to calculate the amount for this line.
     *  0..n
     *  Telecommunications Supply Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\RO\ExchangeRate[] $exchangeRate
     * @return self
     */
    public function setExchangeRate(array $exchangeRate = null)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Telecommunications Supply Line. Allowance Charge
     *  An allowance or charge that applies to this telecommunication supply line.
     *  0..n
     *  Telecommunications Supply Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\CleverIt\UBL\Invoice\RO\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Telecommunications Supply Line. Allowance Charge
     *  An allowance or charge that applies to this telecommunication supply line.
     *  0..n
     *  Telecommunications Supply Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Telecommunications Supply Line. Allowance Charge
     *  An allowance or charge that applies to this telecommunication supply line.
     *  0..n
     *  Telecommunications Supply Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Telecommunications Supply Line. Allowance Charge
     *  An allowance or charge that applies to this telecommunication supply line.
     *  0..n
     *  Telecommunications Supply Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \CleverIt\UBL\Invoice\RO\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Telecommunications Supply Line. Allowance Charge
     *  An allowance or charge that applies to this telecommunication supply line.
     *  0..n
     *  Telecommunications Supply Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \CleverIt\UBL\Invoice\RO\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Telecommunications Supply Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\CleverIt\UBL\Invoice\RO\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Telecommunications Supply Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Telecommunications Supply Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Telecommunications Supply Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \CleverIt\UBL\Invoice\RO\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Telecommunications Supply Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications supply line
     *  0..n
     *  Telecommunications Supply Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \CleverIt\UBL\Invoice\RO\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as telecommunicationsService
     *
     * ASBIE
     *  Telecommunications Supply Line. Telecommunications Service
     *  A telecommunications service (e.g., a telephone call).
     *  1..n
     *  Telecommunications Supply Line
     *  Telecommunications Service
     *  Telecommunications Service
     *  Telecommunications Service
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\TelecommunicationsService $telecommunicationsService
     */
    public function addToTelecommunicationsService(\CleverIt\UBL\Invoice\RO\TelecommunicationsService $telecommunicationsService)
    {
        $this->telecommunicationsService[] = $telecommunicationsService;
        return $this;
    }

    /**
     * isset telecommunicationsService
     *
     * ASBIE
     *  Telecommunications Supply Line. Telecommunications Service
     *  A telecommunications service (e.g., a telephone call).
     *  1..n
     *  Telecommunications Supply Line
     *  Telecommunications Service
     *  Telecommunications Service
     *  Telecommunications Service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecommunicationsService($index)
    {
        return isset($this->telecommunicationsService[$index]);
    }

    /**
     * unset telecommunicationsService
     *
     * ASBIE
     *  Telecommunications Supply Line. Telecommunications Service
     *  A telecommunications service (e.g., a telephone call).
     *  1..n
     *  Telecommunications Supply Line
     *  Telecommunications Service
     *  Telecommunications Service
     *  Telecommunications Service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecommunicationsService($index)
    {
        unset($this->telecommunicationsService[$index]);
    }

    /**
     * Gets as telecommunicationsService
     *
     * ASBIE
     *  Telecommunications Supply Line. Telecommunications Service
     *  A telecommunications service (e.g., a telephone call).
     *  1..n
     *  Telecommunications Supply Line
     *  Telecommunications Service
     *  Telecommunications Service
     *  Telecommunications Service
     *
     * @return \CleverIt\UBL\Invoice\RO\TelecommunicationsService[]
     */
    public function getTelecommunicationsService()
    {
        return $this->telecommunicationsService;
    }

    /**
     * Sets a new telecommunicationsService
     *
     * ASBIE
     *  Telecommunications Supply Line. Telecommunications Service
     *  A telecommunications service (e.g., a telephone call).
     *  1..n
     *  Telecommunications Supply Line
     *  Telecommunications Service
     *  Telecommunications Service
     *  Telecommunications Service
     *
     * @param \CleverIt\UBL\Invoice\RO\TelecommunicationsService[] $telecommunicationsService
     * @return self
     */
    public function setTelecommunicationsService(array $telecommunicationsService)
    {
        $this->telecommunicationsService = $telecommunicationsService;
        return $this;
    }
}

