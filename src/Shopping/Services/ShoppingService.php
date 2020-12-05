<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Shopping\Services;

class ShoppingService extends \DTS\eBaySDK\Shopping\Services\ShoppingBaseService
{
    public const API_VERSION = '1027';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\FindProductsResponseType
     */
    public function findProducts(\DTS\eBaySDK\Shopping\Types\FindProductsRequestType $request)
    {
        return $this->findProductsAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findProductsAsync(\DTS\eBaySDK\Shopping\Types\FindProductsRequestType $request)
    {
        return $this->callOperationAsync(
            'FindProducts',
            $request,
            '\DTS\eBaySDK\Shopping\Types\FindProductsResponseType'
        );
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\GetCategoryInfoResponseType
     */
    public function getCategoryInfo(\DTS\eBaySDK\Shopping\Types\GetCategoryInfoRequestType $request)
    {
        return $this->getCategoryInfoAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryInfoAsync(\DTS\eBaySDK\Shopping\Types\GetCategoryInfoRequestType $request)
    {
        return $this->callOperationAsync(
            'GetCategoryInfo',
            $request,
            '\DTS\eBaySDK\Shopping\Types\GetCategoryInfoResponseType'
        );
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\GetItemStatusResponseType
     */
    public function getItemStatus(\DTS\eBaySDK\Shopping\Types\GetItemStatusRequestType $request)
    {
        return $this->getItemStatusAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemStatusAsync(\DTS\eBaySDK\Shopping\Types\GetItemStatusRequestType $request)
    {
        return $this->callOperationAsync(
            'GetItemStatus',
            $request,
            '\DTS\eBaySDK\Shopping\Types\GetItemStatusResponseType'
        );
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\GetMultipleItemsResponseType
     */
    public function getMultipleItems(\DTS\eBaySDK\Shopping\Types\GetMultipleItemsRequestType $request)
    {
        return $this->getMultipleItemsAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMultipleItemsAsync(\DTS\eBaySDK\Shopping\Types\GetMultipleItemsRequestType $request)
    {
        return $this->callOperationAsync(
            'GetMultipleItems',
            $request,
            '\DTS\eBaySDK\Shopping\Types\GetMultipleItemsResponseType'
        );
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\GetShippingCostsResponseType
     */
    public function getShippingCosts(\DTS\eBaySDK\Shopping\Types\GetShippingCostsRequestType $request)
    {
        return $this->getShippingCostsAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingCostsAsync(\DTS\eBaySDK\Shopping\Types\GetShippingCostsRequestType $request)
    {
        return $this->callOperationAsync(
            'GetShippingCosts',
            $request,
            '\DTS\eBaySDK\Shopping\Types\GetShippingCostsResponseType'
        );
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\GetSingleItemResponseType
     */
    public function getSingleItem(\DTS\eBaySDK\Shopping\Types\GetSingleItemRequestType $request)
    {
        return $this->getSingleItemAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSingleItemAsync(\DTS\eBaySDK\Shopping\Types\GetSingleItemRequestType $request)
    {
        return $this->callOperationAsync(
            'GetSingleItem',
            $request,
            '\DTS\eBaySDK\Shopping\Types\GetSingleItemResponseType'
        );
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\GetUserProfileResponseType
     */
    public function getUserProfile(\DTS\eBaySDK\Shopping\Types\GetUserProfileRequestType $request)
    {
        return $this->getUserProfileAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserProfileAsync(\DTS\eBaySDK\Shopping\Types\GetUserProfileRequestType $request)
    {
        return $this->callOperationAsync(
            'GetUserProfile',
            $request,
            '\DTS\eBaySDK\Shopping\Types\GetUserProfileResponseType'
        );
    }

    /**
     * @return \DTS\eBaySDK\Shopping\Types\GeteBayTimeResponseType
     */
    public function geteBayTime(\DTS\eBaySDK\Shopping\Types\GeteBayTimeRequestType $request)
    {
        return $this->geteBayTimeAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function geteBayTimeAsync(\DTS\eBaySDK\Shopping\Types\GeteBayTimeRequestType $request)
    {
        return $this->callOperationAsync(
            'GeteBayTime',
            $request,
            '\DTS\eBaySDK\Shopping\Types\GeteBayTimeResponseType'
        );
    }
}
