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
 * @property \DTS\eBaySDK\Trading\Types\VariationType[] $Variation
 * @property \DTS\eBaySDK\Trading\Types\PicturesType[] $Pictures
 * @property \DTS\eBaySDK\Trading\Types\NameValueListArrayType $VariationSpecificsSet
 * @property \DTS\eBaySDK\Trading\Types\ModifyNameArrayType $ModifyNameList
 */
class VariationsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Variation' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\VariationType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'Variation',
        ],
        'Pictures' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\PicturesType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'Pictures',
        ],
        'VariationSpecificsSet' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VariationSpecificsSet',
        ],
        'ModifyNameList' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\ModifyNameArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ModifyNameList',
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
