<?php declare(strict_types=1);

namespace DesignPatternsTest\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class SimpleFactoryTest
 * @package DesignPatternsTest\Creational\SimpleFactory
 */
class SimpleFactoryTest extends TestCase
{
    public function testCanGetDestination(): void
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $bicycle->driveTo('Paris');
        $this->assertEquals('Paris', $bicycle->getDestination());
    }
}
