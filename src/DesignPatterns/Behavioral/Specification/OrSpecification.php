<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Specification;

/**
 * Class OrSpecification
 * @package DesignPatterns\Behavioral\Specification
 */
class OrSpecification implements Specification
{
    /**
     * @var Specification[]
     */
    private array $specifications;

    public function __construct(Specification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }

        return false;
    }
}
