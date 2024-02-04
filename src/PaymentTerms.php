<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class PaymentTerms extends BaseInvoice implements XmlSerializable
{
    private $note;
    private $settlementDiscountPercent;
    private $amount;
    private $settlementPeriod;

    /**
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return float
     */
    public function getSettlementDiscountPercent(): ?float
    {
        return $this->settlementDiscountPercent;
    }

    /**
     * @param float $settlementDiscountPercent
     * @return self
     */
    public function setSettlementDiscountPercent(?float $settlementDiscountPercent): self
    {
        $this->settlementDiscountPercent = $settlementDiscountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 
     */
    public function getSettlementPeriod()
    {
        return $this->settlementPeriod;
    }

    /**
     * @param $settlementPeriod
     * @return self
     */
    public function setSettlementPeriod($settlementPeriod): self
    {
        $this->settlementPeriod = $settlementPeriod;
        return $this;
    }

    public function xmlSerialize(Writer $writer): void
    {
        $this->setProps([ 
            Schema::CBC . 'Note' => $this->note,
            Schema::CBC . 'SettlementDiscountPercent' => $this->settlementDiscountPercent,
            [
                'name' => Schema::CBC . 'Amount',
                'value' => number_format($this->amount ?? 0, 2, '.', ''),
                'attributes' => [
                    'currencyID' => Generator::$currencyID
                ]
            ],
            Schema::CAC . 'SettlementPeriod' => $this->settlementPeriod,
        ]);
        
        $writer->write($this->getProps());
    }
}
