<?php declare(strict_types=1);

namespace Comquer\DomainIntegration;

use InvalidArgumentException;

class AggregateType extends Id
{
    private const VALID_VALUES = [
        'accreditation'
    ];

    public function __construct(string $value)
    {
        if (in_array($value, self::VALID_VALUES) === false) {
            throw new InvalidArgumentException("$value is not a valid aggregate type");
        }

        parent::__construct($value);
    }
}