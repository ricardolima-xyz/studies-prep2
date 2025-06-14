<?php

declare(strict_types=1);

namespace App\InterfaceSegregationPrinciple;

class HumanWorker implements Worker, LivingBeing
{
    public function work(): void
    {
        echo "Human is working...\n";
    }

    public function eat(): void
    {
        echo "Human is eating lunch...\n";
    }
}