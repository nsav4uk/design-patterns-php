<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Interface UndoableCommand
 * @package DesignPatterns\Behavioral\Command
 */
interface UndoableCommand extends Command
{
    public function undo(): void;
}
