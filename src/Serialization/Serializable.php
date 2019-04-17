<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Serialization;

interface Serializable
{
    public function serialize() : array;
}