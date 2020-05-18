<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\User;
use DesignPatterns\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

/**
 * Class ObserverTest
 * @package DesignPatternsTest\Behavioral\Observer
 */
class ObserverTest extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotifiedAndDetachAfterIt(): void
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);
        $user->changeEmail('test@test.com');

        $this->assertCount(1, $observer->getUsers());

        $user->detach($observer);
        $user->changeEmail('test1@test.com');
        $this->assertCount(1, $observer->getUsers());
    }
}
