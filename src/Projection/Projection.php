<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Projection;

use Comquer\DomainIntegration\NamedResource;
use Comquer\DomainIntegration\Serialization\Deserializable;
use Comquer\DomainIntegration\Serialization\Serializable;

interface Projection extends Serializable, Deserializable, NamedResource
{
    public function getId(): ProjectionId;
}
