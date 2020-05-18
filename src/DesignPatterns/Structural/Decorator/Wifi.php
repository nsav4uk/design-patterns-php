<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

/**
 * Class Wifi
 * @package DesignPatterns\Structural\Decorator
 */
class Wifi extends BookingDecorator
{
    private const COST = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::COST;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}
