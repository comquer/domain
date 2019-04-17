<?php declare(strict_types=1);

namespace Comquer\Domain\Event;

use Comquer\Domain\NamedResource;
use Comquer\Domain\Serialization\Serializable;
use Comquer\Domain\Stringable;
use DateTimeImmutable;

interface Event extends Serializable, DeserializableEvent, NamedResource, Stringable
{
    public function getOccurredOn() : DateTimeImmutable;
}