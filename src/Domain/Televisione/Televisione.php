<?php

namespace Telecomando\Domain\Televisione;

class Televisione implements ITelevisione
{

    private \StatoTelevisione $state;
    private int $channel;
    private int $volume;

    public function __construct()
    {
        $this->state = \StatoTelevisione::OFF;
        $this->channel = 1;
        $this->volume = 5;
    }

    public function getState(): \StatoTelevisione
    {
        return $this->state;
    }

    public function setState(\StatoTelevisione $state): void
    {
        $this->state = $state;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channel): void
    {
        $this->channel = $channel;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

}