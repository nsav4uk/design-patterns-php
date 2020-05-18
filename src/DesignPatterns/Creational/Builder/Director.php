<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Vehicle\Builder;

/**
 * Class Director
 * @package DesignPatterns\Creational\Builder
 */
class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoor();
        $builder->addWheel();
        $builder->addEngine();

        return $builder->getVehicle();
    }
}
