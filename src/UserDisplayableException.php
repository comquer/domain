<?php declare(strict_types=1);

namespace Comquer\DomainIntegration;

interface UserDisplayableException extends \Throwable
{
    public function getUserMessage() : string;
}