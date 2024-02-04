<?php

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class BaseInvoice implements XmlSerializable
{    
    /** @var array $props */
    private array $props = [];
    
    /**
     * Set the props to be written
     *
     * @param  array $props
     * @return self
     */
    public function setProps(array $props): self {

        $this->props = $this->filterProps($props);

        return $this;
    }
    
    /**
     * Get the props
     *
     * @return array
     */
    public function getProps(): array {
        return $this->props;
    }
    
    /**
     * Filters the array of props
     * and only return items in the array that have
     * been set
     *
     * @param  array $mutable_props
     * @return array
     */
    private function filterProps(array $mutable_props): array {

        return $this->array_filter_recursive($mutable_props);

    }
    
    /**
     * Filters all null props out of array
     *
     * @param  array $input
     * @return array
     */
    private function array_filter_recursive($input): array
    {
        foreach ($input as &$value) {
            if (is_array($value)) {
                $value = $this->array_filter_recursive($value);
            }
        }
        return array_filter($input);
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
    }
}
