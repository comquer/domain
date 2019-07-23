<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event\Store;

use Comquer\DomainIntegration\Event\AggregateId;
use Comquer\DomainIntegration\Event\AggregateType;
use Comquer\DomainIntegration\Event\Event;

interface EventStore
{
    public function persist(Event $event) : EventId;

    public function getById(EventId $eventId) : Event;

    public function getMany(array $query);

    public function getByAggregateId(AggregateId $aggregateId);

    public function getByAggregateType(AggregateType $aggregateType);

    public function exists(EventId $eventId) : bool;
}