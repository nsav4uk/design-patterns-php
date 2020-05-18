<?php

namespace DesignPatterns\Structural\Proxy;

/**
 * Class BankAccount
 * @package DesignPatterns\Structural\Proxy
 */
interface BankAccount
{
    public function deposit(int $amount): void;

    public function getBalance(): int;
}
