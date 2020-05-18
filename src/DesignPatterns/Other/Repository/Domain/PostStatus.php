<?php declare(strict_types=1);

namespace DesignPatterns\Other\Repository\Domain;

use InvalidArgumentException;

/**
 * Class PostStatus
 * @package DesignPatterns\Other\Repository\Domain
 */
class PostStatus
{
    public const STATE_DRAFT_ID = 1;
    public const STATE_PUBLISHED_ID = 2;
    public const STATE_DRAFT = 'draft';
    public const STATE_PUBLISHED = 'published';

    private static array $validStates = [
        self::STATE_DRAFT_ID => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED,
    ];

    private int $id;
    private string $name;

    public static function fromInt(int $statusId): PostStatus
    {
        self::ensureIsValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    public static function fromString(string $status): PostStatus
    {
        self::ensureIsValidName($status);
        $state = array_search($status, self::$validStates, true);

        if ($state === false) {
            throw new InvalidArgumentException('Invalid state given!');
        }

        return new self($state, $status);
    }

    private function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    public function toString(): string
    {
        return $this->name;
    }

    private static function ensureIsValidId(int $status): void
    {
        if (!array_key_exists($status, self::$validStates)) {
            throw new InvalidArgumentException('Invalid status id given');
        }
    }

    private static function ensureIsValidName(string $status): void
    {
        if (!in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid status name given');
        }
    }
}
