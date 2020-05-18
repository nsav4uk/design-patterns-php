<?php declare(strict_types=1);

namespace DesignPatternsTest\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\BeachJourney;
use DesignPatterns\Behavioral\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

/**
 * Class JourneyTest
 * @package DesignPatternsTest\Behavioral\TemplateMethod
 */
class JourneyTest extends TestCase
{
    public function testCanGetOnVacationOnTheBeach(): void
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertSame(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Swimming and sun-bathing',
                'Taking the plane'
            ],
            $beachJourney->getThingsToDo()
        );
    }

    public function testCanGetOnVacationOnTheCity(): void
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        $this->assertSame(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane'
            ],
            $cityJourney->getThingsToDo()
        );
    }
}
