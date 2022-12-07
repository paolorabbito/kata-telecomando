<?php

namespace Telecomando\Domain\Telecomando;


use Telecomando\Domain\Televisione\TelecomandoRepository;
use Telecomando\Domain\Televisione\TelevisioneRepository;

class Telecomando
{
    public function __construct(private TelevisioneRepository $televisione) {

    }

    public function onAndOff() {
        $status = $this->televisione->isOn();
        $status === false ? $this->televisione->start() : $this->televisione->shutdown();
    }

    public function showChannel(): int
    {
        return $this->televisione->getChannel();
    }

    public function showVolume(): int
    {
        return $this->televisione->getVolume();
    }

    public function setChannel(int $channel): void
    {
        $status = $this->televisione->isOn();
        if(!$status) {
           $this->televisione->start();
           $this->televisione->setChannel($channel);
        } else {
           $this->televisione->setChannel($channel);
        }
    }
    public function volumeUp(): void
    {
        $volume = $this->televisione->getVolume() + 1;
        $this->televisione->setVolume($volume);
    }

    public function volumeDown(): void
    {
        $volume = $this->televisione->getVolume() - 1;
        $this->televisione->setVolume($volume);
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