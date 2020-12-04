<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Types;

use DTS\eBaySDK\BulkDataExchange\Types\DownloadJobRecurringFilter;

class DownloadJobRecurringFilterTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new DownloadJobRecurringFilter();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\DownloadJobRecurringFilter', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}
