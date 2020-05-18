<?php declare(strict_types=1);

namespace DesignPatterns\Other\EAV;

use SplObjectStorage;

/**
 * Class Entity
 * @package DesignPatterns\Other\EAV
 */
class Entity
{
    private SplObjectStorage $values;

    private string $name;

    public function __construct(string $name, $values)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string)$value;
        }

        return implode(', ', $text);
    }
}
