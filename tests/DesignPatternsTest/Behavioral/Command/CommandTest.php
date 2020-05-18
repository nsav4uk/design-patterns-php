<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\Command;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandTest
 * @package DesignPatternsTest\Behavioral\Command
 */
class CommandTest extends TestCase
{
    public function testInvocation(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertSame('Hello World', $receiver->getOutput());
    }
}
