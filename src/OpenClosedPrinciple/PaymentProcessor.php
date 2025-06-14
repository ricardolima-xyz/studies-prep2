<?php

declare(strict_types=1);

namespace App\OpenClosedPrinciple;

class PaymentProcessor
{
    private PaymentMethod $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(): void
    {
        echo "Processing payment...\n";
        $this->paymentMethod->process();
    }
}