<?php

namespace CleverIt\UBL\Invoice;

/**
 * Class representing ItemType
 *
 * ABIE
 *  Item. Details
 *  A class to describe an item of trade. It includes a generic description applicable to all examples of the item together with optional subsidiary descriptions of any number of actual instances of the type.
 *  Item
 *  article, product, goods item
 * XSD Type: ItemType
 */
class ItemType
{

    /**
     * BBIE
     *  Item. Description. Text
     *  Text describing this item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Item. Pack Quantity. Quantity
     *  The unit packaging quantity; the number of subunits making up this item.
     *  0..1
     *  Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \CleverIt\UBL\Invoice\PackQuantity $packQuantity
     */
    private $packQuantity = null;

    /**
     * BBIE
     *  Item. Pack Size. Numeric
     *  The number of items in a pack of this item.
     *  0..1
     *  Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @var \CleverIt\UBL\Invoice\PackSizeNumeric $packSizeNumeric
     */
    private $packSizeNumeric = null;

    /**
     * BBIE
     *  Item. Catalogue_ Indicator. Indicator
     *  An indicator that this item was ordered from a catalogue (true) or not (false).
     *  0..1
     *  Item
     *  Catalogue
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $catalogueIndicator
     */
    private $catalogueIndicator = null;

    /**
     * BBIE
     *  Item. Name
     *  A short name optionally given to this item, such as a name from a catalogue, as distinct from a description.
     *  0..1
     *  Item
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \CleverIt\UBL\Invoice\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported item, as delivered, is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * BBIE
     *  Item. Additional_ Information. Text
     *  Further details regarding this item (e.g., the URL of a relevant web page).
     *  0..n
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\AdditionalInformation[] $additionalInformation
     */
    private $additionalInformation = [
        
    ];

    /**
     * BBIE
     *  Item. Keyword. Text
     *  A keyword (search string) for this item, assigned by the seller party. Can also be a synonym for the name of the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\Keyword[] $keyword
     */
    private $keyword = [
        
    ];

    /**
     * BBIE
     *  Item. Brand Name. Name
     *  A brand name of this item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @var \CleverIt\UBL\Invoice\BrandName[] $brandName
     */
    private $brandName = [
        
    ];

    /**
     * BBIE
     *  Item. Model Name. Name
     *  A model name of this item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  VW Beetle
     *
     * @var \CleverIt\UBL\Invoice\ModelName[] $modelName
     */
    private $modelName = [
        
    ];

    /**
     * ASBIE
     *  Item. Buyers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the buyer.
     *  0..1
     *  Item
     *  Buyers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @var \CleverIt\UBL\Invoice\BuyersItemIdentification $buyersItemIdentification
     */
    private $buyersItemIdentification = null;

    /**
     * ASBIE
     *  Item. Sellers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the seller.
     *  0..1
     *  Item
     *  Sellers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @var \CleverIt\UBL\Invoice\SellersItemIdentification $sellersItemIdentification
     */
    private $sellersItemIdentification = null;

    /**
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the manufacturer.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @var \CleverIt\UBL\Invoice\ManufacturersItemIdentification[] $manufacturersItemIdentification
     */
    private $manufacturersItemIdentification = [
        
    ];

    /**
     * ASBIE
     *  Item. Standard_ Item Identification. Item Identification
     *  Identifying information for this item, assigned according to a standard system.
     *  0..1
     *  Item
     *  Standard
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @var \CleverIt\UBL\Invoice\StandardItemIdentification $standardItemIdentification
     */
    private $standardItemIdentification = null;

    /**
     * ASBIE
     *  Item. Catalogue_ Item Identification. Item Identification
     *  Identifying information for this item, assigned according to a cataloguing system.
     *  0..1
     *  Item
     *  Catalogue
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @var \CleverIt\UBL\Invoice\CatalogueItemIdentification $catalogueItemIdentification
     */
    private $catalogueItemIdentification = null;

    /**
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  An additional identifier for this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @var \CleverIt\UBL\Invoice\AdditionalItemIdentification[] $additionalItemIdentification
     */
    private $additionalItemIdentification = [
        
    ];

    /**
     * ASBIE
     *  Item. Catalogue_ Document Reference. Document Reference
     *  A reference to the catalogue in which this item appears.
     *  0..1
     *  Item
     *  Catalogue
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\CatalogueDocumentReference $catalogueDocumentReference
     */
    private $catalogueDocumentReference = null;

