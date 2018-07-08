<?php

namespace KMurgadella\TogglSdk\TogglApi;

use KMurgadella\TogglSdk\AbstractTogglApi;
use KMurgadella\TogglSdk\TogglApi\Repository\Projects;
use KMurgadella\TogglSdk\TogglApi\Repository\TimeEntries;
use KMurgadella\TogglSdk\TogglApi\Repository\Workspaces;
use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\ProjectsInterface;
use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\TimeEntriesInterface;
use KMurgadella\TogglSdk\TogglApi\Repository\Contracts\WorkspacesInterface;

/**
 * Class MainApi
 * @package TogglSdk\Source
 */
class MainApi extends AbstractTogglApi implements MainApiInterface
{
    /**
     * @return array
     */
    public function me(): array
    {
        return $this->apiManager->get('me');
    }

    /**
     * @return WorkspacesInterface
     */
    public function workspaces(): WorkspacesInterface
    {
        $instance = new Workspaces($this->apiManager);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }

    /**
     * @return TimeEntriesInterface
     */
    public function timeEntries(): TimeEntriesInterface
    {
        $instance = new TimeEntries($this->apiManager);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }

    /**
     * @return ProjectsInterface
     */
    public function projects(): ProjectsInterface
    {
        $instance = new Projects($this->apiManager);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }
}