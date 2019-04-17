<?php declare(strict_types=1);

namespace Comquer\Domain\Projection;

interface ProjectionRepository
{
    public function persist(Projection $projection) : void;

    public function getById(ProjectionId $id) : Projection;

    public function exists(ProjectionId $id) : bool;
}