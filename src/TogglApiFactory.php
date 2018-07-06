<?php

namespace KMurgadella\TogglSdk;

use KMurgadella\TogglSdk\TogglApi\MainApi;

class TogglApiFactory
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