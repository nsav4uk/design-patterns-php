<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Interface LoggerFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface LoggerFactory
{
    public function createLogger(): Logger;
}
