<?php

namespace KMurgadella\TogglSdk\TogglApi;

use KMurgadella\TogglSdk\AbstractTogglApi;
use KMurgadella\TogglSdk\TogglApi\Repository\Projects;
use KMurgadella\TogglSdk\TogglApi\Repository\TimeEntries;
use KMurgadella\TogglSdk\TogglApi\Repository\Workspaces;

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
     * @return Workspaces
     */
    public function workspaces(): Workspaces
    {
        $instance = new Workspaces($this->apiManager);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }

    /**
     * @return TimeEntries
     */
    public function timeEntries(): TimeEntries
    {
        $instance = new TimeEntries($this->apiManager);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }

    /**
     * @return Projects
     */
    public function projects(): Projects
    {
        $instance = new Projects($this->apiManager);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }
}