<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\DataMapper;

use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

/**
 * Class DataMapperTest
 * @package DesignPatternsTest\Structural\DataMapper
 */
class DataMapperTest extends TestCase
{
    public function testCanMapUserFromState(): void
    {
        $storage = new StorageAdapter([
            1 => [
                'username' => 'tester',
                'email' => 'tester@test.com',
            ],
        ]);

        $mapper = new UserMapper($storage);
        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
        $this->assertSame('tester', $user->getUsername());
        $this->assertSame('tester@test.com', $user->getEmail());
    }

    public function testWillNotMapInvalidData(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);
        $mapper->findById(1);
    }
}
