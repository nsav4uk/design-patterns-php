<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\DependencyInjection;

use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

/**
 * Class DependencyInjectionTest
 * @package DesignPatternsTest\Structural\DependencyInjection
 */
class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection(): void
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'username', 'password');
        $connection = new DatabaseConnection($config);

        $this->assertSame('username:password@localhost:3306', $connection->getDsn());
    }
}
