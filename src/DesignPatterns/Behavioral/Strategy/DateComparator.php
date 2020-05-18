<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;

use DateTime;

/**
 * Class DateComparator
 * @package DesignPatterns\Behavioral\Strategy
 */
class DateComparator implements Comparator
{
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $a <=> $b;
    }
}
