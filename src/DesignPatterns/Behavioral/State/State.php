<?php

namespace DesignPatterns\Behavioral\State;

/**
 * Interface State
 * @package DesignPatterns\Behavioral\State
 */
interface State
{
    public function proceedToNext(OrderContext $context): void;

    public function toString(): string;
}
