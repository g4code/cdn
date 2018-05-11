<?php

namespace G4\Cdn;

class ContentMap
{

    public static function getMap(ContentLocation $aContentLocation)
    {
        return [
            ContentConstants::CSS_JS_LOCATION            => $aContentLocation->getCssJsLocation(),
            ContentConstants::FONT_LOCATION              => $aContentLocation->getFontLocation(),
            ContentConstants::IMAGE_ICON_LOCATION        => $aContentLocation->getIconImageLocation(),
            ContentConstants::IMAGE_USER_LOCATION        => $aContentLocation->getProfileImageLocation(),
            ContentConstants::VIDEO_LOCATION             => $aContentLocation->getVideoLocation(),
            ContentConstants::CDN_VIDEO_LOCATION         => $aContentLocation->getCdnVideoLocation(),
            ContentConstants::CDN_IMAGE_LOCATION         => $aContentLocation->getCdnImageLocation(),
            ContentConstants::CDN_IMAGE_MEMBERS_LOCATION => $aContentLocation->getCdnImageMembersLocation(),
            ContentConstants::CDN_GLOBAL_LOCATION        => $aContentLocation->getGlobalPath()
        ];
    }


}