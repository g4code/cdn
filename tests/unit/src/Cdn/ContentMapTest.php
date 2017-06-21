<?php

use G4\Cdn\ContentConstants;

class ContentMapTest extends PHPUnit_Framework_TestCase
{

    public function testGetMap()
    {
        $this->assertEquals(
            [
                ContentConstants::CSS_JS_LOCATION           => '/css',
                ContentConstants::FONT_LOCATION             => '/font',
                ContentConstants::IMAGE_ICON_LOCATION       => '/image',
                ContentConstants::IMAGE_USER_LOCATION       => '/profile',
                ContentConstants::VIDEO_LOCATION            => '/video',
                ContentConstants::CDN_LOCATION              => '/cdn'
            ],
            \G4\Cdn\ContentMap::getMap($this->contentLocationMock())
        );
    }

    private function contentLocationMock()
    {
        $mock = $this->getMockBuilder('\G4\Cdn\ContentLocation')
            ->disableOriginalConstructor()
            ->getMock();
        $mock->expects($this->once())->method('getCssJsLocation')->willReturn('/css');
        $mock->expects($this->once())->method('getFontLocation')->willReturn('/font');
        $mock->expects($this->once())->method('getIconImageLocation')->willReturn('/image');
        $mock->expects($this->once())->method('getProfileImageLocation')->willReturn('/profile');
        $mock->expects($this->once())->method('getVideoLocation')->willReturn('/video');
        $mock->expects($this->once())->method('getCdnLocation')->willReturn('/cdn');
        return $mock;
    }

}