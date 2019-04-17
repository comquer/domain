<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Serialization;

interface Deserializable
{
    public static function deserialize(array $serialized);
}