    /**
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  A reference to a specification document for this item.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \CleverIt\UBL\Invoice\ItemSpecificationDocumentReference[] $itemSpecificationDocumentReference
     */
    private $itemSpecificationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Item. Origin_ Country. Country
     *  The country of origin of this item.
     *  0..1
     *  Item
     *  Origin
     *  Country
     *  Country
     *  Country
     *
     * @var \CleverIt\UBL\Invoice\OriginCountry $originCountry
     */
    private $originCountry = null;

    /**
     * ASBIE
     *  Item. Commodity Classification
     *  A classification of this item according to a specific system for classifying commodities.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \CleverIt\UBL\Invoice\CommodityClassification[] $commodityClassification
     */
    private $commodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Item. Transaction Conditions
     *  A set of sales conditions applying to this item.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @var \CleverIt\UBL\Invoice\TransactionConditions[] $transactionConditions
     */
    private $transactionConditions = [
        
    ];

    /**
     * ASBIE
     *  Item. Hazardous Item
     *  Information pertaining to this item as a hazardous item.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @var \CleverIt\UBL\Invoice\HazardousItem[] $hazardousItem
     */
    private $hazardousItem = [
        
    ];

    /**
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  A tax category applicable to this item.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \CleverIt\UBL\Invoice\ClassifiedTaxCategory[] $classifiedTaxCategory
     */
    private $classifiedTaxCategory = [
        
    ];

    /**
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  An additional property of this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @var \CleverIt\UBL\Invoice\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  The manufacturer of this item.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\ManufacturerParty[] $manufacturerParty
     */
    private $manufacturerParty = [
        
    ];

    /**
     * ASBIE
     *  Item. Information Content Provider_ Party. Party
     *  The party responsible for specification of this item.
     *  0..1
     *  Item
     *  Information Content Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\InformationContentProviderParty $informationContentProviderParty
     */
    private $informationContentProviderParty = null;

    /**
     * ASBIE
     *  Item. Origin_ Address. Address
     *  A region (not country) of origin of this item.
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @var \CleverIt\UBL\Invoice\OriginAddress[] $originAddress
     */
    private $originAddress = [
        
    ];

    /**
     * ASBIE
     *  Item. Item Instance
     *  A trackable, unique instantiation of this item.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *  Item Instance
     *
     * @var \CleverIt\UBL\Invoice\ItemInstance[] $itemInstance
     */
    private $itemInstance = [
        
    ];

    /**
     * ASBIE
     *  Item. Certificate
     *  A certificate associated with this item.
     *  0..n
     *  Item
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @var \CleverIt\UBL\Invoice\Certificate[] $certificate
     */
    private $certificate = [
        
    ];

    /**
     * ASBIE
     *  Item. Dimension
     *  One of the measurable dimensions (length, mass, weight, or volume) of this item.
     *  0..n
     *  Item
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \CleverIt\UBL\Invoice\Dimension[] $dimension
     */
    private $dimension = [
        
    ];

    /**
     * Adds as description
     *
     * BBIE
     *  Item. Description. Text
     *  Text describing this item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Item. Description. Text
     *  Text describing this item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Item. Description. Text
     *  Text describing this item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Item. Description. Text
     *  Text describing this item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Item. Description. Text
     *  Text describing this item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as packQuantity
     *
     * BBIE
     *  Item. Pack Quantity. Quantity
     *  The unit packaging quantity; the number of subunits making up this item.
     *  0..1
     *  Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \CleverIt\UBL\Invoice\PackQuantity
     */
    public function getPackQuantity()
    {
        return $this->packQuantity;
    }

    /**
     * Sets a new packQuantity
     *
     * BBIE
     *  Item. Pack Quantity. Quantity
     *  The unit packaging quantity; the number of subunits making up this item.
     *  0..1
     *  Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \CleverIt\UBL\Invoice\PackQuantity $packQuantity
     * @return self
     */
    public function setPackQuantity(\CleverIt\UBL\Invoice\PackQuantity $packQuantity)
    {
        $this->packQuantity = $packQuantity;
        return $this;
    }

    /**
     * Gets as packSizeNumeric
     *
     * BBIE
     *  Item. Pack Size. Numeric
     *  The number of items in a pack of this item.
     *  0..1
     *  Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @return \CleverIt\UBL\Invoice\PackSizeNumeric
     */
    public function getPackSizeNumeric()
    {
        return $this->packSizeNumeric;
    }

