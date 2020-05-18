<?php declare(strict_types=1);

namespace DesignPatterns\Creational\StaticFactory;

use InvalidArgumentException;

/**
 * Class StaticFactory
 * @package DesignPatterns\Creational\StaticFactory
 */
final class StaticFactory
{
    public static function build(string $type): Formatter
    {
        switch ($type) {
            case 'number':
                return new FormatNumber();

            case 'string':
                return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
