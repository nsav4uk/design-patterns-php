<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Interface Comparator
 * @package DesignPatterns\Behavioral\Strategy
 */
interface Comparator
{
    public function compare($a, $b): int;
}
