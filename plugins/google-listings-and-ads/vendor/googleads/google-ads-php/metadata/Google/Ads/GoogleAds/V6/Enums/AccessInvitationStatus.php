<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/access_invitation_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class AccessInvitationStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v6/enums/access_invitation_status.protogoogle.ads.googleads.v6.enums"|
AccessInvitationStatusEnum"^
AccessInvitationStatus
UNSPECIFIED 
UNKNOWN
PENDING
DECLINED
EXPIREDB�
!com.google.ads.googleads.v6.enumsBAccessInvitationStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

