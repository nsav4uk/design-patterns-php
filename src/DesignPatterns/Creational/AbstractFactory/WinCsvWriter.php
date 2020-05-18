<?php declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class WinCsvWriter
 * @package DesignPatterns\Creational\AbstractFactory
 */
class WinCsvWriter implements CsvWriter
{
    /**
     * @inheritDoc
     */
    public function write(array $line): string
    {
        return implode(', ', $line) . "\r\n";
    }
}
