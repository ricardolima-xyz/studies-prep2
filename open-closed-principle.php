#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

// Open/Closed Principle
// A class should be open for extension but closed for modification.
// In this example, we define a PaymentMethod interface and implement it in different classes.
// If new payment methods are needed, we can create new classes without modifying existing code.
use App\OpenClosedPrinciple\CreditCardPaymentMethod;
use App\OpenClosedPrinciple\PaymentProcessor;
use App\OpenClosedPrinciple\PayPalPaymentMethod;
// Create instances of different payment methods
$creditCardPayment = new CreditCardPaymentMethod();
$payPalPayment = new PayPalPaymentMethod();
// Process payments
$paymentProcessor1 = new PaymentProcessor($creditCardPayment);
$paymentProcessor1->processPayment();

$paymentProcessor2 = new PaymentProcessor($payPalPayment);
$paymentProcessor2->processPayment();