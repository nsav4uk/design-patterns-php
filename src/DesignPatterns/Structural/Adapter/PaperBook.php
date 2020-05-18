<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

/**
 * Class PaperBook
 * @package DesignPatterns\Structural\Adapter
 */
class PaperBook implements Book
{
    private int $page;

    public function turnPage(): void
    {
        $this->page++;
    }

    public function open(): void
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
