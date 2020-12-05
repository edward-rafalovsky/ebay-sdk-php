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
 * @property string $companyName
 * @property \DTS\eBaySDK\Fulfillment\Types\Address $contactAddress
 * @property string $fullName
 * @property \DTS\eBaySDK\Fulfillment\Types\PhoneNumber $primaryPhone
 */
class Contact extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'companyName' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'companyName',
        ],
        'contactAddress' => [
            'type'        => 'DTS\eBaySDK\Fulfillment\Types\Address',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'contactAddress',
        ],
        'fullName' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fullName',
        ],
        'primaryPhone' => [
            'type'        => 'DTS\eBaySDK\Fulfillment\Types\PhoneNumber',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'primaryPhone',
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
