<?php
/**
 * Created by PhpStorm.
 * User: baselbers
 * Date: 26-10-2017
 * Time: 20:28
 */

namespace CleverIt\UBL\Invoice;


use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class AdditionalDocumentReference extends BaseInvoice implements XmlSerializable {
	private $id;
	private $attachment;
	private $filename;
    private $documentType;
    private $documentTypeCode;
    private $documentDescription;

    
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 * @return AdditionalDocumentReference
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

    /**
     * @return mixed
     */
    public function getAttachment() {
        return $this->attachment;
    }

    /**
     * @param $attachment
     * @return AdditionalDocumentReference
     */
    public function setAttachment($attachment) {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilename() {
        return $this->filename;
    }

    /**
     * @param $filename
     * @return AdditionalDocumentReference
     */
    public function setFilename($filename) {
        $this->filename= $filename;
        return $this;
    }

	function xmlSerialize(Writer $writer): void {

        $this->setProps([
			Schema::CBC.'ID' => $this->id,
            Schema::CAC.'Attachment' =>[
                [
                'name' => Schema::CBC . 'EmbeddedDocumentBinaryObject',
                'value' => $this->attachment,
                'attributes' => [
                    'mimeCode' => "application/pdf",
                    'filename' => $this->filename
                ]]
            ],
            Schema::CBC . 'DocumentType' => $this->documentType,
            Schema::CBC . 'DocumentTypeCode' => $this->documentTypeCode,
            Schema::CBC . 'DocumentDescription' => $this->documentDescription,
        ]);
        
		$writer->write($this->getProps());
	}

    /**
     * Get the value of documentDescription
     */ 
    public function getDocumentDescription()
    {
        return $this->documentDescription;
    }

    /**
     * Set the value of documentDescription
     *
     * @return  self
     */ 
    public function setDocumentDescription($documentDescription)
    {
        $this->documentDescription = $documentDescription;

        return $this;
    }

    /**
     * Get the value of documentTypeCode
     */ 
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Set the value of documentTypeCode
     *
     * @return  self
     */ 
    public function setDocumentTypeCode($documentTypeCode)
    {
        $this->documentTypeCode = $documentTypeCode;

        return $this;
    }

    /**
     * Get the value of documentType
     */ 
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Set the value of documentType
     *
     * @return  self
     */ 
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;

        return $this;
    }
}
