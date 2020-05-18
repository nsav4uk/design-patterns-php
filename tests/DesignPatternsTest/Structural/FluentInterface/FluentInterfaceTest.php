<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\FluentInterface;

use DesignPatterns\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

/**
 * Class FluentInterfaceTest
 * @package DesignPatternsTest\Structural\FluentInterface
 */
class FluentInterfaceTest extends TestCase
{
    public function testBuildSql(): void
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
