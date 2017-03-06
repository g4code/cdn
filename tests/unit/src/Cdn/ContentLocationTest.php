<?php

class ContentLocationTest extends PHPUnit_Framework_TestCase
{

    private $cssLocation            = '/path/css';
    private $fontLocation           = 'path/font';
    private $iconImageLocation      = 'icon-image/location';
    private $profileImageLocation   = 'profile-image/location';
    private $videoLocation          = 'video/location';

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

   private function contentLocationFactory()
   {
       return new \G4\Cdn\ContentLocation(
           $this->cssLocation,
           $this->fontLocation,
           $this->iconImageLocation,
           $this->profileImageLocation,
           $this->videoLocation
       );
   }

}