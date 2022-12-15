<?php

declare(strict_types=1);

namespace Telecomando;

use PHPUnit\Framework\TestCase;
use Telecomando\Telecomando\Telecomando;
use Telecomando\Televisione\StatoTelevisione;
use Telecomando\Televisione\Televisione;

class TelecomandoControllerTest extends TestCase
{

    public function testShouldBeON()
    {
        $televisione = new Televisione();
        $telecomando = new Telecomando($televisione);

        $telecomando->switchState();
        $this->assertEquals(StatoTelevisione::ON, $televisione->getState());
    }

    public function testShouldHaveVolume10()
    {
        $televisione = new Televisione();
        $telecomando = new Telecomando($televisione);

        $telecomando->switchState();
        $telecomando->volumeUp(5);
        $this->assertEquals(10, $televisione->getVolume());
    }

    public function testShouldExceptBecauseExceededMaxVolume()
    {
        $televisione = new Televisione();
        $telecomando = new Telecomando($televisione);

        $this->expectException(\InvalidArgumentException::class);
        $telecomando->switchState();
        $telecomando->volumeUp(6);
    }

    public function testShouldExceptBecauseIsNotValidChannel()
    {
        $televisione = new Televisione();
        $telecomando = new Telecomando($televisione);

        $this->expectException(\InvalidArgumentException::class);
        $telecomando->switchState();
        $telecomando->channelDown();
    }

    public function testShouldChangeChannel()
    {
        $televisione = new Televisione();
        $telecomando = new Telecomando($televisione);

        $telecomando->switchState();
        $telecomando->changeChannel(999);
        $this->assertEquals(999, $televisione->getChannel());
    }

}