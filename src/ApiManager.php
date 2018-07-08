<?php

namespace KMurgadella\TogglSdk;

use KMurgadella\RestApiManager\ApiManager as RestApiManager;

/**
 * Class ApiManager
 * @package KMurgadella\TogglSdk
 */
class ApiManager extends RestApiManager
{
    /**
     * @var string
     */
    protected $apiToken;

    /**
     * ApiManager constructor.
     * @param string $apiToken
     * @param string|null $apiUrl
     */
    function __construct(string $apiToken, string $apiUrl = null)
    {
        parent::__construct($apiUrl);

        $this->setApiToken($apiToken);
    }

    public function getApiToken(): string
    {
        return $this->apiToken;
    }

    public function setApiToken(string $apiToken)
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * @param string $apiToken
     * @return string
     */
    public function hashToken(string $apiToken)
    {
        return base64_encode($apiToken . ':api_token');
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $data
     * @param array $headers
     * @return array
     */
    public function request(string $method, string $url, array $data = [], array $headers = []): array
    {
        $headers = $this->authHeaders($headers);
        return parent::request($method, $url, $data, $headers);
    }

    /**
     * @param array $headers
     * @return array
     * @throws \Exception
     */
    public function authHeaders(array $headers = []): array
    {
        if (empty($this->apiToken)) {
            //TODO: Throw no valid Auth
            throw new \Exception('No valid auth');
        }

        return array_merge($headers, ['Authorization: Basic ' . $this->hashToken($this->getApiToken())]);
    }
}