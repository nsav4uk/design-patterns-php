<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Ui;
use DesignPatterns\Behavioral\Mediator\UserRepository;
use DesignPatterns\Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

/**
 * Class MediatorTest
 * @package DesignPatternsTest\Behavioral\Mediator
 */
class MediatorTest extends TestCase
{
    public function testOutputHelloWorld(): void
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());
        $this->expectOutputString('User: Tester');
        $mediator->printInfoAbout('Tester');
    }
}
