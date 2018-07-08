<?php

namespace KMurgadella\TogglSdk\TogglApi;

use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\ProjectsInterface;
use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\TimeEntriesInterface;
use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\WorkspacesInterface;

/**
 * Interface MainApiInterface
 * @package TogglSdk\Source
 */
interface MainApiInterface
{
    /**
     * @return array
     */
    public function me(): array;

    /**
     * @return WorkspacesInterface
     */
    public function workspaces(): WorkspacesInterface;

    /**
     * @return TimeEntriesInterface
     */
    public function timeEntries(): TimeEntriesInterface;

    /**
     * @return ProjectsInterface
     */
    public function projects(): ProjectsInterface;
}
