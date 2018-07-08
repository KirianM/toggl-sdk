<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts;

use KMurgadella\RestApiManager\ApiManagerInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterInterface;

/**
 * Interface RepositoryInterface
 * @package KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts
 */
interface RepositoryInterface
{
    /**
     * RepositoryInterface constructor.
     * @param ApiManagerInterface $apiManager
     * @param string $userAgent
     * @param int $workspace_id
     */
    public function __construct(ApiManagerInterface $apiManager, string $userAgent, int $workspace_id);

    /**
     * @param FilterInterface $filter
     * @return array
     */
    public function getAll(FilterInterface $filter): array;

    /**
     * @return FilterInterface
     */
    public function getFilter(): FilterInterface;

    /**
     * @param FilterInterface $filter
     * @return mixed
     */
    public function setFilter(FilterInterface $filter);
}