<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a data exchange.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.CreateDataExchangeRequest</code>
 */
class CreateDataExchangeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource path of the data exchange.
     * e.g. `projects/myproject/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID of the data exchange.
     * Must contain only ASCII letters, numbers (0-9), underscores (_).
     * Max length: 100 bytes.
     *
     * Generated from protobuf field <code>string data_exchange_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_exchange_id = '';
    /**
     * Required. The data exchange to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.DataExchange data_exchange = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_exchange = null;

    /**
     * @param string                                              $parent       Required. The parent resource path of the data exchange.
     *                                                                          e.g. `projects/myproject/locations/US`. Please see
     *                                                                          {@see AnalyticsHubServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\BigQuery\AnalyticsHub\V1\DataExchange $dataExchange Required. The data exchange to create.
     *
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\CreateDataExchangeRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\BigQuery\AnalyticsHub\V1\DataExchange $dataExchange): self
    {
        return (new self())
            ->setParent($parent)
            ->setDataExchange($dataExchange);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource path of the data exchange.
     *           e.g. `projects/myproject/locations/US`.
     *     @type string $data_exchange_id
     *           Required. The ID of the data exchange.
     *           Must contain only ASCII letters, numbers (0-9), underscores (_).
     *           Max length: 100 bytes.
     *     @type \Google\Cloud\BigQuery\AnalyticsHub\V1\DataExchange $data_exchange
     *           Required. The data exchange to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource path of the data exchange.
     * e.g. `projects/myproject/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource path of the data exchange.
     * e.g. `projects/myproject/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID of the data exchange.
     * Must contain only ASCII letters, numbers (0-9), underscores (_).
     * Max length: 100 bytes.
     *
     * Generated from protobuf field <code>string data_exchange_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataExchangeId()
    {
        return $this->data_exchange_id;
    }

    /**
     * Required. The ID of the data exchange.
     * Must contain only ASCII letters, numbers (0-9), underscores (_).
     * Max length: 100 bytes.
     *
     * Generated from protobuf field <code>string data_exchange_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataExchangeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_exchange_id = $var;

        return $this;
    }

    /**
     * Required. The data exchange to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.DataExchange data_exchange = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\DataExchange|null
     */
    public function getDataExchange()
    {
        return $this->data_exchange;
    }

    public function hasDataExchange()
    {
        return isset($this->data_exchange);
    }

    public function clearDataExchange()
    {
        unset($this->data_exchange);
    }

    /**
     * Required. The data exchange to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.DataExchange data_exchange = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\AnalyticsHub\V1\DataExchange $var
     * @return $this
     */
    public function setDataExchange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\AnalyticsHub\V1\DataExchange::class);
        $this->data_exchange = $var;

        return $this;
    }

}

