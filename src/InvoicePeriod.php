<?php


namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use DateTime;
use InvalidArgumentException;

class InvoicePeriod extends BaseInvoice implements XmlSerializable
{
    private $startDate;
    private $endDate;
    private $descriptionCode;

    /**
     * @return DateTime
     */
    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return InvoicePeriod
     */
    public function setStartDate(?DateTime $startDate): InvoicePeriod
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     * @return InvoicePeriod
     */
    public function setEndDate(?DateTime $endDate): InvoicePeriod
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDescriptionCode(): ?int
    {
        return $this->descriptionCode;
    }

    /**
     * @param ?int $descriptionCode
     * @return InvoicePeriod
     */
    public function setDescriptionCode(?int $descriptionCode): InvoicePeriod
    {
        $this->descriptionCode = $descriptionCode;
        return $this;
    }

    /**
     * The validate function that is called during xml writing to valid the data of the object.
     *
     * @throws InvalidArgumentException An error with information about required data that is missing to write the XML
     * @return void
     */
    public function validate()
    {
        if ($this->startDate === null && $this->endDate === null) {
            throw new \InvalidArgumentException('Missing startDate or endDate or descriptionCode');
        }
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        $this->validate();
        
        $this->setProps([
            Schema::CBC . 'StartDate' => $this->startDate->format('Y-m-d'),
            Schema::CBC . 'EndDate' => $this->endDate->format('Y-m-d'),
            Schema::CBC . 'DescriptionCode' => $this->descriptionCode,
        ]);
    
        $writer->write($this->getProps());
        
    }
}
