<?php

namespace Telecomando\Controller;

class TelevisioneController
{

    private ITelevisione $televisione;

    public function __construct ()
    {
    }

    public function volumeUp (int $amount): void {
        $this->televisione->setVolume($this->televisione->getVolume() + $amount);
    }

    public function volumeDown (int $amount): void {
        $this->televisione->setVolume($this->televisione->getVolume() - $amount);
    }

    public function channelUp (): void {
        $this->televisione->setVolume($this->televisione->getChannel() + 1);
    }

    public function channelDown (): void {
        $this->televisione->setVolume($this->televisione->getChannel() - 1);
    }

    public function changeChannel (int $channel): void {
        $this->televisione->setChannel($channel);
    }

}