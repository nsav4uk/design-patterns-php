<?php declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class UnixJsonWriter
 * @package DesignPatterns\Creational\AbstractFactory
 */
class UnixJsonWriter implements JsonWriter
{
    /**
     * @inheritDoc
     */
    public function write(array $data, bool $formatted): string
    {
        $options = 0;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, JSON_THROW_ON_ERROR | $options,);
    }
}
