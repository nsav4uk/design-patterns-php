<?php declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class Bicycle
 * @package DesignPatterns\Creational\SimpleFactory
 */
class Bicycle
{
    private string $destination;

    public function driveTo(string $destination): void
    {
        $this->destination = $destination;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }
}
