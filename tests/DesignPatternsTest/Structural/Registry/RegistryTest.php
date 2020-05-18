<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Registry;

use InvalidArgumentException;
use DesignPatterns\Structural\Registry\Registry;
use DesignPatterns\Structural\Registry\Service;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class RegistryTest
 * @package DesignPatternsTest\Structural\Registry
 */
class RegistryTest extends TestCase
{
    /**
     * @var Service
     */
    private MockObject $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetLogger(): void
    {
        Registry::set(Registry::LOGGER, $this->service);

        $this->assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Registry::set('foobar', $this->service);
    }

    public function testThrowsExceptionWhenTryingToGetNotSetKey(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Registry::get('invalid');
    }
}
