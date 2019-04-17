<?php declare(strict_types=1);

namespace Comquer\Domain;

interface Stringable
{
    public function __toString() : string;
}