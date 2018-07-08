<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Model;

/**
 * Class FilterDetailed
 * @package KMurgadella\TogglSdk\TogglReportsApi\Model
 */
class FilterDetailed extends Filter
{
    /**
     * @var
     */
    protected $page;

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     * @return FilterDetailed
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }
}