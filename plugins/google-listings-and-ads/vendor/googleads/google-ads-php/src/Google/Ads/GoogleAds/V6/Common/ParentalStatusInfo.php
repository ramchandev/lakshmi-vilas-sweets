<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/criteria.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A parental status criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.ParentalStatusInfo</code>
 */
class ParentalStatusInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.ParentalStatusTypeEnum.ParentalStatusType type = 1;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of the parental status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.ParentalStatusTypeEnum.ParentalStatusType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.ParentalStatusTypeEnum.ParentalStatusType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V6\Enums\ParentalStatusTypeEnum\ParentalStatusType::class);
        $this->type = $var;

        return $this;
    }

}

