<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

use Comquer\DomainIntegration\NamedResource;
use Comquer\DomainIntegration\Serialization\Serializable;
use DateTimeImmutable;

interface Event extends Serializable, DeserializableEvent, NamedResource
{
    public function getOccurredOn() : DateTimeImmutable;
}