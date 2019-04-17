<?php declare(strict_types=1);

namespace Comquer\Domain\Projection;

use Comquer\Domain\NamedResource;
use Comquer\Domain\Serialization\Deserializable;
use Comquer\Domain\Serialization\Serializable;

interface Projection extends Serializable, Deserializable, NamedResource
{
    public function getId(): ProjectionId;
}
