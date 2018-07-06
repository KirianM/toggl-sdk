<?php

namespace KMurgadella\TogglSdk\TogglApi;

use KMurgadella\TogglSdk\ApiManager;

class TogglFactory
{
    public static function create($apiToken)
    {
        $instance = null;

        $apiManager = new ApiManager($apiToken, 'https://www.toggl.com/api/v8/');
        if (!empty($apiManager)) {
            $instance = new MainApi($apiManager);
        }

        return $instance;
    }
}