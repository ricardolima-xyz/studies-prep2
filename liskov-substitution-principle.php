#!/usr/bin/env php
<?php

declare(strict_types=1);

use App\LiskovSubstitutionPrinciple\Ostrich;
use App\LiskovSubstitutionPrinciple\Sparrow;

require_once __DIR__ . '/vendor/autoload.php';

// Liskov Substitution Principle (LSP) ensures that objects of a superclass can be replaced with
// objects of a subclass without affecting the correctness of the program. The classes of namespace
// App\LiskovSubstitutionPrinciple demonstrate this principle.

// In the beginning thee was the Bird class, which was abstract and defined the basic behavior of birds.
// It had a method to lay eggs, which all birds would do and also had a method to fly, which could not be
// implemented by all birds. After the refactor, the FlyingBird class extends Bird and implementes the fly
// method, while the NonFlyingBird class also extends Bird but does not implement it. This allows for
// the creation of different types of birds, some of which can fly and some of which cannot, while still
// adhering to the Liskov Substitution Principle.

$ostrich = new Ostrich();
echo $ostrich->layEggs() . PHP_EOL; // Outputs: "Laying eggs."

$sparrow = new Sparrow();
echo $sparrow->layEggs() . PHP_EOL; // Outputs: "Laying eggs."
echo $sparrow->fly() . PHP_EOL; // Outputs: "I'm flying!"
