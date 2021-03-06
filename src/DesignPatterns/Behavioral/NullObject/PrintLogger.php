<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject;

/**
 * Class PrintLogger
 * @package DesignPatterns\Behavioral\NullObject
 */
class PrintLogger implements Logger
{
    public function log(string $str): void
    {
        echo $str;
    }
}
