<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V6\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed item.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.resources.FeedItem</code>
 */
class FeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the feed item.
     * Feed item resource names have the form:
     * `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>string feed = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $feed = null;
    /**
     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>int64 id = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string start_date_time = 13;</code>
     */
    protected $start_date_time = null;
    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string end_date_time = 14;</code>
     */
    protected $end_date_time = null;
    /**
     * The feed item's attribute values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.resources.FeedItemAttributeValue attribute_values = 6;</code>
     */
    private $attribute_values;
    /**
     * Geo targeting restriction specifies the type of location that can be used
     * for targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.GeoTargetingRestrictionEnum.GeoTargetingRestriction geo_targeting_restriction = 7;</code>
     */
    protected $geo_targeting_restriction = 0;
    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.common.CustomParameter url_custom_parameters = 8;</code>
     */
    private $url_custom_parameters;
    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.FeedItemStatusEnum.FeedItemStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. List of info about a feed item's validation and approval state for active
     * feed mappings. There will be an entry in the list for each type of feed
     * mapping associated with the feed, e.g. a feed with a sitelink and a call
     * feed mapping would cause every feed item associated with that feed to have
     * an entry in this list for both sitelink and call.
     * This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.resources.FeedItemPlaceholderPolicyInfo policy_infos = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $policy_infos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the feed item.
     *           Feed item resource names have the form:
     *           `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *     @type string $feed
     *           Immutable. The feed to which this feed item belongs.
     *     @type int|string $id
     *           Output only. The ID of this feed item.
     *     @type string $start_date_time
     *           Start time in which this feed item is effective and can begin serving. The
     *           time is in the customer's time zone.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type string $end_date_time
     *           End time in which this feed item is no longer effective and will stop
     *           serving. The time is in the customer's time zone.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Ads\GoogleAds\V6\Resources\FeedItemAttributeValue[]|\Google\Protobuf\Internal\RepeatedField $attribute_values
     *           The feed item's attribute values.
     *     @type int $geo_targeting_restriction
     *           Geo targeting restriction specifies the type of location that can be used
     *           for targeting.
     *     @type \Google\Ads\GoogleAds\V6\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           The list of mappings used to substitute custom parameter tags in a
     *           `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *     @type int $status
     *           Output only. Status of the feed item.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V6\Resources\FeedItemPlaceholderPolicyInfo[]|\Google\Protobuf\Internal\RepeatedField $policy_infos
     *           Output only. List of info about a feed item's validation and approval state for active
     *           feed mappings. There will be an entry in the list for each type of feed
     *           mapping associated with the feed, e.g. a feed with a sitelink and a call
     *           feed mapping would cause every feed item associated with that feed to have
     *           an entry in this list for both sitelink and call.
     *           This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the feed item.
     * Feed item resource names have the form:
     * `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the feed item.
     * Feed item resource names have the form:
     * `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>string feed = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : '';
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>string feed = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed = $var;

        return $this;
    }

    /**
     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>int64 id = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>int64 id = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string start_date_time = 13;</code>
     * @return string
     */
    public function getStartDateTime()
    {
        return isset($this->start_date_time) ? $this->start_date_time : '';
    }

    public function hasStartDateTime()
    {
        return isset($this->start_date_time);
    }

    public function clearStartDateTime()
    {
        unset($this->start_date_time);
    }

    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string start_date_time = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string end_date_time = 14;</code>
     * @return string
     */
    public function getEndDateTime()
    {
        return isset($this->end_date_time) ? $this->end_date_time : '';
    }

    public function hasEndDateTime()
    {
        return isset($this->end_date_time);
    }

    public function clearEndDateTime()
    {
        unset($this->end_date_time);
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string end_date_time = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date_time = $var;

        return $this;
    }

    /**
     * The feed item's attribute values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.resources.FeedItemAttributeValue attribute_values = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeValues()
    {
        return $this->attribute_values;
    }

    /**
     * The feed item's attribute values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.resources.FeedItemAttributeValue attribute_values = 6;</code>
     * @param \Google\Ads\GoogleAds\V6\Resources\FeedItemAttributeValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V6\Resources\FeedItemAttributeValue::class);
        $this->attribute_values = $arr;

        return $this;
    }

    /**
     * Geo targeting restriction specifies the type of location that can be used
     * for targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.GeoTargetingRestrictionEnum.GeoTargetingRestriction geo_targeting_restriction = 7;</code>
     * @return int
     */
    public function getGeoTargetingRestriction()
    {
        return $this->geo_targeting_restriction;
    }

    /**
     * Geo targeting restriction specifies the type of location that can be used
     * for targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.GeoTargetingRestrictionEnum.GeoTargetingRestriction geo_targeting_restriction = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGeoTargetingRestriction($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V6\Enums\GeoTargetingRestrictionEnum\GeoTargetingRestriction::class);
        $this->geo_targeting_restriction = $var;

        return $this;
    }

    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.common.CustomParameter url_custom_parameters = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.common.CustomParameter url_custom_parameters = 8;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V6\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.FeedItemStatusEnum.FeedItemStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.FeedItemStatusEnum.FeedItemStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V6\Enums\FeedItemStatusEnum\FeedItemStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. List of info about a feed item's validation and approval state for active
     * feed mappings. There will be an entry in the list for each type of feed
     * mapping associated with the feed, e.g. a feed with a sitelink and a call
     * feed mapping would cause every feed item associated with that feed to have
     * an entry in this list for both sitelink and call.
     * This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.resources.FeedItemPlaceholderPolicyInfo policy_infos = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyInfos()
    {
        return $this->policy_infos;
    }

    /**
     * Output only. List of info about a feed item's validation and approval state for active
     * feed mappings. There will be an entry in the list for each type of feed
     * mapping associated with the feed, e.g. a feed with a sitelink and a call
     * feed mapping would cause every feed item associated with that feed to have
     * an entry in this list for both sitelink and call.
     * This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.resources.FeedItemPlaceholderPolicyInfo policy_infos = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V6\Resources\FeedItemPlaceholderPolicyInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V6\Resources\FeedItemPlaceholderPolicyInfo::class);
        $this->policy_infos = $arr;

        return $this;
    }

}

