<?php declare(strict_types=1);

namespace DesignPatternsTest\Other\ServiceLocator;

use OutOfRangeException;
use InvalidArgumentException;
use DesignPatterns\Other\ServiceLocator\LogService;
use DesignPatterns\Other\ServiceLocator\ServiceLocator;
use PHPUnit\Framework\TestCase;

/**
 * Class ServiceLocatorTest
 * @package DesignPatternsTest\Other\ServiceLocator
 */
class ServiceLocatorTest extends TestCase
{
    private ServiceLocator $serviceLocator;

    public function setUp(): void
    {
        $this->serviceLocator = new ServiceLocator();
    }

    public function testHasServices(): void
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }

    public function testGerInstantiatedServices(): void
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet(): void
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYetWithOneParam(): void
    {
        $this->serviceLocator->addClass(LogService::class, [1]);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYetWithTwoParam(): void
    {
        $this->serviceLocator->addClass(LogService::class, [1, 2]);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYetWithThreeParam(): void
    {
        $this->serviceLocator->addClass(LogService::class, [1, 2, 3]);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }

    public function testExceptionGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYetWithThreeParam(): void
    {
        $this->expectException(OutOfRangeException::class);
        $this->serviceLocator->addClass(LogService::class, [1, 2, 3, 4]);
        $this->serviceLocator->get(LogService::class);
    }

    public function testExceptionNotInstanceOfService(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->serviceLocator->addClass(self::class, []);
        $this->serviceLocator->get(self::class);
    }
}
