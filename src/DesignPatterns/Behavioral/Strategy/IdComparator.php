<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Class IdComparator
 * @package DesignPatterns\Behavioral\Strategy
 */
class IdComparator implements Comparator
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}
