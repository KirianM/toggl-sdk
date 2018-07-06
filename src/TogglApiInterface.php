<?php

namespace KMurgadella\TogglSdk;

use KMurgadella\RestApiManager\ApiManagerInterface;

/**
 * Interface TogglApiInterface
 * @package KMurgadella\TogglSdk
 */
interface TogglApiInterface
{
    /**
     * TogglApiInterface constructor.
     * @param ApiManagerInterface $apiManager
     */
    public function __construct(ApiManagerInterface $apiManager);
}