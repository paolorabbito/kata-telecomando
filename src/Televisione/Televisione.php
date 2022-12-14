<?php

namespace Telecomando\Televisione;

class Televisione implements ITelevisione
{

    private \Telecomando\Televisione\StatoTelevisione $state;
    private int $channel;
    private int $volume;

    public function __construct()
    {
        $this->state = \Telecomando\Televisione\StatoTelevisione::OFF;
        $this->channel = 1;
        $this->volume = 5;
    }

    public function volumeUp (int $amount): void {
        $this->setVolume($this->televisione->volume + $amount);
    }

    public function volumeDown (int $amount): void {
        $this->setVolume($this->volume - $amount);
    }

    public function channelUp (): void {
        $this->setVolume($this->channel + 1);
    }

    public function channelDown (): void {
        $this->setVolume($this->channel - 1);
    }

    public function changeChannel (int $channel): void {
        $this->setChannel($channel);
    }

}