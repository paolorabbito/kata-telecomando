<?php

declare(strict_types=1);

namespace Telecomando\Tests;

use PHPUnit\Framework\TestCase;
use Telecomando\Domain\Televisione\Televisione;

class TelevisioneTest extends TestCase
{
    private $televisione;

    protected function setUp(): void
    {
        $this->televisione = new Televisione();
    }

    public function testShouldThrowExceptionOnVolumeError()
    {

        $this->expectException(\InvalidArgumentException::class);
        $this->televisione->setVolume(101);
        //$televisione->setVolume(-1);
    }

    public function testShouldThrowExceptionOnChannelError()
    {
        $this->expectException(\InvalidArgumentException::class);
        //$televisione->setChannel(10);
        $this->televisione->setChannel(0);
    }

    public function testShouldSetCorrectVolume()
    {
        $this->televisione->setVolume(55);
        $this->assertEquals(55, $this->televisione->getVolume());
    }

    public function testShouldSetCorrectChannel()
    {
        $this->televisione->setChannel(5);
        $this->assertEquals(5, $this->televisione->getChannel());
    }

    public function testShouldStartInOffMode()
    {
        $televisione = new Televisione();
        $this->assertEquals(false, $televisione->isOn());
    }

    public function testShouldTurnOnAndOff()
    {
        $this->televisione->start();
        $this->assertEquals(true, $this->televisione->isOn());
        $this->televisione->shutdown();
        $this->assertEquals(false, $this->televisione->isOn());
    }

}