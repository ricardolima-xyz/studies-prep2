<?php

declare(strict_types=1);

namespace App\DependencyInversionPrinciple;

class DatabaseLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "Logging to the database: {$message}\n";
    }
}
