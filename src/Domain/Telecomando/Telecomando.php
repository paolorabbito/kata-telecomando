<?php

namespace Telecomando\Domain\Telecomando;

use Telecomando\Controller\TelevisioneController;

class Telecomando
{

    private $televisioneController;

    public function __construct (TelevisioneController $televisioneController)
    {
        $this->$televisioneController = $televisioneController;
    }

    public function volumeUp () {
        $this->televisioneController->volumeUp();
    }

    public function volumeDown () {
        $this->televisioneController->volumeDown();
    }

    public function channelUp () {
        $this->televisioneController->channelUp();
    }

    public function channelDown () {
        $this->televisioneController->channelDown();
    }

}