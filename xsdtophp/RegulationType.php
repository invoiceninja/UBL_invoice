<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing RegulationType
 *
 * ABIE
 *  Regulation. Details
 *  A class to describe a regulation.
 *  Regulation
 *  Points to regulation at atomic level
 * XSD Type: RegulationType
 */
class RegulationType
{

    /**
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @var \CleverIt\UBL\Invoice\LegalReference $legalReference
     */
    private $legalReference = null;

    /**
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\OntologyURI $ontologyURI
     */
    private $ontologyURI = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \CleverIt\UBL\Invoice\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \CleverIt\UBL\Invoice\Name $name
     * @return self
     */
    public function setName(\CleverIt\UBL\Invoice\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @return \CleverIt\UBL\Invoice\LegalReference
     */
    public function getLegalReference()
    {
        return $this->legalReference;
    }

    /**
     * Sets a new legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @param \CleverIt\UBL\Invoice\LegalReference $legalReference
     * @return self
     */
    public function setLegalReference(\CleverIt\UBL\Invoice\LegalReference $legalReference)
    {
        $this->legalReference = $legalReference;
        return $this;
    }

    /**
     * Gets as ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\OntologyURI
     */
    public function getOntologyURI()
    {
        return $this->ontologyURI;
    }

    /**
     * Sets a new ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\OntologyURI $ontologyURI
     * @return self
     */
    public function setOntologyURI(\CleverIt\UBL\Invoice\OntologyURI $ontologyURI)
    {
        $this->ontologyURI = $ontologyURI;
        return $this;
    }


}

