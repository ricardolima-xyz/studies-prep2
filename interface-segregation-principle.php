#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\InterfaceSegregationPrinciple\HumanWorker;
use App\InterfaceSegregationPrinciple\RobotWorker;

// This script demonstrates the Interface Segregation Principle (ISP) by separating the
// responsibilities of workers into distinct interfaces. The HumanWorker implements both
// Worker and LivingBeing interfaces, allowing it to perform both work and eat actions.

$human = new HumanWorker();
$human->work();
$human->eat();

$robot = new RobotWorker();
$robot->work();
// $robot->eat(); // Throws exception — problematic!