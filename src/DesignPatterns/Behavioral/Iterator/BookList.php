<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Iterator;

use Countable;
use Iterator;

/**
 * Class BookList
 * @package DesignPatterns\Behavioral\Iterator
 */
class BookList implements Countable, Iterator
{
    /**
     * @var Book[]
     */
    private array $books = [];

    private int $currentIndex = 0;

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove): void
    {
        foreach ($this->books as $key => $book) {
            if ($book->getTitleAndAuthor() === $bookToRemove->getTitleAndAuthor()) {
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
    }

    /**
     * @inheritDoc
     */
    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * @inheritDoc
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->books);
    }
}
