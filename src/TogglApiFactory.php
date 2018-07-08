<?php

namespace KMurgadella\TogglSdk;

use KMurgadella\TogglSdk\TogglApi\MainApi;

/**
 * Class TogglApiFactory
 * @package KMurgadella\TogglSdk
 */
class TogglApiFactory
{
    /**
     * @param $apiToken
     * @return MainApi|null
     */
    public static function create(string $apiToken)
    {
        $instance = null;

        $apiManager = new ApiManager($apiToken, 'https://www.toggl.com/api/v8/');
        if (!empty($apiManager)) {
            $instance = new MainApi($apiManager);
        }

        return $instance;
    }
}