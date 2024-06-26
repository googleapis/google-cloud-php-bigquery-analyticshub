<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for deleting a subscription.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.DeleteSubscriptionRequest</code>
 */
class DeleteSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the subscription to delete.
     * e.g. projects/123/locations/US/subscriptions/456
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the subscription to delete.
     *                     e.g. projects/123/locations/US/subscriptions/456
     *                     Please see {@see AnalyticsHubServiceClient::subscriptionName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\DeleteSubscriptionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the subscription to delete.
     *           e.g. projects/123/locations/US/subscriptions/456
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the subscription to delete.
     * e.g. projects/123/locations/US/subscriptions/456
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the subscription to delete.
     * e.g. projects/123/locations/US/subscriptions/456
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

