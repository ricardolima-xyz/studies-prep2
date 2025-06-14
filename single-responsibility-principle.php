#!/usr/bin/env php
<?php

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
