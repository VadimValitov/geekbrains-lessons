<?php

spl_autoload_register(function ($name) {
    include __DIR__ . '/' . str_replace('\\', '/', $name) . '.php';
});

function test(Notificator $notificator) {
    $notificator->notify('Hello!');
}

test(new SlackNotificator());
test(new SmsNotificator(new SlackNotificator()));
test(new FacebookNotificator(new SmsNotificator(new SlackNotificator())));
