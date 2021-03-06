<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: collector.proto

namespace Lightstep\Collector;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lightstep.collector.Span</code>
 */
class Span extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.lightstep.collector.SpanContext span_context = 1;</code>
     */
    private $span_context = null;
    /**
     * Generated from protobuf field <code>string operation_name = 2;</code>
     */
    private $operation_name = '';
    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Reference references = 3;</code>
     */
    private $references;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_timestamp = 4;</code>
     */
    private $start_timestamp = null;
    /**
     * Generated from protobuf field <code>uint64 duration_micros = 5;</code>
     */
    private $duration_micros = 0;
    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.KeyValue tags = 6;</code>
     */
    private $tags;
    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Log logs = 7;</code>
     */
    private $logs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lightstep\Collector\SpanContext $span_context
     *     @type string $operation_name
     *     @type \Lightstep\Collector\Reference[]|\Google\Protobuf\Internal\RepeatedField $references
     *     @type \Google\Protobuf\Timestamp $start_timestamp
     *     @type int|string $duration_micros
     *     @type \Lightstep\Collector\KeyValue[]|\Google\Protobuf\Internal\RepeatedField $tags
     *     @type \Lightstep\Collector\Log[]|\Google\Protobuf\Internal\RepeatedField $logs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Collector::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.SpanContext span_context = 1;</code>
     * @return \Lightstep\Collector\SpanContext
     */
    public function getSpanContext()
    {
        return $this->span_context;
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.SpanContext span_context = 1;</code>
     * @param \Lightstep\Collector\SpanContext $var
     * @return $this
     */
    public function setSpanContext($var)
    {
        GPBUtil::checkMessage($var, \Lightstep\Collector\SpanContext::class);
        $this->span_context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string operation_name = 2;</code>
     * @return string
     */
    public function getOperationName()
    {
        return $this->operation_name;
    }

    /**
     * Generated from protobuf field <code>string operation_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Reference references = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Reference references = 3;</code>
     * @param \Lightstep\Collector\Reference[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lightstep\Collector\Reference::class);
        $this->references = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_timestamp = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTimestamp()
    {
        return $this->start_timestamp;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_timestamp = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 duration_micros = 5;</code>
     * @return int|string
     */
    public function getDurationMicros()
    {
        return $this->duration_micros;
    }

    /**
     * Generated from protobuf field <code>uint64 duration_micros = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDurationMicros($var)
    {
        GPBUtil::checkUint64($var);
        $this->duration_micros = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.KeyValue tags = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.KeyValue tags = 6;</code>
     * @param \Lightstep\Collector\KeyValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lightstep\Collector\KeyValue::class);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Log logs = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Log logs = 7;</code>
     * @param \Lightstep\Collector\Log[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lightstep\Collector\Log::class);
        $this->logs = $arr;

        return $this;
    }

}

