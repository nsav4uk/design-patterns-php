<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Vehicle\Builder;
use DesignPatterns\Creational\Builder\Parts\Wheel;

/**
 * Class TruckBuilder
 * @package DesignPatterns\Creational\Builder
 */
class TruckBuilder implements Builder
{
    private Truck $truck;

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function addWheel(): void
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoor(): void
    {
        $this->truck->setPart('leftDoor', new Door());
        $this->truck->setPart('rightDoor', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
