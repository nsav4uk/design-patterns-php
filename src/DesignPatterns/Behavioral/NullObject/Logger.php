<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * Interface Logger
 * @package DesignPatterns\Behavioral\NullObject
 */
interface Logger
{
    public function log(string $str): void;
}
