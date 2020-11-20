<?php

class QiwiPayment implements Payment
{
    public function pay(float $amount, string $phoneNumber)
    {
        echo sprintf('Оплата через Qiwi. Сумма: %s, телефон: %s', $amount, $phoneNumber) . PHP_EOL;
    }
}
