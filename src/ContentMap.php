<?php

namespace G4\Cdn;

class ContentMap
{

    public static function getMap(ContentLocation $aContentLocation)
    {
        return [
            ContentConstants::CSS_JS_LOCATION           => $aContentLocation->getCssJsLocation(),
            ContentConstants::FONT_LOCATION             => $aContentLocation->getFontLocation(),
            ContentConstants::IMAGE_ICON_LOCATION       => $aContentLocation->getIconImageLocation(),
            ContentConstants::IMAGE_USER_LOCATION       => $aContentLocation->getProfileImageLocation(),
            ContentConstants::VIDEO_LOCATION            => $aContentLocation->getVideoLocation()
        ];
    }


}