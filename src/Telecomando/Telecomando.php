<?php

namespace Telecomando\Telecomando;

use Telecomando\Controller\TelevisioneController;
use Telecomando\Televisione\ITelevisione;

class Telecomando
{

    private ITelevisione $televisione;

    public function __construct (ITelevisione $televisione)
    {
        $this->televisione = $televisione;
    }

    public function volumeUp (int $amount): void {
        $this->televisione->volumeUp($amount);
    }

    public function volumeDown (int $amount): void {
        $this->televisione->volumeDown($amount);
    }

    public function channelUp (): void {
        $this->televisione->channelUp();
    }

    public function channelDown (): void {
        $this->televisione->channelDown();
    }

    public function changeChannel (int $channel): void {
        $this->televisione->changeChannel($channel);
    }

    public function switchState (): void {
        $this->televisione->switchState();
    }

}