<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Registry;

use InvalidArgumentException;

/**
 * Class Registry
 * @package DesignPatterns\Structural\Registry
 */
abstract class Registry
{
    public const LOGGER = 'logger';

    /**
     * @var Service[]
     */
    private static array $services = [];

    private static array $allowedKeys = [
        self::LOGGER,
    ];

    public static function set(string $key, Service $value): void
    {
        if (!in_array($key, self::$allowedKeys, true)) {
            throw new InvalidArgumentException('Invalid key given');
        }

        self::$services[$key] = $value;
    }

    public static function get(string $key): Service
    {
        if (!isset(self::$services[$key]) || !in_array($key, self::$allowedKeys, true)) {
            throw new InvalidArgumentException('Invalid key given');
        }

        return self::$services[$key];
    }
}
