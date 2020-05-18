<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight;

/**
 * Class Word
 * @package DesignPatterns\Structural\Flyweight
 */
class Word implements Text
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Word %s with font %s', $this->name, $font);
    }
}
