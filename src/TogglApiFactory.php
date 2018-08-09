<?php

namespace KMurgadella\TogglSdk;

use KMurgadella\RestApiManager\Auth\AuthFactory;
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

        $auth = AuthFactory::create('basic', ['username' => $apiToken, 'password' => 'api_token']);
        if (!empty($auth)) {
            $apiManager = new ApiManager('https://www.toggl.com/api/v8/', $auth);
            if (!empty($apiManager)) {
                $instance = new MainApi($apiManager);
            }
        }

        return $instance;
    }
}