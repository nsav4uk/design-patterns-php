<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BookPrototype
 * @package DesignPatternsTest\Creational\Prototype
 */
abstract class BookPrototype
{
    protected string $title;
    protected string $category;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
