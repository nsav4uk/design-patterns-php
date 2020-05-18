<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Interface RoleVisitor
 * @package DesignPatterns\Behavioral\Visitor
 */
interface RoleVisitor
{
    public function visitUser(User $role): void;

    public function visitGroup(Group $role): void;
}
