<?php declare(strict_types=1);

namespace DesignPatterns\Structural\DataMapper;

/**
 * Class StorageAdapter
 * @package DesignPatterns\Structural\DataMapper
 */
class StorageAdapter
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        return $this->data[$id] ?? null;
    }
}
