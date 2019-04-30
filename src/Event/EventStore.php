<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

interface EventStore
{
    public function persist(Event $event) : EventId;

    public function getById(EventId $eventId) : Event;

    public function exists(EventId $eventId) : bool;
}