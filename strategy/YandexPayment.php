<?php

class YandexPayment implements Payment
{
    public function pay(float $amount, string $phoneNumber)
    {
        echo sprintf('Оплата через Yandex. Сумма: %s, телефон: %s', $amount, $phoneNumber) . PHP_EOL;
    }
}
