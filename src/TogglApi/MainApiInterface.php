<?php

namespace KMurgadella\TogglSdk\TogglApi;

use KMurgadella\TogglSdk\TogglApi\Repository\Projects;
use KMurgadella\TogglSdk\TogglApi\Repository\TimeEntries;
use KMurgadella\TogglSdk\TogglApi\Repository\Workspaces;

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
     * @return Workspaces
     */
    public function workspaces(): Workspaces;

    /**
     * @return TimeEntries
     */
    public function timeEntries(): TimeEntries;

    /**
     * @return Projects
     */
    public function projects(): Projects;
}
