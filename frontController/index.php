<?php

spl_autoload_register(function ($name) {
    include $name . '.php';
});

$controller = new FrontController();
$controller->addHandler(new IndexHandler(), 'GET', '/');
$controller->addHandler(new PingHandler(), 'POST', '/ping');

$request1 = new Request($_REQUEST, 'GET', '/');
$request2 = new Request($_REQUEST, 'POST', '/ping');

$controller->run($request1);
$controller->run($request2);
