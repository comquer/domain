<?php declare(strict_types=1);

namespace Comquer\DomainIntegrationIntegrationIntegration\Event;

use Comquer\DomainIntegration\Event\EventId;
use Comquer\DomainIntegration\Event\EventQueueItem;

interface EventQueue
{
    public function push(EventQueueItem $eventQueueItem): void;

    public function pullNext() : EventQueueItem;

    public function acknowledge(EventId $eventId) : void;

    public function isEmpty() : bool;
}
