<?php

spl_autoload_register(function ($name) {
    include $name . '.php';
});

function test(array $products)
{
    $basket = new Basket($products, '+71110000000');
    $basket->buy(new QiwiPayment());
    $basket->buy(new WebmoneyPayment());
    $basket->buy(new YandexPayment());
}

$products = [
    new Product(10.5),
    new Product(5),
    new Product(20.5)
];

test($products);
