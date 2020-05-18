<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Interface EBook
 * @package DesignPatterns\Structural\Adapter
 */
interface EBook
{
    public function unlock(): void;

    public function pressNext(): void;

    /**
     * @return int[]
     */
    public function getPages(): array;
}
