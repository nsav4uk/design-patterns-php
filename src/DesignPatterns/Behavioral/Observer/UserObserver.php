<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

/**
 * Class UserObserver
 * @package DesignPatterns\Behavioral\Observer
 */
class UserObserver implements SplObserver
{
    /**
     * @var SplSubject[]
     */
    private array $users = [];

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        $this->users[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}
