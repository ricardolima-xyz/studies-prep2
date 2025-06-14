<?php

declare(strict_types=1);

namespace App\OpenClosedPrinciple;

class PayPalPaymentMethod implements PaymentMethod
{
    public function process(): void
    {
        // Logic to process payment via PayPal
        echo "Processing payment via PayPal.".PHP_EOL;
    }
}