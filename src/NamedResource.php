<?php declare(strict_types=1);

namespace Comquer\Domain;

interface NamedResource
{
    public static function getName() : string;
}