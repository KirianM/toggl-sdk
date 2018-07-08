<?php

namespace KMurgadella\TogglSdk\TogglReportsApi;

use KMurgadella\TogglSdk\TogglReportsApi\Model\Filter;
use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterDetailed;
use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterSummary;
use KMurgadella\TogglSdk\TogglReportsApi\Model\FilterWeekly;

class FilterFactory
{
    public static function create(string $type = null)
    {
        $instance = null;

        switch ($type) {
            case 'weekly':
                $instance = new FilterWeekly();
            break;

            case 'detailed':
                $instance = new FilterDetailed();
            break;

            case 'summary':
                $instance = new FilterSummary();
            break;

            default:
                $instance =  new Filter();
        }

        return $instance;
    }
}