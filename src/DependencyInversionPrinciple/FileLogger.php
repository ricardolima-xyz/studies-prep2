<?php

declare(strict_types=1);

namespace App\DependencyInversionPrinciple;

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "Logging to a file: {$message}\n";
    }
}
