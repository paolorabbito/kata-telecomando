<?php

namespace RemoteController;

require_once 'src/RemoteController.php';

use PHPUnit\Framework\TestCase;
use RemoteController\TV;

class RemoteControllerTest extends TestCase
{
    /**
     * @test
     */
    public function turnOnShouldSetIsOnToTrue()
    {
        $tv = new TV();

        $tv->turnOn();

        $this->assertTrue($tv->isOn());
    }

    /**
     * @test
     */
    public function turnOffShouldSetIsOnToFalse()
    {
        $tv = new TV();

        $tv->turnOff();

        $this->assertFalse($tv->isOn());
    }

    /**
     * @test
     */
    public function setChannelShouldSetChannelTo10()
    {
        $tv = new TV();

        $tv->setChannel(10);

        $this->assertEquals(10, $tv->getChannel());
    }

    /**
     * @test
     */
    public function setVolumeShouldSetVolumeTo50()
    {
        $tv = new TV();

        $tv->setVolume(50);

        $this->assertEquals(50, $tv->getVolume());
    }

    public function testTurnOn()
    {
        $tv = $this->createMock(TV::class);
        $tv->expects($this->once())
            ->method('turnOn')
            ->with();

        $tvRemoteController = new TvRemoteController($tv);
        $tvRemoteController->turnOn();
    }

    public function testTurnOff()
    {
        $tv = $this->createMock(TV::class);
        $tv->expects($this->once())
            ->method('turnOff')
            ->with();

        $tvRemoteController = new TvRemoteController($tv);
        $tvRemoteController->turnOff();
    }

    public function testSetChannel()
    {
        $tv = $this->createMock(TV::class);
        $tv->expects($this->once())
            ->method('setChannel')
            ->with(10);

        $tvRemoteController = new TvRemoteController($tv);
        $tvRemoteController->setChannel(10);
    }

    public function testSetVolume()
    {
        $tv = $this->createMock(TV::class);
        $tv->expects($this->once())
            ->method('setVolume')
            ->with(50);

        $tvRemoteController = new TvRemoteController($tv);
        $tvRemoteController->setVolume(50);
    }
}
