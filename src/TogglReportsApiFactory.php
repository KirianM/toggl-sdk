<?php

namespace KMurgadella\TogglSdk;

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

        $apiManager = new ApiManager($apiToken, 'https://www.toggl.com/reports/api/v2/');
        if (!empty($apiManager)) {
            $instance = new ReportsApi($apiManager);
            $instance->setUserAgent($userAgent);
        }

        return $instance;
    }
}