<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

use Comquer\DomainIntegration\NamedResource;
use Comquer\DomainIntegration\Serialization\Serializable;
use DateTimeImmutable;

interface Event extends Serializable, DeserializableEvent, NamedResource
{
    public function getAggregateId() : AggregateId;

    public function getAggregateType() : AggregateType;

    public function getOccurredOn() : DateTimeImmutable;
}