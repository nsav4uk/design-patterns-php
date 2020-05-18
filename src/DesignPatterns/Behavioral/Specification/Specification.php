<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Interface Specification
 * @package DesignPatterns\Behavioral\Specification
 */
interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}
