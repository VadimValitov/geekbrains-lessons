<?php

class WebmoneyPayment implements Payment
{
    public function pay(float $amount, string $phoneNumber)
    {
        echo sprintf('Оплата через Webmoney. Сумма: %s, телефон: %s', $amount, $phoneNumber) . PHP_EOL;
    }
}
