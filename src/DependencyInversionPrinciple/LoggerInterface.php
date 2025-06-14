<?php

declare(strict_types=1);

namespace App\DependencyInversionPrinciple;

interface LoggerInterface
{
    public function log(string $message): void;
}