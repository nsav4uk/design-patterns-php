<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Vehicle\Builder;
use DesignPatterns\Creational\Builder\Parts\Wheel;

/**
 * Class CarBuilder
 * @package DesignPatterns\Creational\Builder
 */
class CarBuilder implements Builder
{
    private Car $car;

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function addWheel(): void
    {
        $this->car->setPart('LFWheel', new Wheel());
        $this->car->setPart('RFWheel', new Wheel());
        $this->car->setPart('LBWheel', new Wheel());
        $this->car->setPart('RBWheel', new Wheel());
    }

    public function addEngine(): void
    {
        $this->car->setPart('carEngine', new Engine());
    }

    public function addDoor(): void
    {
        $this->car->setPart('LFDoor', new Door());
        $this->car->setPart('RFDoor', new Door());
        $this->car->setPart('LBDoor', new Door());
        $this->car->setPart('RBDoor', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
