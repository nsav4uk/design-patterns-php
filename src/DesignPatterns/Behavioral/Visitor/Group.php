<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Class Group
 * @package DesignPatterns\Behavioral\Visitor
 */
class Group implements Role
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return sprintf('Group: %s', $this->name);
    }

    public function accept(RoleVisitor $visitor): void
    {
        $visitor->visitGroup($this);
    }
}
