<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Facade;

use DesignPatterns\Structural\Facade\Bios;
use DesignPatterns\Structural\Facade\Facade;
use DesignPatterns\Structural\Facade\OperationSystem;
use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest
 * @package DesignPatternsTest\Structural\Facade
 */
class FacadeTest extends TestCase
{
    public function testComputerOn(): void
    {
        $os = $this->createMock(OperationSystem::class);
        $os->method('getName')->willReturn('Linux');

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->with($os);

        $facade = new Facade($os, $bios);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }

    public function testComputerOff(): void
    {
        $os = $this->createMock(OperationSystem::class);
        $os->method('getName')->willReturn('Linux');

        $bios = $this->createMock(Bios::class);

        $facade = new Facade($os, $bios);
        $facade->turnOf();

        $this->assertSame('Linux', $os->getName());
    }
}
