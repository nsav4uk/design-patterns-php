<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\RecordingVisitor;
use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

/**
 * Class VisitorTest
 * @package DesignPatternsTest\Behavioral\Visitor
 */
class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    public function provideRoles(): array
    {
        return [
            [new User('Tester')],
            [new Group('QA')],
        ];
    }

    public function testCreateUser(): void
    {
        $user = new User('Tester');
        $this->assertSame('User: Tester', $user->getName());
    }

    public function testCreateGroup(): void
    {
        $user = new Group('QA');
        $this->assertSame('Group: QA', $user->getName());
    }

    /**
     * @dataProvider provideRoles
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role): void
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}
