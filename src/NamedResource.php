<?php declare(strict_types=1);

namespace Comquer\DomainIntegration;

interface NamedResource
{
    public static function getName() : string;
}