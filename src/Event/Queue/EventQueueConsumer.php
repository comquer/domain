<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event\Queue;

interface EventQueueConsumer
{
    public function consumeEventQueue() : void;
}
