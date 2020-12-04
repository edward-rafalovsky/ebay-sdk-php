<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;

use DTS\eBaySDK\Browse\Types\Item;

class ItemTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Item();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\Item', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
