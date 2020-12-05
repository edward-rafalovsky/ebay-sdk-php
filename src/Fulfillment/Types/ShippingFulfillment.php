<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 * @property string $fulfillmentId
 * @property \DTS\eBaySDK\Fulfillment\Types\LineItemReference[] $lineItems
 * @property string $shipmentTrackingNumber
 * @property string $shippedDate
 * @property string $shippingCarrierCode
 * @property string $shippingServiceCode
 */
class ShippingFulfillment extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'fulfillmentId' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fulfillmentId',
        ],
        'lineItems' => [
            'type'        => 'DTS\eBaySDK\Fulfillment\Types\LineItemReference',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'lineItems',
        ],
        'shipmentTrackingNumber' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'shipmentTrackingNumber',
        ],
        'shippedDate' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'shippedDate',
        ],
        'shippingCarrierCode' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'shippingCarrierCode',
        ],
        'shippingServiceCode' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'shippingServiceCode',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
