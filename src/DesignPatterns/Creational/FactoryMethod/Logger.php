<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Interface Logger
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface Logger
{
    public function log(string $message): void;
}
