<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Proxy;

use DesignPatterns\Structural\Proxy\BankAccountProxy;
use PHPUnit\Framework\TestCase;

/**
 * Class ProxyTest
 * @package DesignPatternsTest\Structural\Proxy
 */
class ProxyTest extends TestCase
{
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce(): void
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        $this->assertSame(30, $bankAccount->getBalance());

        $bankAccount->deposit(50);

        $this->assertSame(30, $bankAccount->getBalance());
    }
}
