<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

/**
 * Class Singleton
 * @package DesignPatterns\Creational\Singleton
 */
final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
