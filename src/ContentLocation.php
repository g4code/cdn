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

    private $cdnImageLocation;

    private $cdnImageMembersLocation;

    private $globalPath;

    public function __construct($cssJsLocation, $fontLocation, $iconImageLocation, $profileImageLocation, $videoLocation, $cdnVideoLocation, $cdnImageLocation,  $cdnImageMembersLocation, $globalPath)
    {
        $this->cssJsLocation           = $cssJsLocation;
        $this->fontLocation            = $fontLocation;
        $this->iconImageLocation       = $iconImageLocation;
        $this->profileImageLocation    = $profileImageLocation;
        $this->videoLocation           = $videoLocation;
        $this->cdnVideoLocation        = $cdnVideoLocation;
        $this->cdnImageLocation        = $cdnImageLocation;
        $this->cdnImageMembersLocation = $cdnImageMembersLocation;
        $this->globalPath              = $globalPath;
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

    public function getCdnImageLocation()
    {
        return $this->cdnImageLocation;
    }

    public function getCdnImageMembersLocation()
    {
        return $this->cdnImageMembersLocation;
    }

    public function getGlobalPath()
    {
        return $this->globalPath;
    }

}