<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

/**
 * Class Form
 * @package DesignPatterns\Structural\Composite
 */
class Form implements Renderable
{
    /**
     * @var Renderable[]
     */
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(Renderable $element): void
    {
        $this->elements[] = $element;
    }
}
