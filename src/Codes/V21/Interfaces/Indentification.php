<?php

namespace CleverIt\UBL\Invoice\Codes\V21\Interfaces;

class Identification
{
    public string $shortName;
    /** @var string[] */
    public array $longName;
    public string $version;
    public string $canonicalUri;
    public string $canonicalVersionUri;
    public string $locationUri;
    public Agency $agency;

    /**
     * @param string[] $longName
     */
    public function __construct(
        string $shortName,
        array $longName,
        string $version,
        string $canonicalUri,
        string $canonicalVersionUri,
        string $locationUri,
        Agency $agency
    ) {
        $this->shortName = $shortName;
        $this->longName = $longName;
        $this->version = $version;
        $this->canonicalUri = $canonicalUri;
        $this->canonicalVersionUri = $canonicalVersionUri;
        $this->locationUri = $locationUri;
        $this->agency = $agency;
    }
}
