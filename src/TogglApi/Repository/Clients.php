<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

/**
 * Class Clients
 * @package TogglSdk\Repository
 */
class Clients extends AbstractRepository
{
    /**
     * @var string
     */
    public static $namespace = 'clients';

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
     * @param int $workspace_id
     * @return array
     */
    public function getByWorkspaceId(int $workspace_id): array
    {
        return $this->apiManager->get($this->endpoint(Workspaces::$namespace . '/' . $workspace_id . '/' . self::$namespace));
    }
}