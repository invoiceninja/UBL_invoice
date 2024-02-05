<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing PostAwardProcessType
 *
 * ABIE
 *  Post Award Process. Details
 *  A class to describe a post award process. These processes following the agreement on a contract for supply of goods or services ( for example, after the awarding of a tender).
 *  Post Award Process
 * XSD Type: PostAwardProcessType
 */
class PostAwardProcessType
{

    /**
     * BBIE
     *  Post Award Process. Electronic Catalogue Usage. Indicator
     *  An indicator to specify whether an electronic catalogue will be used during the post award phase.
     *  0..1
     *  Post Award Process
     *  Electronic Catalogue Usage
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $electronicCatalogueUsageIndicator
     */
    private $electronicCatalogueUsageIndicator = null;

    /**
     * BBIE
     *  Post Award Process. Electronic Invoice Accepted. Indicator
     *  An indicator on whether the electronic invoice is allowed for this process.
     *  0..1
     *  Post Award Process
     *  Electronic Invoice Accepted
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $electronicInvoiceAcceptedIndicator
     */
    private $electronicInvoiceAcceptedIndicator = null;

    /**
     * BBIE
     *  Post Award Process. Electronic Order Usage. Indicator
     *  An indicator on whether electronic ordering shall be used in the post award process.
     *  0..1
     *  Post Award Process
     *  Electronic Order Usage
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $electronicOrderUsageIndicator
     */
    private $electronicOrderUsageIndicator = null;

    /**
     * BBIE
     *  Post Award Process. Electronic Payment Usage. Indicator
     *  An indicator on whether electronic payment shall be used in the post award process.
     *  0..n
     *  Post Award Process
     *  Electronic Payment Usage
     *  Indicator
     *  Indicator. Type
     *
     * @var bool[] $electronicPaymentUsageIndicator
     */
    private $electronicPaymentUsageIndicator = [
        
    ];

    /**
     * Gets as electronicCatalogueUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Catalogue Usage. Indicator
     *  An indicator to specify whether an electronic catalogue will be used during the post award phase.
     *  0..1
     *  Post Award Process
     *  Electronic Catalogue Usage
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getElectronicCatalogueUsageIndicator()
    {
        return $this->electronicCatalogueUsageIndicator;
    }

    /**
     * Sets a new electronicCatalogueUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Catalogue Usage. Indicator
     *  An indicator to specify whether an electronic catalogue will be used during the post award phase.
     *  0..1
     *  Post Award Process
     *  Electronic Catalogue Usage
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $electronicCatalogueUsageIndicator
     * @return self
     */
    public function setElectronicCatalogueUsageIndicator($electronicCatalogueUsageIndicator)
    {
        $this->electronicCatalogueUsageIndicator = $electronicCatalogueUsageIndicator;
        return $this;
    }

    /**
     * Gets as electronicInvoiceAcceptedIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Invoice Accepted. Indicator
     *  An indicator on whether the electronic invoice is allowed for this process.
     *  0..1
     *  Post Award Process
     *  Electronic Invoice Accepted
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getElectronicInvoiceAcceptedIndicator()
    {
        return $this->electronicInvoiceAcceptedIndicator;
    }

    /**
     * Sets a new electronicInvoiceAcceptedIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Invoice Accepted. Indicator
     *  An indicator on whether the electronic invoice is allowed for this process.
     *  0..1
     *  Post Award Process
     *  Electronic Invoice Accepted
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $electronicInvoiceAcceptedIndicator
     * @return self
     */
    public function setElectronicInvoiceAcceptedIndicator($electronicInvoiceAcceptedIndicator)
    {
        $this->electronicInvoiceAcceptedIndicator = $electronicInvoiceAcceptedIndicator;
        return $this;
    }

    /**
     * Gets as electronicOrderUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Order Usage. Indicator
     *  An indicator on whether electronic ordering shall be used in the post award process.
     *  0..1
     *  Post Award Process
     *  Electronic Order Usage
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getElectronicOrderUsageIndicator()
    {
        return $this->electronicOrderUsageIndicator;
    }

    /**
     * Sets a new electronicOrderUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Order Usage. Indicator
     *  An indicator on whether electronic ordering shall be used in the post award process.
     *  0..1
     *  Post Award Process
     *  Electronic Order Usage
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $electronicOrderUsageIndicator
     * @return self
     */
    public function setElectronicOrderUsageIndicator($electronicOrderUsageIndicator)
    {
        $this->electronicOrderUsageIndicator = $electronicOrderUsageIndicator;
        return $this;
    }

    /**
     * Adds as electronicPaymentUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Payment Usage. Indicator
     *  An indicator on whether electronic payment shall be used in the post award process.
     *  0..n
     *  Post Award Process
     *  Electronic Payment Usage
     *  Indicator
     *  Indicator. Type
     *
     * @return self
     * @param bool $electronicPaymentUsageIndicator
     */
    public function addToElectronicPaymentUsageIndicator($electronicPaymentUsageIndicator)
    {
        $this->electronicPaymentUsageIndicator[] = $electronicPaymentUsageIndicator;
        return $this;
    }

    /**
     * isset electronicPaymentUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Payment Usage. Indicator
     *  An indicator on whether electronic payment shall be used in the post award process.
     *  0..n
     *  Post Award Process
     *  Electronic Payment Usage
     *  Indicator
     *  Indicator. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElectronicPaymentUsageIndicator($index)
    {
        return isset($this->electronicPaymentUsageIndicator[$index]);
    }

    /**
     * unset electronicPaymentUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Payment Usage. Indicator
     *  An indicator on whether electronic payment shall be used in the post award process.
     *  0..n
     *  Post Award Process
     *  Electronic Payment Usage
     *  Indicator
     *  Indicator. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElectronicPaymentUsageIndicator($index)
    {
        unset($this->electronicPaymentUsageIndicator[$index]);
    }

    /**
     * Gets as electronicPaymentUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Payment Usage. Indicator
     *  An indicator on whether electronic payment shall be used in the post award process.
     *  0..n
     *  Post Award Process
     *  Electronic Payment Usage
     *  Indicator
     *  Indicator. Type
     *
     * @return bool[]
     */
    public function getElectronicPaymentUsageIndicator()
    {
        return $this->electronicPaymentUsageIndicator;
    }

    /**
     * Sets a new electronicPaymentUsageIndicator
     *
     * BBIE
     *  Post Award Process. Electronic Payment Usage. Indicator
     *  An indicator on whether electronic payment shall be used in the post award process.
     *  0..n
     *  Post Award Process
     *  Electronic Payment Usage
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $electronicPaymentUsageIndicator
     * @return self
     */
    public function setElectronicPaymentUsageIndicator(array $electronicPaymentUsageIndicator)
    {
        $this->electronicPaymentUsageIndicator = $electronicPaymentUsageIndicator;
        return $this;
    }


}

