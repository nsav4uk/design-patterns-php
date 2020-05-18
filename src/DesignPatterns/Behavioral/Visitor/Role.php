<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Interface Role
 * @package DesignPatterns\Behavioral\Visitor
 */
interface Role
{
    public function accept(RoleVisitor $visitor): void;
}
