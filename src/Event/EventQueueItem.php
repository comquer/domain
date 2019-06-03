<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

interface EventQueueItem
{
    public function getEvent() : Event;

    public function getListenerName() : string;
}
