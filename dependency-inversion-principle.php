<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

// Dependency Inversion Principle
// This script demonstrates the Dependency Inversion Principle (DIP) by using an interface
// for logging. The Application class depends on the LoggerInterface, allowing it to work
// with any logger implementation, such as FileLogger or DatabaseLogger, without being
// tightly coupled to a specific logging mechanism.

// High-level modules should not depend on low-level modules. Both should depend on abstractions.
// Abstractions should not depend on details. Details should depend on abstractions.

use App\DependencyInversionPrinciple\Application;
use App\DependencyInversionPrinciple\FileLogger;
use App\DependencyInversionPrinciple\DatabaseLogger;

$fileLogger = new FileLogger();
$app = new Application($fileLogger);
$app->run();

$dbLogger = new DatabaseLogger();
$app2 = new Application($dbLogger);
$app2->run();
