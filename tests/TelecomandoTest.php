<?php

declare(strict_types=1);

namespace Telecomando;

use PHPUnit\Framework\TestCase;
use Telecomando\Domain\Telecomando\Telecomando;
use Telecomando\Domain\Televisione\Televisione;

class TelecomandoTest extends TestCase
{

    private Telecomando $telecomando;

    protected function setUp(): void
    {
        $this->telecomando = new Telecomando(new Televisione());
    }

    public function testShouldSetChannel()
    {
        $this->telecomando->setChannel(4);
        $this->assertEquals(4, $this->telecomando->showChannel());

        $this->telecomando->channelUp();
        $this->assertEquals(5, $this->telecomando->showChannel());

        $this->telecomando->channelDown();
        $this->assertEquals(4, $this->telecomando->showChannel());
    }

    public function testShouldSetCorrectVolume()
    {

        $this->telecomando->volumeUp();
        $this->assertEquals(51, $this->telecomando->showVolume());

        $this->telecomando->volumeDown();
        $this->assertEquals(50, $this->telecomando->showVolume());
    }

}