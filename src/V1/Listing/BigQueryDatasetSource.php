<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1\Listing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference to a shared dataset. It is an existing BigQuery dataset with a
 * collection of objects such as tables and views that you want to share
 * with subscribers.
 * When subscriber's subscribe to a listing, Analytics Hub creates a linked
 * dataset in
 * the subscriber's project. A Linked dataset is an opaque, read-only BigQuery
 * dataset that serves as a _symbolic link_ to a shared dataset.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource</code>
 */
class BigQueryDatasetSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $dataset = '';
    /**
     * Optional. Resource in this dataset that is selectively shared.
     * This field is required for data clean room exchanges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.SelectedResource selected_resources = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $selected_resources;
    /**
     * Optional. If set, restricted export policy will be propagated and
     * enforced on the linked dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.RestrictedExportPolicy restricted_export_policy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $restricted_export_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Optional. Resource name of the dataset source for this listing.
     *           e.g. `projects/myproject/datasets/123`
     *     @type array<\Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\SelectedResource>|\Google\Protobuf\Internal\RepeatedField $selected_resources
     *           Optional. Resource in this dataset that is selectively shared.
     *           This field is required for data clean room exchanges.
     *     @type \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\RestrictedExportPolicy $restricted_export_policy
     *           Optional. If set, restricted export policy will be propagated and
     *           enforced on the linked dataset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Optional. Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Optional. Resource in this dataset that is selectively shared.
     * This field is required for data clean room exchanges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.SelectedResource selected_resources = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedResources()
    {
        return $this->selected_resources;
    }

    /**
     * Optional. Resource in this dataset that is selectively shared.
     * This field is required for data clean room exchanges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.SelectedResource selected_resources = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\SelectedResource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectedResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\SelectedResource::class);
        $this->selected_resources = $arr;

        return $this;
    }

    /**
     * Optional. If set, restricted export policy will be propagated and
     * enforced on the linked dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.RestrictedExportPolicy restricted_export_policy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\RestrictedExportPolicy|null
     */
    public function getRestrictedExportPolicy()
    {
        return $this->restricted_export_policy;
    }

    public function hasRestrictedExportPolicy()
    {
        return isset($this->restricted_export_policy);
    }

    public function clearRestrictedExportPolicy()
    {
        unset($this->restricted_export_policy);
    }

    /**
     * Optional. If set, restricted export policy will be propagated and
     * enforced on the linked dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.RestrictedExportPolicy restricted_export_policy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\RestrictedExportPolicy $var
     * @return $this
     */
    public function setRestrictedExportPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\RestrictedExportPolicy::class);
        $this->restricted_export_policy = $var;

        return $this;
    }

}


