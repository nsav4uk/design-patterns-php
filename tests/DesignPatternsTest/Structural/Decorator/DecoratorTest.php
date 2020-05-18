<?php declare(strict_types=1);

namespace DesignPatternsTest\Structural\Decorator;

use DesignPatterns\Structural\Decorator\DoubleRoomBooking;
use DesignPatterns\Structural\Decorator\ExtraBed;
use DesignPatterns\Structural\Decorator\Wifi;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorTest
 * @package DesignPatternsTest\Structural\Decorator
 */
class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking(): void
    {
        $booking = new DoubleRoomBooking();

        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWifi(): void
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);

        $this->assertSame(42, $booking->calculatePrice());
        $this->assertSame('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWifiAndExtraBed(): void
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);
        $booking = new ExtraBed($booking);

        $this->assertSame(72, $booking->calculatePrice());
        $this->assertSame('double room with wifi with extra bed', $booking->getDescription());
    }
}
