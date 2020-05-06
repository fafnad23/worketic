<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result returned from ListLogMetrics.
 *
 * Generated from protobuf message <code>google.logging.v2.ListLogMetricsResponse</code>
 */
class ListLogMetricsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of logs-based metrics.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     */
    private $metrics;
    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Logging\V2\LogMetric[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           A list of logs-based metrics.
     *     @type string $next_page_token
     *           If there might be more results than appear in this response, then
     *           `nextPageToken` is included.  To get the next set of results, call this
     *           method again using the value of `nextPageToken` as `pageToken`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingMetrics::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of logs-based metrics.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * A list of logs-based metrics.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     * @param \Google\Cloud\Logging\V2\LogMetric[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Logging\V2\LogMetric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

