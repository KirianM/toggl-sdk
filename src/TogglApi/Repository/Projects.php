<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\ProjectsInterface;

/**
 * Class Projects
 * @package TogglSdk\Repository
 */
class Projects extends AbstractRepository implements ProjectsInterface
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

    public function create(array $data): array
    {
        return $this->apiManager->post($this->endpoint(self::$namespace), $data);
    }

    public function update(int $entity_id, array $data): array
    {
        return $this->apiManager->put($this->endpoint(self::$namespace . '/'. $entity_id), $data);
    }

    public function delete(int $entity_id): array
    {
        return $this->apiManager->delete($this->endpoint(self::$namespace . '/'. $entity_id));
    }
}