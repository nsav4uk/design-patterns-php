<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

/**
 * Class EBookAdapter
 * @package DesignPatterns\Structural\Adapter
 */
class EBookAdapter implements Book
{
    protected EBook $eBook;

    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage(): void
    {
        $this->eBook->pressNext();
    }

    public function open(): void
    {
        $this->eBook->unlock();
    }

    public function getPage(): int
    {
        return $this->eBook->getPages()[0];
    }
}
