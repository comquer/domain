<?php declare(strict_types=1);

namespace Comquer\Domain;

/**
 * @todo Extract to a separate package
 */
class Id
{
    /** @var string */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString() : string
    {
        return $this->value;
    }
}