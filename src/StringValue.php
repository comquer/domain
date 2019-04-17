<?php declare(strict_types=1);

namespace Comquer\DomainIntegration;

interface StringValue
{
    public function __toString() : string;
}