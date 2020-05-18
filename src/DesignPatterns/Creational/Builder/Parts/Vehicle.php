<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Parts;

/**
 * Class Vehicle
 * @package DesignPatterns\Creational\Builder\Parts
 */
abstract class Vehicle
{
    private array $data = [];

    public function setPart(string $key, object $value): void {
        $this->data[$key] = $value;
    }
}
