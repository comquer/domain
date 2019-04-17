<?php declare(strict_types=1);

namespace Comquer\Domain\Event;

interface EventStore
{
    public function persist(Event $event) : void;

    public function getById(EventId $eventId) : Event;

    public function exists(EventId $eventId) : bool;
}