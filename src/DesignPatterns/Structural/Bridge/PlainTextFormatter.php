<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge;

/**
 * Class PlainTextFormatter
 * @package DesignPatterns\Structural\Bridge
 */
class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }
}
