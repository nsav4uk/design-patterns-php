<?php declare(strict_types=1);

namespace DesignPatternsTest\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * Class SingletonTest
 * @package DesignPatternsTest\Creational\Singleton
 */
class SingletonTest extends TestCase
{
    public function testUniqueness(): void
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertEquals($firstCall, $secondCall);
    }
}
