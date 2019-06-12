<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event\Store;

use Comquer\DomainIntegration\Event\Event;
use Comquer\DomainIntegration\Event\Store\EventId;

interface EventStore
{
    public function persist(Event $event) : EventId;

    public function getById(EventId $eventId) : Event;

    public function exists(EventId $eventId) : bool;
}