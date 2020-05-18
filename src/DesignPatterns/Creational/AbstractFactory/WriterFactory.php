<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interface WriteFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter(): JsonWriter;
}
