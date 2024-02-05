<?php

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class PartyTaxScheme  extends BaseInvoice implements XmlSerializable {

    private $registrationName;
    private $companyId;
    private $taxScheme;

    /**
     * @return string
     */
    public function getRegistrationName(): ?string
    {
        return $this->registrationName;
    }

    /**
     * @param string $registrationName
     * @return self
     */
    public function setRegistrationName($registrationName): self
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    /**
     * @param string $companyId
     * @return self
     */
    public function setCompanyId($companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @param TaxScheme $taxScheme.
     * @return mixed
     */
    public function getTaxScheme(): ?TaxScheme
    {
        return $this->taxScheme;
    }

    /**
     * @param TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(TaxScheme $taxScheme): self
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }

    /**
     * The validate function that is called during xml writing to valid the data of the object.
     *
     * @return void
     * @throws InvalidArgumentException An error with information about required data that is missing to write the XML
     */
    public function validate()
    {
        if ($this->taxScheme === null) {
            throw new \InvalidArgumentException('Missing TaxScheme');
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
        $this->setProps([
                Schema::CBC . 'RegistrationName' => $this->registrationName,
                Schema::CAC . 'TaxScheme' => $this->taxScheme,
                Schema::CBC . 'CompanyID' => $this->companyId,
            ]);
        
        $writer->write($this->getProps());
    }
}
