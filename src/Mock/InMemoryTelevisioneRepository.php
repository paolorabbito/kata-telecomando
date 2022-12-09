<?php

namespace Telecomando\Mock;

use Telecomando\Domain\Televisione\TelevisioneRepository;

class InMemoryTelevisioneRepository implements TelevisioneRepository
{
    private bool $startedUp = false;
    private int $volume = 50;
    private int $channel = 1;

    public function setVolume(int $volume): void
    {
        if($volume>100 || $volume<0)
            throw new \InvalidArgumentException("Il volume deve essere compreso tra 0 e 100");

        $this->volume = $volume;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setChannel(int $channel): void
    {
        if($channel>9 || $channel<1)
            throw new \InvalidArgumentException("Il canale deve essere compreso tra 0 e 9");

        $this->channel = $channel;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function start(): void
    {
        $this->startedUp = true;
    }

    public function shutdown(): void
    {
        $this->startedUp = false;
    }

    public function isOn(): bool {
        return $this->startedUp;
    }
}