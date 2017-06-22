<?php

namespace G4\Cdn;

class ContentLocationFactory
{

    public static function create($data)
    {
        return new ContentLocation(
            self::getData($data, ContentConstants::CSS_JS_LOCATION),
            self::getData($data, ContentConstants::FONT_LOCATION),
            self::getData($data, ContentConstants::IMAGE_ICON_LOCATION),
            self::getData($data, ContentConstants::IMAGE_USER_LOCATION),
            self::getData($data, ContentConstants::VIDEO_LOCATION),
            self::getData($data, ContentConstants::CDN_VIDEO_LOCATION),
            self::getData($data, ContentConstants::CDN_IMAGE_LOCATION)
        );
    }

    private static function getData($data, $key)
    {
        return isset($data[$key])
            ? $data[$key]
            : null;
    }

}