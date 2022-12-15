<?php

namespace Telecomando\Televisione;

use http\Exception\InvalidArgumentException;

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
        $newVolume = $this->volume + $amount;
        if ($newVolume > 10) {
            throw new \InvalidArgumentException('Max Volume is 10');
        }
        $this->volume = $newVolume;
    }

    public function volumeDown (int $amount): void {
        $newVolume = $this->volume - $amount;
        if ($newVolume > 10) {
            throw new \InvalidArgumentException('Min Volume is 0');
        }
        $this->volume = $newVolume;
    }

    private function isValidChannel ($channel) {
        if ($channel <= 1000 && $channel > 0) {
            return true;
        }
        return false;
    }

    public function channelUp (): void {
        $newChannel = $this->channel + 1;
        if (!$this->isValidChannel($newChannel)) {
            throw new \InvalidArgumentException('Not a valid channel');
        }
        $this->channel = $newChannel;
    }

    public function channelDown (): void {
        $newChannel = $this->channel - 1;
        if (!$this->isValidChannel($newChannel)) {
            throw new \InvalidArgumentException('Not a valid channel');
        }
        $this->channel = $newChannel;
    }

    public function changeChannel (int $channel): void {
        if (!$this->isValidChannel($channel)) {
            throw new \InvalidArgumentException('Not a valid channel');
        }
        $this->channel = $channel;
    }

    public function switchState (): void {
        if ($this->state == StatoTelevisione::OFF) {
            $this->state = StatoTelevisione::ON;
        }
        else {
            $this->state = StatoTelevisione::OFF;
        }
    }

    public function getState(): StatoTelevisione
    {
        return $this->state;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

}