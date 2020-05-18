<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Interface Booking
 * @package DesignPatterns\Structural\Decorator
 */
interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
