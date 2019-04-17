<?php declare(strict_types=1);

namespace Comquer\Domain\Event;

use Comquer\Domain\NamedResource;
use Comquer\Domain\Serialization\Serializable;
use DateTimeImmutable;

interface Event extends Serializable, DeserializableEvent, NamedResource
{
    public function getOccurredOn() : DateTimeImmutable;

    public function __toString() : string;
}