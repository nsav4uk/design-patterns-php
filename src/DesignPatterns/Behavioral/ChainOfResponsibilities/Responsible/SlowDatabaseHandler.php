<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

/**
 * Class SlowDatabaseHandler
 * @package DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible
 */
class SlowDatabaseHandler extends Handler
{
    protected function processing(RequestInterface $request): ?string
    {
        return 'Hello World';
    }
}
