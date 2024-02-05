<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class OrderReference  extends BaseInvoice implements XmlSerializable {
    private $id;
    private $salesOrderId;
    private $issueDate;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesOrderId(): string
    {
        return $this->salesOrderId;
    }

    /**
     * @return ?string
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate ? $this->issueDate->format('Y-m-d') :  null;
    }

    /**
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate): self
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * @param string $salesOrderId
     * @return OrderReference
     */
    public function setSalesOrderId(string $salesOrderId): OrderReference
    {
        $this->salesOrderId = $salesOrderId;
        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        
            $this->setProps([
                Schema::CBC . 'ID' => $this->id,
                Schema::CBC . 'SalesOrderID' => $this->salesOrderId,
                Schema::CBC . 'IssueDate' => $this->getIssueDate(),
            ]);
            
        $writer->write($this->getProps());
        
    }
}