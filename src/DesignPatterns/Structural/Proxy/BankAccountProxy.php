<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Proxy;

/**
 * Class BankAccountProxy
 * @package DesignPatterns\Structural\Proxy
 */
class BankAccountProxy extends HeavyBankAccount
{
    private ?int $balance = null;

    public function getBalance(): int
    {
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }
        return $this->balance;
    }
}
