<?php

namespace DTS\eBaySDK\Taxonomy\Services;

/**
 * Base class for the Taxonomy service.
 */
class TaxonomyBaseService extends \DTS\eBaySDK\Services\BaseRestService
{
    /**
     * @var array The API endpoints.
     */
    protected static $endPoints = [
        'sandbox'    => 'https://api.sandbox.ebay.com/commerce/taxonomy',
        'production' => 'https://api.ebay.com/commerce/taxonomy',
    ];

    /**
     * HTTP header constant. The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    public const HDR_AUTHORIZATION = 'Authorization';

    /**
     * HTTP header constant. The global ID of the eBay site on which the transaction took place.
     */
    public const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array An associative array of configuration definitions.
     */
    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid'    => ['string'],
                'default'  => \DTS\eBaySDK\Taxonomy\Services\TaxonomyService::API_VERSION,
                'required' => true,
            ],
            'authorization' => [
                'valid'    => ['string'],
                'required' => true,
            ],
            'marketplaceId' => [
                'valid' => ['string'],
            ],
            ];
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @return array An associative array of eBay HTTP headers.
     */
    protected function getEbayHeaders()
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTHORIZATION] = 'Bearer ' . $this->getConfig('authorization');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        return $headers;
    }
}
