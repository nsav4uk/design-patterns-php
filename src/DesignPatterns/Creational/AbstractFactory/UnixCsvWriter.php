<?php declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class UnixCsvWriter
 * @package DesignPatterns\Creational\AbstractFactory
 */
class UnixCsvWriter implements CsvWriter
{
    /**
     * @inheritDoc
     */
    public function write(array $line): string
    {
        return implode(', ', $line) .  "\n";
    }
}
