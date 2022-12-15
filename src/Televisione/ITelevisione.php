<?php

namespace Telecomando\Televisione;

interface ITelevisione
{

    public function volumeUp (int $amount): void;

    public function volumeDown (int $amount): void;

    public function channelUp (): void;

    public function channelDown (): void;

    public function changeChannel (int $channel): void;

    public function switchState (): void;

}