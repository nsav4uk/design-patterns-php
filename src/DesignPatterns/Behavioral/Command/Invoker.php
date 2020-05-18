<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

/**
 * Class Invoker
 * @package DesignPatterns\Behavioral\Command
 */
class Invoker
{
    private Command $command;

    public function setCommand(Command $cmd): void
    {
        $this->command = $cmd;
    }

    public function run(): void
    {
        $this->command->execute();
    }
}
