<?php

namespace Telecomando\Domain\Sony;

use http\Exception\InvalidArgumentException;

class Televisione
{
    public function __construct(private int $channel, private int $volume)
    {
        if($this->channel>9 || $this->channel<0)
            throw new InvalidArgumentException("Il canale deve essere compreso tra 0 e 9");

        if($this->volume>100 || $this->volume<0)
            throw new InvalidArgumentException("Il volume deve essere compreso tra 0 e 100");
    }

    /**
     * @param bool $value
     */
    public function setVolume(bool $value): void
    {
        $value === true ? $this->volume++ : $this->volume--;
    }

    /**
     * @param int $channel
     */
    public function setChannel(int $channel): void
    {
        if($this->channel>10 || $this->channel<0)
            throw new InvalidArgumentException("Il canale deve essere compreso tra 0 e 9");


        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getChannel(): int
    {
        return $this->channel;
    }

}