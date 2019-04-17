<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

use Comquer\DomainIntegration\Serialization\Deserializable;

interface DeserializableEvent extends Deserializable
{
    public static function deserialize(array $event) : Event;
}