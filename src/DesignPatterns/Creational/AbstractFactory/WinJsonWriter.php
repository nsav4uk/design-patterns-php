<?php declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class WinJsonWriter
 * @package DesignPatterns\Creational\AbstractFactory
 */
class WinJsonWriter implements JsonWriter
{
    /**
     * @inheritDoc
     */
    public function write(array $data, bool $formatted): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT);
    }
}
