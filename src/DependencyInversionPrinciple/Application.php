<?php

declare(strict_types=1);

namespace App\DependencyInversionPrinciple;

class Application
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(): void
    {
        $this->logger->log("Application is running.");
    }
}