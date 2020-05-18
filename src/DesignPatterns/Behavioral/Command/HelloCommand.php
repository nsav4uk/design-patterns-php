<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

/**
 * Class HelloCommand
 * @package DesignPatterns\Behavioral\Command
 */
class HelloCommand implements Command
{
    private Receiver $output;

    public function __construct(Receiver $receiver)
    {
        $this->output = $receiver;
    }

    public function execute(): void
    {
        $this->output->write('Hello World');
    }
}
