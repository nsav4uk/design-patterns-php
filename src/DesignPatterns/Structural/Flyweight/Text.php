<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Interface Text
 * @package DesignPatterns\Structural\Flyweight
 */
interface Text
{
    public function render(string $extrinsicState): string;
}
