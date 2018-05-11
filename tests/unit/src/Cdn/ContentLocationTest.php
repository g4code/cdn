<?php

class ContentLocationTest extends PHPUnit_Framework_TestCase
{

    private $cssLocation             = '/path/css';
    private $fontLocation            = 'path/font';
    private $iconImageLocation       = 'icon-image/location';
    private $profileImageLocation    = 'profile-image/location';
    private $videoLocation           = 'video/location';
    private $cdnVideoLocation        = '/cdn/video';
    private $cdnImageLocation        = '/cdn/image';
    private $cdnImageMembersLocation = '/cdn/image/members';
    private $globalPath              = '/cdn';

   public function testGetCssJsLocation()
   {
        $this->assertEquals(
            $this->cssLocation,
            $this->contentLocationFactory()->getCssJsLocation()
        );
   }

   public function testGetFontLocation()
   {
       $this->assertEquals(
           $this->fontLocation,
           $this->contentLocationFactory()->getFontLocation()
       );
   }

   public function testGetIconImageLocation()
   {
       $this->assertEquals(
           $this->iconImageLocation,
           $this->contentLocationFactory()->getIconImageLocation()
       );
   }

   public function testGetProfileImageLocation()
   {
       $this->assertEquals(
           $this->profileImageLocation,
           $this->contentLocationFactory()->getProfileImageLocation()
       );
   }

   public function testGetVideoLocation()
   {
       $this->assertEquals(
           $this->videoLocation,
           $this->contentLocationFactory()->getVideoLocation()
       );
   }

   public function testCdnVideoLocation()
   {
       $this->assertEquals(
           $this->cdnVideoLocation,
           $this->contentLocationFactory()->getCdnVideoLocation()
       );
   }

    public function testCdnImageLocation()
    {
        $this->assertEquals(
            $this->cdnImageLocation,
            $this->contentLocationFactory()->getCdnImageLocation()
        );
    }

    public function testCdnImageMembersLocation()
    {
        $this->assertEquals(
            $this->cdnImageMembersLocation,
            $this->contentLocationFactory()->getCdnImageMembersLocation()
        );
    }

    public function testGlobalPath()
    {
        $this->assertEquals(
            $this->globalPath,
            $this->contentLocationFactory()->getGlobalPath()
        );
    }

   private function contentLocationFactory()
   {
       return new \G4\Cdn\ContentLocation(
           $this->cssLocation,
           $this->fontLocation,
           $this->iconImageLocation,
           $this->profileImageLocation,
           $this->videoLocation,
           $this->cdnVideoLocation,
           $this->cdnImageLocation,
           $this->cdnImageMembersLocation,
           $this->globalPath
       );
   }

}