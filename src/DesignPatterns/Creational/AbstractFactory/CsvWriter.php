<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interface CsvWriter
 * @package DesignPatterns\Creational\AbstractFactory
 */
interface CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string;
}
