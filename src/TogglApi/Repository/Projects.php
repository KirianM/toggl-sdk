<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

/**
 * Class Projects
 * @package TogglSdk\Repository
 */
class Projects extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    public static $namespace = 'projects';

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

    /**
     * @param int $client_id
     * @return array
     */
    public function getByClientId(int $client_id): array
    {
        return $this->apiManager->get($this->endpoint(Clients::$namespace . '/' . $client_id . '/' . self::$namespace));
    }
}