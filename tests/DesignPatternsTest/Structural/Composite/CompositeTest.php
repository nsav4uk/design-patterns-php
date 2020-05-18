<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Composite;

use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;
use DesignPatterns\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

/**
 * Class CompositeTest
 * @package DesignPatternsTest\Structural\Composite
 */
class CompositeTest extends TestCase
{
    public function testRender(): void
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}
