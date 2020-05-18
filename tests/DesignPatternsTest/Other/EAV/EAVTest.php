<?php declare(strict_types=1);

namespace DesignPatternsTest\Other\EAV;

use DesignPatterns\Other\EAV\Attribute;
use DesignPatterns\Other\EAV\Entity;
use DesignPatterns\Other\EAV\Value;
use PHPUnit\Framework\TestCase;

/**
 * Class EAVTest
 * @package DesignPatternsTest\Other\EAV
 */
class EAVTest extends TestCase
{
    public function testCanAddAttributeToEntity(): void
    {
        $colorAttribute = new Attribute('color');
        $colorSilver = new Value($colorAttribute, 'silver');
        $colorBlack = new Value($colorAttribute, 'black');
        $memoryAttribute = new Attribute('memory');
        $memory8Gb = new Value($memoryAttribute, '8GB');

        $entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8Gb]);

        $this->assertEquals('MacBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
        $this->assertCount(2, $colorAttribute->getValues());
    }
}
