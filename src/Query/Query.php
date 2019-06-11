<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Command;

use Comquer\DomainIntegration\NamedResource;
use Comquer\DomainIntegration\Serialization\Serializable;

interface Query extends NamedResource, Serializable, DeserializableQuery
{
}