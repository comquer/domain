<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

interface EventQueueItemConsumer
{
    public function consume(EventQueueItem $eventQueueItem) : void;
}
