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
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $BidRetractionFeedbackPeriodArray
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $NegativeFeedbackPeriodArray
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $NeutralFeedbackPeriodArray
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $PositiveFeedbackPeriodArray
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $TotalFeedbackPeriodArray
 * @property integer $NeutralCommentCountFromSuspendedUsers
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 * @property integer $UniqueNeutralFeedbackCount
 * @property \DTS\eBaySDK\Trading\Types\SellerRatingSummaryArrayType $SellerRatingSummaryArray
 * @property \DTS\eBaySDK\Trading\Types\SellerRoleMetricsType $SellerRoleMetrics
 * @property \DTS\eBaySDK\Trading\Types\BuyerRoleMetricsType $BuyerRoleMetrics
 */
class FeedbackSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidRetractionFeedbackPeriodArray' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BidRetractionFeedbackPeriodArray',
        ],
        'NegativeFeedbackPeriodArray' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'NegativeFeedbackPeriodArray',
        ],
        'NeutralFeedbackPeriodArray' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'NeutralFeedbackPeriodArray',
        ],
        'PositiveFeedbackPeriodArray' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PositiveFeedbackPeriodArray',
        ],
        'TotalFeedbackPeriodArray' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TotalFeedbackPeriodArray',
        ],
        'NeutralCommentCountFromSuspendedUsers' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'NeutralCommentCountFromSuspendedUsers',
        ],
        'UniqueNegativeFeedbackCount' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UniqueNegativeFeedbackCount',
        ],
        'UniquePositiveFeedbackCount' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UniquePositiveFeedbackCount',
        ],
        'UniqueNeutralFeedbackCount' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UniqueNeutralFeedbackCount',
        ],
        'SellerRatingSummaryArray' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellerRatingSummaryArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerRatingSummaryArray',
        ],
        'SellerRoleMetrics' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellerRoleMetricsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerRoleMetrics',
        ],
        'BuyerRoleMetrics' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\BuyerRoleMetricsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BuyerRoleMetrics',
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
