<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Command;

interface CommandHandler
{
    public function handle($command) : void;
}