<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

use InvalidArgumentException;

class Attachment extends BaseInvoice implements XmlSerializable
{
    private $filePath;
    private $externalReference;

    /**
     * @throws Exception exception when the mime type cannot be determined
     * @return string
     */
    public function getFileMimeType(): string
    {
        if (($mime_type = mime_content_type($this->filePath)) !== false) {
            return $mime_type;
        }

        throw new \Exception('Could not determine mime_type of ' . $this->filePath);
    }

    /**
     * @return string
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     * @return Attachment
     */
    public function setFilePath(string $filePath): Attachment
    {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    /**
     * @param string $externalReference
     * @return Attachment
     */
    public function setExternalReference(string $externalReference): Attachment
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    /**
     * @throws InvalidArgumentException 
     * @return void
     */
    public function validate()
    {
        if ($this->filePath === null && $this->externalReference === null) {
            throw new InvalidArgumentException('Attachment must have a filePath');
        }

        if ($this->filePath !== null && !file_exists($this->filePath)) {
            throw new InvalidArgumentException('Attachment at filePath does not exist');
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

        $fileContents = base64_encode(file_get_contents($this->filePath));
        $mimeType = $this->getFileMimeType();

        $this->setProps([
                'name' => Schema::CBC . 'EmbeddedDocumentBinaryObject',
                'value' => $fileContents,
                'attributes' => [
                    'mimeCode' => $mimeType,
                    'filename' => basename($this->filePath)
                ],
                Schema::CAC . 'ExternalReference',
                [ Schema::CBC . 'URI' => $this->externalReference ]
        ]);

        $writer->write($this->getProps());

    }
}