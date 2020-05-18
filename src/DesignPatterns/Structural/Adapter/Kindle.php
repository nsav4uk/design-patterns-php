<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

/**
 * Class Kindle
 * @package DesignPatterns\Structural\Adapter
 */
class Kindle implements EBook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function unlock(): void
    {
        // TODO: Implement unlock() method.
    }

    public function pressNext(): void
    {
        $this->page++;
    }

    /**
     * @inheritDoc
     */
    public function getPages(): array
    {
        return [$this->page, $this->totalPages];
    }
}
