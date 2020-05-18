<?php declare(strict_types=1);

namespace DesignPatternsTest\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\FormatNumber;
use DesignPatterns\Creational\StaticFactory\FormatString;
use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

/**
 * Class StaticFactory
 * @package DesignPatternsTest\Creational\StaticFactory
 */
class StaticFactoryTest extends TestCase
{
    public function testCreateNumberFormatter(): void
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::build('number'));
    }

    public function testCreateStringFormatter(): void
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::build('string'));
    }

    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        StaticFactory::build('object');
    }

    public function testNumberFormat(): void
    {
        $this->assertSame('10', StaticFactory::build('number')->format('10'));
    }

    public function testStringFormat(): void
    {
        $this->assertSame('Test', StaticFactory::build('string')->format('Test'));
    }
}
