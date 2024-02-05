<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing DocumentDistributionType
 *
 * ABIE
 *  Document Distribution. Details
 *  A class to describe the distribution of a document to an interested party.
 *  Document Distribution
 * XSD Type: DocumentDistributionType
 */
class DocumentDistributionType
{

    /**
     * BBIE
     *  Document Distribution. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Distribution
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party's distribution rights.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\PrintQualifier $printQualifier
     */
    private $printQualifier = null;

    /**
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumCopiesNumeric $maximumCopiesNumeric
     */
    private $maximumCopiesNumeric = null;

    /**
     * BBIE
     *  Document Distribution. Maximum_ Originals. Numeric
     *  The maximum number of printed originals of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Originals
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\MaximumOriginalsNumeric $maximumOriginalsNumeric
     */
    private $maximumOriginalsNumeric = null;

    /**
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\Party $party
     */
    private $party = null;

    /**
     * Gets as documentTypeCode
     *
     * BBIE
     *  Document Distribution. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Distribution
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * BBIE
     *  Document Distribution. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Distribution
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(\CleverIt\UBL\Invoice\DocumentTypeCode $documentTypeCode)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }

    /**
     * Gets as printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party's distribution rights.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\PrintQualifier
     */
    public function getPrintQualifier()
    {
        return $this->printQualifier;
    }

    /**
     * Sets a new printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party's distribution rights.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\PrintQualifier $printQualifier
     * @return self
     */
    public function setPrintQualifier(\CleverIt\UBL\Invoice\PrintQualifier $printQualifier)
    {
        $this->printQualifier = $printQualifier;
        return $this;
    }

    /**
     * Gets as maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumCopiesNumeric
     */
    public function getMaximumCopiesNumeric()
    {
        return $this->maximumCopiesNumeric;
    }

    /**
     * Sets a new maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumCopiesNumeric $maximumCopiesNumeric
     * @return self
     */
    public function setMaximumCopiesNumeric(\CleverIt\UBL\Invoice\MaximumCopiesNumeric $maximumCopiesNumeric)
    {
        $this->maximumCopiesNumeric = $maximumCopiesNumeric;
        return $this;
    }

    /**
     * Gets as maximumOriginalsNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Originals. Numeric
     *  The maximum number of printed originals of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Originals
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\MaximumOriginalsNumeric
     */
    public function getMaximumOriginalsNumeric()
    {
        return $this->maximumOriginalsNumeric;
    }

    /**
     * Sets a new maximumOriginalsNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Originals. Numeric
     *  The maximum number of printed originals of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Originals
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\MaximumOriginalsNumeric $maximumOriginalsNumeric
     * @return self
     */
    public function setMaximumOriginalsNumeric(\CleverIt\UBL\Invoice\MaximumOriginalsNumeric $maximumOriginalsNumeric)
    {
        $this->maximumOriginalsNumeric = $maximumOriginalsNumeric;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\Party $party
     * @return self
     */
    public function setParty(\CleverIt\UBL\Invoice\Party $party)
    {
        $this->party = $party;
        return $this;
    }


}

