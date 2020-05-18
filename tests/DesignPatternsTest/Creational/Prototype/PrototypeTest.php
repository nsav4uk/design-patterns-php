<?php declare(strict_types=1);

namespace DesignPatternsTest\Creational\Prototype;

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

/**
 * Class PrototypeTest
 * @package DesignPatternsTest\Creational\Prototype
 */
class PrototypeTest extends TestCase
{
    public function testCanGetBooksAndTitles(): void
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 5; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('FooBook #' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
            $this->assertEquals('FooBook #' . $i, $book->getTitle());
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('BarBook #' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
            $this->assertEquals('BarBook #' . $i, $book->getTitle());
        }
    }
}
