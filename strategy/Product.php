<?php

class Product
{
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
