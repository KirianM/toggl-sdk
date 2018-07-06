<?php

namespace KMurgadella\TogglSdk\TogglApi\Repository;

use KMurgadella\RestApiManager\ApiManagerInterface;

/**
 * Interface RepositoryInterface
 * @package TogglSdk\Repository
 */
interface RepositoryInterface
{
    /**
     * RepositoryInterface constructor.
     * @param ApiManagerInterface $apiManager
     */
    public function __construct(ApiManagerInterface $apiManager);

    /**
     * @return array
     */
    public function getAll(): array;

    /**
     * @param int $entity_id
     * @return array
     */
    public function getById(int $entity_id): array;
}