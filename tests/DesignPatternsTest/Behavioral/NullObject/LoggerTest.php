<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\NullObject;

use DesignPatterns\Behavioral\NullObject\NullLogger;
use DesignPatterns\Behavioral\NullObject\PrintLogger;
use DesignPatterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

/**
 * Class LoggerTest
 * @package DesignPatternsTest\Behavioral\NullObject
 */
class LoggerTest extends TestCase
{
    public function testNullObject(): void
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger(): void
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in DesignPatterns\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
