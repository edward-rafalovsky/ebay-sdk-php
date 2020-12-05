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
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Enums\MessageTypeCodeType $MailMessageType
 * @property \DTS\eBaySDK\Trading\Enums\MessageStatusTypeCodeType $MessageStatus
 * @property boolean $DisplayToPublic
 * @property \DateTime $StartCreationTime
 * @property \DateTime $EndCreationTime
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property string $MemberMessageID
 * @property string $SenderID
 */
class GetMemberMessagesRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemID',
        ],
        'MailMessageType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MailMessageType',
        ],
        'MessageStatus' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MessageStatus',
        ],
        'DisplayToPublic' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DisplayToPublic',
        ],
        'StartCreationTime' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StartCreationTime',
        ],
        'EndCreationTime' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EndCreationTime',
        ],
        'Pagination' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Pagination',
        ],
        'MemberMessageID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MemberMessageID',
        ],
        'SenderID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SenderID',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMemberMessagesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
