<?php declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class SimpleFactory
 * @package DesignPatterns\Creational\SimpleFactory
 */
class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
