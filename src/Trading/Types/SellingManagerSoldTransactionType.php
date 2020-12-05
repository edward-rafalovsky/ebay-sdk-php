<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 * @property string $InvoiceNumber
 * @property integer $TransactionID
 * @property integer $SaleRecordID
 * @property string $ItemID
 * @property integer $QuantitySold
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ItemPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $SubtotalAmount
 * @property string $ItemTitle
 * @property \DTS\eBaySDK\Trading\Enums\ListingTypeCodeType $ListingType
 * @property boolean $Relisted
 * @property integer $WatchCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ReservePrice
 * @property boolean $SecondChanceOfferSent
 * @property string $CustomLabel
 * @property \DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType $SoldOn
 * @property \DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType[] $ListedOn
 * @property \DTS\eBaySDK\Trading\Types\ShipmentType $Shipment
 * @property boolean $CharityListing
 * @property \DTS\eBaySDK\Trading\Types\VariationType $Variation
 * @property string $OrderLineItemID
 */
class SellingManagerSoldTransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'InvoiceNumber' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'InvoiceNumber',
        ],
        'TransactionID' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TransactionID',
        ],
        'SaleRecordID' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SaleRecordID',
        ],
        'ItemID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemID',
        ],
        'QuantitySold' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'QuantitySold',
        ],
        'ItemPrice' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemPrice',
        ],
        'SubtotalAmount' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SubtotalAmount',
        ],
        'ItemTitle' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemTitle',
        ],
        'ListingType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ListingType',
        ],
        'Relisted' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Relisted',
        ],
        'WatchCount' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'WatchCount',
        ],
        'StartPrice' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StartPrice',
        ],
        'ReservePrice' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ReservePrice',
        ],
        'SecondChanceOfferSent' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SecondChanceOfferSent',
        ],
        'CustomLabel' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CustomLabel',
        ],
        'SoldOn' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SoldOn',
        ],
        'ListedOn' => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ListedOn',
        ],
        'Shipment' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\ShipmentType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Shipment',
        ],
        'CharityListing' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CharityListing',
        ],
        'Variation' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\VariationType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Variation',
        ],
        'OrderLineItemID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OrderLineItemID',
        ],
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
