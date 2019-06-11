<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event\Queue;

use Comquer\DomainIntegration\Event\Event;
use Comquer\DomainIntegration\Serialization\Serializable;

interface EventQueueItem extends Serializable
{
    public function getEvent() : Event;

    public function getListenerName() : string;
}
