<?php

namespace Telecomando\Telecomando;

use Telecomando\Controller\TelevisioneController;
use Telecomando\Televisione\ITelevisione;

class Telecomando
{

    private $televisione;

    public function __construct (ITelevisione $televisione)
    {
        $this->$televisione = $televisione;
    }

    public function volumeUp (): void {
        $this->televisione->volumeUp();
    }

    public function volumeDown (): void {
        $this->televisione->volumeDown();
    }

    public function channelUp (): void {
        $this->televisione->channelUp();
    }

    public function channelDown (): void {
        $this->televisione->channelDown();
    }

}