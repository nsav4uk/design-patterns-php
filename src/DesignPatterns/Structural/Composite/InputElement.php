<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

/**
 * Class InputElement
 * @package DesignPatterns\Structural\Composite
 */
class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}
