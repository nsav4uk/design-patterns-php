<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Interface Mediator
 * @package DesignPatterns\Behavioral\Mediator
 */
interface Mediator
{
    public function getUser(string $username): string;
}
