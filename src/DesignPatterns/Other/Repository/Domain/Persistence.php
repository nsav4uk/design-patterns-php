<?php

namespace DesignPatterns\Other\Repository\Domain;

/**
 * Interface Persistence
 * @package DesignPatterns\Other\Repository\Domain
 */
interface Persistence
{
    public function generateId(): int;

    public function persist(array $data): void;

    public function retrieve(int $id): array;

    public function delete(int $id): void;
}
