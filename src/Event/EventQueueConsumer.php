<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

interface EventQueueConsumer
{
    public function consumeEventQueue() : void;
}
