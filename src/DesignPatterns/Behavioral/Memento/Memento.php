<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Memento;

/**
 * Class Memento
 * @package DesignPatterns\Behavioral\Memento
 */
class Memento
{
    private State $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
