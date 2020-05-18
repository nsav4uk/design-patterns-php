<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\Memento;

use InvalidArgumentException;
use DesignPatterns\Behavioral\Memento\State;
use DesignPatterns\Behavioral\Memento\Ticket;
use PHPUnit\Framework\TestCase;

/**
 * Class MementoTest
 * @package DesignPatternsTest\Behavioral\Memento
 */
class MementoTest extends TestCase
{
    public function testCanOpenTicketAssignAndSetBackToOpen(): void
    {
        $ticket = new Ticket();
        $ticket->open();
        $state = $ticket->getState();
        $this->assertSame(State::STATE_OPENED, (string) $ticket->getState());

        $memento = $ticket->saveToMemento();

        $ticket->assign();
        $this->assertSame(State::STATE_ASSIGNED, (string) $ticket->getState());

        $ticket->restoreFromMemento($memento);

        $this->assertSame(State::STATE_OPENED, (string) $ticket->getState());
        $this->assertNotSame($state, $ticket->getState());

        $ticket->close();
        $this->assertSame(State::STATE_CLOSED, (string) $ticket->getState());
    }

    public function testInvalidStateException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new State('invalid');
    }
}
