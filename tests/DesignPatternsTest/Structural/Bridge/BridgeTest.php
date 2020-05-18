<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Bridge;

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PingService;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package DesignPatternsTest\Structural\Bridge
 */
class BridgeTest extends TestCase
{
    public function testCanPrintUsingPlainTextFormatter(): void
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingHtmlFormatter(): void
    {
        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertSame('<p>Hello World</p>', $service->get());
    }

    public function testCanSwitchFormatter(): void
    {
        $service = new PingService(new HtmlFormatter());
        $this->assertSame('<p>pong</p>', $service->get());

        $service->setImplementation(new PlainTextFormatter());
        $this->assertSame('pong', $service->get());
    }
}
