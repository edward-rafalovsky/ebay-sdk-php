<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Feed\Types;

/**
 * @property string $ageGroup
 * @property string $brand
 * @property string $category
 * @property string $categoryId
 * @property string $color
 * @property string $condition
 * @property string $conditionId
 * @property string $gender
 * @property string $gtin
 * @property string $imageUrl
 * @property \DateTime $itemEndDate
 * @property string $itemId
 * @property string $material
 * @property string $mpn
 * @property \DTS\eBaySDK\Feed\Enums\CurrencyCodeEnum $priceCurrency
 * @property string $priceValue
 * @property string $sellerFeedbackPercentage
 * @property double $sellerFeedbackScore
 * @property string $sellerUsername
 * @property string $size
 * @property string $sizeType
 * @property string $title
 */
class ItemFeed extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ageGroup' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ageGroup',
        ],
        'brand' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'brand',
        ],
        'category' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'category',
        ],
        'categoryId' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'categoryId',
        ],
        'color' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'color',
        ],
        'condition' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'condition',
        ],
        'conditionId' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'conditionId',
        ],
        'gender' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'gender',
        ],
        'gtin' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'gtin',
        ],
        'imageUrl' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'imageUrl',
        ],
        'itemEndDate' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemEndDate',
        ],
        'itemId' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemId',
        ],
        'material' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'material',
        ],
        'mpn' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'mpn',
        ],
        'priceCurrency' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'priceCurrency',
        ],
        'priceValue' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'priceValue',
        ],
        'sellerFeedbackPercentage' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerFeedbackPercentage',
        ],
        'sellerFeedbackScore' => [
            'type'        => 'double',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerFeedbackScore',
        ],
        'sellerUsername' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerUsername',
        ],
        'size' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'size',
        ],
        'sizeType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sizeType',
        ],
        'title' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'title',
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
