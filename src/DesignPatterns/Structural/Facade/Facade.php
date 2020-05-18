<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Facade;

/**
 * Class Facade
 * @package DesignPatterns\Structural\Facade
 */
class Facade
{
    private OperationSystem $os;
    private Bios $bios;

    public function __construct(OperationSystem $os, Bios $bios)
    {
        $this->os = $os;
        $this->bios = $bios;
    }

    public function turnOn(): void
    {
        $this->bios->execute();
        $this->bios->waitForPressKey();
        $this->bios->launch($this->os);
    }

    public function turnOf(): void
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
