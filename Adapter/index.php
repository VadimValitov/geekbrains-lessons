<?php

spl_autoload_register(function ($name) {
    include __DIR__ . '/' . str_replace('\\', '/', $name) . '.php';
});

function testSquare(ISquare $square) {
    echo 'Square area: ' . $square->squareArea(5) . PHP_EOL;
}

function testCircle(ICircle $circle) {
    echo 'Circle area: ' . $circle->circleArea(6.28) . PHP_EOL;
}

testSquare(new \Adapter\SquareAdapter(new Lib\SquareAreaLib()));
testCircle(new \Adapter\CircleAdapter(new Lib\CircleAreaLib()));
