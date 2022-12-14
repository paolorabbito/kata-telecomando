<?php

declare(strict_types=1);

namespace Telecomando;

use PHPUnit\Framework\TestCase;
use Telecomando\Controller\TelecomandoController;

class TelecomandoControllerTest extends TestCase
{

    public function testShouldReturnString()
    {
        $telecomando = new TelecomandoController();
        $this->assertEquals('test', $telecomando->test());

    }

}