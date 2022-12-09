<?php

declare(strict_types=1);

namespace Telecomando;

use PHPUnit\Framework\TestCase;
use Telecomando\Domain\Telecomando\Telecomando;
use Telecomando\Domain\Televisione\Televisione;
use Telecomando\Domain\Televisione\TelevisioneRepository;
use Telecomando\Mock\InMemoryTelevisioneRepository;

class TelecomandoTest extends TestCase
{

    //TODO: Add TelevisioneInMemoryRepository

    private Telecomando $telecomando;
    private InMemoryTelevisioneRepository $televisione;

    protected function setUp(): void
    {
        $this->televisione = new InMemoryTelevisioneRepository();
        $this->telecomando = new Telecomando($this->televisione);
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

    public function testShouldTurnOnAndOff() {

        $this->telecomando->onAndOff();
        $this->assertEquals(true, $this->televisione->isOn());

        $this->telecomando->onAndOff();
        $this->assertEquals(false, $this->televisione->isOn());

    }

}