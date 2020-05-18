<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\Iterator;

use DesignPatterns\Behavioral\Iterator\Book;
use DesignPatterns\Behavioral\Iterator\BookList;
use PHPUnit\Framework\TestCase;

/**
 * Class IteratorTest
 * @package DesignPatternsTest\Behavioral\Iterator
 */
class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList(): void
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('William Sanders', 'Learning PHP Design Patterns'));
        $bookList->addBook(new Book('Aaron Saray', 'Professional Php Design Patterns'));
        $bookList->addBook(new Book('Robert C. Martin', 'Clean Code'));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getTitleAndAuthor();
        }

        $this->assertSame(3, $bookList->key());

        $this->assertSame(
            [
                'Learning PHP Design Patterns by William Sanders',
                'Professional Php Design Patterns by Aaron Saray',
                'Clean Code by Robert C. Martin',
            ],
            $books
        );
    }

    public function testCanIterateOverBookListAfterRemove(): void
    {
        $bookOne = new Book('Robert C. Martin', 'Clean Code');
        $bookTwo = new Book('Aaron Saray', 'Professional Php Design Patterns');

        $bookList = new BookList();
        $bookList->addBook($bookOne);
        $bookList->addBook($bookTwo);
        $bookList->removeBook($bookOne);

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getTitleAndAuthor();
        }

        $this->assertSame(1, $bookList->key());

        $this->assertSame(
            [
                'Professional Php Design Patterns by Aaron Saray',
            ],
            $books
        );
    }

    public function testCanAddBookToBookList(): void
    {
        $book = new Book('Robert C. Martin', 'Clean Code');

        $bookList = new BookList();
        $bookList->addBook($book);

        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromBookList(): void
    {
        $book = new Book('Robert C. Martin', 'Clean Code');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }
}
