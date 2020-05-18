<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

/**
 * Class AddMessageDateCommand
 * @package DesignPatterns\Behavioral\Command
 */
class AddMessageDateCommand implements UndoableCommand
{
    private Receiver $output;

    public function __construct(Receiver $receiver)
    {
        $this->output = $receiver;
    }

    public function execute(): void
    {
        $this->output->enableDate();
    }

    public function undo(): void
    {
        $this->output->disableDate();
    }
}
