<?php

namespace Telecomando\Domain\Televisione;

interface ITelevisione
{

    public function getState(): \StatoTelevisione;
    public function getChannel(): int;
    public function getVolume(): int;
    public function setState(\StatoTelevisione $statoTelevisione): void;
    public function setChannel(int $channel): void;
    public function setVolume(int $volume): void;

}