<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/customer_feed_service.proto

namespace Google\Ads\GoogleAds\V8\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the customer feed mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.services.MutateCustomerFeedResult</code>
 */
class MutateCustomerFeedResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The mutated customer feed with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.CustomerFeed customer_feed = 2;</code>
     */
    protected $customer_feed = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V8\Resources\CustomerFeed $customer_feed
     *           The mutated customer feed with only mutable fields after mutate. The field
     *           will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Services\CustomerFeedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated customer feed with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.CustomerFeed customer_feed = 2;</code>
     * @return \Google\Ads\GoogleAds\V8\Resources\CustomerFeed|null
     */
    public function getCustomerFeed()
    {
        return isset($this->customer_feed) ? $this->customer_feed : null;
    }

    public function hasCustomerFeed()
    {
        return isset($this->customer_feed);
    }

    public function clearCustomerFeed()
    {
        unset($this->customer_feed);
    }

    /**
     * The mutated customer feed with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.CustomerFeed customer_feed = 2;</code>
     * @param \Google\Ads\GoogleAds\V8\Resources\CustomerFeed $var
     * @return $this
     */
    public function setCustomerFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Resources\CustomerFeed::class);
        $this->customer_feed = $var;

        return $this;
    }

}

