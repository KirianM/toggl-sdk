<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

use KMurgadella\RestApiManager\ApiManagerInterface;

/**
 * Class TimeEntries
 * @package TogglSdk\Repository
 */
class TimeEntries extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    public static $namespace = 'time_entries';

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->apiManager->get($this->endpoint(self::$namespace));
    }

    /**
     * @param int $entity_id
     * @return array
     */
    public function getById(int $entity_id): array
    {
        return $this->apiManager->get($this->endpoint(self::$namespace . '/' . $entity_id));
    }

    /**
     * @return array
     */
    public function current(): array
    {
        return $this->apiManager->get($this->endpoint(self::$namespace . '/' . 'current'));
    }
}