<?php declare(strict_types=1);

namespace Comquer\Domain\Event;

use Comquer\Domain\Serialization\Deserializable;

interface DeserializableEvent extends Deserializable
{
    public static function deserialize(array $event) : Event;
}