<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Iterator;

/**
 * Class Book
 * @package DesignPatterns\Behavioral\Iterator
 */
class Book
{
    private string $author;

    private string $title;

    public function __construct(string $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTitleAndAuthor(): string
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
