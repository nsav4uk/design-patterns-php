<?php declare(strict_types=1);

namespace DesignPatternsTest\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\AbstractFactory\{
    UnixWriterFactory,
    WinCsvWriter,
    WinWriterFactory,
    WriterFactory,
};

/**
 * Class AbstractFactoryTest
 * @package DesignPatterns\Creational\AbstractFactory\Tests
 */
class AbstractFactoryTest extends TestCase
{
    public function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param WriterFactory $writerFactory
     */
    public function testCanCreateWriter(WriterFactory $writerFactory): void
    {
        $data = ['hello', 'world'];
        $csvWriter = $writerFactory->createCsvWriter();

        if($csvWriter instanceof WinCsvWriter) {
            $this->assertEquals("hello, world\r\n", $csvWriter->write($data));
        } else {
            $this->assertEquals("hello, world\n", $csvWriter->write($data));
        }

        $jsonWriter = $writerFactory->createJsonWriter();
        $this->assertEquals(json_encode($data, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT), $jsonWriter->write($data, true));
    }
}
