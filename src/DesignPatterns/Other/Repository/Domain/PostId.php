<?php declare(strict_types=1);

namespace DesignPatterns\Other\Repository\Domain;

use InvalidArgumentException;

/**
 * Class PostId
 * @package DesignPatterns\Other\Repository\Domain
 */
class PostId
{
    private int $id;

    public static function fromInt(int $id): PostId
    {
        self::ensureIsValid($id);

        return new self($id);
    }

    public function toInt(): int
    {
        return $this->id;
    }

    private function __construct(int $id)
    {
        $this->id = $id;
    }

    private static function ensureIsValid(int $id): void
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('Invalid PostId given');
        }
    }
}
