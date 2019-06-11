<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Query;

interface QueryHandler
{
    public function handle($query);
}