<?php

namespace KMurgadella\TogglSdk\TogglReportsApi\Model;

/**
 * Interface FilterInterface
 * @package KMurgadella\TogglSdk\TogglReportsApi\Model
 */
interface FilterInterface
{
    /**
     * @return int
     */
    public function getWorkspaceId(): int;

    /**
     * @param int $workspace_id
     * @return mixed
     */
    public function setWorkspaceId(int $workspace_id);

    /**
     * @return string
     */
    public function getUserAgent(): string;

    /**
     * @param string $user_agent
     * @return mixed
     */
    public function setUserAgent(string $user_agent);

    /**
     * @return string
     */
    public function getSince(): ?string;

    /**
     * @param string $since
     * @return mixed
     */
    public function setSince(string $since);

    /**
     * @return string
     */
    public function getUntil(): ?string;

    /**
     * @param string $until
     * @return mixed
     */
    public function setUntil(string $until);

    /**
     * @return string
     */
    public function getBillable(): ?string;

    /**
     * @param string $billable
     * @return mixed
     */
    public function setBillable(string $billable);

    /**
     * @return string
     */
    public function getClientIds(): ?string;

    /**
     * @param string $client_ids
     * @return mixed
     */
    public function setClientIds(string $client_ids);

    /**
     * @return string
     */
    public function getProjectIds(): ?string;

    /**
     * @param string $project_ids
     * @return mixed
     */
    public function setProjectIds(string $project_ids);

    /**
     * @return string
     */
    public function getUserIds(): ?string;

    /**
     * @param string $user_ids
     * @return mixed
     */
    public function setUserIds(string $user_ids);

    /**
     * @return string
     */
    public function getMembersOfGroupIds(): ?string;

    /**
     * @param string $members_of_group_ids
     * @return mixed
     */
    public function setMembersOfGroupIds(string $members_of_group_ids);

    /**
     * @return string
     */
    public function getTagIds(): ?string;

    /**
     * @param string $tag_ids
     * @return mixed
     */
    public function setTagIds(string $tag_ids);

    /**
     * @return string
     */
    public function getTaskIds(): ?string;

    /**
     * @param string $task_ids
     * @return mixed
     */
    public function setTaskIds(string $task_ids);

    /**
     * @return string
     */
    public function getTimeEntryIds(): ?string;

    /**
     * @param string $time_entry_ids
     * @return mixed
     */
    public function setTimeEntryIds(string $time_entry_ids);

    /**
     * @return string
     */
    public function getDescription(): ?string;

    /**
     * @param string $description
     * @return mixed
     */
    public function setDescription(string $description);

    /**
     * @return string
     */
    public function getWithoutDescription(): ?string;

    /**
     * @param string $without_description
     * @return mixed
     */
    public function setWithoutDescription(string $without_description);

    /**
     * @return string
     */
    public function getOrderField(): ?string;

    /**
     * @param string $order_field
     * @return mixed
     */
    public function setOrderField(string $order_field);

    /**
     * @return string
     */
    public function getOrderDesc(): ?string;

    /**
     * @param string $order_desc
     * @return mixed
     */
    public function setOrderDesc(string $order_desc);

    /**
     * @return string
     */
    public function getDistinctRates(): ?string;

    /**
     * @param string $distinct_rates
     * @return mixed
     */
    public function setDistinctRates(string $distinct_rates);

    /**
     * @return string
     */
    public function getRounding(): ?string;

    /**
     * @param string $rounding
     * @return mixed
     */
    public function setRounding(string $rounding);

    /**
     * @return string
     */
    public function getDisplayHours(): ?string;

    /**
     * @param $display_hours
     * @return mixed
     */
    public function setDisplayHours($display_hours);
}