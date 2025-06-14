<?php

declare(strict_types=1);

namespace App\OpenClosedPrinciple;

class CreditCardPaymentMethod implements PaymentMethod
{
    public function process(): void
    {
        // Logic to process payment via Credit Card
        echo "Processing payment via Credit Card.".PHP_EOL;
    }
}