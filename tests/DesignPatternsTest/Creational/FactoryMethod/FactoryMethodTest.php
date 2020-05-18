<?php declare(strict_types=1);

namespace DesignPatternsTest\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\{
    FileLogger,
    FileLoggerFactory,
    StdoutLogger,
    StdoutLoggerFactory,
};
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryMethodTest
 * @package DesignPatternsTest\Creational\FactoryMethod
 */
class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogger(): void
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);

        $this->assertEmpty($logger->log('Test'));
    }

    public function testCanCreateFileLogger(): void
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir() . '/test.log');
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
        $this->assertEmpty($logger->log('Test'));
    }
}
