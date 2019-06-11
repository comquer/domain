<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Command;

use Comquer\DomainIntegration\Serialization\Deserializable;

interface DeserializableCommand extends Deserializable
{
    public static function deserialize(array $command) : Command;
}
