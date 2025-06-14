<?php

declare(strict_types=1);

namespace App\LiskovSubstitutionPrinciple;

abstract class Bird
{

    public function layEggs(): string
    {
        return "Laying eggs!";
    }

}
