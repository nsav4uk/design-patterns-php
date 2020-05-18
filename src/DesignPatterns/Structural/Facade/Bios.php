<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Interface Bios
 * @package DesignPatterns\Structural\Facade
 */
interface Bios
{
    public function execute();

    public function waitForPressKey();

    public function launch(OperationSystem $os);

    public function powerDown();
}
