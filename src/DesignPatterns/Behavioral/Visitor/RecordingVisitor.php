<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Class RecordingVisitor
 * @package DesignPatterns\Behavioral\Visitor
 */
class RecordingVisitor implements RoleVisitor
{
    /**
     * @var Role[]
     */
    private array $visited = [];

    public function visitUser(User $role): void
    {
        $this->visited[] = $role;
    }

    public function visitGroup(Group $role): void
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}
