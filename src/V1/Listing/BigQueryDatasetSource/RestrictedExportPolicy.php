<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Restricted export policy used to configure restricted export on linked
 * dataset.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.RestrictedExportPolicy</code>
 */
class RestrictedExportPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If true, enable restricted export.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enabled = null;
    /**
     * Optional. If true, restrict direct table access (read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_direct_table_access = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $restrict_direct_table_access = null;
    /**
     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_query_result = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $restrict_query_result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $enabled
     *           Optional. If true, enable restricted export.
     *     @type \Google\Protobuf\BoolValue $restrict_direct_table_access
     *           Optional. If true, restrict direct table access (read
     *           api/tabledata.list) on linked table.
     *     @type \Google\Protobuf\BoolValue $restrict_query_result
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
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * Returns the unboxed value from <code>getEnabled()</code>

     * Optional. If true, enable restricted export.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool|null
     */
    public function getEnabledUnwrapped()
    {
        return $this->readWrapperValue("enabled");
    }

    /**
     * Optional. If true, enable restricted export.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Optional. If true, enable restricted export.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("enabled", $var);
        return $this;}

    /**
     * Optional. If true, restrict direct table access (read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_direct_table_access = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getRestrictDirectTableAccess()
    {
        return $this->restrict_direct_table_access;
    }

    public function hasRestrictDirectTableAccess()
    {
        return isset($this->restrict_direct_table_access);
    }

    public function clearRestrictDirectTableAccess()
    {
        unset($this->restrict_direct_table_access);
    }

    /**
     * Returns the unboxed value from <code>getRestrictDirectTableAccess()</code>

     * Optional. If true, restrict direct table access (read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_direct_table_access = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool|null
     */
    public function getRestrictDirectTableAccessUnwrapped()
    {
        return $this->readWrapperValue("restrict_direct_table_access");
    }

    /**
     * Optional. If true, restrict direct table access (read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_direct_table_access = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRestrictDirectTableAccess($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->restrict_direct_table_access = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Optional. If true, restrict direct table access (read
     * api/tabledata.list) on linked table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_direct_table_access = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRestrictDirectTableAccessUnwrapped($var)
    {
        $this->writeWrapperValue("restrict_direct_table_access", $var);
        return $this;}

    /**
     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_query_result = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getRestrictQueryResult()
    {
        return $this->restrict_query_result;
    }

    public function hasRestrictQueryResult()
    {
        return isset($this->restrict_query_result);
    }

    public function clearRestrictQueryResult()
    {
        unset($this->restrict_query_result);
    }

    /**
     * Returns the unboxed value from <code>getRestrictQueryResult()</code>

     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_query_result = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool|null
     */
    public function getRestrictQueryResultUnwrapped()
    {
        return $this->readWrapperValue("restrict_query_result");
    }

    /**
     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_query_result = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRestrictQueryResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->restrict_query_result = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Optional. If true, restrict export of query result derived from
     * restricted linked dataset table.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue restrict_query_result = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRestrictQueryResultUnwrapped($var)
    {
        $this->writeWrapperValue("restrict_query_result", $var);
        return $this;}

}


