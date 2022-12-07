<?php

declare(strict_types=1);

namespace Telecomando;

use PHPUnit\Framework\TestCase;
use Telecomando\Domain\Telecomando\Telecomando;
use Telecomando\Domain\Televisione\Televisione;

class TelecomandoTest extends TestCase
{

    public function testShouldReturnCorrectChannel()
    {
        $telecomando = new Telecomando(new Televisione());
        //$telecomando->setChannel(4);
        $channel = $telecomando->showChannel();
        $this->assertEquals(1, $channel);
    }

    public function testShouldReturnCorrectVolumeUp()
    {
        $telecomando = new Telecomando(new Televisione());
        $telecomando->volumeUp();
        $volume = $telecomando->showVolume();
        $this->assertEquals(51, $volume);
    }

    public function testShouldReturnCorrectVolumeDown()
    {
        $telecomando = new Telecomando(new Televisione());
        $telecomando->volumeDown();
        $volume = $telecomando->showVolume();
        $this->assertEquals(49, $volume);
    }

}