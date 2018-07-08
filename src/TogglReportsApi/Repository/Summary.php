<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Repository;

use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\SummaryInterface;

/**
 * Class Summary
 * @package KMurgadella\TogglSdk\TogglReportsApi\Repository
 */
class Summary extends AbstractRepository implements SummaryInterface
{
    /**
     * @var string
     */
    public static $namespace = 'summary';

    /**
     * @param FilterInterface $filter
     * @return array
     */
    public function getAll(FilterInterface $filter): array
    {
        $filter->setUserAgent($this->userAgent);
        $filter->setWorkspaceId($this->workspace_id);

        $endpoint = self::$namespace . $filter->toUrlParamaters();

        return $this->apiManager->get($this->endpoint($endpoint));
    }
}