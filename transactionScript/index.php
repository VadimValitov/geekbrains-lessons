<?php

spl_autoload_register(function ($name) {
    include $name . '.php';
});

$registrationScript = new Registration();
$registrationScript->checkEmail('email@email.ru');
$registrationScript->createNewUser('email@email.ru');
$registrationScript->sendEmail();
$registrationScript->addStatistics();
