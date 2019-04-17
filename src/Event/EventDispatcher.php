<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event;

interface EventDispatcher
{
    public function dispatch(Event $event) : void;
}