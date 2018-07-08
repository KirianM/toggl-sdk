<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Repository;

use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\WeeklyInterface;

/**
 * Class Weekly
 * @package KMurgadella\TogglSdk\TogglReportsApi\Repository
 */
class Weekly extends AbstractRepository implements WeeklyInterface
{
    /**
     * @var string
     */
    public static $namespace = 'weekly';

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