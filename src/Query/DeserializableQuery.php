<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Command;

use Comquer\DomainIntegration\Serialization\Deserializable;

interface DeserializableQuery extends Deserializable
{
    public static function deserialize(array $query) : Query;
}