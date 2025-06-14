<?php

declare(strict_types=1);

namespace App\InterfaceSegregationPrinciple;

class RobotWorker implements Worker
{
    public function work(): void
    {
        echo "Robot is working...\n";
    }
}
