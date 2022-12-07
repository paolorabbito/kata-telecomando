<?php

namespace Telecomando\Domain\Televisione;

interface TelevisioneRepository
{
    public function setVolume(int $volume): void;

    public function getVolume(): int;

    public function setChannel(int $channel): void;

    public function getChannel(): int;

    public function start(): void;

    public function shutdown(): void;

    public function isOn(): bool;
}