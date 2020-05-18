<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Interface Formatter
 * @package DesignPatterns\Structural\Bridge
 */
interface Formatter
{
    public function format(string $text): string;
}
