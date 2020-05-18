<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Flyweight;

use DesignPatterns\Structural\Flyweight\TextFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class FlyweightTest
 * @package DesignPatternsTest\Structural\Flyweight
 */
class FlyweightTest extends TestCase
{
    private array $characters = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];

    private array $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight(): void
    {
        $factory = new TextFactory();

        for ($i = 0; $i < 10; $i++) {
            foreach ($this->characters as $character) {
                foreach ($this->fonts as $font) {
                    $flyweight = $factory->get($character);
                    $rendered = $flyweight->render($font);

                    $this->assertSame(sprintf('Character %s with font %s', $character, $font), $rendered);
                }
            }
        }

        foreach ($this->fonts as $word) {
            $flyweight = $factory->get($word);
            $rendered = $flyweight->render('foobar');

            $this->assertSame(sprintf('Word %s with font foobar', $word), $rendered);
        }

        $this->assertCount(count($this->characters) + count($this->fonts), $factory);
    }
}
