<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;

/**
 * Class FooBookPrototype
 * @package DesignPatternsTest\Creational\Prototype
 */
class FooBookPrototype extends BookPrototype
{
    protected string $category = 'Foo';

    public function __clone()
    {
    }
}
