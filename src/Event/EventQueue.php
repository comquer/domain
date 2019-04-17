<?php declare(strict_types=1);

namespace Comquer\Domain\Event;

interface EventQueue
{
    public function push(EventId $eventId): void;

    public function pullNext() : EventId;

    public function acknowledge(EventId $eventId) : void;

    public function isEmpty() : bool;
}
