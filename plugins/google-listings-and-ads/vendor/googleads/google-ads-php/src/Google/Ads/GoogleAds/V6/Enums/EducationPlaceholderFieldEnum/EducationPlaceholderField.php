<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/education_placeholder_field.proto

namespace Google\Ads\GoogleAds\V6\Enums\EducationPlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Education placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.EducationPlaceholderFieldEnum.EducationPlaceholderField</code>
 */
class EducationPlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. Required. Combination of PROGRAM ID and LOCATION ID
     * must be unique per offer.
     *
     * Generated from protobuf enum <code>PROGRAM_ID = 2;</code>
     */
    const PROGRAM_ID = 2;
    /**
     * Data Type: STRING. Combination of PROGRAM ID and LOCATION ID must be
     * unique per offer.
     *
     * Generated from protobuf enum <code>LOCATION_ID = 3;</code>
     */
    const LOCATION_ID = 3;
    /**
     * Data Type: STRING. Required. Main headline with program name to be shown
     * in dynamic ad.
     *
     * Generated from protobuf enum <code>PROGRAM_NAME = 4;</code>
     */
    const PROGRAM_NAME = 4;
    /**
     * Data Type: STRING. Area of study that can be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>AREA_OF_STUDY = 5;</code>
     */
    const AREA_OF_STUDY = 5;
    /**
     * Data Type: STRING. Description of program that can be shown in dynamic
     * ad.
     *
     * Generated from protobuf enum <code>PROGRAM_DESCRIPTION = 6;</code>
     */
    const PROGRAM_DESCRIPTION = 6;
    /**
     * Data Type: STRING. Name of school that can be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>SCHOOL_NAME = 7;</code>
     */
    const SCHOOL_NAME = 7;
    /**
     * Data Type: STRING. Complete school address, including postal code.
     *
     * Generated from protobuf enum <code>ADDRESS = 8;</code>
     */
    const ADDRESS = 8;
    /**
     * Data Type: URL. Image to be displayed in ads.
     *
     * Generated from protobuf enum <code>THUMBNAIL_IMAGE_URL = 9;</code>
     */
    const THUMBNAIL_IMAGE_URL = 9;
    /**
     * Data Type: URL. Alternative hosted file of image to be used in the ad.
     *
     * Generated from protobuf enum <code>ALTERNATIVE_THUMBNAIL_IMAGE_URL = 10;</code>
     */
    const ALTERNATIVE_THUMBNAIL_IMAGE_URL = 10;
    /**
     * Data Type: URL_LIST. Required. Final URLs to be used in ad when using
     * Upgraded URLs; the more specific the better (e.g. the individual URL of a
     * specific program and its location).
     *
     * Generated from protobuf enum <code>FINAL_URLS = 11;</code>
     */
    const FINAL_URLS = 11;
    /**
     * Data Type: URL_LIST. Final mobile URLs for the ad when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>FINAL_MOBILE_URLS = 12;</code>
     */
    const FINAL_MOBILE_URLS = 12;
    /**
     * Data Type: URL. Tracking template for the ad when using Upgraded URLs.
     *
     * Generated from protobuf enum <code>TRACKING_URL = 13;</code>
     */
    const TRACKING_URL = 13;
    /**
     * Data Type: STRING_LIST. Keywords used for product retrieval.
     *
     * Generated from protobuf enum <code>CONTEXTUAL_KEYWORDS = 14;</code>
     */
    const CONTEXTUAL_KEYWORDS = 14;
    /**
     * Data Type: STRING. Android app link. Must be formatted as:
     * android-app://{package_id}/{scheme}/{host_path}.
     * The components are defined as follows:
     * package_id: app ID as specified in Google Play.
     * scheme: the scheme to pass to the application. Can be HTTP, or a custom
     *   scheme.
     * host_path: identifies the specific content within your application.
     *
     * Generated from protobuf enum <code>ANDROID_APP_LINK = 15;</code>
     */
    const ANDROID_APP_LINK = 15;
    /**
     * Data Type: STRING_LIST. List of recommended program IDs to show together
     * with this item.
     *
     * Generated from protobuf enum <code>SIMILAR_PROGRAM_IDS = 16;</code>
     */
    const SIMILAR_PROGRAM_IDS = 16;
    /**
     * Data Type: STRING. iOS app link.
     *
     * Generated from protobuf enum <code>IOS_APP_LINK = 17;</code>
     */
    const IOS_APP_LINK = 17;
    /**
     * Data Type: INT64. iOS app store ID.
     *
     * Generated from protobuf enum <code>IOS_APP_STORE_ID = 18;</code>
     */
    const IOS_APP_STORE_ID = 18;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PROGRAM_ID => 'PROGRAM_ID',
        self::LOCATION_ID => 'LOCATION_ID',
        self::PROGRAM_NAME => 'PROGRAM_NAME',
        self::AREA_OF_STUDY => 'AREA_OF_STUDY',
        self::PROGRAM_DESCRIPTION => 'PROGRAM_DESCRIPTION',
        self::SCHOOL_NAME => 'SCHOOL_NAME',
        self::ADDRESS => 'ADDRESS',
        self::THUMBNAIL_IMAGE_URL => 'THUMBNAIL_IMAGE_URL',
        self::ALTERNATIVE_THUMBNAIL_IMAGE_URL => 'ALTERNATIVE_THUMBNAIL_IMAGE_URL',
        self::FINAL_URLS => 'FINAL_URLS',
        self::FINAL_MOBILE_URLS => 'FINAL_MOBILE_URLS',
        self::TRACKING_URL => 'TRACKING_URL',
        self::CONTEXTUAL_KEYWORDS => 'CONTEXTUAL_KEYWORDS',
        self::ANDROID_APP_LINK => 'ANDROID_APP_LINK',
        self::SIMILAR_PROGRAM_IDS => 'SIMILAR_PROGRAM_IDS',
        self::IOS_APP_LINK => 'IOS_APP_LINK',
        self::IOS_APP_STORE_ID => 'IOS_APP_STORE_ID',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EducationPlaceholderField::class, \Google\Ads\GoogleAds\V6\Enums\EducationPlaceholderFieldEnum_EducationPlaceholderField::class);

