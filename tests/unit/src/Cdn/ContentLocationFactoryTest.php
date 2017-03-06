<?php


class ContentLocationFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $this->assertInstanceOf(
            'G4\Cdn\ContentLocation',
            \G4\Cdn\ContentLocationFactory::create([])
        );
    }

}