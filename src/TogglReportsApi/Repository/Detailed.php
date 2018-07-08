<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Repository;

use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\DetailedInterface;

/**
 * Class Detailed
 * @package KMurgadella\TogglSdk\TogglReportsApi\Repository
 */
class Detailed extends AbstractRepository implements DetailedInterface
{
    /**
     * @var string
     */
    public static $namespace = 'details';

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