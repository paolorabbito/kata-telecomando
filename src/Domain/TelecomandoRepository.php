<?php

namespace Telecomando\Domain;

interface TelecomandoRepository
{
    public function volumeUp(): void;

    public function volumeDown(): void;

    public function channelUp(): void;

    public function channelDown(): void;

    public function setChannel(int $channel): void;
}