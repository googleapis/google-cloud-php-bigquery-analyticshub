<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1\Listing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Restricted export config, used to configure restricted export on linked
 * dataset.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.Listing.RestrictedExportConfig</code>
 */
class RestrictedExportConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If true, enable restricted export.
     *
     * Generated from protobuf field <code>bool enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enabled = false;
    /**
     * Output only. If true, restrict direct table access(read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>bool restrict_direct_table_access = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $restrict_direct_table_access = false;
    /**
     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>bool restrict_query_result = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $restrict_query_result = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Optional. If true, enable restricted export.
     *     @type bool $restrict_direct_table_access
     *           Output only. If true, restrict direct table access(read
     *           api/tabledata.list) on linked table.
     *     @type bool $restrict_query_result
     *           Optional. If true, restrict export of query result derived from
     *           restricted linked dataset table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. If true, enable restricted export.
     *
     * Generated from protobuf field <code>bool enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Optional. If true, enable restricted export.
     *
     * Generated from protobuf field <code>bool enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Output only. If true, restrict direct table access(read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>bool restrict_direct_table_access = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getRestrictDirectTableAccess()
    {
        return $this->restrict_direct_table_access;
    }

    /**
     * Output only. If true, restrict direct table access(read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>bool restrict_direct_table_access = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setRestrictDirectTableAccess($var)
    {
        GPBUtil::checkBool($var);
        $this->restrict_direct_table_access = $var;

        return $this;
    }

    /**
     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>bool restrict_query_result = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getRestrictQueryResult()
    {
        return $this->restrict_query_result;
    }

    /**
     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>bool restrict_query_result = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setRestrictQueryResult($var)
    {
        GPBUtil::checkBool($var);
        $this->restrict_query_result = $var;

        return $this;
    }

}


