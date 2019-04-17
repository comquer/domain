<?php declare(strict_types=1);

namespace Comquer\DomainIntegrationIntegrationIntegration\Event;

use Comquer\DomainIntegration\Event\Event;

interface EventQueue
{
    public function push(Event $eventId): void;

    public function pullNext() : Event;

    public function acknowledge(EventId $eventId) : void;

    public function isEmpty() : bool;
}
