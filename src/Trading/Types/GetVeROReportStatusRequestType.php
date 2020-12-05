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
 * @property integer $VeROReportPacketID
 * @property string $ItemID
 * @property boolean $IncludeReportedItemDetails
 * @property \DateTime $TimeFrom
 * @property \DateTime $TimeTo
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 */
class GetVeROReportStatusRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'VeROReportPacketID' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VeROReportPacketID',
        ],
        'ItemID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemID',
        ],
        'IncludeReportedItemDetails' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IncludeReportedItemDetails',
        ],
        'TimeFrom' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TimeFrom',
        ],
        'TimeTo' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TimeTo',
        ],
        'Pagination' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Pagination',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetVeROReportStatusRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
