<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Repository;

use KMurgadella\RestApiManager\ApiManagerInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\RepositoryInterface;

/**
 * Class AbstractRepository
 * @package KMurgadella\TogglSdk\TogglReportsApi\Repository
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
     * @var
     */
    protected $userAgent;

    /**
     * @var int
     */
    protected $workspace_id;

    protected $filter;

    /**
     * AbstractRepository constructor.
     * @param ApiManagerInterface $apiManager
     * @param string $userAgent
     * @param int $workspace_id
     */
    public function __construct(ApiManagerInterface $apiManager, string $userAgent, int $workspace_id)
    {
        $this->apiManager = $apiManager;
        $this->userAgent = $userAgent;
        $this->workspace_id = $workspace_id;
    }

    /**
     * @param string $endpoint
     * @return string
     */
    public function endpoint(string $endpoint)
    {
        return $endpoint;
    }

    public function setFilter(FilterInterface $filter)
    {
        $this->filter = $filter;
    }

    public function getFilter(): FilterInterface
    {
        return $this->filter;
    }
}