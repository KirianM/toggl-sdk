<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\TagsInterface;

/**
 * Class Workspaces
 * @package TogglSdk\Repository
 */
class Tags extends AbstractRepository implements TagsInterface
{
    /**
     * @var string
     */
    public static $namespace = 'tags';

    /**
     * @return array
     */
    public function getAll(): array
    {
        return [];
    }

    /**
     * @param int $entity_id
     * @return array
     */
    public function getById(int $entity_id): array
    {
        return [];
    }

    public function getByWorkspaceId(int $workspace_id): array
    {
        return $this->apiManager->get($this->endpoint(Workspaces::$namespace . '/' . $workspace_id . '/' . self::$namespace));
    }

    public function create(array $data): array
    {
        return $this->apiManager->post($this->endpoint(self::$namespace), ['tag' => $data]);
    }

    public function update(int $entity_id, array $data): array
    {
        return $this->apiManager->put($this->endpoint(self::$namespace . '/'. $entity_id), ['tag' => $data]);
    }

    public function delete(int $entity_id): array
    {
        return $this->apiManager->delete($this->endpoint(self::$namespace . '/'. $entity_id));
    }
}