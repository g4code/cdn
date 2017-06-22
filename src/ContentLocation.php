<?php

namespace G4\Cdn;

class ContentLocation
{

    private $cssJsLocation;

    private $fontLocation;

    private $iconImageLocation;

    private $profileImageLocation;

    private $videoLocation;

    private $cdnVideoLocation;

    private $cdnImageIconLocation;

    public function __construct($cssJsLocation, $fontLocation, $iconImageLocation, $profileImageLocation, $videoLocation, $cdnVideoLocation, $cdnImageIconLocation)
    {
        $this->cssJsLocation        = $cssJsLocation;
        $this->fontLocation         = $fontLocation;
        $this->iconImageLocation    = $iconImageLocation;
        $this->profileImageLocation = $profileImageLocation;
        $this->videoLocation        = $videoLocation;
        $this->cdnVideoLocation     = $cdnVideoLocation;
        $this->cdnImageIconLocation = $cdnImageIconLocation;
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

    public function getCdnVideoLocation()
    {
        return $this->cdnVideoLocation;
    }

    public function getCdnImageIconLocation()
    {
        return $this->cdnImageIconLocation;
    }

}