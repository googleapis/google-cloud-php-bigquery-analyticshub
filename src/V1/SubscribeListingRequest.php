<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for subscribing to a listing.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.SubscribeListingRequest</code>
 */
class SubscribeListingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the listing that you want to subscribe to.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    protected $destination;

    /**
     * @param string $name Required. Resource name of the listing that you want to subscribe to.
     *                     e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`. Please see
     *                     {@see AnalyticsHubServiceClient::listingName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\SubscribeListingRequest
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
     *     @type \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationDataset $destination_dataset
     *           Input only. BigQuery destination dataset to create for the subscriber.
     *     @type \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationPubSubSubscription $destination_pubsub_subscription
     *           Input only. Destination Pub/Sub subscription to create for the
     *           subscriber.
     *     @type string $name
     *           Required. Resource name of the listing that you want to subscribe to.
     *           e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. BigQuery destination dataset to create for the subscriber.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.DestinationDataset destination_dataset = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationDataset|null
     */
    public function getDestinationDataset()
    {
        return $this->readOneof(3);
    }

    public function hasDestinationDataset()
    {
        return $this->hasOneof(3);
    }

    /**
     * Input only. BigQuery destination dataset to create for the subscriber.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.DestinationDataset destination_dataset = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationDataset $var
     * @return $this
     */
    public function setDestinationDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationDataset::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Input only. Destination Pub/Sub subscription to create for the
     * subscriber.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.DestinationPubSubSubscription destination_pubsub_subscription = 5 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationPubSubSubscription|null
     */
    public function getDestinationPubsubSubscription()
    {
        return $this->readOneof(5);
    }

    public function hasDestinationPubsubSubscription()
    {
        return $this->hasOneof(5);
    }

    /**
     * Input only. Destination Pub/Sub subscription to create for the
     * subscriber.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.DestinationPubSubSubscription destination_pubsub_subscription = 5 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationPubSubSubscription $var
     * @return $this
     */
    public function setDestinationPubsubSubscription($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\AnalyticsHub\V1\DestinationPubSubSubscription::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Required. Resource name of the listing that you want to subscribe to.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the listing that you want to subscribe to.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
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

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

