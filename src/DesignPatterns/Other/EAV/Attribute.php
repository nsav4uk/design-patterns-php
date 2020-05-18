<?php declare(strict_types=1);

namespace DesignPatterns\Other\EAV;

use SplObjectStorage;

/**
 * Class Attribute
 * @package DesignPatterns\Other\EAV
 */
class Attribute
{
    private SplObjectStorage $values;
    private string $name;

    public function __construct(string $name)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;
    }

    public function addValue(Value $value): void
    {
        $this->values->attach($value);
    }

    public function getValues(): SplObjectStorage
    {
        return $this->values;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
