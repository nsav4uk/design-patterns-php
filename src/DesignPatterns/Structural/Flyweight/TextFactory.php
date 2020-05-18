<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight;

use Countable;

/**
 * Class TextFactory
 * @package DesignPatterns\Structural\Flyweight
 */
class TextFactory implements Countable
{
    /**
     * @var Text[]
     */
    private array $charPool = [];

    public function get(string $name): Text
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    private function create(string $name): Text
    {
        if (strlen($name) === 1) {
            return new Character($name);
        }

        return new Word($name);
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->charPool);
    }
}
