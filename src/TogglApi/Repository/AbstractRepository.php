<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

use KMurgadella\RestApiManager\ApiManagerInterface;

/**
 * Class AbstractRepository
 * @package KMurgadella\TogglSdk\TogglApi\Repository
 */
abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * @var ApiManagerInterface
     */
    protected $apiManager;
    /**
     * @var
     */
    public static $namespace;

    /**
     * AbstractRepository constructor.
     * @param ApiManagerInterface $apiManager
     */
    public function __construct(ApiManagerInterface $apiManager)
    {
        $this->apiManager = $apiManager;
    }

    /**
     * @param string $endpoint
     * @return string
     */
    public function endpoint(string $endpoint)
    {
        return $endpoint;
    }
}