    /**
     * Sets a new packSizeNumeric
     *
     * BBIE
     *  Item. Pack Size. Numeric
     *  The number of items in a pack of this item.
     *  0..1
     *  Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @param \CleverIt\UBL\Invoice\PackSizeNumeric $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric(\CleverIt\UBL\Invoice\PackSizeNumeric $packSizeNumeric)
    {
        $this->packSizeNumeric = $packSizeNumeric;
        return $this;
    }

    /**
     * Gets as catalogueIndicator
     *
     * BBIE
     *  Item. Catalogue_ Indicator. Indicator
     *  An indicator that this item was ordered from a catalogue (true) or not (false).
     *  0..1
     *  Item
     *  Catalogue
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCatalogueIndicator()
    {
        return $this->catalogueIndicator;
    }

    /**
     * Sets a new catalogueIndicator
     *
     * BBIE
     *  Item. Catalogue_ Indicator. Indicator
     *  An indicator that this item was ordered from a catalogue (true) or not (false).
     *  0..1
     *  Item
     *  Catalogue
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $catalogueIndicator
     * @return self
     */
    public function setCatalogueIndicator($catalogueIndicator)
    {
        $this->catalogueIndicator = $catalogueIndicator;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Item. Name
     *  A short name optionally given to this item, such as a name from a catalogue, as distinct from a description.
     *  0..1
     *  Item
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
     *  Item. Name
     *  A short name optionally given to this item, such as a name from a catalogue, as distinct from a description.
     *  0..1
     *  Item
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
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Item. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported item, as delivered, is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Item. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported item, as delivered, is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Adds as additionalInformation
     *
     * BBIE
     *  Item. Additional_ Information. Text
     *  Further details regarding this item (e.g., the URL of a relevant web page).
     *  0..n
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\AdditionalInformation $additionalInformation
     */
    public function addToAdditionalInformation(\CleverIt\UBL\Invoice\AdditionalInformation $additionalInformation)
    {
        $this->additionalInformation[] = $additionalInformation;
        return $this;
    }

    /**
     * isset additionalInformation
     *
     * BBIE
     *  Item. Additional_ Information. Text
     *  Further details regarding this item (e.g., the URL of a relevant web page).
     *  0..n
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInformation($index)
    {
        return isset($this->additionalInformation[$index]);
    }

    /**
     * unset additionalInformation
     *
     * BBIE
     *  Item. Additional_ Information. Text
     *  Further details regarding this item (e.g., the URL of a relevant web page).
     *  0..n
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInformation($index)
    {
        unset($this->additionalInformation[$index]);
    }

    /**
     * Gets as additionalInformation
     *
     * BBIE
     *  Item. Additional_ Information. Text
     *  Further details regarding this item (e.g., the URL of a relevant web page).
     *  0..n
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\AdditionalInformation[]
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * BBIE
     *  Item. Additional_ Information. Text
     *  Further details regarding this item (e.g., the URL of a relevant web page).
     *  0..n
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\AdditionalInformation[] $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(array $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Adds as keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A keyword (search string) for this item, assigned by the seller party. Can also be a synonym for the name of the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Keyword $keyword
     */
    public function addToKeyword(\CleverIt\UBL\Invoice\Keyword $keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * isset keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A keyword (search string) for this item, assigned by the seller party. Can also be a synonym for the name of the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyword($index)
    {
        return isset($this->keyword[$index]);
    }

    /**
     * unset keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A keyword (search string) for this item, assigned by the seller party. Can also be a synonym for the name of the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyword($index)
    {
        unset($this->keyword[$index]);
    }

    /**
     * Gets as keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A keyword (search string) for this item, assigned by the seller party. Can also be a synonym for the name of the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\Keyword[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A keyword (search string) for this item, assigned by the seller party. Can also be a synonym for the name of the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\Keyword[] $keyword
     * @return self
     */
    public function setKeyword(array $keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Adds as brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  A brand name of this item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\BrandName $brandName
     */
    public function addToBrandName(\CleverIt\UBL\Invoice\BrandName $brandName)
    {
        $this->brandName[] = $brandName;
        return $this;
    }

    /**
     * isset brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  A brand name of this item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrandName($index)
    {
        return isset($this->brandName[$index]);
    }

    /**
     * unset brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  A brand name of this item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrandName($index)
    {
        unset($this->brandName[$index]);
    }

    /**
     * Gets as brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  A brand name of this item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @return \CleverIt\UBL\Invoice\BrandName[]
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  A brand name of this item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @param \CleverIt\UBL\Invoice\BrandName[] $brandName
     * @return self
     */
    public function setBrandName(array $brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Adds as modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  A model name of this item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  VW Beetle
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ModelName $modelName
     */
    public function addToModelName(\CleverIt\UBL\Invoice\ModelName $modelName)
    {
        $this->modelName[] = $modelName;
        return $this;
    }

    /**
     * isset modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  A model name of this item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  VW Beetle
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModelName($index)
    {
        return isset($this->modelName[$index]);
    }

    /**
     * unset modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  A model name of this item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  VW Beetle
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModelName($index)
    {
        unset($this->modelName[$index]);
    }

    /**
     * Gets as modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  A model name of this item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  VW Beetle
     *
     * @return \CleverIt\UBL\Invoice\ModelName[]
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Sets a new modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  A model name of this item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  VW Beetle
     *
     * @param \CleverIt\UBL\Invoice\ModelName[] $modelName
     * @return self
     */
    public function setModelName(array $modelName)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * Gets as buyersItemIdentification
     *
     * ASBIE
     *  Item. Buyers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the buyer.
     *  0..1
     *  Item
     *  Buyers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return \CleverIt\UBL\Invoice\BuyersItemIdentification
     */
    public function getBuyersItemIdentification()
    {
        return $this->buyersItemIdentification;
    }

    /**
     * Sets a new buyersItemIdentification
     *
     * ASBIE
     *  Item. Buyers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the buyer.
     *  0..1
     *  Item
     *  Buyers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param \CleverIt\UBL\Invoice\BuyersItemIdentification $buyersItemIdentification
     * @return self
     */
    public function setBuyersItemIdentification(\CleverIt\UBL\Invoice\BuyersItemIdentification $buyersItemIdentification)
    {
        $this->buyersItemIdentification = $buyersItemIdentification;
        return $this;
    }

    /**
     * Gets as sellersItemIdentification
     *
     * ASBIE
     *  Item. Sellers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the seller.
     *  0..1
     *  Item
     *  Sellers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return \CleverIt\UBL\Invoice\SellersItemIdentification
     */
    public function getSellersItemIdentification()
    {
        return $this->sellersItemIdentification;
    }

    /**
     * Sets a new sellersItemIdentification
     *
     * ASBIE
     *  Item. Sellers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the seller.
     *  0..1
     *  Item
     *  Sellers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param \CleverIt\UBL\Invoice\SellersItemIdentification $sellersItemIdentification
     * @return self
     */
    public function setSellersItemIdentification(\CleverIt\UBL\Invoice\SellersItemIdentification $sellersItemIdentification)
    {
        $this->sellersItemIdentification = $sellersItemIdentification;
        return $this;
    }

    /**
     * Adds as manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the manufacturer.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ManufacturersItemIdentification $manufacturersItemIdentification
     */
    public function addToManufacturersItemIdentification(\CleverIt\UBL\Invoice\ManufacturersItemIdentification $manufacturersItemIdentification)
    {
        $this->manufacturersItemIdentification[] = $manufacturersItemIdentification;
        return $this;
    }

    /**
     * isset manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the manufacturer.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturersItemIdentification($index)
    {
        return isset($this->manufacturersItemIdentification[$index]);
    }

    /**
     * unset manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the manufacturer.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturersItemIdentification($index)
    {
        unset($this->manufacturersItemIdentification[$index]);
    }

    /**
     * Gets as manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the manufacturer.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return \CleverIt\UBL\Invoice\ManufacturersItemIdentification[]
     */
    public function getManufacturersItemIdentification()
    {
        return $this->manufacturersItemIdentification;
    }

    /**
     * Sets a new manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Identifying information for this item, assigned by the manufacturer.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param \CleverIt\UBL\Invoice\ManufacturersItemIdentification[] $manufacturersItemIdentification
     * @return self
     */
    public function setManufacturersItemIdentification(array $manufacturersItemIdentification)
    {
        $this->manufacturersItemIdentification = $manufacturersItemIdentification;
        return $this;
    }

    /**
     * Gets as standardItemIdentification
     *
     * ASBIE
     *  Item. Standard_ Item Identification. Item Identification
     *  Identifying information for this item, assigned according to a standard system.
     *  0..1
     *  Item
     *  Standard
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return \CleverIt\UBL\Invoice\StandardItemIdentification
     */
    public function getStandardItemIdentification()
    {
        return $this->standardItemIdentification;
    }

    /**
     * Sets a new standardItemIdentification
     *
     * ASBIE
     *  Item. Standard_ Item Identification. Item Identification
     *  Identifying information for this item, assigned according to a standard system.
     *  0..1
     *  Item
     *  Standard
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param \CleverIt\UBL\Invoice\StandardItemIdentification $standardItemIdentification
     * @return self
     */
    public function setStandardItemIdentification(\CleverIt\UBL\Invoice\StandardItemIdentification $standardItemIdentification)
    {
        $this->standardItemIdentification = $standardItemIdentification;
        return $this;
    }

    /**
     * Gets as catalogueItemIdentification
     *
     * ASBIE
     *  Item. Catalogue_ Item Identification. Item Identification
     *  Identifying information for this item, assigned according to a cataloguing system.
     *  0..1
     *  Item
     *  Catalogue
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return \CleverIt\UBL\Invoice\CatalogueItemIdentification
     */
    public function getCatalogueItemIdentification()
    {
        return $this->catalogueItemIdentification;
    }

    /**
     * Sets a new catalogueItemIdentification
     *
     * ASBIE
     *  Item. Catalogue_ Item Identification. Item Identification
     *  Identifying information for this item, assigned according to a cataloguing system.
     *  0..1
     *  Item
     *  Catalogue
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param \CleverIt\UBL\Invoice\CatalogueItemIdentification $catalogueItemIdentification
     * @return self
     */
    public function setCatalogueItemIdentification(\CleverIt\UBL\Invoice\CatalogueItemIdentification $catalogueItemIdentification)
    {
        $this->catalogueItemIdentification = $catalogueItemIdentification;
        return $this;
    }

    /**
     * Adds as additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  An additional identifier for this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\AdditionalItemIdentification $additionalItemIdentification
     */
    public function addToAdditionalItemIdentification(\CleverIt\UBL\Invoice\AdditionalItemIdentification $additionalItemIdentification)
    {
        $this->additionalItemIdentification[] = $additionalItemIdentification;
        return $this;
    }

    /**
     * isset additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  An additional identifier for this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemIdentification($index)
    {
        return isset($this->additionalItemIdentification[$index]);
    }

    /**
     * unset additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  An additional identifier for this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemIdentification($index)
    {
        unset($this->additionalItemIdentification[$index]);
    }

    /**
     * Gets as additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  An additional identifier for this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @return \CleverIt\UBL\Invoice\AdditionalItemIdentification[]
     */
    public function getAdditionalItemIdentification()
    {
        return $this->additionalItemIdentification;
    }

    /**
     * Sets a new additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  An additional identifier for this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *  Item Identification
     *
     * @param \CleverIt\UBL\Invoice\AdditionalItemIdentification[] $additionalItemIdentification
     * @return self
     */
    public function setAdditionalItemIdentification(array $additionalItemIdentification)
    {
        $this->additionalItemIdentification = $additionalItemIdentification;
        return $this;
    }

    /**
     * Gets as catalogueDocumentReference
     *
     * ASBIE
     *  Item. Catalogue_ Document Reference. Document Reference
     *  A reference to the catalogue in which this item appears.
     *  0..1
     *  Item
     *  Catalogue
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\CatalogueDocumentReference
     */
    public function getCatalogueDocumentReference()
    {
        return $this->catalogueDocumentReference;
    }

    /**
     * Sets a new catalogueDocumentReference
     *
     * ASBIE
     *  Item. Catalogue_ Document Reference. Document Reference
     *  A reference to the catalogue in which this item appears.
     *  0..1
     *  Item
     *  Catalogue
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\CatalogueDocumentReference $catalogueDocumentReference
     * @return self
     */
    public function setCatalogueDocumentReference(\CleverIt\UBL\Invoice\CatalogueDocumentReference $catalogueDocumentReference)
    {
        $this->catalogueDocumentReference = $catalogueDocumentReference;
        return $this;
    }

    /**
     * Adds as itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  A reference to a specification document for this item.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ItemSpecificationDocumentReference $itemSpecificationDocumentReference
     */
    public function addToItemSpecificationDocumentReference(\CleverIt\UBL\Invoice\ItemSpecificationDocumentReference $itemSpecificationDocumentReference)
    {
        $this->itemSpecificationDocumentReference[] = $itemSpecificationDocumentReference;
        return $this;
    }

    /**
     * isset itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  A reference to a specification document for this item.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecificationDocumentReference($index)
    {
        return isset($this->itemSpecificationDocumentReference[$index]);
    }

    /**
     * unset itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  A reference to a specification document for this item.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecificationDocumentReference($index)
    {
        unset($this->itemSpecificationDocumentReference[$index]);
    }

    /**
     * Gets as itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  A reference to a specification document for this item.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \CleverIt\UBL\Invoice\ItemSpecificationDocumentReference[]
     */
    public function getItemSpecificationDocumentReference()
    {
        return $this->itemSpecificationDocumentReference;
    }

    /**
     * Sets a new itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  A reference to a specification document for this item.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \CleverIt\UBL\Invoice\ItemSpecificationDocumentReference[] $itemSpecificationDocumentReference
     * @return self
     */
    public function setItemSpecificationDocumentReference(array $itemSpecificationDocumentReference)
    {
        $this->itemSpecificationDocumentReference = $itemSpecificationDocumentReference;
        return $this;
    }

    /**
     * Gets as originCountry
     *
     * ASBIE
     *  Item. Origin_ Country. Country
     *  The country of origin of this item.
     *  0..1
     *  Item
     *  Origin
     *  Country
     *  Country
     *  Country
     *
     * @return \CleverIt\UBL\Invoice\OriginCountry
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Sets a new originCountry
     *
     * ASBIE
     *  Item. Origin_ Country. Country
     *  The country of origin of this item.
     *  0..1
     *  Item
     *  Origin
     *  Country
     *  Country
     *  Country
     *
     * @param \CleverIt\UBL\Invoice\OriginCountry $originCountry
     * @return self
     */
    public function setOriginCountry(\CleverIt\UBL\Invoice\OriginCountry $originCountry)
    {
        $this->originCountry = $originCountry;
        return $this;
    }

    /**
     * Adds as commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  A classification of this item according to a specific system for classifying commodities.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\CommodityClassification $commodityClassification
     */
    public function addToCommodityClassification(\CleverIt\UBL\Invoice\CommodityClassification $commodityClassification)
    {
        $this->commodityClassification[] = $commodityClassification;
        return $this;
    }

    /**
     * isset commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  A classification of this item according to a specific system for classifying commodities.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommodityClassification($index)
    {
        return isset($this->commodityClassification[$index]);
    }

    /**
     * unset commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  A classification of this item according to a specific system for classifying commodities.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommodityClassification($index)
    {
        unset($this->commodityClassification[$index]);
    }

    /**
     * Gets as commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  A classification of this item according to a specific system for classifying commodities.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \CleverIt\UBL\Invoice\CommodityClassification[]
     */
    public function getCommodityClassification()
    {
        return $this->commodityClassification;
    }

    /**
     * Sets a new commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  A classification of this item according to a specific system for classifying commodities.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \CleverIt\UBL\Invoice\CommodityClassification[] $commodityClassification
     * @return self
     */
    public function setCommodityClassification(array $commodityClassification)
    {
        $this->commodityClassification = $commodityClassification;
        return $this;
    }

    /**
     * Adds as transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  A set of sales conditions applying to this item.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\TransactionConditions $transactionConditions
     */
    public function addToTransactionConditions(\CleverIt\UBL\Invoice\TransactionConditions $transactionConditions)
    {
        $this->transactionConditions[] = $transactionConditions;
        return $this;
    }

    /**
     * isset transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  A set of sales conditions applying to this item.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransactionConditions($index)
    {
        return isset($this->transactionConditions[$index]);
    }

    /**
     * unset transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  A set of sales conditions applying to this item.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransactionConditions($index)
    {
        unset($this->transactionConditions[$index]);
    }

    /**
     * Gets as transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  A set of sales conditions applying to this item.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @return \CleverIt\UBL\Invoice\TransactionConditions[]
     */
    public function getTransactionConditions()
    {
        return $this->transactionConditions;
    }

    /**
     * Sets a new transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  A set of sales conditions applying to this item.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param \CleverIt\UBL\Invoice\TransactionConditions[] $transactionConditions
     * @return self
     */
    public function setTransactionConditions(array $transactionConditions)
    {
        $this->transactionConditions = $transactionConditions;
        return $this;
    }

    /**
     * Adds as hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Information pertaining to this item as a hazardous item.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\HazardousItem $hazardousItem
     */
    public function addToHazardousItem(\CleverIt\UBL\Invoice\HazardousItem $hazardousItem)
    {
        $this->hazardousItem[] = $hazardousItem;
        return $this;
    }

    /**
     * isset hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Information pertaining to this item as a hazardous item.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousItem($index)
    {
        return isset($this->hazardousItem[$index]);
    }

    /**
     * unset hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Information pertaining to this item as a hazardous item.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousItem($index)
    {
        unset($this->hazardousItem[$index]);
    }

    /**
     * Gets as hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Information pertaining to this item as a hazardous item.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @return \CleverIt\UBL\Invoice\HazardousItem[]
     */
    public function getHazardousItem()
    {
        return $this->hazardousItem;
    }

    /**
     * Sets a new hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Information pertaining to this item as a hazardous item.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @param \CleverIt\UBL\Invoice\HazardousItem[] $hazardousItem
     * @return self
     */
    public function setHazardousItem(array $hazardousItem)
    {
        $this->hazardousItem = $hazardousItem;
        return $this;
    }

    /**
     * Adds as classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  A tax category applicable to this item.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ClassifiedTaxCategory $classifiedTaxCategory
     */
    public function addToClassifiedTaxCategory(\CleverIt\UBL\Invoice\ClassifiedTaxCategory $classifiedTaxCategory)
    {
        $this->classifiedTaxCategory[] = $classifiedTaxCategory;
        return $this;
    }

    /**
     * isset classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  A tax category applicable to this item.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifiedTaxCategory($index)
    {
        return isset($this->classifiedTaxCategory[$index]);
    }

    /**
     * unset classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  A tax category applicable to this item.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifiedTaxCategory($index)
    {
        unset($this->classifiedTaxCategory[$index]);
    }

    /**
     * Gets as classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  A tax category applicable to this item.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \CleverIt\UBL\Invoice\ClassifiedTaxCategory[]
     */
    public function getClassifiedTaxCategory()
    {
        return $this->classifiedTaxCategory;
    }

    /**
     * Sets a new classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  A tax category applicable to this item.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \CleverIt\UBL\Invoice\ClassifiedTaxCategory[] $classifiedTaxCategory
     * @return self
     */
    public function setClassifiedTaxCategory(array $classifiedTaxCategory)
    {
        $this->classifiedTaxCategory = $classifiedTaxCategory;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  An additional property of this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\AdditionalItemProperty $additionalItemProperty
     */
    public function addToAdditionalItemProperty(\CleverIt\UBL\Invoice\AdditionalItemProperty $additionalItemProperty)
    {
        $this->additionalItemProperty[] = $additionalItemProperty;
        return $this;
    }

    /**
     * isset additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  An additional property of this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemProperty($index)
    {
        return isset($this->additionalItemProperty[$index]);
    }

    /**
     * unset additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  An additional property of this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemProperty($index)
    {
        unset($this->additionalItemProperty[$index]);
    }

    /**
     * Gets as additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  An additional property of this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return \CleverIt\UBL\Invoice\AdditionalItemProperty[]
     */
    public function getAdditionalItemProperty()
    {
        return $this->additionalItemProperty;
    }

    /**
     * Sets a new additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  An additional property of this item.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param \CleverIt\UBL\Invoice\AdditionalItemProperty[] $additionalItemProperty
     * @return self
     */
    public function setAdditionalItemProperty(array $additionalItemProperty)
    {
        $this->additionalItemProperty = $additionalItemProperty;
        return $this;
    }

    /**
     * Adds as manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  The manufacturer of this item.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ManufacturerParty $manufacturerParty
     */
    public function addToManufacturerParty(\CleverIt\UBL\Invoice\ManufacturerParty $manufacturerParty)
    {
        $this->manufacturerParty[] = $manufacturerParty;
        return $this;
    }

    /**
     * isset manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  The manufacturer of this item.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturerParty($index)
    {
        return isset($this->manufacturerParty[$index]);
    }

    /**
     * unset manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  The manufacturer of this item.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturerParty($index)
    {
        unset($this->manufacturerParty[$index]);
    }

    /**
     * Gets as manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  The manufacturer of this item.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\ManufacturerParty[]
     */
    public function getManufacturerParty()
    {
        return $this->manufacturerParty;
    }

    /**
     * Sets a new manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  The manufacturer of this item.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\ManufacturerParty[] $manufacturerParty
     * @return self
     */
    public function setManufacturerParty(array $manufacturerParty)
    {
        $this->manufacturerParty = $manufacturerParty;
        return $this;
    }

    /**
     * Gets as informationContentProviderParty
     *
     * ASBIE
     *  Item. Information Content Provider_ Party. Party
     *  The party responsible for specification of this item.
     *  0..1
     *  Item
     *  Information Content Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\InformationContentProviderParty
     */
    public function getInformationContentProviderParty()
    {
        return $this->informationContentProviderParty;
    }

    /**
     * Sets a new informationContentProviderParty
     *
     * ASBIE
     *  Item. Information Content Provider_ Party. Party
     *  The party responsible for specification of this item.
     *  0..1
     *  Item
     *  Information Content Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\InformationContentProviderParty $informationContentProviderParty
     * @return self
     */
    public function setInformationContentProviderParty(\CleverIt\UBL\Invoice\InformationContentProviderParty $informationContentProviderParty)
    {
        $this->informationContentProviderParty = $informationContentProviderParty;
        return $this;
    }

    /**
     * Adds as originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  A region (not country) of origin of this item.
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\OriginAddress $originAddress
     */
    public function addToOriginAddress(\CleverIt\UBL\Invoice\OriginAddress $originAddress)
    {
        $this->originAddress[] = $originAddress;
        return $this;
    }

    /**
     * isset originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  A region (not country) of origin of this item.
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginAddress($index)
    {
        return isset($this->originAddress[$index]);
    }

    /**
     * unset originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  A region (not country) of origin of this item.
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginAddress($index)
    {
        unset($this->originAddress[$index]);
    }

    /**
     * Gets as originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  A region (not country) of origin of this item.
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @return \CleverIt\UBL\Invoice\OriginAddress[]
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  A region (not country) of origin of this item.
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @param \CleverIt\UBL\Invoice\OriginAddress[] $originAddress
     * @return self
     */
    public function setOriginAddress(array $originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * Adds as itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  A trackable, unique instantiation of this item.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *  Item Instance
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\ItemInstance $itemInstance
     */
    public function addToItemInstance(\CleverIt\UBL\Invoice\ItemInstance $itemInstance)
    {
        $this->itemInstance[] = $itemInstance;
        return $this;
    }

    /**
     * isset itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  A trackable, unique instantiation of this item.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *  Item Instance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemInstance($index)
    {
        return isset($this->itemInstance[$index]);
    }

    /**
     * unset itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  A trackable, unique instantiation of this item.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *  Item Instance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemInstance($index)
    {
        unset($this->itemInstance[$index]);
    }

    /**
     * Gets as itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  A trackable, unique instantiation of this item.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *  Item Instance
     *
     * @return \CleverIt\UBL\Invoice\ItemInstance[]
     */
    public function getItemInstance()
    {
        return $this->itemInstance;
    }

    /**
     * Sets a new itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  A trackable, unique instantiation of this item.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *  Item Instance
     *
     * @param \CleverIt\UBL\Invoice\ItemInstance[] $itemInstance
     * @return self
     */
    public function setItemInstance(array $itemInstance)
    {
        $this->itemInstance = $itemInstance;
        return $this;
    }

    /**
     * Adds as certificate
     *
     * ASBIE
     *  Item. Certificate
     *  A certificate associated with this item.
     *  0..n
     *  Item
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Certificate $certificate
     */
    public function addToCertificate(\CleverIt\UBL\Invoice\Certificate $certificate)
    {
        $this->certificate[] = $certificate;
        return $this;
    }

    /**
     * isset certificate
     *
     * ASBIE
     *  Item. Certificate
     *  A certificate associated with this item.
     *  0..n
     *  Item
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificate($index)
    {
        return isset($this->certificate[$index]);
    }

    /**
     * unset certificate
     *
     * ASBIE
     *  Item. Certificate
     *  A certificate associated with this item.
     *  0..n
     *  Item
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificate($index)
    {
        unset($this->certificate[$index]);
    }

    /**
     * Gets as certificate
     *
     * ASBIE
     *  Item. Certificate
     *  A certificate associated with this item.
     *  0..n
     *  Item
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return \CleverIt\UBL\Invoice\Certificate[]
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Sets a new certificate
     *
     * ASBIE
     *  Item. Certificate
     *  A certificate associated with this item.
     *  0..n
     *  Item
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param \CleverIt\UBL\Invoice\Certificate[] $certificate
     * @return self
     */
    public function setCertificate(array $certificate)
    {
        $this->certificate = $certificate;
        return $this;
    }

    /**
     * Adds as dimension
     *
     * ASBIE
     *  Item. Dimension
     *  One of the measurable dimensions (length, mass, weight, or volume) of this item.
     *  0..n
     *  Item
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\Dimension $dimension
     */
    public function addToDimension(\CleverIt\UBL\Invoice\Dimension $dimension)
    {
        $this->dimension[] = $dimension;
        return $this;
    }

    /**
     * isset dimension
     *
     * ASBIE
     *  Item. Dimension
     *  One of the measurable dimensions (length, mass, weight, or volume) of this item.
     *  0..n
     *  Item
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDimension($index)
    {
        return isset($this->dimension[$index]);
    }

    /**
     * unset dimension
     *
     * ASBIE
     *  Item. Dimension
     *  One of the measurable dimensions (length, mass, weight, or volume) of this item.
     *  0..n
     *  Item
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDimension($index)
    {
        unset($this->dimension[$index]);
    }

    /**
     * Gets as dimension
     *
     * ASBIE
     *  Item. Dimension
     *  One of the measurable dimensions (length, mass, weight, or volume) of this item.
     *  0..n
     *  Item
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \CleverIt\UBL\Invoice\Dimension[]
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Sets a new dimension
     *
     * ASBIE
     *  Item. Dimension
     *  One of the measurable dimensions (length, mass, weight, or volume) of this item.
     *  0..n
     *  Item
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \CleverIt\UBL\Invoice\Dimension[] $dimension
     * @return self
     */
    public function setDimension(array $dimension)
    {
        $this->dimension = $dimension;
        return $this;
    }


}

