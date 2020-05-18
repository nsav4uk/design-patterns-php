<?php declare(strict_types=1);

namespace DesignPatterns\Other\Repository;

use OutOfBoundsException;
use DesignPatterns\Other\Repository\Domain\Persistence;

/**
 * Class InMemoryPersistence
 * @package DesignPatterns\Other\Repository
 */
class InMemoryPersistence implements Persistence
{
    private array $data = [];
    private int $lastId = 0;

    public function generateId(): int
    {
        $this->lastId++;

        return $this->lastId;
    }

    public function persist(array $data): void
    {
        $this->data[$this->lastId] = $data;
    }

    public function retrieve(int $id): array
    {
        if (!isset($this->data[$id])) {
            throw new OutOfBoundsException(sprintf('No data found for ID %d', $id));
        }

        return $this->data[$id];
    }

    public function delete(int $id): void
    {
        if (!isset($this->data[$id])) {
            throw new OutOfBoundsException(sprintf('No data found for ID %d', $id));
        }

        unset($this->data[$id]);
    }
}
