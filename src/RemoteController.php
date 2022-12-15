<?php

namespace RemoteController;

class TV
{
    private $isOn = false;
    private $channel;
    private $volume;


    public function turnOn()
    {
        $this->isOn = true;
    }

    public function turnOff()
    {
        $this->isOn = false;
    }

    public function setChannel(int $channel)
    {
        $this->channel = $channel;
    }

    public function setVolume(int $volume)
    {
        $this->volume = $volume;
    }

    public function isOn()
    {
        return $this->isOn;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function getVolume()
    {
        return $this->volume;
    }
}


interface RemoteController
{
    public function turnOn();
    public function turnOff();
    public function setChannel(int $channel);
    public function setVolume(int $volume);
}

class RemoteControllerButton
{
    private $remoteController;

    public function __construct(RemoteController $remoteController)
    {
        $this->remoteController = $remoteController;
    }

    public function press()
    {
        // implementare metodo press
    }
}


class TvRemoteController implements RemoteController
{
    private $tv;

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function turnOn()
    {
        $this->tv->turnOn();
    }

    public function turnOff()
    {
        $this->tv->turnOff();
    }

    public function setChannel(int $channel)
    {
        $this->tv->setChannel($channel);
    }

    public function setVolume(int $volume)
    {
        $this->tv->setVolume($volume);
    }
}


// Usage

$tv = new TV();
$tvRemoteController = new TvRemoteController($tv);

$tvRemoteController->turnOn();
$tvRemoteController->setChannel(10);
$tvRemoteController->setVolume(50);
$tvRemoteController->turnOff();
