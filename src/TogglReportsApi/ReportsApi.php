<?php

namespace KMurgadella\TogglSdk\TogglReportsApi;

use KMurgadella\TogglSdk\AbstractTogglApi;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\DetailedInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\SummaryInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\WeeklyInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Detailed;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Summary;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Weekly;

class ReportsApi extends AbstractTogglApi implements ReportsApiInterface
{
    protected $userAgent;

    public function setUserAgent(string $userAgent)
    {
        $this->userAgent = $userAgent;
    }

    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param int $workspace_id
     * @return WeeklyInterface
     */
    public function weekly(int $workspace_id): WeeklyInterface
    {
        $instance = new Weekly($this->apiManager, $this->getUserAgent(), $workspace_id);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }

    /**
     * @param int $workspace_id
     * @return DetailedInterface
     */
    public function detailed(int $workspace_id): DetailedInterface
    {
        $instance = new Detailed($this->apiManager, $this->getUserAgent(), $workspace_id);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }

    /**
     * @param int $workspace_id
     * @return SummaryInterface
     */
    public function summary(int $workspace_id): SummaryInterface
    {
        $instance = new Summary($this->apiManager, $this->getUserAgent(), $workspace_id);

        if (empty($instance)) {
            //TODO: Throw Exception Invalid instance
        }

        return $instance;
    }
}