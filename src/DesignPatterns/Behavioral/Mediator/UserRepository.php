<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Class UserRepository
 * @package DesignPatterns\Behavioral\Mediator
 */
class UserRepository extends Colleague
{
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}
