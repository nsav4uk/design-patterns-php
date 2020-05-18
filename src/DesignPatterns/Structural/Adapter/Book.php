<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Interface Book
 * @package DesignPatternsTest\Structural\Adapter
 */
interface Book
{
    public function turnPage(): void;
    public function open(): void;
    public function getPage(): int;
}
