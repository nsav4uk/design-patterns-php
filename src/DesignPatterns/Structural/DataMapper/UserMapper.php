<?php declare(strict_types=1);

namespace DesignPatterns\Structural\DataMapper;

use InvalidArgumentException;

/**
 * Class UserMapper
 * @package DesignPatterns\Structural\DataMapper
 */
class UserMapper
{
    private StorageAdapter $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new InvalidArgumentException(sprintf('User #%d not found', $id));
        }

        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}
