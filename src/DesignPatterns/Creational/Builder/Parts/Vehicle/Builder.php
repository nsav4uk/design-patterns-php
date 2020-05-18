<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Parts\Vehicle;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * Interface Builder
 * @package DesignPatterns\Creational\Builder\Parts\Vehicle
 */
interface Builder
{
    public function createVehicle(): void;
    public function addWheel(): void;
    public function addEngine(): void;
    public function addDoor(): void;
    public function getVehicle(): Vehicle;
}
