<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 * @property \DateTime $HardExpirationWarning
 * @property string $Ack
 * @property string $Version
 * @property \DTS\eBaySDK\MerchantData\Types\ErrorType[] $Errors
 * @property \DTS\eBaySDK\MerchantData\Types\OrderArrayType $OrderArray
 */
class OrderReportResponseType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'HardExpirationWarning' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'HardExpirationWarning',
        ],
        'Ack' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Ack',
        ],
        'Version' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Version',
        ],
        'Errors' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ErrorType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'Errors',
        ],
        'OrderArray' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\OrderArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OrderArray',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'OrderReport';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
