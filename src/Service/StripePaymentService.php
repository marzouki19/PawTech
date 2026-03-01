<?php

namespace App\Service;

use Stripe\StripeClient;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * Stripe Payment Service for handling checkout sessions and payment intents.
 */
class StripePaymentService
{
    private StripeClient $stripe;
    
    public function __construct(
        private readonly ParameterBagInterface $params,
    ) {
        $secretKey = $this->getSecretKey();
        $this->stripe = new StripeClient($secretKey);
    }

    /**
     * Get Stripe publishable key
     */
    public function getPublishableKey(): string
    {
        $value = $this->params->get('stripe.publishable_key');
        
        if ($value !== null && $value !== '') {
            if (is_string($value)) {
                return $value;
            }
            if (is_numeric($value)) {
                return (string) $value;
            }
            if (is_bool($value)) {
                return $value ? 'true' : 'false';
            }
        }

        $envKey = $_ENV['STRIPE_KEY'] ?? $_SERVER['STRIPE_KEY'] ?? '';
        return is_string($envKey) ? $envKey : '';
    }

    /**
     * Get Stripe secret key
     */
    private function getSecretKey(): string
    {
        $value = $this->params->get('stripe.secret_key');
        
        $key = '';
        if ($value !== null && $value !== '') {
            if (is_string($value)) {
                $key = $value;
            } elseif (is_numeric($value)) {
                $key = (string) $value;
            } elseif (is_bool($value)) {
                $key = $value ? 'true' : 'false';
            }
        }
        
        if (empty($key)) {
            $envSecret = $_ENV['STRIPE_SECRET'] ?? $_SERVER['STRIPE_SECRET'] ?? '';
            $key = is_string($envSecret) ? $envSecret : '';
        }
        
        if (empty($key)) {
            throw new \RuntimeException('Stripe secret key is not configured.');
        }
        
        return $key;
    }

    /**
     * Create a checkout session for Stripe Checkout
     */
    public function createCheckoutSession(
        int $amount,
        string $currency,
        string $orderId,
        string $customerEmail,
        ?string $successUrl = null,
        ?string $cancelUrl = null
    ): \Stripe\Checkout\Session {
        $sessionParams = [
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => $currency,
                        'product_data' => [
                            'name' => 'Order #' . $orderId,
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => $successUrl ?? 'https://yourdomain.com/payment/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => $cancelUrl ?? 'https://yourdomain.com/payment/cancel',
            'metadata' => [
                'order_id' => $orderId,
            ],
        ];
        
        if ($customerEmail) {
            $sessionParams['customer_email'] = $customerEmail;
        }
        
        return $this->stripe->checkout->sessions->create($sessionParams);
    }

    /**
     * Create a payment intent (for custom payment flow)
     *
     * @param array<string, string> $metadata
     */
    public function createPaymentIntent(
        int $amount,
        string $currency,
        array $metadata = []
    ): \Stripe\PaymentIntent {
        $params = [
            'amount' => $amount,
            'currency' => $currency,
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ];
        
        if (!empty($metadata)) {
            $params['metadata'] = $metadata;
        }
        
        return $this->stripe->paymentIntents->create($params);
    }

    /**
     * Retrieve a checkout session
     */
    public function getCheckoutSession(string $sessionId): \Stripe\Checkout\Session
    {
        return $this->stripe->checkout->sessions->retrieve($sessionId);
    }

    /**
     * Retrieve a payment intent
     */
    public function getPaymentIntent(string $paymentIntentId): \Stripe\PaymentIntent
    {
        return $this->stripe->paymentIntents->retrieve($paymentIntentId);
    }

    /**
     * Check if payment was successful
     */
    public function isPaymentSuccessful(string $paymentIntentId): bool
    {
        try {
            $intent = $this->getPaymentIntent($paymentIntentId);
            return $intent->status === 'succeeded';
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Convert amount to smallest currency unit
     */
    public function convertToSmallestUnit(float $amount, string $currency = 'tnd'): int
    {
        $noDecimalCurrencies = ['jpy', 'krw', 'vnd', 'idf'];
        
        if (in_array(strtolower($currency), $noDecimalCurrencies)) {
            return (int) round($amount);
        }
        
        if (strtolower($currency) === 'tnd') {
            return (int) round($amount * 1000);
        }
        
        return (int) round($amount * 100);
    }

    /**
     * Refund a payment
     */
    public function refundPayment(string $paymentIntentId, ?int $amount = null): \Stripe\Refund
    {
        $params = ['payment_intent' => $paymentIntentId];
        
        if ($amount !== null) {
            $params['amount'] = $amount;
        }
        
        return $this->stripe->refunds->create($params);
    }
}
