<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

/**
 * Class Handler
 * @package DesignPatterns\Behavioral\ChainOfResponsibilities
 */
abstract class Handler
{
    private ?Handler $successor;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    final public function handle(RequestInterface $request): ?string
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }

    abstract protected function processing(RequestInterface $request): ?string;
}
