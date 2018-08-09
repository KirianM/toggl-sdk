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
}