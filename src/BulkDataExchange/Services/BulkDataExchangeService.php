<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\BulkDataExchange\Services;

class BulkDataExchangeService extends \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService
{
    public const API_VERSION = '1.5.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse
     */
    public function createUploadJob(\DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->createUploadJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUploadJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'createUploadJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse
     */
    public function startUploadJob(\DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->startUploadJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startUploadJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startUploadJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\AbortJobResponse
     */
    public function abortJob(\DTS\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->abortJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->callOperationAsync(
            'abortJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\AbortJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetJobsResponse
     */
    public function getJobs(\DTS\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->getJobsAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobsAsync(\DTS\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getJobs',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetJobsResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse
     */
    public function getJobStatus(\DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->getJobStatusAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobStatusAsync(\DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getJobStatus',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse
     */
    public function startDownloadJob(\DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->startDownloadJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startDownloadJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startDownloadJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse
     */
    public function createRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->createRecurringJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRecurringJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'createRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse
     */
    public function deleteRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->deleteRecurringJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRecurringJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'deleteRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse
     */
    public function getRecurringJobs(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->getRecurringJobsAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobsAsync(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobs',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse
     */
    public function getRecurringJobExecutionStatus(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->getRecurringJobExecutionStatusAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionStatusAsync(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionStatus',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse
     */
    public function getRecurringJobExecutionHistory(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->getRecurringJobExecutionHistoryAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionHistoryAsync(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionHistory',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse
     */
    public function activateRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->activateRecurringJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateRecurringJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'activateRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse
     */
    public function suspendRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->suspendRecurringJobAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suspendRecurringJobAsync(\DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'suspendRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse'
        );
    }

    /**
     * @return \DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse
     */
    public function abortRecurringJobExecution(\DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->abortRecurringJobExecutionAsync($request)->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortRecurringJobExecutionAsync(\DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->callOperationAsync(
            'abortRecurringJobExecution',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse'
        );
    }
}
