<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Model;

/**
 * Class FilterWeekly
 * @package KMurgadella\TogglSdk\TogglReportsApi\Model
 */
class FilterWeekly extends Filter
{
    /**
     * @var
     */
    protected $grouping;

    /**
     * @var
     */
    protected $calculate;

    /**
     * @return string
     */
    public function getGrouping(): string
    {
        return $this->grouping;
    }

    /**
     * @param string $grouping
     * @return $this
     */
    public function setGrouping(string $grouping)
    {
        $this->grouping = $grouping;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalculate(): string
    {
        return $this->calculate;
    }

    /**
     * @param string $calculate
     * @return $this
     */
    public function setCalculate(string $calculate)
    {
        $this->calculate = $calculate;
        return $this;
    }
}