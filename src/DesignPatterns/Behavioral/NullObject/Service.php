<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject;

/**
 * Class Service
 * @package DesignPatterns\Behavioral\NullObject
 */
class Service
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething(): void
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}
