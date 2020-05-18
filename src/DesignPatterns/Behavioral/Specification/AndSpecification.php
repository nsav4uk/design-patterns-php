<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Specification;

/**
 * Class AndSpecification
 * @package DesignPatterns\Behavioral\Specification
 */
class AndSpecification implements Specification
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
        /** @var Specification $specification */
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }

        return true;
    }
}
