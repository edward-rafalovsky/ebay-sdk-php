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
 * @property string $UserID
 * @property string $FeedbackID
 * @property string $ItemID
 * @property string $TransactionID
 * @property \DTS\eBaySDK\Trading\Enums\CommentTypeCodeType[] $CommentType
 * @property \DTS\eBaySDK\Trading\Enums\FeedbackTypeCodeType $FeedbackType
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property string $OrderLineItemID
 */
class GetFeedbackRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'UserID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UserID',
        ],
        'FeedbackID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FeedbackID',
        ],
        'ItemID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemID',
        ],
        'TransactionID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TransactionID',
        ],
        'CommentType' => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'CommentType',
        ],
        'FeedbackType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FeedbackType',
        ],
        'Pagination' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Pagination',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetFeedbackRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
