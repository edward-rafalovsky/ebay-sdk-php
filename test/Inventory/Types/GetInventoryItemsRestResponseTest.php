<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse;

class GetInventoryItemsRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetInventoryItemsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse', $this->obj);
    }

    public function testExtendsInventoryItems()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\InventoryItems', $this->obj);
    }
}
