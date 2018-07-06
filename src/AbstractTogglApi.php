<?php

namespace KMurgadella\TogglSdk;

use KMurgadella\RestApiManager\ApiManagerInterface;

/**
 * Class AbstractTogglApi
 * @package KMurgadella\TogglSdk
 */
class AbstractTogglApi implements TogglApiInterface
{
    /**
     * @var ApiManagerInterface
     */
    protected $apiManager;

    /**
     * AbstractTogglApi constructor.
     * @param ApiManagerInterface $apiManager
     */
    public function __construct(ApiManagerInterface $apiManager)
    {
        $this->apiManager = $apiManager;
    }
}