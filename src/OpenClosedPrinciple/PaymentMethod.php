<?php

declare(strict_types=1);

namespace App\OpenClosedPrinciple;

interface PaymentMethod
{
    public function process(): void;
}