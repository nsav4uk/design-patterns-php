<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight;

/**
 * Class Character
 * @package DesignPatterns\Structural\Flyweight
 */
class Character implements Text
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}
