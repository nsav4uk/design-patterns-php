<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\State;

use DesignPatterns\Behavioral\State\OrderContext;
use PHPUnit\Framework\TestCase;

/**
 * Class StateTest
 * @package DesignPatternsTest\Behavioral\State
 */
class StateTest extends TestCase
{
    public function testIsCreatedWithStateCreated(): void
    {
        $orderContext = OrderContext::create();
        $this->assertSame('created', $orderContext->toString());
    }

    public function testCanProceedToStateShipped(): void
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $this->assertSame('shipped', $orderContext->toString());
    }

    public function testCanProceedToStateDone(): void
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();
        $this->assertSame('done', $orderContext->toString());
    }

    public function testStateDoneIsTheLastPossibleState(): void
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();
        $this->assertSame('done', $orderContext->toString());
    }
}
