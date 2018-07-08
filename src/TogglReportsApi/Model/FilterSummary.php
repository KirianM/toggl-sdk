<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Model;

/**
 * Class FilterSummary
 * @package KMurgadella\TogglSdk\TogglReportsApi\Model
 */
class FilterSummary extends Filter
{
    /**
     * @var
     */
    protected $grouping;

    /**
     * @var
     */
    protected $subgrouping;

    /**
     * @var
     */
    protected $subgrouping_ids;

    /**
     * @var
     */
    protected $grouped_time_entry_ids;

    /**
     * @return mixed
     */
    public function getGrouping(): ?string
    {
        return $this->grouping;
    }

    /**
     * @param mixed $grouping
     * @return FilterSummary
     */
    public function setGrouping(string $grouping)
    {
        $this->grouping = $grouping;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubgrouping(): ?string
    {
        return $this->subgrouping;
    }

    /**
     * @param mixed $subgrouping
     * @return FilterSummary
     */
    public function setSubgrouping(string $subgrouping)
    {
        $this->subgrouping = $subgrouping;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubgroupingIds()
    {
        return $this->subgrouping_ids;
    }

    /**
     * @param mixed $subgrouping_ids
     * @return FilterSummary
     */
    public function setSubgroupingIds($subgrouping_ids)
    {
        $this->subgrouping_ids = $subgrouping_ids;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupedTimeEntryIds()
    {
        return $this->grouped_time_entry_ids;
    }

    /**
     * @param mixed $grouped_time_entry_ids
     * @return FilterSummary
     */
    public function setGroupedTimeEntryIds($grouped_time_entry_ids)
    {
        $this->grouped_time_entry_ids = $grouped_time_entry_ids;
        return $this;
    }
}