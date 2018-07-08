<?php

namespace KMurgadella\TogglSdk\TogglReportsApi;

use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\DetailedInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\SummaryInterface;
use KMurgadella\TogglSdk\TogglReportsApi\Repository\Contracts\WeeklyInterface;

/**
 * Class ReportsApiInterface
 * @package KMurgadella\TogglSdk\TogglReportsApi
 */
interface ReportsApiInterface
{
    /**
     * @param int $workspace_id
     * @return WeeklyInterface
     */
    public function weekly(int $workspace_id): WeeklyInterface;

    /**
     * @param int $workspace_id
     * @return DetailedInterface
     */
    public function detailed(int $workspace_id): DetailedInterface;

    /**
     * @param int $workspace_id
     * @return SummaryInterface
     */
    public function summary(int $workspace_id): SummaryInterface;
}