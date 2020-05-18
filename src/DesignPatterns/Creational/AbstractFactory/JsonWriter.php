<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interface JsonWriter
 * @package DesignPatterns\Creational\AbstractFactory
 */
interface JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     */
    public function write(array $data, bool $formatted): string;
}
