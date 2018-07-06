<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

/**
 * Class Workspaces
 * @package TogglSdk\Repository
 */
class Workspaces extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    public static $namespace = 'workspaces';

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
}