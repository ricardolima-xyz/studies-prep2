#!/usr/bin/env php
<?php

// Single Responsibility Principle
// A class should have only one reason to change.
// In this example, we have a Report class that holds the report data,
// a ReportFormatter class that formats the report, and a ReportPrinter class that prints the report.
// This way, each class has a single responsibility and can be modified independently.

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';
use App\SingleResponsibilityPrinciple\Report;
use App\SingleResponsibilityPrinciple\ReportFormatter;
use App\SingleResponsibilityPrinciple\ReportPrinter;
// Create a new report
$report = new Report("Monthly Sales", "Sales increased by 20% compared to last month.");
// Create a formatter
$formatter = new ReportFormatter();
// Create a printer with the formatter
$printer = new ReportPrinter($formatter);
// Print the report
$printer->print($report);
