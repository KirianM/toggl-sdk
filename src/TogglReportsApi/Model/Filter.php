<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Model;

/**
 * Class Filter
 * @package KMurgadella\TogglSdk\TogglReportsApi\Model
 */
class Filter implements FilterInterface
{
    /**
     * @var
     */
    protected $workspace_id;
    /**
     * @var
     */
    protected $user_agent;
    /**
     * @var
     */
    protected $since;
    /**
     * @var
     */
    protected $until;
    /**
     * @var
     */
    protected $billable;
    /**
     * @var
     */
    protected $client_ids;
    /**
     * @var
     */
    protected $project_ids;
    /**
     * @var
     */
    protected $user_ids;
    /**
     * @var
     */
    protected $members_of_group_ids;
    /**
     * @var
     */
    protected $tag_ids;
    /**
     * @var
     */
    protected $task_ids;
    /**
     * @var
     */
    protected $time_entry_ids;
    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $without_description;
    /**
     * @var
     */
    protected $order_field;
    /**
     * @var
     */
    protected $order_desc;
    /**
     * @var
     */
    protected $distinct_rates;
    /**
     * @var
     */
    protected $rounding;
    /**
     * @var
     */
    protected $display_hours;

    /**
     * @return string
     */
    public function toUrlParamaters()
    {
        if (empty($this->getUserAgent())) {
            //TODO: Throw Expection Required parameter
        }

        if (empty($this->getWorkspaceId())) {
            //TODO: Throw Expection Required parameter
        }

        $url = '?user_agent=' . $this->getUserAgent() . '&workspace_id=' . $this->getWorkspaceId();

        foreach (get_object_vars($this) as $property => $property_value) {
            if (!in_array($property, ['user_agent', 'workspace_id'])) {
                $method = $this->getter($property);

                if (!empty($method)) {
                    $value = call_user_func([$this, $method]);

                    if (!empty($value)) {
                        $url .= sprintf('&%s=%s', $property, $value);
                    }
                }
            }
        }

        return $url;
    }

    /**
     * @param string $property
     * @return null|string
     */
    protected function getter(string $property)
    {
        $method = null;

        $parsed = explode('_', $property);

        foreach ($parsed as $part) {
            $method .= ucfirst($part);
        }

        if (!empty($method)) {
            $method = 'get' . $method;
        }

        return $method;
    }

    /**
     * @return int
     */
    public function getWorkspaceId(): int
    {
        return $this->workspace_id;
    }

    /**
     * @param int $workspace_id
     * @return $this
     */
    public function setWorkspaceId(int $workspace_id)
    {
        $this->workspace_id = $workspace_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->user_agent;
    }

    /**
     * @param string $user_agent
     * @return $this
     */
    public function setUserAgent(string $user_agent)
    {
        $this->user_agent = $user_agent;
        return $this;
    }

    /**
     * @return string
     */
    public function getSince(): ?string
    {
        return $this->since;
    }

    /**
     * @param string $since
     * @return $this
     */
    public function setSince(string $since)
    {
        $this->since = $since;
        return $this;
    }

    /**
     * @return string
     */
    public function getUntil(): ?string
    {
        return $this->until;
    }

    /**
     * @param string $until
     * @return $this
     */
    public function setUntil(string $until)
    {
        $this->until = $until;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillable(): ?string
    {
        return $this->billable;
    }

    /**
     * @param string $billable
     * @return $this
     */
    public function setBillable(string $billable)
    {
        $this->billable = $billable;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientIds(): ?string
    {
        return $this->client_ids;
    }

    /**
     * @param string $client_ids
     * @return $this
     */
    public function setClientIds(string $client_ids)
    {
        $this->client_ids = $client_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectIds(): ?string
    {
        return $this->project_ids;
    }

    /**
     * @param string $project_ids
     * @return $this
     */
    public function setProjectIds(string $project_ids)
    {
        $this->project_ids = $project_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserIds(): ?string
    {
        return $this->user_ids;
    }

    /**
     * @param string $user_ids
     * @return $this
     */
    public function setUserIds(string $user_ids)
    {
        $this->user_ids = $user_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getMembersOfGroupIds(): ?string
    {
        return $this->members_of_group_ids;
    }

    /**
     * @param string $members_of_group_ids
     * @return $this
     */
    public function setMembersOfGroupIds(string $members_of_group_ids)
    {
        $this->members_of_group_ids = $members_of_group_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagIds(): ?string
    {
        return $this->tag_ids;
    }

    /**
     * @param string $tag_ids
     * @return $this
     */
    public function setTagIds(string $tag_ids)
    {
        $this->tag_ids = $tag_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskIds(): ?string
    {
        return $this->task_ids;
    }

    /**
     * @param string $task_ids
     * @return $this
     */
    public function setTaskIds(string $task_ids)
    {
        $this->task_ids = $task_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeEntryIds(): ?string
    {
        return $this->time_entry_ids;
    }

    /**
     * @param string $time_entry_ids
     * @return $this
     */
    public function setTimeEntryIds(string $time_entry_ids)
    {
        $this->time_entry_ids = $time_entry_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getWithoutDescription(): ?string
    {
        return $this->without_description;
    }

    /**
     * @param string $without_description
     * @return $this
     */
    public function setWithoutDescription(string $without_description)
    {
        $this->without_description = $without_description;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderField(): ?string
    {
        return $this->order_field;
    }

    /**
     * @param string $order_field
     * @return $this
     */
    public function setOrderField(string $order_field)
    {
        $this->order_field = $order_field;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderDesc(): ?string
    {
        return $this->order_desc;
    }

    /**
     * @param string $order_desc
     * @return $this
     */
    public function setOrderDesc(string $order_desc)
    {
        $this->order_desc = $order_desc;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistinctRates(): ?string
    {
        return $this->distinct_rates;
    }

    /**
     * @param string $distinct_rates
     * @return $this
     */
    public function setDistinctRates(string $distinct_rates)
    {
        $this->distinct_rates = $distinct_rates;
        return $this;
    }

    /**
     * @return string
     */
    public function getRounding(): ?string
    {
        return $this->rounding;
    }

    /**
     * @param string $rounding
     * @return $this
     */
    public function setRounding(string $rounding)
    {
        $this->rounding = $rounding;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayHours(): ?string
    {
        return $this->display_hours;
    }

    /**
     * @param $display_hours
     * @return $this
     */
    public function setDisplayHours($display_hours)
    {
        $this->display_hours = $display_hours;
        return $this;
    }
}