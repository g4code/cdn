<?php

namespace G4\Cdn;

class ContentLocation
{

    private $cssJsLocation;

    private $fontLocation;

    private $iconImageLocation;

    private $profileImageLocation;

    private $videoLocation;

    private $cdnLocation;

    public function __construct($cssJsLocation, $fontLocation, $iconImageLocation, $profileImageLocation, $videoLocation, $cdnLocation)
    {
        $this->cssJsLocation        = $cssJsLocation;
        $this->fontLocation         = $fontLocation;
        $this->iconImageLocation    = $iconImageLocation;
        $this->profileImageLocation = $profileImageLocation;
        $this->videoLocation        = $videoLocation;
        $this->cdnLocation          = $cdnLocation;
    }

    public function getCdnLocation()
    {
        return $this->cdnLocation;
    }

    public function getCssJsLocation()
    {
        return $this->cssJsLocation;
    }

    public function getFontLocation()
    {
        return $this->fontLocation;
    }

    public function getIconImageLocation()
    {
        return $this->iconImageLocation;
    }

    public function getProfileImageLocation()                           
    {
        return $this->profileImageLocation;
    }

    public function getVideoLocation()
    {
        return $this->videoLocation;
    }



}