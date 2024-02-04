<?php
/**
 * Created by StefAlx.
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class PaymentMeans  extends BaseInvoice implements XmlSerializable {
    private $paymentMeansCode;
    private $payeeFinancialAccount;


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
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    function xmlSerialize(Writer $writer): void {
        $writer->write([
            Schema::CBC.'PaymentMeansCode' => $this->paymentMeansCode,
            Schema::CAC.'PayeeFinancialAccount' => $this->payeeFinancialAccount
            ]

        );
    }
}