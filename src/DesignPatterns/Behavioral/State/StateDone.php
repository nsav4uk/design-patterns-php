<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

/**
 * Class StateDone
 * @package DesignPatterns\Behavioral\State
 */
class StateDone implements State
{
    public function proceedToNext(OrderContext $context): void
    {
    }

    public function toString(): string
    {
        return 'done';
    }
}
