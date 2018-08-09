<?php

namespace KMurgadella\TogglSdk;

use KMurgadella\RestApiManager\Auth\AuthFactory;
use KMurgadella\TogglSdk\TogglReportsApi\ReportsApi;

/**
 * Class TogglReportsApiFactory
 * @package KMurgadella\TogglSdk\TogglReportsApi
 */
class TogglReportsApiFactory
{
    /**
     * @param $apiToken
     * @return ReportsApi|null
     */
    public static function create(string $apiToken, string $userAgent = 'toggl-sdk')
    {
        $instance = null;

        $auth = AuthFactory::create('basic', ['username' => $apiToken, 'password' => 'api_token']);
        if (!empty($auth)) {
            $apiManager = new ApiManager('https://www.toggl.com/reports/api/v2/', $auth);
            if (!empty($apiManager)) {
                $instance = new ReportsApi($apiManager);
                $instance->setUserAgent($userAgent);
            }
        }

        return $instance;
    }
}