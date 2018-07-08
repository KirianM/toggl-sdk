<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\WorkspacesInterface;

/**
 * Class Workspaces
 * @package TogglSdk\Repository
 */
class Workspaces extends AbstractRepository implements WorkspacesInterface
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