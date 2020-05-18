<?php declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class StdoutLogger
 * @package DesignPatterns\Creational\FactoryMethod
 */
class StdoutLogger implements Logger
{
    public function log(string $message): void
    {
        echo $message;
    }
}
