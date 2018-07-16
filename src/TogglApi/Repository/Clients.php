<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\ClientsInterface;

/**
 * Class Clients
 * @package TogglSdk\Repository
 */
class Clients extends AbstractRepository implements ClientsInterface
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

    public function create(array $data): array
    {
        return $this->apiManager->post($this->endpoint(self::$namespace), ['client' => $data]);
    }

    public function update(int $entity_id, array $data): array
    {
        return $this->apiManager->put($this->endpoint(self::$namespace . '/'. $entity_id), ['client' => $data]);
    }

    public function delete(int $entity_id): array
    {
        return $this->apiManager->delete($this->endpoint(self::$namespace . '/'. $entity_id));
    }
}