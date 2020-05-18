<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Memento;

use InvalidArgumentException;

/**
 * Class State
 * @package DesignPatterns\Behavioral\Memento
 */
class State
{
    public const STATE_CREATE = 'created';
    public const STATE_OPENED = 'opened';
    public const STATE_ASSIGNED = 'assigned';
    public const STATE_CLOSED = 'closed';

    private string $state;

    private static array $validStates = [
        self::STATE_CREATE,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED,
    ];

    public function __construct(string $state)
    {
        self::ensureIsValidState($state);

        $this->state = $state;
    }

    public static function ensureIsValidState(string $state): void
    {
        if (!in_array($state, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid state given');
        }
    }

    public function __toString(): string
    {
        return $this->state;
    }
}
