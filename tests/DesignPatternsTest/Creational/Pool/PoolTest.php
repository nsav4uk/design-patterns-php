<?php declare(strict_types=1);

namespace DesignPatternsTest\Creational\Pool;

use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

/**
 * Class PoolTest
 * @package DesignPatternsTest\Creational\Pool
 */
class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet(): void
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst(): void
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }

    public function testCanReverseString(): void
    {
        $pool = new WorkerPool();
        $worker = $pool->get();

        $this->assertEquals('tseT', $worker->run('Test'));
    }
}
