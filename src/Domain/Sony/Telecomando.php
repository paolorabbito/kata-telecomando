<?php

namespace Telecomando\Domain\Sony;


use http\Exception\InvalidArgumentException;
use Telecomando\Domain\TelecomandoRepository;

class Telecomando implements TelecomandoRepository
{
    public function __construct(private Televisione $televisione) {

    }

    /**
     * @return int
     */
    public function showChannel(): int
    {
        return $this->televisione->getChannel();
    }

    /**
     * @param int $channel
     */
    public function setChannel(int $channel): void
    {
        $this->televisione->setChannel($channel);
    }
    public function volumeUp(): void
    {
        $this->televisione->setVolume(true);
    }

    public function volumeDown(): void
    {
        $this->televisione->setVolume(false);
    }

    public function channelUp(): void
    {
        $channel = $this->televisione->getChannel()+1;
        $this->televisione->setChannel($channel);
    }

    public function channelDown(): void
    {
        $channel = $this->televisione->getChannel()-1;
        $this->televisione->setChannel($channel);
    }
}