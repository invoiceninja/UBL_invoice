<?php
/**
 * Created by StefAlx.
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class PaymentMeans  extends BaseInvoice implements XmlSerializable {
    private $paymentMeansCode = '31';
    private $payeeFinancialAccount;
    
    private $paymentMeansCodeAttributes = [
        'listID' => 'UN/ECE 4461',
        'listName' => 'Payment Means',
        'listURI' => 'http://docs.oasis-open.org/ubl/os-UBL-2.0-update/cl/gc/default/PaymentMeansCode-2.0.gc'];
    private $paymentDueDate;
    private $instructionId;
    private $instructionNote;
    private $paymentId;

    /**
     * @return mixed
     */
    public function getPaymentMeansCode() {
        return $this->paymentMeansCode;
    }

    /**
     * @param mixed $paymentMeansCode
     * @return PaymentMeans
     */
    public function setPaymentMeansCode($paymentMeansCode) {
        $this->paymentMeansCode = $paymentMeansCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayeeFinancialAccount() {
        return $this->payeeFinancialAccount;
    }

    /**
     * @param mixed $payeeFinancialAccount
     * @return PaymentMeans
     */
    public function setPayeeFinancialAccount($payeeFinancialAccount) {
        $this->payeeFinancialAccount = $payeeFinancialAccount;
        return $this;
    }


    /**
     * Get the value of paymentMeansCodeAttributes
     */ 
    public function getPaymentMeansCodeAttributes()
    {
        return $this->paymentMeansCodeAttributes;
    }

    /**
     * Set the value of paymentMeansCodeAttributes
     *
     * @return  self
     */ 
    public function setPaymentMeansCodeAttributes($paymentMeansCodeAttributes)
    {
        $this->paymentMeansCodeAttributes = $paymentMeansCodeAttributes;

        return $this;
    }

    /**
     * Get the value of paymentDueDate
     */ 
    public function getPaymentDueDate(): ?\DateTime
    {
        return $this->paymentDueDate ? $this->paymentDueDate->format('Y-m-d') : null;
    }

    /**
     * Set the value of paymentDueDate
     *
     * @return  self
     */ 
    public function setPaymentDueDate($paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;

        return $this;
    }

    /**
     * Get the value of instructionId
     */ 
    public function getInstructionId()
    {
        return $this->instructionId;
    }

    /**
     * Set the value of instructionId
     *
     * @return  self
     */ 
    public function setInstructionId($instructionId)
    {
        $this->instructionId = $instructionId;

        return $this;
    }

    /**
     * Get the value of instructionNote
     */ 
    public function getInstructionNote()
    {
        return $this->instructionNote;
    }

    /**
     * Set the value of instructionNote
     *
     * @return  self
     */ 
    public function setInstructionNote($instructionNote)
    {
        $this->instructionNote = $instructionNote;

        return $this;
    }

    /**
     * Get the value of paymentId
     */ 
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Set the value of paymentId
     *
     * @return  self
     */ 
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;

        return $this;
    }


    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {
        $this->setProps([
            [
                 'name' => Schema::CBC . 'PaymentMeansCode',
                 'value' => $this->paymentMeansCode,
                 'attributes' => $this->paymentMeansCodeAttributes
            ],
            // Schema::CBC.'PaymentMeansCode' => $this->paymentMeansCode,
            Schema::CAC.'PayeeFinancialAccount' => $this->payeeFinancialAccount,
            Schema::CBC . 'PaymentDueDate' => $this->getPaymentDueDate(),
            Schema::CBC . 'InstructionID' => $this->getInstructionId(),
            Schema::CBC . 'InstructionNote' => $this->getInstructionNote(),
            Schema::CBC . 'PaymentID' => $this->getPaymentId(),
            ]

        );

        $writer->write($this->getProps());
    }

}