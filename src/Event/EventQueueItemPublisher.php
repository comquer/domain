<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

interface EventQueueItemPublisher
{
    public function publish(EventQueueItem $eventQueueItem) : void;
}
