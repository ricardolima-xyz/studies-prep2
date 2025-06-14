<?php

declare(strict_types=1);

namespace App\LiskovSubstitutionPrinciple;

abstract class FlyingBird extends Bird
{
    public function fly(): string
    {
        return "I'm flying!";
    }
}