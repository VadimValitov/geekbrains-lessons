<?php

class Basket
{
    private $products;
    private $phoneNumber;

    public function __construct(array $products, string $phoneNumber)
    {
        $this->products = $products;
        $this->phoneNumber = $phoneNumber;
    }

    public function buy(Payment $payment)
    {
        $amount = 0;

        foreach ($this->products as $product) {
            $amount += $product->getPrice();
        }

        $payment->pay($amount, $this->phoneNumber);
    }
}
