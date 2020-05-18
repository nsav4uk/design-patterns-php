<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Memento;

/**
 * Class Ticket
 * @package DesignPatterns\Behavioral\Memento
 */
class Ticket
{
    private State $state;

    public function __construct()
    {
        $this->state = new State(State::STATE_CREATE);
    }

    public function open(): void
    {
        $this->state = new State(State::STATE_OPENED);
    }

    public function assign(): void
    {
        $this->state = new State(State::STATE_ASSIGNED);
    }

    public function close(): void
    {
        $this->state = new State(State::STATE_CLOSED);
    }

    public function saveToMemento(): Memento
    {
        return new Memento(clone $this->state);
    }

    public function restoreFromMemento(Memento $memento): void
    {
        $this->state = $memento->getState();
    }

    public function getState(): State
    {
        return $this->state;
    }
}
