<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Proxy;

/**
 * Class HeavyBankAccount
 * @package DesignPatterns\Structural\Proxy
 */
class HeavyBankAccount implements BankAccount
{
    /**
     * @var int[]
     */
    private array $transactions = [];

    public function deposit(int $amount): void
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        return (int) array_sum($this->transactions);
    }
}
