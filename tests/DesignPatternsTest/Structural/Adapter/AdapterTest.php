<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Adapter;

use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\PaperBook;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest
 * @package DesignPatternsTest\Structural\Adapter
 */
class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook(): void
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindle(): void
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}
