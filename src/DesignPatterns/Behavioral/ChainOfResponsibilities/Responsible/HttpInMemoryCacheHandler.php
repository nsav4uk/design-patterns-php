<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

/**
 * Class HttpInMemoryCacheHandler
 * @package DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible
 */
class HttpInMemoryCacheHandler extends Handler
{
    private array $data;

    public function __construct(array $data, Handler $handler = null)
    {
        parent::__construct($handler);

        $this->data = $data;
    }

    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf('%s?%s', $request->getUri()->getPath(), $request->getUri()->getQuery());

        if (isset($this->data[$key]) && $request->getMethod() === 'GET') {
            return $this->data[$key];
        }

        return null;
    }
}
